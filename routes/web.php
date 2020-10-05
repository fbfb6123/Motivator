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

Route::resource('reward', 'RewardController');

Route::resource('message', 'MessageController');

Route::resource('post', 'PostController');

Route::resource('sale', 'SaleController');
Route::get('sales', 'SaleController@index');
Route::get('ajax/sale', 'Ajax\SaleController@index');
Route::get('ajax/sale/year', 'Ajax\SaleController@years');

Auth::routes();

Route::get('/home', 'HomeController@index')->name('home');
Route::get('/{any}', function(){
    return view('App');
})->where('any', '.*'); //補足：.*は、正規表現で0文字以上の任意の文字列を意味する

