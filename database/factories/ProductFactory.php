<?php

namespace Database\Factories;

use App\Models\Product;
use App\Models\Category;
use Faker\Generator as Faker;
use Illuminate\Database\Eloquent\Factories\Factory;

class ProductFactory extends Factory
{
    protected $model = Product::class;

    public function definition(): array
    {
        $product_image = [
            'https://images.unsplash.com/photo-1505740420928-5e560c06d30e?auto=format&fit=crop&q=80&w=1000&ixlib=rb-4.0.3&ixid=M3wxMjA3fDB8MHxzZWFyY2h8M3x8cHJvZHVjdHxlbnwwfHwwfHx8MA%3D%3D',
            'https://us.123rf.com/450wm/vershininphoto/vershininphoto2002/vershininphoto200202378/140131075-clock-on-wooden-table-in-the-kitchen.jpg?ver=6',
            'https://www.intex.in/cdn/shop/products/1_9b8014ad-124e-4742-a628-9a4c4affe617.jpg?v=1648711109',
            'https://t-mobile.scene7.com/is/image/Tmusprod/fg-phone-google-pixel8-hazel-4?ts=1696339243135&fmt=png-alpha&qlt=85,0&resMode=sharp2&op_usm=1.75,0.3,2,0&dpr=off',
            'https://m.media-amazon.com/images/I/71jIfDWFmEL.jpg',
            'https://encrypted-tbn0.gstatic.com/images?q=tbn:ANd9GcSA4DOWJd6RoHaGcg8-evF-khfIOVosTWwUMw&usqp=CAU',
            'https://static-01.daraz.com.bd/p/2da1b422207948120728834151d43610.jpg_188x188.jpg_.webp',
            'https://static-01.daraz.com.bd/p/7757636363ff2422212119ce38e7c025.jpg_188x188.jpg_.webp',
            'https://static-01.daraz.com.bd/p/b6dadfee5f9d38260285b2f65006a2e4.jpg_188x188.jpg_.webp',
            'https://static-01.daraz.com.bd/p/f887d3133e1ce569b28be6c84a76e3c8.jpg_188x188.jpg_.webp',
        ];
        $name = [
            'Router',
            'Samsung s22 ultra',
            'Music player',
            'Web fun G-100',
            'Table lamp',
            'Hair tremer',
            'Table watch',
            'Head phone',
            'Bag',
            'Soney tv',
        ];
        return [
            'category_id' => $this->faker->numberBetween(1, 5), // Adjust the range as needed
            'sub_category_id' => $this->faker->numberBetween(1, 5),
            'brand_id' => $this->faker->numberBetween(1, 5),
            'unit_id' => $this->faker->numberBetween(1, 2),
            'name' => $this->faker->unique()->randomElement($name),
            'code' => $this->faker->unique()->ean8, // Generate a unique code
            'short_description' => $this->faker->text,
            'long_description' => $this->faker->paragraph,
            'regular_price' => $this->faker->numberBetween(10, 1000),
            'selling_price' => $this->faker->numberBetween(5, 500),
            'discount' => $this->faker->numberBetween(0, 50),
            'stock_amount' => $this->faker->numberBetween(0, 1000),
            'image' => $this->faker->unique()->randomElement($product_image),
            'status' => $this->faker->randomElement(['Public', 'Privet']),
            'hit_count' => $this->faker->numberBetween(0, 1000),
            'sales_count' => $this->faker->numberBetween(0, 1000),
        ];
    }
}