<?php

namespace Database\Seeders;

use Illuminate\Database\Seeder;
use Illuminate\Support\Facades\DB;
use App\Models\User; // Add this line to use the User model

class UsersProfileSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        // Assuming you have a User model
        $users = User::all(); // Change this line to use the User model

        foreach ($users as $user) {
            // Fix the condition using where method
            if ($user->role !== 'customer') {
                DB::table('users_profiles')->insert([
                    'user_id' => $user->id,
                    'name' => $user->name, // or generate a random name if needed
                    'email' => $user->email,
                    'phone' => '1234567890', // replace with a valid phone number
                    'address' => '123 Street, City',
                    'image' => '', // replace with a default image or set it to null
                    'created_at' => now(),
                    'updated_at' => now(),
                ]);
            }
        }
    }
}