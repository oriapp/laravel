<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Menu;
use App, Session, DB;
use App\User;
use App\Categorie;

use Mail;


class MainController extends Controller
{
    //father of all the controlers (everything goes from here to the core)

    public static $dtv = ['page_title' => 'Idfgear -'];

    public function __construct(){
        

        self::$dtv['menu'] = Menu::all();
        self::$dtv['categories'] = Categorie::all();

        // access for using sessions on construct;
        
        $this->middleware(function ($request, $next){
            if(Session::get('language')){
            App::setLocale(Session::get('language'));
            // Cache::put('key', 'value');
            // dd(Cache::pull('key'));
            } else {
                App::setLocale('en');
                session(['locale' => 'en']);
            }


            if(Session::get('user_id')){
                //dd($request->server);
                if(User::isBlackListed(Session::get('user_id'))[1] == true){
                    dd(User::isBlackListed(Session::get('user_id')));
                };
                User::saveVisitDate();
            } else {
                User::saveVisit();
            }
            
            return $next($request);
        });

    }

}
