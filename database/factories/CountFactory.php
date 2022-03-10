<?php

namespace Database\Factories;

use Illuminate\Database\Eloquent\Factories\Factory;

/**
 * @extends \Illuminate\Database\Eloquent\Factories\Factory<\App\Models\Count>
 */
class CountFactory extends Factory
{
    /**
     * Define the model's default state.
     *
     * @return array
     */
    public function definition()
    {
        $data = ["aboutPage", "homePage"];
        $for = $data[array_rand($data)];

        return [
            'title' => $this->faker->jobTitle(),
            'for' => $for,
            'count' => $this->faker->numberBetween(50, 5000),
        ];
    }
}
