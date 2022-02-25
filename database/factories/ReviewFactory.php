<?php

namespace Database\Factories;

use App\Models\Service;
use Illuminate\Database\Eloquent\Factories\Factory;

/**
 * @extends \Illuminate\Database\Eloquent\Factories\Factory<\App\Models\Review>
 */
class ReviewFactory extends Factory
{
    /**
     * Define the model's default state.
     *
     * @return array
     */
    public function definition()
    {
        return [
            'service_id' => Service::pluck('id')[$this->faker->numberBetween(1, Service::count() - 1)],
            'name' => $this->faker->name(),
            'stars' => rand(0, 5),
            'review' => $this->faker->realText(100, 3),
        ];
    }
}
