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
use App;

class PagesController extends MainController
{
    public function home(){
        self::$dtv['page_title'] .= "Home Page";
        return view('home', self::$dtv);
    }

    public function about(){
        self::$dtv['page_title'] .= "About Us";
        return view('about',  self::$dtv);
    }
}
