<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Menu;
use App, Session;

class MainController extends Controller
{
    //father of all the controlers (everything goes from here to the core)

    public static $dtv = ['page_title' => 'iCARS -'];

    public function __construct(){
        self::$dtv['menu'] = Menu::all();

        // access for using sessions on construct;
        
        // $this->middleware(function ($request, $next){
        //     session(['locale' => 'he']);
        //     return $next($request);
        // });

    }

}
