<?php

namespace Database\Factories;

use Illuminate\Database\Eloquent\Factories\Factory;
use Faker\Generator as Faker;
use App\Models\Subcategory;
use App\Models\Category;

/**
 * @extends \Illuminate\Database\Eloquent\Factories\Factory<\App\Models\Model>
 */
class SubcategoryFactory extends Factory
{
    protected $model = Subcategory::class;

    /**
     * Define the model's default state.
     *
     * @return array<string, mixed>
     */
    public function definition(): array
    {
        // Get a random category ID
        $category_id = Category::inRandomOrder()->first()->id;
        $subcategory = $this->faker->randomElement([
            'Bed',
            'Electronic light',
            'Brand watches',
            'Fan',
            'Samsung',
        ]);

        return [
            'category_id' => $category_id,
            'name' => $subcategory,
        ];
    }
}
