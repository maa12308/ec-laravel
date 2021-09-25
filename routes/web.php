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

// Route::get('/home', 'HomeController@index')->name('home');

Route::get('/', 'ShopController@index'); // ShopControllerを経由して一覧画面(index)を表示させる

// ログイン状態
Route::group(['middleware' => ['auth']], function () {

  Route::get('/mycart', 'ShopController@myCart');
  Route::post('/mycart', 'ShopController@addMycart');
  Route::post('/cartdelete', 'ShopController@deleteCart');
  Route::post('/checkout', 'ShopController@checkout');
 
});

// GET送信→普通にアクセス
// POST送信→formを経由してのアクセス

 Auth::routes();
 

