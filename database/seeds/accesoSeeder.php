<?php

use Illuminate\Database\Seeder;

class accesoSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        App\Acceso::create([

        	'nombre_acceso' =>'Menu usuario',
			'ruta_acceso' =>'usuarios.perfil',
			'descripcion_acceso' =>'Este es un menu usuario',
			'icono_acceso' =>'11111111.jpg',
			'defecto_acceso' => 'SI',
			'peso_acceso' =>'100'
         ]);
        App\Acceso::create([

        	'nombre_acceso' =>'Ingresar al sistema',
			'ruta_acceso' =>'usuarios.login',
			'descripcion_acceso' =>'Se puede ingresar al sistema',
			'icono_acceso' =>'2222222.jpg',
			'defecto_acceso' =>'NO',
			'peso_acceso' =>'99'
         ]);
        App\Acceso::create([

        	'nombre_acceso' =>'Administracion de usuarios',
			'ruta_acceso' =>'usuarios.index',
			'descripcion_acceso' =>'Este es menu de administracion de usuarios',
			'icono_acceso' =>'3333333.jpg',
			'defecto_acceso' =>'NO',
			'peso_acceso' =>'98'
         ]);
       
    }
}
