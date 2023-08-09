<?php

namespace Database\Factories;

use Illuminate\Database\Eloquent\Factories\Factory;

/**
 * @extends \Illuminate\Database\Eloquent\Factories\Factory<\App\Models\Promotion>
 */
class PromotionFactory extends Factory
{
    /**
     * Define the model's default state.
     *
     * @return array<string, mixed>
     */
    public function definition(): array
    {
        return [
            'promotion_name' => '7 dias gratis',
            'start_date' => now(),
            'end_date' => now(),
            'descripcion' => fake()->paragraph(),
            'promotion_cost' => fake()->randomFloat(2, 0, 1000),
        ];
    }
}
