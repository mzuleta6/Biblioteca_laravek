<?php

use Illuminate\Database\Seeder;
use Illuminate\Support\Carbon;

class RolTableSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        $rols = [
            'administrador',
            'editor',
            'supervisor'
        ];
        foreach($rols as $rol){
            DB::table('rol')->insert([
                'nombre' => $rol,
                'created_at' => Carbon::now()->format('Y-m-d H:i:s')
            ]);
        }
    }
}
