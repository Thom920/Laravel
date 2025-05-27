<?php

namespace Database\Factories;

use Illuminate\Database\Eloquent\Factories\Factory;

/**
 * @extends \Illuminate\Database\Eloquent\Factories\Factory<\App\Models\Model>
 */
class songFactory extends Factory
{
    /**
     * Define the model's default state.
     *
     * @return array<string, mixed>
     */
    public function definition(): array
    {
        return [
            "song_name" => fake()->name(),
            "author" => fake()->name(),
            "release_year" => fake()->year(),
            "created_at" => now(),
            "updated_at" => now(), 
        ];
    }
}
