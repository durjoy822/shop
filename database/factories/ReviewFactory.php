<?php

namespace Database\Factories;

use Illuminate\Database\Eloquent\Factories\Factory;
use Faker\Generator as Faker;
use Illuminate\Support\Str; // Make sure to import Str
use Illuminate\Support\Carbon; // Make sure to import Carbon
use App\Models\Review; // Import your Review model

/**
 * @extends \Illuminate\Database\Eloquent\Factories\Factory<Review>
 */
class ReviewFactory extends Factory
{
    /**
     * Define the model's default state.
     *
     * @return array<string, mixed>
     */
    public function definition(): array
    {
        return [
            'product_id' => $this->faker->numberBetween(1, 10),
            'customer_id' => $this->faker->numberBetween(1, 10), // Use Str::uuid() to generate a UUID
            'customer_name' => $this->faker->name, // Use $this->faker instead of $faker
            'customer_email' => $this->faker->unique()->safeEmail,
            'rating' => $this->faker->numberBetween(1, 5), // Remove quotes around numbers
            'review' => $this->faker->paragraph,
            'created_at' => now(),
            'updated_at' => now(),
        ];

    }
}