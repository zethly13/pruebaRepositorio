<?php

use Illuminate\Database\Seeder;

class usuarioDireccionSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        factory(App\Usuario_direccion::class, 15)->create();
    }
}
