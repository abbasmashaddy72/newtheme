<?php

namespace Database\Factories;

use Illuminate\Database\Eloquent\Factories\Factory;

/**
 * @extends \Illuminate\Database\Eloquent\Factories\Factory<\App\Models\Work>
 */
class WorkFactory extends Factory
{
    /**
     * Define the model's default state.
     *
     * @return array<string, mixed>
     */
    public function definition()
    {
        $days = ["Mon", "Teu", "Wed", "Thur", "Fri", "Sat", "Sun"];
        return [
            'name' => $this->faker->name(),
            'location' => $this->faker->state(),
            'timing' => rand(1, 12) . "AM : " . rand(1, 12) . "PM",
            'days' => $days[array_rand($days)],
            'contact_number' => rand(7000000000, 9000000000),
        ];
    }
}
