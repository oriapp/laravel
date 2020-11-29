<?php


/*
TO DO LIST FUCK MYYY LIFEEEE
_______________________________

1. get author ip BC I LIKE STALKING PPLS
2. location (countery) TODOOOOOO YOU LASSST ASSHOLE
3. send trans* for the same location (en, he)

*/

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App, Session;
use App\Content;
use App\Categorie;
use App\User;

use romanzipp\Seo\Facades\Seo;
use romanzipp\Seo\Services\SeoService;

use Stevebauman\Location\Facades\Location;

class PagesController extends MainController
{
    public function home(SeoService $seo){
        self::$dtv['page_title'] .= "Home Page";
        self::$dtv['caregories'] = Categorie::all();
        self::$dtv['last_view'] = Session::get('product_view');
        $seo = seo();

        $seo = app(SeoService::class);

        self::$dtv['seo'] = Seo::make();
        self::$dtv['location'] = Location::get('82.166.219.117');
        return view('home', self::$dtv);
    }

    public function contentPage(){
        self::$dtv['page_title'] .= "Content";
        return view('chatwithus', self::$dtv);
    }

    public function blacklisted(){
        if(Session::has('user_id') && User::isBlackListed(Session::get('user_id'))[1] == true){
        return view('black', self::$dtv);
        } else {
            return redirect(''); 
        }
    }



    public function content($menu_url){
        self::$dtv['contents'] = Content::getAll($menu_url);
        if(!self::$dtv['contents']->count()) \abort(404);
        self::$dtv['page_title'] .= self::$dtv['contents'][0]->title;
        return view('content', self::$dtv);
    }

    public function languages(){
        self::$dtv['page_title'] .= "language select";
        return view('language', self::$dtv);
    }
}
