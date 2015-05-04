<?php

/*
|--------------------------------------------------------------------------
| Application Routes
|--------------------------------------------------------------------------
|
| Here is where you can register all of the routes for an application.
| It's a breeze. Simply tell Laravel the URIs it should respond to
| and give it the controller to call when that URI is requested.
|
*/
Route::get('/', ['as' => 'home_path', 'uses' => 'WelcomeController@index']);
Route::post('/', ['as' => 'home_path', 'uses' => 'WelcomeController@store']);


Route::get('login', ['as' => 'login_path', 'uses' => 'AuthController@create']);
Route::post('login', ['as' => 'login_path', 'uses' => 'AuthController@store']);

Route::get('logout', ['as' => 'logout_path', 'uses' => 'AuthController@destroy']);

Route::get('register', ['as' => 'register_path', 'uses' => 'RegisterController@create']);
Route::post('register', ['as' => 'register_path', 'uses' => 'RegisterController@store']);

Route::get('/user/{profile}', ['as' => 'profile_path', 'uses' => 'ProfilesController@show']);