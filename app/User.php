<?php

namespace App;

use Illuminate\Database\Eloquent\Model;
use DB, Session, Hash;

use App\Mail\WelcomeMail;
use Illuminate\Support\Facades\Mail;

class User extends Model
{
    static public function saveNew($request){
        $user = new self();
        $user->name = $request['name'];
        $user->email = strtolower($request['email']);
        $user->password = bcrypt($request['password']);
        
        $user->language = 'en';
        $user->ip = \Request::getClientIp();
        $user->last_visit = date('l jS \of F Y h:i:s A');
        $user->blacklisted = 0;
        $user->save();
        // rid => role_id || role-num 6 means not admin 7 => owner perms
        DB::table('user_roles')->insert(['uid' => $user->id, 'rid' => 6]);
        Session::put([
            'user_id' => $user->id,
            'user_name' => $user->name,
            'is_admin' => $user->rid == 7 ? true : false,
            'language' => $user->language,
        ]);

        // cache([
        //     'user_id' => $user->id,
        //     'user_name' => $user->name,
        //     'is_admin' => $user->rid == 7 ? true : false,
        //     'language' => $user->language,
        // ]);
        // dd(Cache::has('user_id'));

        notify()->success(__('text.welcome_signup', ['username' => $user->name]));
        
        /* WELCOME email ctn -Will be in use later- */
        //Mail::to($request['email'])->send(new WelcomeMail());
    }


    static public function saveLanguage($request){
        $user = self::find(Session::get('user_id'));
        $user->language = $request;
        $user->ip = \Request::getClientIp();
        $user->save();
        Session::put([
            'language' => $user->language,
        ]);
        if($request == 'en'){
            notify()->success('language has been successfully updated!');
        } else if ($request == 'he'){
            notify()->success('שפת מקור האתר שונתה בהצלחה');
        }
    }

    static public function saveVisitDate(){
        $user = self::find(Session::get('user_id'));
        $user->last_visit = date('l jS \of F Y h:i:s A');
        $user->ip = \Request::getClientIp();
        $user->save();
    }

    static public function saveVisit(){
        $find = DB::table('visitors')->where('ip', \Request::getClientIp())->first();
        
        if($find == null){
        DB::table('visitors')
        ->update(['ip' => \Request::getClientIp(), 'date' => date('l jS \of F Y h:i:s A'), 'blacklist' => 0]);
        } else {
            DB::table('visitors')
            ->update(['date' => date('l jS \of F Y h:i:s A')]);
        }
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
                notify()->success('Welcome back ' . $user->name);
            }
        }
        return $verify;
    }


    static public function getProfile($id){
        $user = DB::table('users as u')
        ->join('user_roles as ur', 'u.id', '=', 'ur.uid')
        ->select('u.*', 'ur.rid')
        ->where('u.id', '=', $id)
        ->first();

        return $user;
    }

    static public function isBlackListed($id){
        $db = (int)self::find($id)->blacklisted;
        //dd(self::find($id)->blacklisted);
        //dd($db);
        if($db == 1){
            $ip = self::find($id)->ip;
            return "
            We're sorry!
            We cannot let you access our webiste at this time.

            Your IP address ($ip) has been idenified as a possible source of suspicious, robotic traffic.
            ";
        }
    }


    static public function count(){
        $user = DB::table('users as u')
        ->select('u.id')
        ->count();

        return $user;
    }
}
