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



Auth::routes();
//control to url
Route::get('/', 'getController@index');
Route::get('/home', 'getController@index');
Route::get('/about', 'getController@about');
Route::get('/newsroom', 'getController@newsroom');
Route::get('/events', 'getController@events');
Route::get('/graduates', 'getController@graduates');
Route::get('/contact', 'getController@contact');
Route::get('/registerControl', 'postController@register');
Route::get('/register_continue', 'getController@register_continue');//->middleware('register_control');
Route::get('/profile', 'getController@profile')->middleware('Admin');



Route::post('/register_continue', 'postController@register');
Route::post('/registerControl', 'postController@registerControl');


//login for sossial 
Route::get('auth/{provider}', 'Auth\LoginController@redirectToProvider');
Route::get('auth/{provider}/callback', 'Auth\LoginController@handleProviderCallback');










Route::get('a','getController@a');
Route::post('a','postController@a');