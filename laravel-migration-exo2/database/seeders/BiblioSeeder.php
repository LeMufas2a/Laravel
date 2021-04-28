<?php

namespace Database\Seeders;

use Illuminate\Database\Seeder;
use Illuminate\Support\Facades\DB;

class BiblioSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        DB::table('biblios')->insert([
            "name" => "livre",
            "description" => "Ceci est une description",

        ]);
        DB::table('biblios')->insert([
            "name" => "livres",
            "description" => "Ceci est une description",

        ]);
        DB::table('biblios')->insert([
            "name" => "livrette",
            "description" => "Ceci est une description",

        ]);
    }
}
