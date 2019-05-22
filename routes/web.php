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
Route::get('admin/permiso', 'Admin\PermisoController@index')->name('permiso');
Route::get('admin/menu', 'Admin\MenuController@index')->name('menu');
Route::get('admin/menu/crear','Admin\MenuController@create')->name('crear_menu');
Route::post('admin/menu','Admin\MenuController@store')->name('guardar_menu');

