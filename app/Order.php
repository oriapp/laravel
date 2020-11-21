<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

use Cart, Session, DB, Str;
use App\Product;

class Order extends Model
{

    static private function getProductsByTitle($title){
        return DB::table('products as p')
        ->join('categories as c', 'c.id', '=', 'p.categorie_id')
        ->select('p.amount')
        ->where('p.ptitle', '=', $title)
        ->orderBy('p.price')
        ->paginate(3);
    }



    
    static public function saveNew($request){

        $validation = true;
        
        foreach(Cart::getContent()->toArray() as $item){
            dd(serialize($request->address, $request->city, $request->state, $request->zip, $request->phone, $request->email));
            //dd($item['name']);
            //dd(self::getProductsByTitle($item['name'])[0]);

            //dd(Cart::get($item['id'])->quantity, (int)self::getProductsByTitle($item['name'])[0]->amount);
            //dd(self::getProductsByTitle($item['name'])->first());

            if(Cart::get($item['id'])->quantity > (int)self::getProductsByTitle($item['name'])->first()->amount){
                $validation = false;
                Session::flash('notify');
                notify()->error('Can\'t place your order! we have only '.(int)self::getProductsByTitle($item['name'])->first()->amount. ' '. $item['name'] .'\'s In stock!');
            }

        }


        if($validation == true){
            foreach(Cart::getContent()->toArray() as $item){
                //dd($item['quantity']);
                $id = $item['id'];
                $page = Product::find($id);
                $amount = (Product::where('id', '=', $id)->get()->first()->amount) - $item['quantity'];
                Product::where('id', $id)->update(array('amount' => $amount));
            }
        }


        // $order_data = ("$request->address %space$ $request->city %space$ $request->state %space$ $request->zip %space$ $request->phone %space$ $request->email");

        if($validation){
            // If we have those items in stock!
            $order = new self();
            $order->order_id = Str::random(32);
            $order->user_id = Session::get('user_id');
            $order->data = serialize(Cart::getContent()->toArray());
            $order->total = Cart::getTotal();
            $order->details = serialize($request->address, $request->city, $request->state, $request->zip, $request->phone, $request->email);
            $order->save();
            Cart::clear();
            notify()->success('Your order has been placed.');
            //Session::flash('sm', 'Your order has been placed');
        }

    }

    static public function getAll(){
        return DB::table('orders as o')
        ->join('users as u', 'u.id', '=', 'o.user_id')
        ->select('u.*', 'o.*')
        ->orderBy('o.created_at', 'desc', 'AND', 'o.paid', 'DESC')
        ->paginate(10);
    }


    static public function getAllId($id){
        return DB::table('orders as o')
        ->join('users as u', 'u.id', '=', 'o.user_id')
        ->where('o.id', '=', "$id")
        ->select('u.name', 'o.*')
        ->get();
    }


    static public function updateOrder($request, $id){

        $request['paid'] = strtolower($request['paid']);
        ($request['paid'] == 'yes') ? $request['paid'] = 1 : $request['paid'] = 0;

        $product = self::find($id);
        $product->paid = $request['paid'];
        $product->save();
        Session::flash('sm', 'Product has been updated!');
    }

    static public function count(){
        $user = DB::table('orders as o')
        ->select('o.id')
        ->count();

        return $user;
    }
}
