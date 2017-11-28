<?php
 
use Illuminate\Database\Seeder;

class gestionSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        factory(App\Gestion::class, 20)->create();
    }
}
