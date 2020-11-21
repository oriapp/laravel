<?php

use Illuminate\Http\Request;
use Illuminate\Support\Facades\Route;

use App\User,
App\Order;

Route::get('/api', function() {
    return 'Works';
});

Route::get('/status', function () {
    return ["users" => User::count(), "orders" => Order::count()];
});

Route::middleware('auth:api')->get('/user', function (Request $request) {
    return $request->user();
});
