<?php

namespace Database\Seeders;

use Illuminate\Database\Seeder;
use Illuminate\Support\Facades\DB;

class FactSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        
        DB::table('facts')->insert([
            'icone' => 'icofont-simple-smile',
            'chiffre'=> random_int(0, 500),
            'texte' => '<b>Happy Mufasa</b> je suis un bold'
        ]);
    }
}
