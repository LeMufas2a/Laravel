<?php

namespace Database\Seeders;

use Illuminate\Database\Seeder;
use Illuminate\Support\Facades\DB;

class ImageSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        DB::table('images')->insert([
            'nom' => 'Daubie',
            'path'=> 'SaidMaktamucht.url',
            'description'=> 'Je vais te mettre des caractères dans ton .env'
        ]);
    }
}
