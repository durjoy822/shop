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
        $teamMember=[
            'https://previews.123rf.com/images/dolgachov/dolgachov1910/dolgachov191000475/130919412-business-people-and-corporate-concept-smiling-indian-businessman-over-grey-background.jpg',
            'https://img.freepik.com/free-photo/cheerful-young-caucasian-businessman_171337-727.jpg',
            'https://img.freepik.com/free-photo/elegant-businessman-office_155003-9641.jpg',
            'https://st2.depositphotos.com/1006611/11947/i/950/depositphotos_119473732-stock-photo-portrait-of-a-indian-business.jpg',
        ];
        $positions = ['Manager', 'Developer', 'Designer', 'Marketing'];

        return [
            'name' => $this->faker->name,
            'position' => $this->faker->unique()->randomElement($positions),
            'image' => $this->faker->unique()->randomElement($teamMember),
            'facebook' => $this->faker->userName,
            'twitter' => $this->faker->userName,
            'whats_app' => $this->faker->phoneNumber,
        ];
    }
}
