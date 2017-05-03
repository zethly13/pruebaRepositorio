<?php

use Illuminate\Database\Seeder;
use Illuminate\Database\Eloquent\Model;

class rolSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
    	App\Rol::create([

        	'nombre_rol' => 'Administrador del sistema',
			'descripcion_rol' => 'Es un Administrador del sistema'
         ]);
        App\Rol::create([

        	'nombre_rol' => 'Administrativo',
			'descripcion_rol' => 'Es un administrativo'
         ]);
        App\Rol::create([

        	'nombre_rol' => 'Academico',
			'descripcion_rol' => 'Es un academico'
         ]);
        App\Rol::create([

        	'nombre_rol' => 'Estudiante',
			'descripcion_rol' => 'Es un estudiante'
         ]);
        App\Rol::create([

        	'nombre_rol' => 'Visitantes',
			'descripcion_rol' => 'Es un visitante'
         ]);
        App\Rol::create([

        	'nombre_rol' => 'Propedeutico',
			'descripcion_rol' => 'Es un Propedeutico'
         ]);
        App\Rol::create([

        	'nombre_rol' => 'Oficina educativo',
			'descripcion_rol' => 'Es de oficina educativa'
         ]);

    }
}
