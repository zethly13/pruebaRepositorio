<?php

use Illuminate\Database\Seeder;

class paisSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        App\Pais::create([

        	'nombre_pais' => 'Bolivia',
        	'peso_pais'   => '100'

         ]);
        factory(App\Pais::class, 19)->create();
    }
}
