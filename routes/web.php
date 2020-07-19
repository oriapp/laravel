<?php

// use Illuminate\Support\Facades\Route;

Route::get('/', 'PagesController@home');


#CMS 
Route::middleware(['cmsguard'])->group(function(){
 
    Route::prefix('cms')->group(function(){
        Route::get('dashboard', 'CmsController@dashboard');
        Route::resource('menu', 'MenuController');
    }); 

});



# Shop
Route::prefix('shop')->group(function(){
    Route::get('/', 'ShopController@categories');
    Route::get('checkout', 'ShopController@checkOut');
    Route::get('add-to-cart', 'ShopController@addToCart');
    Route::get('clear-cart', 'ShopController@clearCart');
    Route::get('update-cart', 'ShopController@updateCart');
    Route::get('cart', 'ShopController@cart');
    Route::get('{curl}', 'ShopController@products');
    Route::get('{curl}/{purl}', 'ShopController@productDetailes');
});


# User
Route::prefix('user')->group(function(){
    Route::get('signup', 'UserController@signUp');
    Route::post('signup', 'UserController@postSignUp');
    Route::post('signin', 'UserController@postSignin');
    Route::get('logout', 'UserController@logout');
    Route::get('signin', 'UserController@signin');
});




Route::get('{menu_url}', 'PagesController@content');