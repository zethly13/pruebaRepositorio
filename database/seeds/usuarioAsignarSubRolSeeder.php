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
        factory(App\Usuario_asignar_sub_rol::class, 20)->create();
    }
}
