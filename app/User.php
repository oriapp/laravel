<?php

namespace App;

use Illuminate\Database\Eloquent\Model;
use DB, Session;

class User extends Model
{
    static public function saveNew($request){
        $user = new self();
        $user->name = $request['name'];
        $user->email = $request['email'];
        $user->password = bcrypt($request['passowrd']);
        $user->save();
        // rid => role_id || role-num 6 means not admin 7 => ownrer perms
        DB::table('user_roles')->insert(['uid' => $user->id, 'rid' => 6]);
        Session::put([
            'user_id' => $user->id,
            'user_name' => $user->name,
            'is_admin' => false,
        ]);
        Session::flash('sm', __('text.welcome_signup', ['username' => $user->name]));
    }
}
