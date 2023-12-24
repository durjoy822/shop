<?php

namespace Database\Seeders;

use App\Models\User; // Assuming your User model is in the App\Models namespace
use Illuminate\Database\Seeder;
use Illuminate\Support\Facades\DB;

class CustomerProfileSeeder extends Seeder
{
    /**
     * Run the database seeds.
     */
    public function run(): void
    {
        // Assuming you have a User model
        $customers = User::all(); // Change this line to use the User model

        foreach ($customers as $customer) {
            // Fix the condition using where method
            if ($customer->role == 'customer') {
                DB::table('customer_profiles')->insert([
                    'customer_id' => $customer->id,
                    'name' => $customer->name, // or generate a random name if needed
                    'email' => $customer->email,
                    'phone' => '987-654-3210',
                    'country' => 'Canada',
                    'state' => 'Ontario',
                    'zip' => 'M5V 1A1',
                    'nid' => '987654321',
                    'address' => '456 Oak St, Unit 8',
                    'image' => '',
                    'created_at' => now(),
                    'updated_at' => now(),
                ]);
            }
        }
    }
}
