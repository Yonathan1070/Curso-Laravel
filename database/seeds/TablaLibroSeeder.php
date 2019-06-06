<?php

use Illuminate\Database\Seeder;
use App\Models\Libro;

class TablaLibroSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        factory(Libro::class)->times(5)->create();
    }
}
