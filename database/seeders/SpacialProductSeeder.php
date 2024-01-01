<?php

namespace Database\Seeders;

use App\Models\SpacialProduct;
use Illuminate\Database\Seeder;
use Illuminate\Database\Console\Seeds\WithoutModelEvents;

class SpacialProductSeeder extends Seeder
{
    /**
     * Run the database seeds.
     */
    public function run(): void
    {
        SpacialProduct::factory()->count(5)->create();

    }
}