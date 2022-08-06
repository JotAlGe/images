<?php

namespace Database\Factories;

use Illuminate\Database\Eloquent\Factories\Factory;

/**
 * @extends \Illuminate\Database\Eloquent\Factories\Factory<\App\Models\Photo>
 */
class PhotoFactory extends Factory
{
    /**
     * Define the model's default state.
     *
     * @return array<string, mixed>
     */
    public function definition()
    {
        return [
            'name' => fake()->word(),
            'url' => fake()->imageUrl(),
            'category_id' => rand(1, 10),
            'user_id' => rand(1, 10),
            'comment_id' => rand(1, 10)
        ];
    }
}
