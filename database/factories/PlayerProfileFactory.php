<?php

namespace Database\Factories;

use App\Models\User;
use Illuminate\Database\Eloquent\Factories\Factory;

/**
 * @extends \Illuminate\Database\Eloquent\Factories\Factory<\App\Models\PlayerProfile>
 */
class PlayerProfileFactory extends Factory
{
    /**
     * Define the model's default state.
     *
     * @return array<string, mixed>
     */

    public function definition(): array
    {
        $roles = ['batsman', 'bowler', 'all_rounder', 'wicket_keeper', 'fielder'];
        return [
            'user_id' => function () {
            return User::factory()->create()->id;
        },
        'playing_role' => $this->faker->randomElement($roles),
        'batting_style' => $this->faker->randomElement(['right-handed', 'left-handed']),
        'bowling_style' => $this->faker->randomElement(['fast', 'medium', 'off_spin', 'leg_spin']),
        'fielding_position' => $this->faker->randomElement(['slip', 'gully', 'cover', 'mid-wicket', 'long-on']),
        ];
    }
}
