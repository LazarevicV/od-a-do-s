<?php

namespace Database\Seeders;

use App\Models\BlogCategory;
use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;

class BlogCategorySeeder extends Seeder
{
    /**
     * Run the database seeds.
     */
    public function run(): void
    {
        $blogCategory = new BlogCategory();
        $blogCategory->naziv = 'Упутства';
        $blogCategory->save();

        $blogCategory = new BlogCategory();
        $blogCategory->naziv = 'Занимљивости';
        $blogCategory->save();

        $blogCategory = new BlogCategory();
        $blogCategory->naziv = 'Ресурси';
        $blogCategory->save();
    }
}
