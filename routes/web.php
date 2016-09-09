<?php

/*
|--------------------------------------------------------------------------
| Web Routes
|--------------------------------------------------------------------------
|
| This file is where you may define all of the routes that are handled
| by your application. Just tell Laravel the URIs it should respond
| to using a Closure or controller method. Build something great!
|
*/

// Route::get('/', function () {
//     return view('welcome');
// });

// Auth::routes();
// Route::get('login', ['as' => 'auth.login', 'uses' => 'Auth\AuthController@showLoginForm']);
// Route::post('login', ['as' => 'auth.login', 'uses' => 'Auth\LoginController@login']);
// Route::get('logout', ['as' => 'auth.logout', 'uses' => 'Auth\LoginController@logout']);

// // Registration Routes...
// Route::get('register', ['as' => 'auth.register', 'uses' => 'Auth\AuthController@showRegistrationForm']);
// Route::post('register', ['as' => 'auth.register', 'uses' => 'Auth\AuthController@register']);

// // Password Reset Routes...
// Route::get('password/reset/{token?}', ['as' => 'auth.password.reset', 'uses' => 'Auth\PasswordController@showResetForm']);
// Route::post('password/email', ['as' => 'auth.password.email', 'uses' => 'Auth\PasswordController@sendResetLinkEmail']);
// Route::post('password/reset', ['as' => 'auth.password.reset', 'uses' => 'Auth\PasswordController@reset']);
// Route::get('/home', 'HomeController@index');

Auth::routes();

Route::get('/home', 'HomeController@index');
