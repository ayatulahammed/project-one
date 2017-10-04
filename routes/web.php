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

Route::get('/', 'WelController@index' );
Route::get('/support','WelController@support');
Route::get('/about','WelController@about');
Route::get('/blog','WelController@blog');

Route::get('/contact','WelController@contact');

