<?php

namespace Database\Seeders;

use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;

Use DB;

class VideogamesTableSeeder extends Seeder
{
    /**
     * Run the database seeds.
     */
    public function run(): void
    {
        DB::table('videogames')->insert([
            [
                'title' => 'The Legend of Zelda: Breath of the Wild',
                'genre' => 'Action-adventure',
                'platform' => 'Nintendo Switch',
            ],
        ]);
    }
}
