<?php

use Illuminate\Database\Seeder;

class usuarioTelefonoSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        factory(App\Usuario_telefono::class, 15)->create();
    }
}
