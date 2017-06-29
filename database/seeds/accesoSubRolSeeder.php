<?php

use Illuminate\Database\Seeder;

class accesoSubRolSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        factory(App\Acceso_sub_rol::class, 20)->create();
    }
}
