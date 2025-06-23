<?php

namespace Database\Factories;

use App\Models\Team;
use Illuminate\Database\Eloquent\Factories\Factory;

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
        return [
            'name' => $this->faker->city . ' ' . $this->faker->randomElement(['Lions', 'Tigers', 'Eagles', 'Sharks']),
            'short_name' => strtoupper($this->faker->lexify('???')),
            'logo' => $this->faker->imageUrl(100, 100, 'sports'),
            'description' => $this->faker->paragraph,
            'group_id' => $this->faker->numberBetween(1, 3),
        ];
    }
}
