<?php

namespace Database\Seeders;

use App\Models\User;
use Illuminate\Support\Str;
use Illuminate\Database\Seeder;
use Illuminate\Database\Console\Seeds\WithoutModelEvents;

class UserSeeder extends Seeder
{
    /**
     * Run the database seeds.
     */
    public function run(): void
    {
        User::create([
            'name' => 'Nayem',
            'email' => 'nrdurjoy822@gmail.com',
            'password' => bcrypt('12345678'),
            'remember_token' =>Str::random(10),
        ]);
    }
}