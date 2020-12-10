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
        ->paginate(15);
    }

    static public function searchProduct($query){
        return DB::table('products as p')
        ->join('categories as c', 'c.id', '=', 'p.categorie_id')
        ->select('p.*', 'c.url')
        //->where('p.visibility', '=', '1')
        ->where('ptitle', 'LIKE', "%$query%", 'AND', 'p.visibility', '!=', '1')
        //->where('ptitle', 'LIKE', "%$query%", 'AND', 'p.visibility', '!=', '1')
        ->orWhere('purl', 'LIKE', "%$query%", 'AND', 'p.visibility', '!=', '1')
        ->orWhere('brand', 'LIKE', "%$query%", 'AND', 'p.visibility', '!=', '1')
        ->orWhere('producer', 'LIKE', "%$query%", 'AND', 'p.visibility', '!=', '1')
        ->orWhere('particle', 'LIKE', "%$query%", 'AND', 'p.visibility', '!=', '1')
        ->paginate(9);
    }


    static public function getProductByID($item_id){
        return DB::table('products as p')
        ->join('categories as c', 'c.id', '=', 'p.categorie_id')
        ->select('p.*', 'c.*')
        ->where('p.id', '=', $item_id)
        ->get();
    }

    static public function addToCart($pid, $pcolor, $psize){
        if(is_numeric($pid) && $product = self::find($pid)){
            if(!Cart::get($pid)){
            Cart::add($pid, $product->ptitle, $product->price, 1, ['color' => $pcolor, 'size' => $psize]);

            notify()->success("awesome! $product->ptitle has been added to the cart!");
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
        $request['color'] = ($request['color'] == null) ? $request['color'] = null : serialize($request['color']);

        $request['size'] = ($request['size'] == null) ? $request['size'] = null : serialize($request['size']);

        //$request['size'] = serialize($request['size']);

        $product = new self();
        $product->categorie_id = $request['category'];
        $product->ptitle = $request['title'];
        $product->particle = $request['description'];
        $product->pimage = FileManager::loadImage($request);
        $product->price = $request['price'];
        $product->old_price = $request['old-price'];
        $product->purl = $request['url'];
        $product->producer = $request['pru'];
        $product->brand = $request['brand'];
        $product->weight = $request['weight'];
        $product->amount = $request['amount'];
        $product->visibility = $request['visibility'];
        $product->in_short = $request['short'];
        $product->colors = $request['color'];
        $product->size = serialize($request['size']);
        $product->save();
        Session::flash('sm', 'Product has been saved!');
    }

    static public function updateItem($request, $id){
        $request['color'] = ($request['color'] == null) ? $request['color'] = null : serialize($request['color']);

        $request['size'] = ($request['size'] == null) ? $request['size'] = null : serialize($request['size']);

        $product = self::find($id);
        $product->categorie_id = $request['category'];
        $product->ptitle = $request['title'];
        $product->particle = $request['description'];
        $product->pimage = FileManager::loadImage($request, $product->pimage);
        $product->price = $request['price'];
        $product->old_price = $request['old-price'];
        $product->purl = $request['url'];
        $product->producer = $request['pru'];
        $product->brand = $request['brand'];
        $product->weight = $request['weight'];
        $product->amount = $request['amount'];
        $product->visibility = $request['visibility'];
        $product->in_short = $request['short'];
        $product->colors = $request['color'];
        $product->size = $request['size'];
        $product->save();
        Session::flash('sm', 'Product has been updated!');
    }


    static public function fiveItems(){
        return DB::table('products as p')
        ->select('p.*')
        ->orderByRaw("RAND()", "ASC")
        ->limit(7)
        ->get();
    }


    static public function newItems($amount = 6){
        return DB::table('products as p')
        ->join('categories as c', 'c.id', '=', 'p.categorie_id')
        ->where('p.visibility', '=', '1')
        ->select('p.*', 'c.url')
        ->orderBy('p.created_at', 'DESC')
        ->limit($amount)
        ->get();
    }


    static public function fourItems($amount = 4){
        return DB::table('products as p')
        ->join('categories as c', 'c.id', '=', 'p.categorie_id')
        ->where('p.visibility', '=', '1')
        ->select('p.*', 'c.url')
        ->orderBy('p.created_at', 'DESC')
        //->orderByRaw('RAND()')
        ->limit($amount)
        ->get($amount);
    }

    static public function similarProducts($title, $article, $brand, $producer){
        // return DB::table('products as p')
        // ->select('p.*')
        // ->join('categories as c', 'p.categorie_id' ,
        // '=', 'c.id')
        // ->where('p.ptitle', 'LIKE', "%$article%")
        // ->orWhere('purl', 'LIKE', "%$article%")
        // ->orWhere('brand', 'LIKE', "%$article%")
        // ->orWhere('producer', 'LIKE', "%$$producer%")
        // ->orWhere('purl', 'LIKE', "%$article%")
        // ->orWhere('brand', 'LIKE', "%$brand%")
        // ->orWhere('particle', 'LIKE', "%$article%")
        // ->select('p.*', 'c.*')

        // ->inRandomOrder()
        // ->get(8);  


        return DB::table('products as p')
        ->select('p.*', 'c.*')
        ->join('categories as c', 'p.categorie_id' ,
        '=', 'c.id')
        ->where('producer', 'LIKE', "%$producer%")
        ->inRandomOrder()
        ->get(8);  

            }


    static public function GetAll(){
        return DB::table('products as p')
        ->join('categories as c', 'c.id', '=', 'p.categorie_id')
        ->select('p.ptitle', 'p.id', 'p.price', 'p.pimage', 'p.updated_at', 'c.title')
        ->orderBy('p.created_at', 'desc')
        ->paginate(20);
    }
}
