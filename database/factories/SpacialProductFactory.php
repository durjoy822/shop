<?php

namespace Database\Factories;

use App\Models\SpacialProduct;
use Illuminate\Database\Eloquent\Factories\Factory;

/**
 * @extends \Illuminate\Database\Eloquent\Factories\Factory<\App\Models\SpacialProduct>
 */
class SpacialProductFactory extends Factory
{
    protected $model = SpacialProduct::class;

    /**
     * Define the model's default state.
     *
     * @return array<string, mixed>
     */
    public function definition(): array
    {
        $product_id = [
            '1',
            '2',
            '3',
            '4',
            '5',
            '6',
            '7',
            '8',
            '9',
            '10',
        ];

        return [
            'offer_name' => $this->faker->sentence,
            'product_id' => $this->faker->unique()->randomElement($product_id),
            'selling_price' => $this->faker->randomFloat(2, 10, 100),
            'starting_time' => $this->faker->dateTimeBetween('-1 week', '+1 week'),
            'ending_time' => $this->faker->dateTimeBetween('+2 weeks', '+4 weeks'),
            'status' => $this->faker->randomElement(['published', 'unpublished']),
        ];
    }
}