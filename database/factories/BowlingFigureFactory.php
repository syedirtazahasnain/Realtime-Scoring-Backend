<?php

namespace Database\Factories;

use Illuminate\Database\Eloquent\Factories\Factory;

/**
 * @extends \Illuminate\Database\Eloquent\Factories\Factory<\App\Models\BowlingFigure>
 */
class BowlingFigureFactory extends Factory
{
    /**
     * Define the model's default state.
     *
     * @return array<string, mixed>
     */
    public function definition(): array
    {
        return [
            'inning_id' => function () {
                return \App\Models\Inning::factory()->create()->id;
            },
            'player_id' => function () {
                return \App\Models\User::factory()->create()->id;
            },
            'overs' => $this->faker->randomFloat(1, 1, 10),
            'maidens' => $this->faker->numberBetween(0, 5),
            'runs' => $this->faker->numberBetween(0, 60),
            'wickets' => $this->faker->numberBetween(0, 6),
            'wides' => $this->faker->numberBetween(0, 8),
            'no_balls' => $this->faker->numberBetween(0, 3),
            'economy' => $this->faker->randomFloat(2, 3, 9),
        ];
    }
}
