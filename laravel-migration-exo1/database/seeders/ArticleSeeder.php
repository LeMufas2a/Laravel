<?php

namespace Database\Seeders;

use Illuminate\Database\Seeder;
use Illuminate\Support\Facades\DB;

class ArticleSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        DB::table('articles')->insert([
            "auteur" => "LesChnaps"  ,
            "date" => "2020-10-11",
            "commentaire" => "Très bon Auteur et texte",
        ]);
        DB::table('articles')->insert([
            "auteur" => "Mufasa"  ,
            "date" => "2019-09-10",
            "commentaire" => "Très bon Auteur et texte",
        ]);
        DB::table('articles')->insert([
            "auteur" => "Baci"  ,
            "date" => "2020-10-10",
            "commentaire" => "Très bon Auteur et texte",
        ]);
       
        DB::table('articles')->insert([
            "auteur" => "Fondant"  ,
            "date" => "2020-10-11",
            "commentaire" => "Très bon Auteur et texte",
        ]);
    }
}
