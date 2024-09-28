<?php

namespace Database\Seeders;

use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;
use Illuminate\Support\Facades\DB;

class RegionalesSeed extends Seeder
{
    /**
     * Run the database seeds.
     */
    public function run(): void
    {
        DB::table('regionales')->insert([
            'nombre_regional' => 'Santander',
            'latitud' => "7.087501659338443",
            'longitud' => "-73.20200994022358",
            'cantidad_bicicletas' => 10
        ]);
        DB::table('regionales')->insert([
            'nombre_regional' => 'Cauca',
            'latitud' => "3.4232430686666646",
            'longitud' => "-76.52945719040304",
            'cantidad_bicicletas' => 10
        ]);
        DB::table('regionales')->insert([
            'nombre_regional' => 'Magdalena',
            'latitud' => "10.958895877978776",
            'longitud' => "-74.82869770490821",
            'cantidad_bicicletas' => 10
        ]);
    }
}
