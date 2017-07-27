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
/*
Route::get('/', function () {
    return view('welcome');
});
*/
Route::any('/','UsuariosController@login');
Route::any('/login','UsuariosController@login')->name('usuarios.login');
Route::post('logear','UsuariosController@logear')->name('usuarios.logear');
Route::get('logout', 'UsuariosController@logout')->name('usuarios.logout');
Route::group(['middleware'=>'autentificado'], function(){
	Route::resource('roles', 'RolesController');
	Route::resource('sub_roles', 'Sub_RolesController');
	Route::resource('usuarios', 'UsuariosController');
	Route::GET('perfil', 'UsuariosController@perfil')->name('usuarios.perfil');
});
