<?php

use Illuminate\Support\Facades\Route;
use App\Http\Controllers\SearchController;


/*
Main to do list
==================

(Not sure) Make an newletter once someone subscribing to product notflications 
~~Add size and color to the card for check out.~~ aka done
Try to reduce requests to the database with sessions and chace (later for sure)
Put into the dashboard beyond page more things. of things that people updated and orders

Make the product title a bit smaller in the products page (done?)
*/


# Home

Route::middleware('page-cache')->get('/', 'PagesController@home');
Route::get('/content', 'PagesController@contentPage');
Route::get('/black', 'PagesController@blacklisted');



# Praivece

Route::prefix('privacy')->group(function(){
    Route::middleware('page-cache')->get('/terms', 'PrivacyController@terms_and_conditions');
    Route::middleware('page-cache')->get('/privacy-policy', 'PrivacyController@privacy_policy');
    Route::middleware('page-cache')->get('/disclaimer', 'PrivacyController@disclaimer');
});

# Payments

Route::get('/payment', 'PaymentController@chackOut');
Route::post('/payment', 'PaymentController@postChackOut');

# Sentry.io
Route::get('/debug-sentry', function () {
    throw new Exception('My first Sentry error!');
});

# language
Route::prefix('flag')->group(function(){
    Route::middleware('page-cache')->get('language', 'PagesController@languages');
    Route::post('language', 'LanguageController@postLanguages');
}); 


Route::middleware('page-cache')->get('search/{search}', function ($search) {
    //return $search;
    return SearchController::search($search);
}); 
// })->where('search', '.*');

Route::middleware('page-cache')->get('search/', function () {
    //return $search;
     return abort( response('No results where found', 204) );;
    //return redirect(401);
}); 



# Thanks Pages

Route::middleware('page-cache')->get('thanks', function () {
    //return $search;
    return view('thanks');
}); 



# Email
use App\Mail\WelcomeMail;
use Illuminate\Support\Facades\Mail;
Route::get('/email', function(){
    Mail::to('email@email.com')->send(new WelcomeMail());
});


// Auth::routes();
// Route::get('/home', 'HomeController@index')->name('home');


#CMS 
Route::middleware(['cmsguard'])->group(function(){
 
    Route::prefix('cms')->group(function(){
        Route::get('dashboard', 'CmsController@dashboard');
        //Route::get('orders', 'CmsController@orders');
        Route::resource('orders', 'OrdersController');
        Route::resource('content', 'ContentController');
        Route::resource('menu', 'MenuController');
        Route::resource('categories', 'CategoriesController');
        Route::resource('products', 'ProductsController');
        
    }); 

});



# Shop 
Route::prefix('shop')->group(function(){
    Route::middleware('page-cache')->get('/', 'ShopController@categories');
    Route::get('checkout', 'ShopController@checkOut');
    Route::get('add-to-cart', 'ShopController@addToCart');
    Route::get('clear-cart', 'ShopController@clearCart');
    Route::get('update-cart', 'ShopController@updateCart');
    Route::get('cart', 'ShopController@cart');

    Route::get('check-out', 'ShopController@checkOut');
    Route::post('check-out', 'ShopController@checkOutPost');

    Route::get('wishlist', 'ShopController@wishlist');

    //Route::get('check-out', 'CheckOutSysController@index');
    //Route::post('cart', 'CheckOutSysController@post');
    Route::get('{curl}', 'ShopController@products');
    Route::get('{curl}/{purl}', 'ShopController@productDetailes');
});


# User
Route::prefix('user')->group(function(){
    Route::middleware('page-cache')->get('signup', 'UserController@signUp');
    Route::post('signup', 'UserController@postSignUp');
    Route::post('signin', 'UserController@postSignin');
    Route::get('logout', 'UserController@logout');
    Route::middleware('page-cache')->get('signin', 'UserController@signin');
    Route::get('profile', 'UserController@profile');
    //Route::post('profile', 'UserController@postProfile');
});


#Payments 

Route::view('/checkout', 'checkout-page');
Route::post('/checkout', 'PaymentController@createPayment')->name('create-payment');
Route::get('/confirm', 'PaymentController@confirmPayment')->name('confirm-payment');



# Custom Pages
Route::get('{menu_url}', 'PagesController@content');