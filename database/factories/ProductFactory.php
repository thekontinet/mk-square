<?php

namespace Database\Factories;

use App\Models\Business;
use App\Models\Category;
use Illuminate\Database\Eloquent\Factories\Factory;

/**
 * @extends \Illuminate\Database\Eloquent\Factories\Factory<\App\Models\Product>
 */
class ProductFactory extends Factory
{
    /**
     * Define the model's default state.
     *
     * @return array<string, mixed>
     */
    public function definition(): array
    {
        return [
            'business_id' => Business::factory(),
            'category_id' => Category::factory(),
            'name' => fake()->colorName(),
            'price' => fake()->numberBetween(1000, 10000),
            'quantity' => fake()->numberBetween(1, 10),
            'description' => fake()->sentence(),
        ];
    }

    /**
     * Indicate that the model's has no category.
     */
    public function uncategorized(): static
    {
        return $this->state(fn (array $attributes) => [
            'category_id' => null,
        ]);
    }
}
