<?php

namespace Database\Seeders;

use Illuminate\Database\Seeder;
use Illuminate\Support\Facades\DB;

class AnimalSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        DB::table('animaux')->insert([
            "nom" => "serpent"  ,
            "age" => "7",
            "espece" => "Reptile",
            "ddn" => "2014-02-07" ,
        ]);
        DB::table('animaux')->insert([
            "nom" => "souris"  ,
            "age" => "1",
            "espece" => "Mammifères",
            "ddn" => "2020-03-12" ,
        ]);
        DB::table('animaux')->insert([
            "nom" => "poisson"  ,
            "age" => "2",
            "espece" => "Mammifères",
            "ddn" => "2019-05-14" ,
        ]);
    }
}
