<?php

namespace Database\Seeders;

// use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;
use Illuminate\Support\Facades\DB;

class DatabaseSeeder extends Seeder
{
    /**
     * Seed the application's database.
     */
    public function run(): void
    {
        $this->call([
            AlatiSeeder::class,
        ]);
         // Seed podaci za resurse
         DB::table('resurs')->insert([
            'naziv' => 'Primer resursa 1',
            'opis' => 'Ovo je opis resursa 1',
            'link' => 'http://primer-linka-1.com',
            'objavljen' => true,
        ]);

        DB::table('resurs')->insert([
            'naziv' => 'Primer resursa 2',
            'opis' => 'Ovo je opis resursa 2',
            'link' => 'http://primer-linka-2.com',
            'objavljen' => false,
        ]);

        // Seed podaci za blogove
        DB::table('blogs')->insert([
            'naslov' => 'Primer bloga 1',
            'sadrzaj' => 'Ovo je sadržaj bloga 1',
            'kategorija' => 'Tehnologija',
            'slika' => 'slika1.jpg',
            'objavljen' => true,
            'istaknut' => true,
        ]);

        DB::table('blogs')->insert([
            'naslov' => 'Primer bloga 2',
            'sadrzaj' => 'Ovo je sadržaj bloga 2',
            'kategorija' => 'Recepti',
            'slika' => 'slika2.jpg',
            'objavljen' => false,
            'istaknut' => false,
        ]);

        // Seed podaci za korisnike
        DB::table('users')->insert([
            'ime_prezime' => 'John Doe',
            'nickname' => 'john_doe',
            'email' => 'john@example.com',
            'password' => bcrypt('password123'),
            'access_level' => 'admin',
        ]);

        DB::table('users')->insert([
            'email' => 'jane@example.com',
            'ime_prezime' => 'Jane Doe',
            'nickname' => 'jane_doe',
            'password' => bcrypt('password456'),
            'access_level' => 'user',
        ]);

        // Seed podaci za komentare
        DB::table('komentars')->insert([
            'sadrzaj' => 'Ovo je komentar 1',
            'objavljen' => true,
            'user_id' => 1,
            'blog_id' => 1,
        ]);

        DB::table('komentars')->insert([
            'sadrzaj' => 'Ovo je komentar 2',
            'objavljen' => false,
            'user_id' => 2,
            'blog_id' => 1,
        ]);
    }
}
