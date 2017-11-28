<?php

use Illuminate\Database\Seeder;

class usuarioSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
    	App\Usuario::create([

 
			'doc_identidad' => '7962357',
			'login' => 'admin',
			'clave' => bcrypt('admin'),
			'apellidos' => 'Granados Garcia',
			'nombres' => 'Liz',
			'sexo' => 'Femenino',
			'fecha_nac' => '1992-11-08',
			'usuario_activo' => 'SI',
			'inscribir_adm' => 'SI',
			'estilo' => 'General',
			'subir_foto' => 'SI',
			'id_estado_civil' => '1',
			'id_provincia' =>'2',
			'ciudad_expedido_doc' => '1',
			'id_tipo_doc_identidad' => '1'

         ]);
        factory(App\Usuario::class, 15)->create();
        
    }
}
