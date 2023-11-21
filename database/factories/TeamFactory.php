<?php

namespace Database\Factories;

use App\Models\Team;
use Illuminate\Database\Eloquent\Factories\Factory;
use Faker\Generator as Faker;

/**
 * @extends \Illuminate\Database\Eloquent\Factories\Factory<\App\Models\Team>
 */
class TeamFactory extends Factory
{
    /**
     * Define the model's default state.
     *
     * @return array<string, mixed>
     */
    protected $model = Team::class;

    public function definition(): array
    {
        $positions = ['Manager', 'Developer', 'Designer', 'Marketing'];

        return [
            'name' => $this->faker->name,
            'position' => $this->faker->unique()->randomElement($positions),
            'image' => $this->faker->imageUrl(),
            'facebook' => $this->faker->userName,
            'twitter' => $this->faker->userName,
            'whats_app' => $this->faker->phoneNumber,
        ];
    }
}