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

Route::get('/', 'RoutesController@index');

Auth::routes();

Route::get('/home', 'HomeController@index');

Route::get('/registro', 'RoutesController@registro');

Route::get('login', 'AuthenticationController@showLoginForm')->name('login');
Route::post('login', 'AuthenticationController@login');

Route::get('register', 'AuthenticationController@showRegisterForm');
Route::post('register', 'AuthenticationController@register');

Route::get('logout', 'AuthenticationController@logout')->name('logout');
// Route::get('/preguntas', 'RoutesController@preguntas')
