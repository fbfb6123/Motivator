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

Route::resource('sale', 'SaleController');
Route::get('sales', 'SaleController@index');
Route::get('ajax/sale', 'Ajax\SaleController@index');
Route::get('ajax/sale/year', 'Ajax\SaleController@years');
