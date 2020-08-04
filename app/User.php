<?php

namespace App;

use Illuminate\Database\Eloquent\Model;
use DB, Session, Hash;

class User extends Model
{
    static public function saveNew($request){
        $user = new self();
        $user->name = $request['name'];
        $user->email = $request['email'];
        $user->password = bcrypt($request['password']);
        $user->address = $request['address'];
        $user->city = $request['city'];
        $user->state = $request['state'];
        $user->zip = $request['zip'];
        $user->language = $request['Language'];
        $user->save();
        // rid => role_id || role-num 6 means not admin 7 => owner perms
        DB::table('user_roles')->insert(['uid' => $user->id, 'rid' => 6]);
        Session::put([
            'user_id' => $user->id,
            'user_name' => $user->name,
            'is_admin' => $user->rid == 7 ? true : false,
            'language' => $user->language,
        ]);
        Session::flash('sm', __('text.welcome_signup', ['username' => $user->name]));
    }


    static public function saveLanguage($request){
        $user = self::find(Session::get('user_id'));
        $user->language = $request;
        $user->save();
        Session::put([
            'language' => $user->language,
        ]);
        Session::flash('sm', 'language has been updated!');
    }

    static public function verify($email, $password){
        $verify = false;
        $user = DB::table('users as u')
        ->join('user_roles as ur', 'u.id', '=', 'ur.uid')
        ->select('u.id', 'u.name', 'u.email', 'u.password', 'ur.rid', 'u.language')
        ->where('u.email', '=', $email)
        ->first();

        if($user){
            if(Hash::check($password, $user->password)){
                $verify = true;
                Session::put([
                    'user_id' => $user->id,
                    'user_name' => $user->name,
                    'language' => $user->language,
                    'is_admin' => $user->rid == 7,
                ]);
                Session::flash('sm', 'Welcome back ' . $user->name);
            }
        }
        return $verify;
    }
}
