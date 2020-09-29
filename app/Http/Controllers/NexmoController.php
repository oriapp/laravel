<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class NexmoController extends MainController
{

    public static function welcome(){
        $basic = new \Nexmo\Client\Credentials\Basic('89e14e93', 'fGHJ2kmgjQngJ6lS');
        $client = new \Nexmo\Client($basic);
        $key = "idf-9365";

        $message = $client->message()->send([
            'to' => '972528262490',
            'from' => 'Idfger.org',
            'text' => "Hello Dvir. This is a welcome message to the admin panel. the verify code is $key"
        ]);
    }
    

    public static function newOrder($user_name, $order_id, $order_url){
        $basic = new \Nexmo\Client\Credentials\Basic('89e14e93', 'fGHJ2kmgjQngJ6lS');
        $client = new \Nexmo\Client($basic);

        $message = $client->message()->send([
            'to' => '972528262490',
            'from' => 'Idfger.org New Order',
            'text' => 'Hello from Vonage SMS API'
        ]);
    }


    public static function orderUpdated($user_name, $order_id, $order_url){
        $basic = new \Nexmo\Client\Credentials\Basic('89e14e93', 'fGHJ2kmgjQngJ6lS');
        $client = new \Nexmo\Client($basic);

        $message = $client->message()->send([
            'to' => '972549082678',
            'from' => 'Vonage APIs',
            'text' => 'Hello from Vonage SMS API'
        ]);
    }


    public static function security(){
        $basic = new \Nexmo\Client\Credentials\Basic('89e14e93', 'fGHJ2kmgjQngJ6lS');
        $client = new \Nexmo\Client($basic);

        $message = $client->message()->send([
            'to' => '972549082678',
            'from' => 'Vonage APIs',
            'text' => 'Hello from Vonage SMS API'
        ]);
    }


    public static function verifyAccount(){
        $basic  = new \Nexmo\Client\Credentials\Basic('89e14e93', 'fGHJ2kmgjQngJ6lS');
        $client = new \Nexmo\Client($basic);

        $verification = $client->verify()->start([ 
            'number' => '972549082678',
            'brand'  => 'Idfgrar Verify',
             'code_length'  => '4']);
          
          $verification_id = $verification->getRequestId();
          dd($verification_id);


          if($cancel == true){
            try {
                $result = $client->verify()->cancel('REQUEST_ID');
                var_dump($result->getResponseData());
            }
            catch(Exception $e) {
                echo 'Message: ' .$e->getMessage();
            }
          }

          // check for req
          $request_id = 'REQUEST_ID';
            $verification = new \Nexmo\Verify\Verification($request_id);
            $result = $client->verify()->check($verification, 'CODE');

    }
}
