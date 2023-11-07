<?php

namespace Database\Factories;

use App\Models\BlogCategory;
use Illuminate\Database\Eloquent\Factories\Factory;

class BlogCategoryFactory extends Factory
{
    /**
     * Define the model's default state.
     *
     * @return array
     */
    protected $model = BlogCategory::class;

    // Define an array of predefined names
    protected $names = [
        'Technology',
        'Life',
        'Phone',
        'Product',
        'Smartphones',
    ];

    // Keep track of the current index to select names sequentially
    protected $currentIndex = 0;

    public function definition(): array
    {
        // Get the current name from the array
        $name = $this->names[$this->currentIndex];

        // Increment the index or reset it when we reach the end of the array
        $this->currentIndex = ($this->currentIndex + 1) % count($this->names);

        return [
            'name' => $name,
        ];
    }
}