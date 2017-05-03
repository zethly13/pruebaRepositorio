<?php

use Illuminate\Database\Seeder;

class subRolSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        
		App\Sub_rol::create([
			
			'nombre_sub_rol' =>'Administrasor total',
			'descripcion_sub_rol' => 'Es un administrador total',
			'id_rol' =>'1'
        	
         ]);
		App\Sub_rol::create([
			
			'nombre_sub_rol' =>'Administrador de admision',
			'descripcion_sub_rol' => 'Este es un administrador de admision',
			'id_rol' =>'2'
        	
         ]);App\Sub_rol::create([
			
			'nombre_sub_rol' =>'Docente',
			'descripcion_sub_rol' => 'Este es un docente',
			'id_rol' =>'3'
        	
         ]);App\Sub_rol::create([
			
			'nombre_sub_rol' =>'Consultor notas taller de informatica',
			'descripcion_sub_rol' => 'Este es un consultor de notas de taller de informatica',
			'id_rol' =>'4'
        	
         ]);App\Sub_rol::create([
			
			'nombre_sub_rol' =>'Defecto Visitante',
			'descripcion_sub_rol' => 'Este es un Visitante por defecto',
			'id_rol' =>'5'
        	
         ]);App\Sub_rol::create([
			
			'nombre_sub_rol' =>'Administrador parcial de informacion',
			'descripcion_sub_rol' => 'Este es un administrador parcial de la informacion',
			'id_rol' =>'6'
        	
         ]);App\Sub_rol::create([
			
			'nombre_sub_rol' =>'Revisor de fotografia',
			'descripcion_sub_rol' => 'Este es un revisor de fotografia',
			'id_rol' =>'7'
        	
         ]);


    }
}
