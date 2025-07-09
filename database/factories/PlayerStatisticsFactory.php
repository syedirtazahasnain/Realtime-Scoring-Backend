<?php

namespace Database\Factories;

use Illuminate\Database\Eloquent\Factories\Factory;

/**
 * @extends \Illuminate\Database\Eloquent\Factories\Factory<\App\Models\PlayerStatistics>
 */
class PlayerStatisticsFactory extends Factory
{
    /**
     * Define the model's default state.
     *
     * @return array<string, mixed>
     */
    public function definition(): array
    {
        return [
            'player_id' => function () {
                return \App\Models\User::factory()->create()->id;
            },
            'matches_played' => $this->faker->numberBetween(5, 100),
            'runs_scored' => $this->faker->numberBetween(0, 5000),
            'wickets_taken' => $this->faker->numberBetween(0, 300),
            'catches' => $this->faker->numberBetween(0, 100),
            'stumpings' => $this->faker->numberBetween(0, 50),
            'batting_average' => $this->faker->randomFloat(2, 0, 60),
            'bowling_average' => $this->faker->randomFloat(2, 10, 40),
            'strike_rate' => $this->faker->randomFloat(2, 50, 150),
            'economy_rate' => $this->faker->randomFloat(2, 3, 8),
            'highest_score' => $this->faker->numberBetween(0, 200),
            'best_bowling_figures_wickets' => $this->faker->numberBetween(0, 7),
            'best_bowling_figures_runs' => $this->faker->numberBetween(0, 50),
        ];
    }
}
