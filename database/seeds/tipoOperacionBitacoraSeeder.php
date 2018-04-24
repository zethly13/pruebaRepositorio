<?php

use Illuminate\Database\Seeder;

class tipoOperacionBitacoraSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        App\Tipo_operacion_bitacora::create([

			'operacion_bitacora' => 'INGRESO SISTEMA',
			
         ]);
         App\Tipo_operacion_bitacora::create([

			'operacion_bitacora' => 'SALIR DEL SISTEMA',
			
         ]);
          App\Tipo_operacion_bitacora::create([

			'operacion_bitacora' => 'USUARIO NUEVO',
			
         ]);
           App\Tipo_operacion_bitacora::create([

			'operacion_bitacora' => 'USUARIO MODIFICACION',
			
         ]);
            App\Tipo_operacion_bitacora::create([

			'operacion_bitacora' => 'USUARIO ELIMINAR',
			
         ]);
    }
}
