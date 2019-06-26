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
Route::post('administrador/menu/guardar-orden', 'Administrador\MenuController@guardarOrden')->name('guardar_orden');

//Enrutamiento Rol
Route::get('administrador/rol', 'Administrador\RolController@index')->name('rol');
Route::get('administrador/rol/crear', 'Administrador\RolController@crear')->name('crear_rol');
Route::get('administrador/rol/{id}/editar', 'Administrador\RolController@editar')->name('editar_rol');
Route::post('administrador/rol', 'Administrador\RolController@guardar')->name('guardar_rol');
Route::put('administrador/rol/{id}', 'Administrador\RolController@actualizar')->name('actualizar_rol');
Route::delete('administrador/rol/{id}', 'Administrador\RolController@eliminar')->name('eliminar_rol');

Route::get('permiso/{nombre}', 'PermisoController@index');
