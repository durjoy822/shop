<?php

namespace Database\Seeders;

use App\Models\Setting;
use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;

class SettingSeeder extends Seeder
{
    /**
     * Run the database seeds.
     */
    public function run(): void
    {
        Setting::create([
            'name' => 'Shop online limited  ',
            'email' => 'shop@gmail.com',
            'phone' => '(+88)01777355112',
            'address' => 'Ishwardi, Pabna, Bangladesh',
            'opening_day' => 'saturday',
            'closeing_day' => 'thursday',
            'opening_time' => '09.00 AM',
            'closeing_time' => '12.00 PM',
            'design_develop' => 'Designed and Developed SHOP ONLINE ',
            'dark_logo' => 'http://127.0.0.1:8000/website/assets/images/logo/logo.svg',
            'light_logo' => 'http://127.0.0.1:8000/website/assets/images/logo/logo.svg',
            'favicon' => 'http://127.0.0.1:8000/website/assets/images/logo/logo.svg',
        ]);
    }
}