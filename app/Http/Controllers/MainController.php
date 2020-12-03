<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Menu;
use App, Session, DB;
use App\User;
use App\Categorie;

class MainController extends Controller
{
    //father of all the controlers (everything goes from here to the core)

    public static $dtv = ['page_title' => 'Idfgear -'];

    public function __construct(){ 

        self::$dtv['menu'] = Menu::all();
        self::$dtv['categories'] = Categorie::all();

        // access for using sessions on construct;
        
        $this->middleware(function ($request, $next){

            // #

            if(Session::get('language'))
            App::setLocale(Session::get('language'));
            else 
                App::setLocale('en');
                session(['locale' => 'en']);

            // #

            if(Session::get('user_id')){
                if(User::isBlackListed(Session::get('user_id'))[1] == true){
                    redirect('black');
                };
                User::saveVisitDate();
            } else {
                User::saveVisit();
            }

            // #

            if(!Session::get('locale'))
                session(['locale' => 'en']);

            // #
            
            return $next($request);
        });


    }

}
