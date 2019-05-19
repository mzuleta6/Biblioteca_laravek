<?php

use Illuminate\Database\Seeder;
use App\Models\Libro;

class LibroTableSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        factory(Libro::class)->times(10)->create();
    }
}
