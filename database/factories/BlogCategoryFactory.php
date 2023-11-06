<?php

namespace Database\Factories;

use App\Models\BlogCategory; // Correct the namespace and class name here
use Illuminate\Database\Eloquent\Factories\Factory;

class BlogCategoryFactory extends Factory
{
    /**
     * Define the model's default state.
     *
     * @return array
     */
    protected $model = BlogCategory::class; // Correct the model class name here

    public function definition(): array
    {
        $name = [
            'Technology',
            'Life',
            'Phone',
            'Product',
            'Smartphones',
        ];
        return [
            'name' => $this->faker->randomElement($name), // Use $this->faker to generate random data
        ];
    }
}