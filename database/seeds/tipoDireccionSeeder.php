<?php 

use Illuminate\Database\Seeder;

class tipoDireccionSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        App\Tipo_direccion::create([

        	'nombre_tipo_direccion' => 'PARTICULAR', 	
         ]);

        App\Tipo_direccion::create([

        	'nombre_tipo_direccion' => 'TRABAJO',        	
         ]);

        App\Tipo_direccion::create([

        	'nombre_tipo_direccion' => 'OTRA',       	
         ]);
      
    }
}
