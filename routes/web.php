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

Route::prefix('admin')->namespace('Admin')->group(function(){
    Route::prefix('stores')->group(function(){
        Route::get('/', 'StoreController@index')->name('index');
        Route::get('/create', 'StoreController@create')->name('create');
        Route::post('store', 'StoreController@store')->name('store');
        Route::get('/user', 'StoreController@index')->name('admin.stores.index');
        Route::get('/{store}/edit', 'StoreController@edit')->name('admin.stores.edit');
        Route::post('/update/{store}', 'StoreController@update')->name('admin.stores.update');
        Route::get('/destroy/{store}', 'StoreController@destroy')->name('admin.stores.destroy');

    });  
});


Route::prefix('admin')->namespace('Admin')->group(function(){
    Route::prefix('products')->group(function(){
        Route::get('/product', 'ProductController@index')->name('index');
        Route::get('/product/create', 'ProductController@create')->name('product-create');
        Route::post('product/store', 'ProductController@store')->name('store');
        Route::get('/{product}/edit', 'ProductController@edit')->name('admin.products.edit');
        Route::post('/update/{product}', 'ProductController@update')->name('admin.products.update');
        Route::get('/destroy/{product}', 'ProductController@destroy')->name('admin.products.destroy');

    });  
});