<?php

namespace Database\Seeders;

// use Illuminate\Database\Console\Seeds\WithoutModelEvents;

use App\Models\BlogCategory;
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
            BlogCategorySeeder::class,
            BlogSeeder::class,
            AlatSeeder::class,
            UserSeeder::class,
            KomentarSeeder::class,
            KontaktSeeder::class,
        ]);
    }
}
