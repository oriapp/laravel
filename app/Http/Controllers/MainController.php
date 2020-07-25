<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Menu;

class MainController extends Controller
{
    //father of all the controlers (everything goes from here to the core)

    public function __construct(){
        self::$dtv['menu'] = Menu::all();
    }

    public static $dtv = ['page_title' => 'iCARS -'];
}
