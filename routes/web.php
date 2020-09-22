<?php

use Illuminate\Support\Facades\Route;

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

Route::get('/', 'HomeController@mostrarRaiz');

Route::get('hola', 'HomeController@irAHola');

Route::get('chau', 'HomeController@irAChau');

Route::get('bienvenido', 'HomeController@irABienvenido');

Route::post('rutaPost', 'HomeController@ejecutarPost');

//----------------------------------------------------------------
Route::get('/login', 'HomeController@mostrarFormularioIniciarSesion');
Route::post('/verificarLogin', 'HomeController@verificarDatosDeInicioDeSesion');