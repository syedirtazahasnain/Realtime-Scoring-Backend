<?php

namespace Database\Factories;

use Illuminate\Database\Eloquent\Factories\Factory;

/**
 * @extends \Illuminate\Database\Eloquent\Factories\Factory<\App\Models\Matches>
 */
class MatchesFactory extends Factory
{
    /**
     * Define the model's default state.
     *
     * @return array<string, mixed>
     */
    public function definition(): array
    {
        $team1 = \App\Models\Team::factory()->create();
        $team2 = \App\Models\Team::factory()->create();
        return [
            'tournament_id' => function () {
                return \App\Models\Tournament::factory()->create()->id;
            },
            'team1_id' => $team1->id,
            'team2_id' => $team2->id,
            'match_date' => $this->faker->dateTimeBetween('now', '+1 year'),
            'venue' => $this->faker->city . ' Cricket Ground',
            'status' => $this->faker->randomElement(['upcoming', 'ongoing', 'completed']),
            'toss_winner_id' => $this->faker->randomElement([$team1->id, $team2->id]),
            'toss_decision' => $this->faker->randomElement(['bat', 'field']),
            'winner_id' => function (array $match) {
                return $match['status'] === 'completed'
                    ? $this->faker->randomElement([$match['team1_id'], $match['team2_id']])
                    : null;
            },
            'team1_score' => function (array $match) {
                return $match['status'] === 'completed'
                    ? $this->faker->numberBetween(100, 350)
                    : null;
            },
            'team1_wickets' => function (array $match) {
                return $match['status'] === 'completed'
                    ? $this->faker->numberBetween(0, 10)
                    : null;
            },
            'team1_overs' => function (array $match) {
                return $match['status'] === 'completed'
                    ? $this->faker->randomFloat(1, 20, 50)
                    : null;
            },
            'team2_score' => function (array $match) {
                return $match['status'] === 'completed'
                    ? $this->faker->numberBetween(100, 350)
                    : null;
            },
            'team2_wickets' => function (array $match) {
                return $match['status'] === 'completed'
                    ? $this->faker->numberBetween(0, 10)
                    : null;
            },
            'team2_overs' => function (array $match) {
                return $match['status'] === 'completed'
                    ? $this->faker->randomFloat(1, 20, 50)
                    : null;
            },
            'result' => function (array $match) {
                return $match['status'] === 'completed'
                    ? $this->faker->randomElement(['by runs', 'by wickets', 'tie', 'no result'])
                    : null;
            },
        ];
    }
}
