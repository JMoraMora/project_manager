<?php

namespace Database\Factories;

use Illuminate\Database\Eloquent\Factories\Factory;

/**
 * @extends \Illuminate\Database\Eloquent\Factories\Factory<\App\Models\Project>
 */
class ProjectFactory extends Factory
{
    /**
     * Define the model's default state.
     *
     * @return array<string, mixed>
     */
    public function definition(): array
    {
        return [
            'user_id' => fake()->numberBetween(1,5),
            'city_id' => fake()->numberBetween(1,15),
            'company_id' => fake()->numberBetween(1,10),
            'budget' => fake()->randomFloat(2, 10000, 99999),
            'name' => fake()->sentence(4),
            'execution_date' => now(),
            'is_active' => true,
        ];
    }
}
