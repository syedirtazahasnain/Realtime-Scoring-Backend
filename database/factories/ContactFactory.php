<?php

namespace Database\Factories;

use Illuminate\Database\Eloquent\Factories\Factory;

/**
 * @extends \Illuminate\Database\Eloquent\Factories\Factory<\App\Models\Model>
 */
class ContactFactory extends Factory
{
    /**
     * Define the model's default state.
     *
     * @return array<string, mixed>
     */
    public function definition(): array
    {
        return [
            'user_id' => function () {
                return \App\Models\User::factory()->create()->id;
            },
            'phone' => $this->faker->phoneNumber,
            'picture' => $this->faker->imageUrl(200, 200, 'people'),
            'address' => $this->faker->address,
            'd_o_j' => $this->faker->date(), // Date of Joining
            'age' => $this->faker->numberBetween(18, 50),
            'city' => $this->faker->city,
            'status' => $this->faker->randomElement(['active', 'inactive', 'pending']),
        ];
    }
}
