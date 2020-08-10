<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

use Cart, Session, DB;
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
    
    static public function saveNew(){

        $validation = true;
        
        foreach(Cart::getContent()->toArray() as $item){
            //dd($item['name']);
            //dd(self::getProductsByTitle($item['name'])[0]);

            //dd(Cart::get($item['id'])->quantity, (int)self::getProductsByTitle($item['name'])[0]->amount);
            //dd(self::getProductsByTitle($item['name'])->first());

            if(Cart::get($item['id'])->quantity > (int)self::getProductsByTitle($item['name'])->first()->amount){
                $validation = false;
                Session::flash('em', 'Can\'t place your order! we have only '.(int)self::getProductsByTitle($item['name'])->first()->amount. ' '. $item['name'] .'\'s In stock!');
            }

        }

        if($validation){
            // If we have those items in stock!
            $order = new self();
            $order->user_id = Session::get('user_id');
            $order->data = serialize(Cart::getContent()->toArray());
            $order->total = Cart::getTotal();
            $order->save();
            Cart::clear();
            Session::flash('sm', 'Your order has been placed');
        }
        
    }

    static public function getAll(){
        return DB::table('orders as o')
        ->join('users as u', 'u.id', '=', 'o.user_id')
        ->select('u.name', 'o.*')
        ->orderBy('o.created_at', 'desc')
        ->paginate(5);
    }
}
