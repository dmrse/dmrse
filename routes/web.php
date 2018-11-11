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

Route::get('/doce', function () {
    return view('doce.index');
});


Route::get('/news', function () {
    return view('news.index');
});


Auth::routes();

Route::get('/home', 'HomeController@index')->name('home');



Route::resource('place', 'MyPlaceController' ,['middleware' => ['auth']]);


Route::group(['prefix' => 'pay', 'middleware' => ['auth']], function () {
    Route::get('/', 'Pay\PayController@index');
    Route::get('/create', 'MyPlaceController@create');
});



