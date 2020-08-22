<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class PaymentController extends MainController
{
    public function chackOut(){
        self::$dtv['page_title'] .= "payment";
        return view('chackout', self::$dtv);
    }

    public function postChackOut(){
        
    }
}
