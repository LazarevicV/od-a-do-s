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
            ResursSeeder::class,
            FontSeeder::class,
            FileSeeder::class,
            VideoTutorijalSeeder::class,
            BlogSeeder::class,
        ]);

        // Seed podaci za blogove

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
    }
}
