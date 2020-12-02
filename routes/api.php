<?php

use Illuminate\Http\Request;
use Illuminate\Support\Facades\Route;

use App\User,
App\Order;

Route::get('/', function() {
    //return redirect('/');
    return ["return" => 'What are you looking for?'];
});

Route::get('/status', function () {
    if(User::count())
        return ["users" => User::count(), "orders" => Order::count()];
    else
        return (http_response_code(404) + 200);
});

Route::middleware('auth:api')->get('/user', function (Request $request) {
    return $request->user();
});
