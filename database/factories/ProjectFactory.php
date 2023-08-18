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
            'name' => fake()->words(4, true),
            'url' => fake()->url,
            'summary' => fake()->sentence,
            'socials' => [
                'github' => fake()->url,
                'x-twitter' => fake()->url,
            ],
            'image' => fake()->imageUrl,
        ];
    }
}
