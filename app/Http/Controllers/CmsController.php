<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Order;

class CmsController extends MainController
{
    public function dashboard(){
        return view('cms.dashboard', self::$dtv);
    }

    public function orders(){
        self::$dtv['orders'] = Order::getAll();
        return view('cms.orders_index', self::$dtv);
    }
}
