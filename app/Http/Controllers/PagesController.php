<?php


/*
TO DO LIST FUCK MYYY LIFEEEE
_______________________________

1. get author ip
2. location (countery)
3. send trans* for the same location (en, he)

*/

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App, Session;
use App\Content;
use App\Categorie;

class PagesController extends MainController
{
    public function home(){
        self::$dtv['page_title'] .= "Home Page";
        // dd(Session::get('locale'));
        self::$dtv['caregories'] = Categorie::all();
        return view('home', self::$dtv);
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
