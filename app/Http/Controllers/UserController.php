<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Http\Requests\SignUpRequest;
use App\Http\Requests\SigninRequest;
use App\Http\Requests\PhoneVerify;
use App\User;
use Session;

class UserController extends MainController
{

    public function __construct(){
        parent::__construct();
        $this->middleware('userauth', ['except' => ['logout', 'profile', 'phoneVerify']]);
    }


    public function signUp(){
        self::$dtv['page_title'] .= "Sign Up page";
        return view('signup', self::$dtv);
    }

    public function postSignUp(SignUpRequest $request){
        User::saveNew($request);
        $to = !empty($request['backTo']) ? $request['backTo'] : '';
        return redirect($to);
        // return redirect()->back();
    }

    public function postSignin(SigninRequest $request){
        //dd(User::verify($request['email'], $request['password']));
        if(User::verify($request['email'], $request['password'])){
            //return redirect('');
            return redirect()->back();
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
        emotify('error', 'successfully logged out. see you in the next round');
        return redirect('user/signin');
    }

    public function signin(){
        self::$dtv['page_title'] .= "Sign In page";
        return view('signin', self::$dtv);
    }


    public function profile(Request $request){
        self::$dtv['page_title'] .= "Profile page";
        //dd($request->session()->get('user_id'));
        if(Session::has('user_id')){
            self::$dtv['user'] = User::getProfile($request->session()->get('user_id'));
        } else{
            return redirect()->back(); 
        }
        return view('edit_profile', self::$dtv);
    }
}
