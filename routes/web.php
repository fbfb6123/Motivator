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

Route::get('sales', 'SaleController@index'); // 👈 ブラウザでアクセス
Route::get('ajax/sales', 'Ajax\SaleController@index'); // 👈 売上データ取得
Route::get('ajax/sales/years', 'Ajax\SaleController@years'); // 👈 年データ取得（セレクトボックス用）
