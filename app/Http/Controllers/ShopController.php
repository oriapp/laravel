<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Categorie;
use DB, Cart, Session;
use App\Order;

use App\Product;

class ShopController extends MainController
{
    // shop manager controller

    public function categories(){
        self::$dtv['page_title'] .= 'Categories Page';
        self::$dtv['categories'] = Categorie::all();
        return view('categories', self::$dtv);
    }

    public function products($curl){
        $producs = Product::getProducts($curl);
        if(!$producs->count()) abort(404);
        self::$dtv['products'] = $producs;
        self::$dtv['page_title'] .= $producs[0]->title . ' Products';
        return view('products', self::$dtv);
    }

    public function productDetailes($curl, $purl){
        $product = Product::where('purl', '=', $purl)->first();
        if(!$product) abort(404);
        self::$dtv['page_title'] .= $product->ptitle . ' Products';
        self::$dtv['product'] = $product;
        return view('product_detailes', self::$dtv);
    }

    public function addToCart(Request $request){
        Product::addToCart($request['product_id']);
    }

    public function cart(Request $request){
        if(!empty($request['removeItem'])) return $this->removeItem($request['removeItem']);
        self::$dtv['page_title'] .= ' Cart Page';
        $cart = Cart::getContent()->toArray();
        sort($cart);
        self::$dtv['cart'] = $cart;
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
        Product::updateCart($request);

    }

    public function checkOut(){
        if(Cart::isEmpty()) return redirect('shop/cart');
        if(!Session::has('user_id')) return redirect('user/signup?backTo=shop/cart');
        Order::saveNew();
        return redirect('shop');
    }
}
