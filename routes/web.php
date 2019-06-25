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

Route::get('/', 'InicioController@index');

//Enrutamiento Permiso
Route::get('administrador/permiso-listar', 'Administrador\PermisoController@index')->name('permiso');
Route::get('administrador/permiso-crear', 'Administrador\PermisoController@crear')->name('crear_permiso');

//Enrutamiento Menú
Route::get('administrador/menu', 'Administrador\MenuController@index')->name('menu');
Route::get('administrador/menu/crear', 'Administrador\MenuController@crear')->name('crear_menu');
Route::post('administrador/menu', 'Administrador\MenuController@guardar')->name('guardar_menu');


Route::get('permiso/{nombre}', 'PermisoController@index');
