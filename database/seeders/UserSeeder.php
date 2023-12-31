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
        User::create([
            'name' => 'Imran',
            'email' => 'imran@gmail.com',
            'password' => bcrypt('12345678'),
            'remember_token' =>Str::random(10),
        ]);
        User::create([
            'name' => 'Santo',
            'email' => 'santo@gmail.com',
            'password' => bcrypt('12345678'),
            'remember_token' =>Str::random(10),
        ]);
        User::create([
            'name' => 'Faisal',
            'email' => 'faisal@gmail.com',
            'role' => 'customer',
            'password' => bcrypt('12345678'),
            'remember_token' =>Str::random(10),
        ]);
        User::create([
            'name' => 'Noyon',
            'email' => 'noyon@gmail.com',
            'role' => 'customer',
            'password' => bcrypt('12345678'),
            'remember_token' =>Str::random(10),
        ]);
        User::create([
            'name' => 'customer',
            'email' => 'customer@gmail.com',
            'role' => 'customer',
            'password' => bcrypt('12345678'),
            'remember_token' =>Str::random(10),
        ]);
        User::create([
            'name' => 'Anik',
            'email' => 'anik@gmail.com',
            'role' => 'customer',
            'password' => bcrypt('12345678'),
            'remember_token' =>Str::random(10),
        ]);
        User::create([
            'name' => 'Akash',
            'email' => 'akash@gmail.com',
            'role' => 'customer',
            'password' => bcrypt('12345678'),
            'remember_token' =>Str::random(10),
        ]);
        User::create([
            'name' => 'Jamal',
            'email' => 'jamal@gmail.com',
            'role' => 'customer',
            'password' => bcrypt('12345678'),
            'remember_token' =>Str::random(10),
        ]);
        User::create([
            'name' => 'Polash',
            'email' => 'polash@gmail.com',
            'role' => 'customer',
            'password' => bcrypt('12345678'),
            'remember_token' =>Str::random(10),
        ]);
        User::create([
            'name' => 'Karim',
            'email' => 'karim@gmail.com',
            'role' => 'customer',
            'password' => bcrypt('12345678'),
            'remember_token' =>Str::random(10),
        ]);
    }
}