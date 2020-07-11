<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Http\Requests\SignUpRequest;
use App\User;

class UserController extends MainController
{
    public function signUp(){
        self::$dtv['page_title'] .= "Sign Up page";
        return view('signup', self::$dtv);
    }

    public function postSignUp(SignUpRequest $request){
        User::saveNew($request);
        return redirect('');
    }
}
