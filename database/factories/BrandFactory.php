<?php

namespace Database\Factories;

use App\Models\Brand;
use Illuminate\Database\Eloquent\Factories\Factory;

/**
 * @extends \Illuminate\Database\Eloquent\Factories\Factory<\App\Models\Model>
 */
class BrandFactory extends Factory
{
    protected $model = Brand::class;

    /**
     * Define the model's default state.
     *
     * @return array<string, mixed>
     */
    public function definition(): array
    {
        $brands = [
            [
                'name'  => 'Soney',
                'image' => 'https://encrypted-tbn0.gstatic.com/images?q=tbn:ANd9GcT-VmWOQT7W0nGDzQLTTi1Qg6WZcXQK1SB7vykynPHajpd-uByhCYY7o9OjNGb6dMFOTkc&usqp=CAU',
            ],
            [
                'name'  => 'Home Goods',
                'image' => 'https://www.mytwintiers.com/wp-content/uploads/sites/89/2019/01/homegoods3-1200x750_1546480805322_66414360_ver1.0.png',
            ],
            [
                'name'  => 'Rolex',
                'image' => 'https://i.pinimg.com/originals/13/8c/fe/138cfe29ca2076fec5b0664482b0830e.jpg',
            ],
            [
                'name'  => 'Kitchen Aid',
                'image' => 'https://www.wdix.co.uk/media/1995/kitchenaid.jpg',
            ],
            [
                'name'  => 'Apple',
                'image' => 'https://www.tailorbrands.com/wp-content/uploads/2021/01/apple_logo_1977.jpg',
            ],

            [
                'name'  => 'Nike',
                'image' => 'https://encrypted-tbn0.gstatic.com/images?q=tbn:ANd9GcQrPmlYuNd-l9lVYABCPnxihddD0Bm7myaSrS7Hx_TQIOFkVqb03LYrFbhXX_zoid1aIQA&usqp=CAU',
            ],
            [
                'name'  => 'Adidas',
                'image' => 'https://cdn.britannica.com/94/193794-050-0FB7060D/Adidas-logo.jpg',
            ],
            [
                'name'  => 'Honda',
                'image' => 'https://encrypted-tbn0.gstatic.com/images?q=tbn:ANd9GcQ3R89rayABEasn_GY_ZP8jAqHo5albfSaee5PNvcaR7uG1aFa8j6SM-lJz_ExWWCxxBC0&usqp=CAU',
            ],
            [
                'name'  => 'General Electric',
                'image' => 'https://c8.alamy.com/comp/D455PW/general-electric-logo-as-an-app-icon-clipping-path-included-D455PW.jpg',
            ],
            [
                'name'  => 'Levis',
                'image' => 'https://logoeps.com/wp-content/uploads/2013/03/levi-strauss-co-vector-logo.png',
            ],
        ];


        $brand  = $this->faker->unique()->randomElement($brands);

        return $brand;
    }

}