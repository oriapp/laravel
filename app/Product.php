<?php

namespace App;

use Illuminate\Database\Eloquent\Model;
use DB, Cart, Session, FileManager;

class Product extends Model
{
    static public function getProducts($curl, $uri){
        //dd($uri->sort);
        // if($uri->sort){
        //     $by = "p.$uri->sort";
        //     return DB::table('products as p')
        // ->join('categories as c', 'c.id', '=', 'p.categorie_id')
        // ->select('p.*', 'c.title', 'c.url', 'p.visibility')
        // ->where('c.url', '=', $curl)
        // ->where('p.visibility', '=', '1')
        // ->orderBy($by)
        // ->paginate(1);
        // } else {
        // return DB::table('products as p')
        // ->join('categories as c', 'c.id', '=', 'p.categorie_id')
        // ->select('p.*', 'c.title', 'c.url', 'p.visibility')
        // ->where('c.url', '=', $curl)
        // ->where('p.visibility', '=', '1')
        // ->orderBy('p.price')
        // ->paginate(1);
        // }


        return DB::table('products as p')
        ->join('categories as c', 'c.id', '=', 'p.categorie_id')
        ->select('p.*', 'c.title', 'c.url', 'p.visibility')
        ->where('c.url', '=', $curl)
        ->where('p.visibility', '=', '1')
        ->orderBy('p.price')
        ->paginate(1);
    }

    static public function searchProduct($query){
        return DB::table('products as p')
        ->select('p.*')
        ->where('ptitle', 'LIKE', "%$query%")
        ->orWhere('purl', 'LIKE', "%$query%")
        ->orWhere('particle', 'LIKE', "%$query%")
        ->orWhere('brand', 'LIKE', "%$query%")
        ->paginate(9);
    }

    static public function addToCart($pid){
        if(is_numeric($pid) && $product = self::find($pid)){
            if(!Cart::get($pid)){
            Cart::add($pid, $product->ptitle, $product->price, 1, []);
            notify()->success('awesome! ' . $product->ptitle . ' has been added to the cart!');
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
        $product->old_price = $request['old-price'];
        $product->purl = $request['url'];
        $product->brand = $request['brand'];
        $product->weight = $request['weight'];
        $product->amount = $request['amount'];
        $product->visibility = $request['visibility'];
        $product->in_short = $request['short'];
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
        $product->old_price = $request['old-price'];
        $product->purl = $request['url'];
        $product->brand = $request['brand'];
        $product->weight = $request['weight'];
        $product->amount = $request['amount'];
        $product->visibility = $request['visibility'];
        $product->in_short = $request['short'];
        $product->save();
        Session::flash('sm', 'Product has been updated!');
    }
}
