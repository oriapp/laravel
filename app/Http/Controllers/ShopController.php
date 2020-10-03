<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Categorie;
use DB, Cart, Session;
use App\Order;
use App\Http\Requests\CheckOutRequest;

use App\Product;

class ShopController extends MainController
{
    // shop manager controller

    public function categories(){
        self::$dtv['page_title'] .= 'Categories Page';
        
        return view('categories', self::$dtv);
    }

    public function products(Request $uri, $curl){
        //dd($uri->request);
        $producs = Product::getProducts($curl, $uri);
        $categorie = Categorie::all();
        if(!$producs->count()) abort(404);

        self::$dtv['products'] = $producs;
        self::$dtv['categories'] = $categorie;
        self::$dtv['page_title'] .= $producs[0]->title . ' Products';
        return view('products', self::$dtv);
    }

    public function productDetailes($curl, $purl){
        $product = Product::where('purl', '=', $purl)->first();
        //dd(Product::where('purl', '=', $purl)->first()->visibility);
        if($product != null){
            if (Product::where('purl', '=', $purl)->first()->visibility == "0" || $product == null) abort(404);
        }
        if(!$product) abort(404);
        self::$dtv['page_title'] .= $product->ptitle . ' Products';
        self::$dtv['product'] = $product;


        // LAST VISIT PRODUCTS START
        $valid = true;
        if(Session::get("product_view")){
        foreach(Session::get("product_view") as $pro){
            if($pro[0]['id'] == $product->id) $valid = false;
            }
        }
        if($valid) Session::push("product_view", [$product]);
        // LAST VISIT PRODUCTS END

        return view('product_detailes', self::$dtv);
    }

    public function addToCart(Request $request){
        Product::addToCart($request['product_id'], $request['product_color'], $request['product_size']);
    }

    public function cart(Request $request){
        if(!empty($request['removeItem'])) return $this->removeItem($request['removeItem']);
        self::$dtv['page_title'] .= ' Cart Page';
        $cart = Cart::getContent()->toArray();

        sort($cart);
        self::$dtv['cart'] = $cart;
        // self::$dtv['products'] = DB::table('products')->get();

        return view('cart', self::$dtv);
    }

    public function removeItem($item_id){
        Cart::remove($item_id);
        return redirect('shop/cart');
    }

    public function clearCart(){
        Cart::clear();
    }

    public function updateCart(Request $request){
        $am = DB::table('products as p')
         ->where('p.id', '=', $request['pid'])
         ->select('p.id', 'p.ptitle', 'p.amount')
         ->get();
         
        Product::updateCart($request);
        // Session::flash('amount', DB::table('products as p')
        // ->where('p.id', '=', $request['pid'])
        // ->select('p.id', 'p.ptitle', 'p.amount')
        // ->get());

        // $amount = DB::table('products as p')
        // ->select('p.id', 'p.title', 'p.amount')
        // ->where('p.amount', '<', '0')
        // ->all();

        // Session::flash('amount', $amount);

    }

    public function checkOut(){
        if(Cart::isEmpty()) return redirect('shop/cart');
        if(!Session::has('user_id')) return redirect('user/signup?backTo=shop/check-out');
        self::$dtv['page_title'] .= "Check Out";
        return view('pay', self::$dtv);
        // Order::saveNew();
        // if(!Session::has('notify')){
        // return redirect('shop');
        // } else {
        //     return redirect('shop/pay');
        // }
    }


    public function checkOutPost(CheckOutRequest $request){
        if(Cart::isEmpty()) return redirect('shop/cart');
        if(!Session::has('user_id')) return redirect('user/signup?backTo=shop/check-out');
        Order::saveNew($request);
        if(!Session::has('notify')){
        return redirect('shop');
        } else {
            return redirect('thanks');
        }
    }



}
