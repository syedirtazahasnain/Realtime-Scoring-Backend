<?php

namespace Database\Factories;

use App\Models\Role;
use Illuminate\Database\Eloquent\Factories\Factory;

/**
 * @extends \Illuminate\Database\Eloquent\Factories\Factory<\App\Models\Role>
 */
class RoleFactory extends Factory
{
    /**
     * Define the model's default state.
     *
     * @return array<string, mixed>
     */
    protected $model = Role::class;
    public function definition(): array
    {
        return [
            'name' => $this->faker->unique()->randomElement(['admin', 'team_owner', 'player', 'umpire', 'spectator']),
            'description' => $this->faker->sentence,
        ];
    }
}
