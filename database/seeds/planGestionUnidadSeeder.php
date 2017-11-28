<?php

use Illuminate\Database\Seeder;

class planGestionUnidadSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        factory(App\Plan_gestion_unidad::class, 20)->create();
    }
}
