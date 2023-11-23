<?php

namespace Database\Seeders;

use Illuminate\Database\Seeder;
use Illuminate\Support\Facades\DB;

class AboutUsSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        // Dummy data for the "about_us" table
        $aboutUsData = [
            [
                'heading' => 'ShopGrids - Your Trusted & Reliable Partner.',
                'content' => 'Lorem ipsum dolor sit amet, consectetur adipiscing elit. Aliquam id purus at risus pellentesque faucibus a quis eros. In eu fermentum leo. Integer ut eros lacus. Proin ut accumsan leo. Morbi vitae est eget dolor consequat aliquam eget quis dolor. Mauris rutrum fermentum erat, at euismod lorem pharetra nec. Duis erat lectus, ultrices euismod sagittis.
                            Lorem ipsum dolor sit amet, consectetur adipisicing elit, sed do eius mod tempor incididunt ut labore et dolore magna aliqua. Ut enim ad minim veniam, quis nostrud exercitation ullamco laboris nisi aliquip ex ea commodo consequat.',
                'image' => 'https://cdn3.vectorstock.com/i/1000x1000/35/72/business-buildings-sign-vector-3053572.jpg',
                'created_at' => now(),
                'updated_at' => now(),
            ],
            [
                'heading' => 'ShopGrids - Your Trusted & Reliable Partner.',
                'content' => 'Lorem ipsum dolor sit amet, consectetur adipiscing elit. Aliquam id purus at risus pellentesque faucibus a quis eros. In eu fermentum leo. Integer ut eros lacus. Proin ut accumsan leo. Morbi vitae est eget dolor consequat aliquam eget quis dolor. Mauris rutrum fermentum erat, at euismod lorem pharetra nec. Duis erat lectus, ultrices euismod sagittis.
                                Lorem ipsum dolor sit amet, consectetur adipisicing elit, sed do eius mod tempor incididunt ut labore et dolore magna aliqua. Ut enim ad minim veniam, quis nostrud exercitation ullamco laboris nisi aliquip ex ea commodo consequat.',
                'image' => 'https://cdn4.vectorstock.com/i/1000x1000/66/18/corporate-business-building-logo-graphic-style-vector-27726618.jpg',
                'created_at' => now(),
                'updated_at' => now(),
            ],
            [
                'heading' => 'ShopGrids - Your Trusted & Reliable Partner.',
                'content' => 'Lorem ipsum dolor sit amet, consectetur adipiscing elit. Aliquam id purus at risus pellentesque faucibus a quis eros. In eu fermentum leo. Integer ut eros lacus. Proin ut accumsan leo. Morbi vitae est eget dolor consequat aliquam eget quis dolor. Mauris rutrum fermentum erat, at euismod lorem pharetra nec. Duis erat lectus, ultrices euismod sagittis.
                                Lorem ipsum dolor sit amet, consectetur adipisicing elit, sed do eius mod tempor incididunt ut labore et dolore magna aliqua. Ut enim ad minim veniam, quis nostrud exercitation ullamco laboris nisi aliquip ex ea commodo consequat.',
                'image' => 'https://encrypted-tbn0.gstatic.com/images?q=tbn:ANd9GcTmCWFs73NTmzD7d3OBSZ68vI-yQ4lyTiUeolLomcCiijJBVC4C4kipMYE_f-tYc6DoiDs&usqp=CAU',
                'created_at' => now(),
                'updated_at' => now(),
            ],
            // Add more data as needed
        ];

        // Insert data into the "about_us" table
        DB::table('about_us')->insert($aboutUsData);
    }
}