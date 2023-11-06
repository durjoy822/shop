<?php

namespace Database\Seeders;

use App\Models\Blogcategory;
use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;

class BlogCategorySeeder extends Seeder
{
    /**
     * Run the database seeds.
     */
    public function run(): void
    {
        Blogcategory::factory()->count(5)->create();

    }
}