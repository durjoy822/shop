<?php

namespace Database\Factories;

use App\Models\Imagegallery;
use Illuminate\Database\Eloquent\Factories\Factory;

/**
 * @extends \Illuminate\Database\Eloquent\Factories\Factory<\App\Models\Imagegallery>
 */
class ImagegalleryFactory extends Factory

{
    protected $model = Imagegallery::class;
    /**
     * Define the model's default state.
     *
     * @return array<string, mixed>
     */
    public function definition(): array
    {
        return [

                'product_id' => $this->faker->unique()->randomNumber(),
                'multiple_image' => $this->faker->imageUrl(),
            ];
    }
}