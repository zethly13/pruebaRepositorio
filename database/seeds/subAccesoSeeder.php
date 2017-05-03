<?php

use Illuminate\Database\Seeder;

class subAccesoSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        App\Sub_acceso::create([

        	'nombre_sub_acceso' =>'Bitacora de usuario',
			'ruta_sub_acceso' =>'/index.php',
			'descripcion_sub_acceso' =>'Este es una bitacora de usuario',
			'icono_sub_acceso' =>'0000000.jpg',
			'defecto_sub_acceso' =>'SI',
			'peso_sub_acceso' =>'100',
			'id_acceso' => '1'
         ]);
        App\Sub_acceso::create([

        	'nombre_sub_acceso' =>'Informacion de usuario',
			'ruta_sub_acceso' =>'/index.php',
			'descripcion_sub_acceso' =>'Este es informacion de usuario',
			'icono_sub_acceso' =>'111111.jpg',
			'defecto_sub_acceso' =>'SI',
			'peso_sub_acceso' =>'99',
			 'id_acceso' => '1'
         ]);
        App\Sub_acceso::create([

        	'nombre_sub_acceso' =>'Salir del sistema',
			'ruta_sub_acceso' =>'/index.php',
			'descripcion_sub_acceso' =>'Salir del sistema',
			'icono_sub_acceso' =>'222222.jpg',
			'defecto_sub_acceso' =>'SI',
			'peso_sub_acceso' =>'98',
			'id_acceso' => '1'
         ]);
        App\Sub_acceso::create([

        	'nombre_sub_acceso' =>'Ingresar al sistema',
			'ruta_sub_acceso' =>'/index.php',
			'descripcion_sub_acceso' =>'Ingresar al sistema',
			'icono_sub_acceso' =>'333333.jpg',
			'defecto_sub_acceso' =>'NO',
			'peso_sub_acceso' =>'97',
			'id_acceso' => '2'
         ]);
        App\Sub_acceso::create([

        	'nombre_sub_acceso' =>'Nuevo usuario',
			'ruta_sub_acceso' =>'/index.php',
			'descripcion_sub_acceso' =>'Se puede añadir usuario',
			'icono_sub_acceso' =>'444444.jpg',
			'defecto_sub_acceso' =>'NO',
			'peso_sub_acceso' =>'96',
			'id_acceso' => '3'
         ]);
        App\Sub_acceso::create([

        	'nombre_sub_acceso' =>'Ver informacion de usuario',
			'ruta_sub_acceso' =>'/index.php',
			'descripcion_sub_acceso' =>'Ver informacion',
			'icono_sub_acceso' =>'5555555.jpg',
			'defecto_sub_acceso' =>'NO',
			'peso_sub_acceso' =>'95',
			'id_acceso' => '3'
         ]);
        App\Sub_acceso::create([

        	'nombre_sub_acceso' =>'Editar informacion de usuario',
			'ruta_sub_acceso' =>'/index.php',
			'descripcion_sub_acceso' =>'Se puede editar informacion',
			'icono_sub_acceso' =>'666666.jpg',
			'defecto_sub_acceso' =>'NO',
			'peso_sub_acceso' =>'94',
			'id_acceso' => '3'
         ]);
        App\Sub_acceso::create([

        	'nombre_sub_acceso' =>'Ver informacion usuario',
			'ruta_sub_acceso' =>'/index.php',
			'descripcion_sub_acceso' =>'Ver informacion',
			'icono_sub_acceso' =>'777777.jpg',
			'defecto_sub_acceso' =>'NO',
			'peso_sub_acceso' =>'93',
			'id_acceso' => '3'
         ]);
        App\Sub_acceso::create([

        	'nombre_sub_acceso' =>'Revisar fotografias usuarios',
			'ruta_sub_acceso' =>'/index.php',
			'descripcion_sub_acceso' =>'Revisar fotografias',
			'icono_sub_acceso' =>'888888.jpg',
			'defecto_sub_acceso' =>'NO',
			'peso_sub_acceso' =>'92',
			'id_acceso' => '3'
         ]);

    }
}
