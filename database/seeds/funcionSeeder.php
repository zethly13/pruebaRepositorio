<?php 
 
use Illuminate\Database\Seeder;

class funcionSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
    	App\Funcion::create([

            'nombre_funcion'=>'Docente'
            
        ]);

        App\Funcion::create([

            'nombre_funcion'=>'Jefe de Taller'
            
        ]);

        App\Funcion::create([

            'nombre_funcion'=>'Administrador'
            
        ]);

        App\Funcion::create([

            'nombre_funcion'=>'Director de Carrera'
            
        ]);

        App\Funcion::create([

            'nombre_funcion'=>'Jefe de unidad'
            
        ]);

        App\Funcion::create([

            'nombre_funcion'=>'Coordinador'
            
        ]);

        App\Funcion::create([

            'nombre_funcion'=>'Jefe de departamento'
            
        ]);

    }
}
