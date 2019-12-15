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
/*Route home view */
Route::get('/', 'PageController@main');
Route::get('/more_detail', 'PageController@detail');

/*Route contact */
Route::get('/send/email', 'AdminController@mail');
/*Route  */
Route::resource('/contact','ContactController');

Auth::routes(['verify' => true]);

Route::get('/admin', 'AdminController@index')->name('admin')->middleware('verified');
Route::resource('/admin/products', 'Admin\ProductsController', ['as'=>'admin']);
Route::get('/refresh_captcha','Auth\RegisterController@refreshCaptcha')->name('refresh');
Route::get('/admin/pdf','PDFMaker@gen');
