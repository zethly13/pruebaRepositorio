<?php

use Illuminate\Database\Seeder;

class usuarioEmailSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        factory(App\Usuario_email::class, 50)->create();
    }
}
