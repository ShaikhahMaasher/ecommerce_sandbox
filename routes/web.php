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
    return view('welcome');
});

Auth::routes();

Route::get('/home', 'HomeController@index')->name('home');

Route::get('admin/home', function() {
    return view('admin.home');
});


Route::get('admin/login', 'Admin\LoginController@showLoginForm')->name('admin.login');
Route::get('/admin/home', 'Admin\AdminController@index')->name('admin.home');
Route::get('admin', 'Admin\LoginController@showLoginForm')->name('admin.login.show');

Route::get('admin/products/create', 'ProductController@create');
Route::post('/admin/products', 'ProductController@store');
Route::get('/admin/products', 'ProductController@index');
Route::get('/admin/products/{id}/edit', 'ProductController@edit');
Route::patch('/admin/products/{id}', 'ProductController@update');
Route::delete('/admin/products/{id}', 'ProductController@destroy')->name('product.delete');
Route::post('admin/products/upload_gallery', 'ProductController@uploadGallery')->name('upload.gallery');
Route::post('admin/products/update_gallery/{id}', 'ProductController@updateGallery')->name('update.gallery');
Route::post('admin/products/delete_feature', 'ProductController@deleteFeature')->name('delete.feature');

//-----------shop Route -------------
Route::get('shop', function () {
    return view('shop.index');
});

Route::prefix('admin/category')->group(function () {
    //------------Categories Routes-------
     Route::get('/','CategoryController@index')->name('admin.category');
     Route::get('/create','CategoryController@create')->name('category.create');      
     Route::post('/store','CategoryController@store');
     Route::get('/edit/{slug}','CategoryController@edit');
     Route::post('/update/{slug}','CategoryController@update');
     Route::get('/delete/{slug}','CategoryController@destroy');
     Route::delete('/delete/{slug}','CategoryController@destroy')->name('category.delete');;
     Route::get('/status-show/{slug}','CategoryController@showCategory');
     Route::get('/status-hide/{slug}','CategoryController@hideCategory');
     Route::get('/trashed','CategoryController@readTrashed');
     Route::get('/restore/{slug}','CategoryController@restore');
 });
 

Route::get('admin/test/images', 'TestController@create');
Route::get('admin/test', 'TestController@index');
Route::post('admin/test/store', 'TestController@store')->name('images.store');
 