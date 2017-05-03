<?php

use Illuminate\Database\Seeder;

class unidadSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        factory(App\Unidad::class, 20)->create();
    }
}
