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









Route::resource('empleados','EmpleadosController');
Route::resource('recuperar','RecuperarEmpleadosController');
Route::resource('licencias','LicenciasController');
Route::resource('usuarios/sistema','UsuariosSistemaController');
Auth::routes();
Route::resource('login','LoginController');
Route::get('/home', 'HomeController@index');
