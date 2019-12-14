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
Route::get('auth/google', 'Auth\GoogleController@redirectToGoogle');
Route::get('auth/google/callback', 'Auth\GoogleController@handleGoogleCallback');

Route::get('/redirect/{provider}', 'Auth\FacebookController@redirect');
Route::get('/callback/{provider}', 'Auth\FacebookController@callback');

Route::get('/auth/redirect', 'Auth\TwitterController@redirect');
Route::get('/callback', 'Auth\TwitterController@callback');


