<?php

namespace Database\Seeders;

// use Illuminate\Database\Console\Seeds\WithoutModelEvents;

use Illuminate\Database\Seeder;

class DatabaseSeeder extends Seeder
{
    /**
     * Seed the application's database.
     */
    public function run(): void
    {
        $this->call([
            CategorySeeder::class,
            UserSeeder::class,
            SubcategorySeeder::class,
            UnitSeeder::class,
            RolePermissionSeeder::class,
            BrandSeeder::class,
            ProductSeeder::class,
            BlogSeeder::class,
            BlogCategorySeeder::class,
            ImagegallerySeeder::class,
            SettingSeeder::class,
            ReviewSeeder::class,
            UsersProfileSeeder::class,
            TeamSeeder::class,
            AboutUsSeeder::class,

        ]);



        // \App\Models\User::factory(10)->create();

        // \App\Models\User::factory()->create([
        //     'name' => 'Test User',
        //     'email' => 'test@example.com',
        // ]);
    }
}