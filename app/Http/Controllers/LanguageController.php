<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Http\Requests\LanguageRequest;
use Session;
use App\User;

class LanguageController extends MainController
{
    public function postLanguages(LanguageRequest $request){
        //dd($request['Language']);
        self::$dtv['page_title'] .= "Language";
        session(['language' => $request['Language']]);
        if(Session::get('user_id')){
            User::saveLanguage($request['Language']);
        }
        return redirect('/');
    }
}
