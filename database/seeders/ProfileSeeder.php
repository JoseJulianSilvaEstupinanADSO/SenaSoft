<?php

namespace Database\Seeders;

use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;
use Illuminate\Support\Facades\DB;

class ProfileSeeder extends Seeder
{
    /**
     * Run the database seeds.
     */
    public function run(): void
    {
        DB::table('profiles')->insert([
            'name' => 'Jhon Carreño',
            'documento' => '1099737501',
            'telefono' => '3186040819',
            'user_id' => 1
        ]);
        DB::table('profiles')->insert([
            'name' => 'Jhon fredy',
            'documento' => '1099737502',
            'telefono' => '3186040819',
            'user_id' => 3
        ]);
        DB::table('profiles')->insert([
            'name' => 'Jose Julian',
            'documento' => '1099737503',
            'telefono' => '3186040819',
            'user_id' => 2
        ]);
    }
}
