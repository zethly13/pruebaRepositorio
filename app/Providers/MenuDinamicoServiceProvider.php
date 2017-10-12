<?php

namespace App\Providers;

use Illuminate\Support\ServiceProvider;
use App\Usuario; 
use Auth;
class MenuDinamicoServiceProvider extends ServiceProvider
{
    /**
     * Bootstrap the application services.
     *
     * @return void
     */
    public function boot()
    {
        view()->composer('layout.navegacion',function($view)
        {
            //$view->with('subAccesos', Usuario::join('usuarios','usuarios.id','=','usuario_asignar_sub_roles.id_usuario')->join('usuario_asignar_sub_roles','usuario_asignar_sub_roles.id_sub_rol','=','sub_roles.id')->join('sub_roles','sub_roles.id','=','acceso_sub_roles.id_sub_rol')->join('acceso_sub_roles','acceso_sub_roles.id_sub_acceso','=','sub_accesos.id')->get());
            $view->with('subAccesosUsuario', Usuario::join('usuario_asignar_sub_roles','usuario_asignar_sub_roles.id_usuario','=','usuarios.id')->join('sub_roles','sub_roles.id','=','usuario_asignar_sub_roles.id_sub_rol')->join('acceso_sub_roles','acceso_sub_roles.id_sub_rol','=','sub_roles.id')->join('sub_accesos','sub_accesos.id','=','acceso_sub_roles.id_sub_acceso')->join('accesos','accesos.id','=','sub_accesos.id_acceso')->where('usuarios.id', '=',Auth::user()->id)->where('usuario_asignar_sub_roles.activo','SI')->select('accesos.id as id_acceso','accesos.nombre_acceso','sub_accesos.id as id_sub_acceso','sub_accesos.nombre_sub_acceso')->groupby('sub_accesos.id')->get());
        });
    }

    /**
     * Register the application services.
     *
     * @return void
     */
    public function register()
    {
        //
    }
}
