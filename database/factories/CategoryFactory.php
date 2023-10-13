<?php

namespace Database\Factories;

use App\Models\Category;
use Illuminate\Database\Eloquent\Factories\Factory;

/**
 * @extends \Illuminate\Database\Eloquent\Factories\Factory<\App\Models\Category>
 */
class CategoryFactory extends Factory
{
    /**
     * Define the model's default state.
     *
     * @return array<string, mixed>
     */
    protected $model = Category::class;

    public function definition(): array
    {
        $category = [
            'Home lifestyle',
            'Electronic Accessories',
            'Watches',
            'Home Appliance',
            'Smartphones',
        ];

        $image = [
            'https://encrypted-tbn0.gstatic.com/images?q=tbn:ANd9GcQPW2co7d6ukDjRb7tFrCj5DvPtLHhnH9yydQ&usqp=CAU',
            'https://akm-img-a-in.tosshub.com/indiatoday/images/story/202207/1.jpg?VersionId=DERTLCe6NgHkjpU0HNFaIZ1gua4frndS&size=690:388',
            'https://www.schott.com/-/media/project/onex/shared/teasers/consumer-electronics/consumer-electronics_01-displays_00_720x450.jpg?rev=fe6df7a508644a7d8e294e6c294a317b',
            'https://encrypted-tbn0.gstatic.com/images?q=tbn:ANd9GcRtb94x6MUJUFwSGZWaRiPjG_uDfF_N6mNJUw&usqp=CAU',
            'https://i0.wp.com/nokiapoweruser.com/wp-content/uploads/2021/04/New-Nokia-smartphones-family-shot-2021.jpg?fit=1250%2C833&ssl=1',
        ];

        return [
            'name'  => $this->faker->unique()->randomElement($category),
            'image' => $this->faker->unique()->randomElement($image), // Remove the ->imageUrl()
        ];

    }
}
