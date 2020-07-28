<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

use Cart, Session, DB;

class Order extends Model
{
    static public function saveNew(){
        $order = new self();
        $order->user_id = Session::get('user_id');
        $order->data = serialize(Cart::getContent()->toArray());
        $order->total = Cart::getTotal();
        $order->save();
        Cart::clear();
        Session::flash('sm', 'Your order has been placed');
    }

    static public function getAll(){
        return DB::table('orders as o')
        ->join('users as u', 'u.id', '=', 'o.user_id')
        ->select('u.name', 'o.*')
        ->orderBy('o.created_at', 'desc')
        ->get();
    }
}
