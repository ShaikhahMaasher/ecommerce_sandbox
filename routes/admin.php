<?php

/*
|--------------------------------------------------------------------------
| Admin Routes
|--------------------------------------------------------------------------
|
| Here is where you can register admin routes for your application. These
| routes are loaded by the RouteServiceProvider within a group which
| contains the "admin" middleware group. 
|
*/


// Admin home routes
Route::get('/home', 'Admin\AdminController@index')->name('admin.home');

// Products route group
Route::prefix('/products')->group(function() {
    Route::get('/create', 'ProductController@create');
    Route::post('/', 'ProductController@store');
    Route::get('/', 'ProductController@index');
    Route::get('/{id}/edit', 'ProductController@edit');
    Route::patch('/{id}', 'ProductController@update');
    Route::delete('/{id}', 'ProductController@destroy')->name('product.delete');
    Route::post('/upload_gallery', 'ProductController@uploadGallery')->name('upload.gallery');
    Route::post('/update_gallery/{id}', 'ProductController@updateGallery')->name('update.gallery');
    Route::post('/delete_feature', 'ProductController@deleteFeature')->name('delete.feature');
});

// Categories route group
Route::prefix('/category')->group(function() {
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

// Gallery route group
Route::prefix('/gallery')->group(function() {
    Route::get('/', 'GalleryController@index')->name('gallery.index');
});