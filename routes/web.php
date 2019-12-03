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
    return view('mainPage');
});

Route::get('/more_detail', function () {
    return view('detailProduct');
});

Route::get('/send/email', 'HomeController@mail');

Route::resource('/contact','ContactController');

Auth::routes();
Route::get('/admin', 'HomeController@index')->name('home');
Route::resource('/admin/products', 'Admin\ProductsController', ['as'=>'admin']);