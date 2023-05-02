<?php

namespace Database\Factories;

use App\Models\User;
use Illuminate\Database\Eloquent\Factories\Factory;

/**
 * @extends \Illuminate\Database\Eloquent\Factories\Factory<\App\Models\Business>
 */
class BusinessFactory extends Factory
{
    /**
     * Define the model's default state.
     *
     * @return array<string, mixed>
     */
    public function definition(): array
    {
        return [
            'user_id' => User::factory(),
            'name' => fake()->company(),
            'industry' => 'pharm',
            'blocked_at' => null,
        ];
    }

    /**
     * Indicate that the model's is blocked.
     */
    public function blocked(): static
    {
        return $this->state(fn (array $attributes) => [
            'blocked_at' => now(),
        ]);
    }
}
