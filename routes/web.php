<?php

/*
|--------------------------------------------------------------------------
| Web Routes
|--------------------------------------------------------------------------
|
| Here is where you can register web routes for your application. These
| routes are loaded by the RouteServiceProvider within a group which
| contains the "web" middleware group. Now create something great!
|
*/

Route::get('/', function () {
    return view('auth.login');
});

Auth::routes();
Route::get('/home', 'HomeController@index')->name('home');


                    ################## website routes ##############
Route::group(['before' => 'auth', 'prefix' => 'pharma'], function () {



    Route::get('/about', function (){
        return view('websitePages.about');
    })->name('about');

    Route::get('/cart', function (){
        return view('websitePages.cart.');
    })->name('cart');

    Route::get('/checkout', function (){
        return view('websitePages.checkout.');
    })->name('checkout');

    Route::get('/contact', function (){
        return view('websitePages.contact.');
    })->name('contact');

    Route::get('/shop', function (){
        return view('websitePages.shop.');
    })->name('shop');

    Route::get('/shop-single', function (){
        return view('websitePages.shop-single.');
    })->name('shop-single');

    Route::get('/thankyou', function (){
        return view('websitePages.thankyou.');
    })->name('thankyou');





});



Route::get('/home2', function (){
    return view('websitePages.home2');
})->name('home2');
