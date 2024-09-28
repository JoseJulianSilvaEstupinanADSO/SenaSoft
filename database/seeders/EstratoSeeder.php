<?php

namespace Database\Seeders;

use Illuminate\Container\Attributes\DB;
use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;
use Illuminate\Support\Facades\DB as FacadesDB;

class EstratoSeeder extends Seeder
{
    /**
     * Run the database seeds.
     */
    public function run(): void
    {
        FacadesDB::table('estratos')->insert([
            'tipo_estrato' => 'Estrato 1',
            'descuento' => '0.1'
        ]);
        FacadesDB::table('estratos')->insert([
            'tipo_estrato' => 'Estrato 2',
            'descuento' => '0.1'
        ]);
        FacadesDB::table('estratos')->insert([
            'tipo_estrato' => 'Estrato 3',
            'descuento' => '0.05'
        ]);
        FacadesDB::table('estratos')->insert([
            'tipo_estrato' => 'Estrato 4',
            'descuento' => '0.05'
        ]);
        FacadesDB::table('estratos')->insert([
            'tipo_estrato' => 'Estrato 5',
            'descuento' => '0.0'
        ]);
        FacadesDB::table('estratos')->insert([
            'tipo_estrato' => 'Estrato 6',
            'descuento' => '0.0'
        ]);
    }
}
