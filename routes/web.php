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


Route::get('/preguntas', 'RoutesController@preguntas');

Route::get('login', 'AuthenticationController@showLoginForm')->name('login');
Route::post('login', 'AuthenticationController@login');

Route::get('/registro', 'RoutesController@registro');
Route::get('register', 'AuthenticationController@showRegisterForm');
Route::post('register', 'AuthenticationController@register');

Route::get('logout', 'AuthenticationController@logout')->name('logout');

Route::get('/NuevoProducto', 'RoutesController@crear');
Route::post('/NuevoProducto', 'ProductosController@NuevoProducto');
// Route::get('/NuevoProducto', 'ProductosController@showCategories');

Route::get('/productos', 'RoutesController@productos');
Route::get('/productos', 'ProductosController@showProductos');

Route::get('/MisProductos', 'RoutesController@MisProductos');
Route::get('/MisProductos', 'ProductosController@showMyProducts');

Route::get('borrarProducto/{id}', 'ProductosController@borrar');
Route::get('editarProducto/{id}', 'ProductosController@editarMiProducto');
Route::post('editarProducto/{id}', 'ProductosController@editarProducto');

Route::get('producto/{id}', 'ProductosController@traerUnSoloProducto');

Route::get('/add-to-cart/{id}', [
  'uses' => 'ProductosController@getAddToCart',
  'ass' => 'producto.AddToCart'
]);
