<?php

namespace Database\Factories;

use Illuminate\Database\Eloquent\Factories\Factory;

/**
 * @extends \Illuminate\Database\Eloquent\Factories\Factory<\App\Models\BattingScore>
 */
class BattingScoreFactory extends Factory
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
            'runs' => $this->faker->numberBetween(0, 150),
            'balls_faced' => $this->faker->numberBetween(0, 120),
            'fours' => $this->faker->numberBetween(0, 15),
            'sixes' => $this->faker->numberBetween(0, 8),
            'strike_rate' => $this->faker->randomFloat(2, 50, 200),
            'how_out' => $this->faker->randomElement(['bowled', 'caught', 'lbw', 'run out', 'not out']),
            'bowler_id' => function () {
                return \App\Models\User::factory()->create()->id;
            },
            'fielder_id' => function () {
                return \App\Models\User::factory()->create()->id;
            },
        ];
    }
}
