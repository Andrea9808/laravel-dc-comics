<?php

namespace Database\Factories;

use Illuminate\Database\Eloquent\Factories\Factory;

/**
 * @extends \Illuminate\Database\Eloquent\Factories\Factory<\App\Models\Comic>
 */
class ComicFactory extends Factory
{
    /**
     * Define the model's default state.
     *
     * @return array<string, mixed>
     */
    public function definition()
    {
        return [
            'name'=>fake()->unique()->lastName(),
            'publication_date'=>fake()->dateTime(),
            'price'=>fake()->randomFloat(1, 3, 15),
            'avaible'=>fake()->boolean(),
        ];
    }
}
