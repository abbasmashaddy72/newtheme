<?php

namespace Database\Factories;

use Illuminate\Database\Eloquent\Factories\Factory;

/**
 * @extends \Illuminate\Database\Eloquent\Factories\Factory<\App\Models\Achievement>
 */
class AchievementFactory extends Factory
{
    /**
     * Define the model's default state.
     *
     * @return array<string, mixed>
     */
    public function definition()
    {
        return [
            'year' => rand(2010, 2022),
            'title' => $this->faker->name(),
            'excerpt' => $this->faker->paragraph(rand(1, 2)),
            'link' => $this->faker->imageUrl(),
        ];
    }
}
