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

Route::get('saludar/{nombre}/{apellido}', function ($nombre,$apellido) {
    echo("aloha ".$nombre);
});

//Route::get('la ruta que invoco', 'controlador@action');
Route::get('home', 'HomeController@index');

Route::get('login', 'LoginController@login');
