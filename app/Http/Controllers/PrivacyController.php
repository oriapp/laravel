<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class PrivacyController extends MainController
{
    public function terms_and_conditions(){
        self::$dtv['page_title'] .= "Home Page";
        return view('privacy.terms_and_conditions',  self::$dtv); 
    }


    public function privacy_policy(){
        self::$dtv['page_title'] .= "Home Page";
        return view('privacy.privacy_policy',  self::$dtv); 
    }

    public function disclaimer(){
        self::$dtv['page_title'] .= "Home Page";
        return view('privacy.disclaimer',  self::$dtv); 
    }
}
