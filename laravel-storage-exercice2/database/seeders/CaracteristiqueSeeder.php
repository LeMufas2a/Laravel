<?php

namespace Database\Seeders;

use Illuminate\Database\Seeder;
use Illuminate\Support\Facades\DB;

class CaracteristiqueSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        DB::table('caracteristiques')->insert([
            'nom' => 'LeshMuf',
            'chiffre' => random_int(0, 1000),
            'icone' => 'Ceci est une icone'
        ]);
    }
}
