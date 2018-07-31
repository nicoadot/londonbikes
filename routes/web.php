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

//Route::get('la ruta que invoco', 'controlador@action');
Route::get('home', 'HomeController@index');
Route::get('login', 'LoginController@login');
Route::get('nosotros', 'NosotrosController@controlLogin');
Route::get('market', 'MarketController@listarProductos');
Route::post('register', 'RegisterController@create');
Route::get('preguntasFrecuentes', 'PreguntasFrecuentesController@index');
Route::get('perfil', 'ProfileController@index');
Route::patch('perfil/{id}',['as'=>'perfil.update','uses'=>'ProfileController@update']);
Route::get('cargaManual', 'CargaManualController@index');
Route::get('/', 'HomeController@index');
Route::resource('productos','ProductController');

Auth::routes();

//Route::get('home', 'HomeController@index')->name('home');
