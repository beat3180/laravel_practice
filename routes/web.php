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


Route::get('/inde', 'HelloController@inde');
Route::post('/inde', 'HelloController@result');



use App\Http\Middleware\HelloMiddleware;

Route::get('/index', 'HelloController@index')->Middleware('helo');


Route::get('/practice', 'HelloController@practice');
Route::post('/practice', 'HelloController@post');

Route::get('/db', 'HelloController@DB');
Route::post('/db', 'HelloController@DB_post');

Route::get('/add', 'HelloController@add');
Route::post('/add', 'HelloController@create');

Route::get('/edit', 'HelloController@edit');
Route::post('/edit', 'HelloController@update');

Route::get('/del', 'HelloController@del');
Route::post('/del', 'HelloController@remove');

Route::get('/show', 'HelloController@show');

Route::get('/practice/index', 'PracticeController@index');


Route::get('/practice/find', 'PracticeController@find');
Route::post('/practice/find', 'PracticeController@search');
