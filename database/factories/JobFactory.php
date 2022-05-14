<?php

namespace Database\Factories;

use App\Models\Employer;
use Illuminate\Database\Eloquent\Factories\Factory;

/**
 * @extends \Illuminate\Database\Eloquent\Factories\Factory<\App\Models\Job>
 */
class JobFactory extends Factory
{
    /**
     * Define the model's default state.
     *
     * @return array<string, mixed>
     */
    public function definition()
    {
        return [
	        'id' => $this->faker->randomDigit(),
			'employer_id' => Employer::factory(),
	        'keywords' => $this->faker->words,
	        'title' => $this->faker->words,
	        'description' => $this->faker->words,
	        'location' => $this->faker->words,
	        'type' => $this->faker->words
        ];
    }
}
