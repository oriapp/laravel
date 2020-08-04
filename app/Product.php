<?php

namespace App;

use Illuminate\Database\Eloquent\Model;
use DB, Cart, Session, FileManager;

class Product extends Model
{
    static public function getProducts($curl){
        return DB::table('products as p')
        ->join('categories as c', 'c.id', '=', 'p.categorie_id')
        ->select('p.*', 'c.title', 'c.url')
        ->where('c.url', '=', $curl)
        ->orderBy('p.price')
        ->paginate(3);
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

    static public function saveNew($request){
        $product = new self();
        $product->categorie_id = $request['category'];
        $product->ptitle = $request['title'];
        $product->particle = $request['description'];
        $product->pimage = FileManager::loadImage($request);
        $product->price = $request['price'];
        $product->purl = $request['url'];
        $product->brand = $request['brand'];
        $product->weight = $request['weight'];
        $product->amount = $request['amount'];
        $product->save();
        Session::flash('sm', 'Product has been saved!');
    }

    static public function updateItem($request, $id){
        $product = self::find($id);
        $product->categorie_id = $request['category'];
        $product->ptitle = $request['title'];
        $product->particle = $request['description'];
        $product->pimage = FileManager::loadImage($request, $product->pimage);
        $product->price = $request['price'];
        $product->purl = $request['url'];
        $product->brand = $request['brand'];
        $product->weight = $request['weight'];
        $product->amount = $request['amount'];
        $product->save();
        Session::flash('sm', 'Product has been updated!');
    }
}
