<?php

namespace App;

use Illuminate\Database\Eloquent\Model;
use Session, DB;

class Wishlist extends Model
{
    static public function updates($user, $product){

        if( Session::get('user_id') == $user && is_numeric($product) ){

            if (Session::has('wishlist')){
            foreach(Session::get('wishlist') as $ses){
                if($ses[0] == $product){
                    return notify()->success('Item already in wishlist ⭐');
                }
            }
        }

        // LAST VISIT PRODUCTS START
        $valid = true;

        if(Session::get("wishlist")){
        foreach(Session::get("wishlist") as $whi){
            if($whi[0] == $product) $valid = false;
            }
        }
        
        if($valid){
            Session::push("wishlist", [$product]);
        };

        if(!self::hasList($user)){
            $wish = new self();
            $wish->user_id = $user;
            $wish->product_id = $product;
            $wish->session = serialize(Session::get('wishlist'));
            $wish->save();
            notify()->success('Item has been adeed to wishlist ⭐');
        } else {
            $wish = self::find(Session::get('wishlistID'));
            $wish->user_id = $user;
            $wish->product_id = $product;
            $wish->session = serialize(Session::get('wishlist'));
            $wish->save();
            notify()->success('Item has been adeed to wishlist ⭐');
        }


        } else {
            notify()->error('something went terribly wrong');
        }

    }


    static public function hasList($uid){
        return DB::table('wishlists as w')
        ->select('w.*')
        ->where('w.user_id', '=', $uid)
        ->first();
    }
}