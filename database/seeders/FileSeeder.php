<?php

namespace Database\Seeders;

use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;
use Illuminate\Support\Facades\DB;

class FileSeeder extends Seeder
{
    /**
     * Run the database seeds.
     */
    public function run(): void
    {
        DB::table('files')->insert([

            ['naziv'=> 'EtarRNIDS-otf.zip', 'font_id'=> 1],

            ['naziv'=> 'EtarRNIDS-woff2.zip', 'font_id'=> 1],

            ['naziv'=> 'LingvaRNIDS-otf.zip', 'font_id'=> 2],

            ['naziv'=> 'LingvaRNIDS-woff2.zip', 'font_id'=> 2],

            ['naziv'=> 'OrtoRNIDS-otf.zip', 'font_id'=> 3],

            ['naziv'=> 'OrtoRNIDS-woff2.zip', 'font_id'=> 3],

            ['naziv'=> 'ArealRNIDS-otf.zip', 'font_id'=> 4],

            ['naziv'=> 'ArealRNIDS-woff2.zip', 'font_id'=> 4],

            ['naziv'=> 'Optina-otf.zip', 'font_id'=> 5],

            ['naziv'=> 'Optina-woff2.zip', 'font_id'=> 5],

            ['naziv'=> 'Optina-VF.zip', 'font_id'=> 5],
        ]);
    }
}
