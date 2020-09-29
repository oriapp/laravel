<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use DB;
use App\Product;
use App\Menu;

class SearchController extends MainController
{
    public static function search($query){
        self::$dtv['page_title'] .= "Search";
        self::$dtv['menu'] = Menu::all();
        self::$dtv['res'] = Product::searchProduct($query);
        self::$dtv['categoriess'] = DB::select('select * from categories');
        
        //if($query == null) abort( response('No results where found', 401) );;

        return view('search', self::$dtv);
        //return Product::searchProduct($query);
    }
}
