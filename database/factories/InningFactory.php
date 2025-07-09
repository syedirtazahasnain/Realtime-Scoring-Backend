<?php

namespace Database\Factories;

use Illuminate\Database\Eloquent\Factories\Factory;

/**
 * @extends \Illuminate\Database\Eloquent\Factories\Factory<\App\Models\Inning>
 */
class InningFactory extends Factory
{
    /**
     * Define the model's default state.
     *
     * @return array<string, mixed>
     */
    public function definition(): array
    {
        $match = \App\Models\Matches::factory()->create();
        return [
            'match_id' => $match->id,
            'batting_team_id' => $match->team1_id,
            'bowling_team_id' => $match->team2_id,
            'innings_number' => 1,
            'total_runs' => $this->faker->numberBetween(100, 300),
            'wickets' => $this->faker->numberBetween(0, 10),
            'overs' => $this->faker->randomFloat(1, 20, 50),
            'extras' => json_encode([
                'wides' => $this->faker->numberBetween(0, 15),
                'no_balls' => $this->faker->numberBetween(0, 5),
                'byes' => $this->faker->numberBetween(0, 10),
                'leg_byes' => $this->faker->numberBetween(0, 8),
            ]),
        ];
    }
}
