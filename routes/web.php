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

Route::get('/','ProductController@index')->name('home');

Route::get('/create', 'ProductController@create')->name('create_product');

Route::post('/store', 'ProductController@store')->name('store_product');

Route::get('/show/{id}', 'ProductController@show')->name('show_product');

Route::get('/edit/{id}', 'ProductController@edit')->name('edit_product');

Route::put('/update/{id}', 'ProductController@update')->name('update_product');
