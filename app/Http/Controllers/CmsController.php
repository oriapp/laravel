<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Order;
use App\Users;

class CmsController extends MainController
{
    public function dashboard(){
        self::$dtv['orders'] = Order::getAll();
        self::$dtv['users'] = Order::getAll();
        return view('cms.dashboard', self::$dtv);
    }

    public function orders(){
        self::$dtv['orders'] = Order::getAll();
        return view('cms.orders_index', self::$dtv);
    }
}
