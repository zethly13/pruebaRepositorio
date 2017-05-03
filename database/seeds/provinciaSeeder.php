<?php

use Illuminate\Database\Seeder;

class provinciaSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        App\Provincia::create([

            'nombre_provincia' => 'COCHABAMBA (CERCADO)',
            'peso_provincia' => '100',
            'id_ciudad' => '1'

         ]);
        App\Provincia::create([

            'nombre_provincia' => 'SANTA CRUZ DE LA SIERRA',
            'peso_provincia' => '99',
            'id_ciudad' => '2'

         ]);
        App\Provincia::create([

            'nombre_provincia' => 'LA PAZ (CERCADO)',
            'peso_provincia' => '98',
            'id_ciudad' => '3'

         ]);
        App\Provincia::create([

            'nombre_provincia' => 'ORURO (CERCADO)',
            'peso_provincia' => '97',
            'id_ciudad' => '4'

         ]);
        App\Provincia::create([

            'nombre_provincia' => 'POTOSI (CERCADO)',
            'peso_provincia' => '96',
            'id_ciudad' => '5'

         ]);
        App\Provincia::create([

            'nombre_provincia' => 'TARIJA (CERCADO)',
            'peso_provincia' => '95',
            'id_ciudad' => '6'

         ]);
        App\Provincia::create([

            'nombre_provincia' => 'COBIJA',
            'peso_provincia' => '94',
            'id_ciudad' => '7'

         ]);
        App\Provincia::create([

            'nombre_provincia' => 'TRINIDAD',
            'peso_provincia' => '93',
            'id_ciudad' => '8'

         ]);
        App\Provincia::create([

            'nombre_provincia' => 'SUCRE',
            'peso_provincia' => '92',
            'id_ciudad' => '9'

         ]);
    }
}
