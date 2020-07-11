<?php

namespace App;

use Illuminate\Database\Eloquent\Model;
use DB, Cart, Session;

class Product extends Model
{
    static public function getProducts($curl){
        return DB::table('products as p')
        ->join('categories as c', 'c.id', '=', 'p.categorie_id')
        ->select('p.*', 'c.title', 'c.url')
        ->where('c.url', '=', $curl)
        ->orderBy('p.price')
        ->get();
    }

    static public function addToCart($pid){
        if(is_numeric($pid) && $product = self::find($pid)){
            if(!Cart::get($pid)){
            Cart::add($pid, $product->ptitle, $product->price, 1, []);
            Session::flash('sm', $product->ptitle . ' added to cart');
            }
        }
    }

    static public function updateCart($request){
        if(!empty($request['pid']) && is_numeric($request['pid'])){
            if($request['op'] == "plus"){
                Cart::update($request['pid'], ['quantity' => 1]);
            } else if($request['op'] == "minus"){
                Cart::update($request['pid'], ['quantity' => -1]);
            }
        }
    }
}
