<?php
namespace App\Http\Controllers;
use Illuminate\Http\Request;
use Session, Cart, DB;
use App\Http\Requests\CheckOutRequest;
/** Paypal Details classes **/
use PayPal\Rest\ApiContext;
use PayPal\Auth\OAuthTokenCredential;
use PayPal\Api\Amount;
use PayPal\Api\Details;
use PayPal\Api\Item;
use PayPal\Api\ItemList;
use PayPal\Api\Payer;
use PayPal\Api\Payment;
use PayPal\Api\RedirectUrls;
use PayPal\Api\PaymentExecution;
use PayPal\Api\Transaction;
use PayPal\Exception\PayPalConnectionException;
class PaymentController extends MainController
{
    private $api_context;
    
    public function __construct()
    {
        $this->api_context = new ApiContext(
            new OAuthTokenCredential(config('paypal.client_id'), config('paypal.secret'))
        );
        $this->api_context->setConfig(config('paypal.settings'));
    }

    static private function getProductsByTitle($title){
        return DB::table('products as p')
        ->join('categories as c', 'c.id', '=', 'p.categorie_id')
        ->select('p.amount')
        ->where('p.ptitle', '=', $title)
        ->orderBy('p.price')
        ->paginate(3);
    }

/**
    ** This method sets up the paypal payment.
    **/
    public function createPayment()
    {

        $validation = true;

        foreach(Cart::getContent()->toArray() as $item){
            if(Cart::get($item['id'])->quantity > (int)self::getProductsByTitle($item['name'])->first()->amount){
                $validation = false;
                Session::flash('notify');
                notify()->error('Can\'t place your order! we have only '.(int)self::getProductsByTitle($item['name'])->first()->amount. ' '. $item['name'] .'\'s In stock!');
            }
        }

        if($validation){
            // If we have those items in stock!
            // $order = new self();
            // $order->order_id = Str::random(32);
            // $order->user_id = Session::get('user_id');
            // $order->data = serialize(Cart::getContent()->toArray());
            // $order->total = Cart::getTotal();
            // $order->save();
            // Cart::clear();
            // notify()->success('Your order has been placed.');


        // Amount received as request is validated here.

        //$request->validate(['amount' => 'required|numeric']);
        $pay_amount = Session::get('total');
// We create the payer and set payment method, could be any of "credit_card", "bank", "paypal", "pay_upon_invoice", "carrier", "alternate_payment". 
        $payer = new Payer();
        $payer->setPaymentMethod('paypal');
// Create and setup items being paid for.. Could multiple items like: 'item1, item2 etc'.
        $item = new Item();
        $item->setName('Paypal Payment')->setCurrency('EUR')->setQuantity(1)->setPrice($pay_amount);
// Create item list and set array of items for the item list.
        $itemList = new ItemList();
        $itemList->setItems(array($item));
// Create and setup the total amount.
        $amount = new Amount();
        $amount->setCurrency('EUR')->setTotal($pay_amount);
// Create a transaction and amount and description.
        $transaction = new Transaction();
        $transaction->setAmount($amount)->setItemList($itemList)
        ->setDescription('Laravel Paypal Payment Tutorial');
        //You can set custom data with '->setCustom($data)' or put it in a session.
// Create a redirect urls, cancel url brings us back to current page, return url takes us to confirm payment.
        $redirect_urls = new RedirectUrls();
        $redirect_urls->setReturnUrl(route('confirm-payment'))
        ->setCancelUrl(url()->current());
// We set up the payment with the payer, urls and transactions.
        // Note: you can have different itemLists, then different transactions for it.
        $payment = new Payment();
        $payment->setIntent('Sale')->setPayer($payer)->setRedirectUrls($redirect_urls)
        ->setTransactions(array($transaction));
// Put the payment creation in try and catch in case of exceptions.
        try {
            $payment->create($this->api_context);
        } catch (PayPalConnectionException $ex){
            return back()->withError('Some error occur, sorry for inconvenient');
        } catch (Exception $ex) {
            return back()->withError('Some error occur, sorry for inconvenient');
        }
// We get 'approval_url' a paypal url to go to for payments.
        foreach($payment->getLinks() as $link) {
            if($link->getRel() == 'approval_url') {
                $redirect_url = $link->getHref();
                break;
            }
        }

        if(isset($redirect_url)) {
            return redirect($redirect_url);
        }

        return redirect()->back()->withError('Unknown error occurred');
    } else {
        notify()->error('Can\'t place your order! we have only '.(int)self::getProductsByTitle($item['name'])->first()->amount. ' '. $item['name'] .'\'s In stock!');
        return redirect('shop/cart');
    }
    }
/**
    ** This method confirms if payment with paypal was processed successful and then execute the payment, 
    ** we have 'paymentId, PayerID and token' in query string.
    **/
    public function confirmPayment(Request $request)
    {

        if (empty($request->query('paymentId')) || empty($request->query('PayerID')) || empty($request->query('token')))
            return redirect('shop/checkout')->withError('Payment was not successful.');

        $payment = Payment::get($request->query('paymentId'), $this->api_context);

        $execution = new PaymentExecution();
        $execution->setPayerId($request->query('PayerID'));

        $result = $payment->execute($execution, $this->api_context);


        if ($result->getState() != 'approved')
            return redirect('/thanks')->withError('Payment was not successful.');
return redirect('shop/checkout')->withSuccess('Payment made successfully');
    }
    
}