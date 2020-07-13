<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Http\Requests\SignUpRequest;
use App\Http\Requests\SigninRequest;
use App\User;
use Session;

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

    public function postSignin(SigninRequest $request){
        if(User::verify($request['email'], $request['password'])){
            return redirect('');
        } else {
        self::$dtv['page_title'] .= "Sign In page";
        self::$dtv['verify_error'] = 'Wrong email and password combination';
        return view('signin', self::$dtv);
        }
    }

    public function logout(){
        // Session::forget([
        //     'user_id' => $user->id,
        //     'user_name' => $user->name,
        //     'is_admin' => false,
        // ]);
        Session::flush();
        return redirect('user/signin');
    }

    public function signin(){
        self::$dtv['page_title'] .= "Sign In page";
        return view('signin', self::$dtv);
    }
}
