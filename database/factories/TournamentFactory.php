<?php

namespace Database\Factories;

use App\Models\Tournament;
use Illuminate\Database\Eloquent\Factories\Factory;

/**
 * @extends \Illuminate\Database\Eloquent\Factories\Factory<\App\Models\Tournament>
 */
class TournamentFactory extends Factory
{
    /**
     * Define the model's default state.
     *
     * @return array<string, mixed>
     */
    protected $model = Tournament::class;
    public function definition(): array
    {
        return [
            'name' => $this->faker->word . ' Cricket Tournament',
            'description' => $this->faker->paragraph,
            'start_date' => $this->faker->dateTimeBetween('now', '+1 month'),
            'end_date' => $this->faker->dateTimeBetween('+2 months', '+3 months'),
            'location' => $this->faker->city,
            'format' => $this->faker->randomElement(['T20', 'ODI', 'Test']),
        ];
    }
}
