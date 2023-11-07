<?php

namespace Database\Factories;

use App\Models\Blog;
use Illuminate\Database\Eloquent\Factories\Factory;
use Faker\Factory as FakerFactory;

/**
 * @extends \Illuminate\Database\Eloquent\Factories\Factory<\App\Models\Blog>
 */
class BlogFactory extends Factory
{
    /**
     * Define the model's default state.
     *
     * @return array<string, mixed>
     */
    protected $model = Blog::class;

    public function definition(): array
    {
        $faker = FakerFactory::create(); // Create a Faker instance

        $blogImg = [
            'https://media.istockphoto.com/id/1018925188/photo/email-marketing-concept.webp?b=1&s=170667a&w=0&k=20&c=DOU292-qXcLK9rdIJVtnnikf5gxosNJ_hVd4K2WAj3Y=',
            'https://us.123rf.com/450wm/vershininphoto/vershininphoto2002/vershininphoto200202378/140131075-clock-on-wooden-table-in-the-kitchen.jpg?ver=6',
            'https://www.questionpro.com/blog/wp-content/uploads/2018/08/Computer-Security-Survey.jpg',
            'https://www.intex.in/cdn/shop/products/1_9b8014ad-124e-4742-a628-9a4c4affe617.jpg?v=1648711109',
            'https://t-mobile.scene7.com/is/image/Tmusprod/fg-phone-google-pixel8-hazel-4?ts=1696339243135&fmt=png-alpha&qlt=85,0&resMode=sharp2&op_usm=1.75,0.3,2,0&dpr=off',
            'https://encrypted-tbn0.gstatic.com/images?q=tbn:ANd9GcSKBVx_SeWg9n6FFtpj-7cTFdCQQj4Z5g4jaA&usqp=CAU',
            'https://encrypted-tbn0.gstatic.com/images?q=tbn:ANd9GcSA4DOWJd6RoHaGcg8-evF-khfIOVosTWwUMw&usqp=CAU',

        ];

        return [
            'blog_category_id' => $this->faker->numberBetween(1, 5), // Adjust the range as needed
            'heading' => $faker->sentence,
            'content' => $faker->paragraph,
            // 'image' => $faker->unique()->randomElement($blogImg),
            'image' => $faker->unique()->randomElement($blogImg),

            'creator' => $faker->name,
        ];
    }
}