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
Route::resource('roles', 'RolesController');
Route::resource('sub_roles', 'Sub_RolesController');
Route::resource('usuarios', 'UsuariosController');
Auth::routes();
Route::get('/login/logeo','AutenticacionController@index');
Route::get('/home', 'HomeController@index')->name('home');
