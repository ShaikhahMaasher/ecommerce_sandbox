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

// Welcome page
Route::get('/', function () {
    return view('welcome');
})->name('homepage');

Auth::routes();

// User home
Route::get('/home', 'HomeController@index')->name('home');

// Admin login
Route::get('admin/login', 'Admin\LoginController@showLoginForm')->name('admin.login');
Route::get('admin', 'Admin\LoginController@showLoginForm')->name('admin.login.show');


// Shop routes
Route::prefix('/shop')->group(function() {
    Route::get('/','ShopController@index')->name('product.index');
    Route::get('/product/{slug}','ShopController@productDetails')->name('product.details');      
});

Route::get('/cart', function () {
    return view('shop.cart');
})->name('cart');