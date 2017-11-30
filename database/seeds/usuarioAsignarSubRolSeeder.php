<?php

use Illuminate\Database\Seeder;

class usuarioAsignarSubRolSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
    	App\Usuario_asignar_sub_rol::create([

			'cod_sis'=>'201001230',
			'fecha_inicio'=>'2000-03-10',
			'fecha_fin'=>'2020-03-10',
			'activo'=>'SI',
			'id_funcion'=>'1',
			'id_sub_rol'=>'1',
			'id_unidad'=>'1',
			'id_usuario'=>'1'

         ]);

 
        factory(App\Usuario_asignar_sub_rol::class, 20)->create();
    }
}
