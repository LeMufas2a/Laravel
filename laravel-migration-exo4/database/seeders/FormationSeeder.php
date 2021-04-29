<?php

namespace Database\Seeders;

use Illuminate\Database\Seeder;
use Illuminate\Support\Facades\DB;

class FormationSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        DB::table("formations")->insert([
            "nom" => "Full Stack Web Developper",
            "description" => "Ceci est une description"
        ]);
        DB::table("formations")->insert([
            "nom" => "Full Stack Web Developper",
            "description" => "Ceci est une description"
        ]);
        DB::table("formations")->insert([
            "nom" => "Full Stack Web Developper",
            "description" => "Ceci est une description"
        ]);
        DB::table("formations")->insert([
            "nom" => "Full Stack Web Developper",
            "description" => "Ceci est une description"
        ]);
        DB::table("formations")->insert([
            "nom" => "Full Stack Web Developper",
            "description" => "Ceci est une description"
        ]);
        DB::table("formations")->insert([
            "nom" => "Full Stack Web Developper",
            "description" => "Ceci est une description"
        ]);
    }
}
