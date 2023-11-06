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

        return [
            'blog_category_id' => $this->faker->numberBetween(1, 5), // Adjust the range as needed
            'heading' => $faker->sentence,
            'content' => $faker->paragraph,
            'image' => $faker->imageUrl(),
            'creator' => $faker->name,
        ];
    }
}