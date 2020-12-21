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

Route::get('/message_practice', 'SampleController@sample_action');


Route::get('/blade_example', 'SampleController@blade_example');


Route::get('/messages', 'MessagesController@index');

Route::post('/messages', 'MessagesController@create');

Auth::routes();

Route::get('/home', 'HomeController@index')->name('home');

Route::prefix('admin')->name('admin::')->group(function() {
    // ログインフォーム
    Route::get('login', 'Auth\LoginController@showLoginForm')->name('login');
    // ログイン処理
    Route::post('login', 'Auth\LoginController@login');
    //ログアウト処理
    Route::post('logout', 'Auth\LoginController@logout')->name('logout');
});

// admin認証が必要なページ
Route::middleware('auth:admin')->group(function () {
    Route::get('admin', 'AdminController@index');
});
