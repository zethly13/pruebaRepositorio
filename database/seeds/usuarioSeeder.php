<?php

use Illuminate\Database\Seeder;

class usuarioSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        factory(App\Usuario::class, 50)->create();
        
    }
}
