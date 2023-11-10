<?php

namespace Database\Seeders;

use App\Models\Imagegallery;
use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;

class ImagegallerySeeder extends Seeder
{
    /**
     * Run the database seeds.
     */
    public function run(): void
    {
        Imagegallery::factory()->count(20)->create();

    }
}