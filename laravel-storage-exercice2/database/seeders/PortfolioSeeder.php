<?php

namespace Database\Seeders;

use Illuminate\Database\Seeder;
use Illuminate\Support\Facades\DB;

class PortfolioSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        DB::table('portfolios')->insert([
            'nom'=>'Mufasa',
            'image'=>'Insérez Image',
            'categorie'=>'Selection',
            'description'=>'description'
        ]);
    }
}
