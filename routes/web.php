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

Auth::routes();

Route::get('/home', 'HomeController@index')->name('home');

Route::get('/verify/{token}', 'Auth\RegisterController@verify')->name('register.verify');

Auth::routes();

Route::group(
    [
        'prefix' => 'admin',
        'as' => 'admin',
        'namespace' => 'Admin',
        'middleware' =>['auth'],
    ],
    function(){
        Route::get('admin', 'HomeController@index')->name('home');
});
