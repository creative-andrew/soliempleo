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
			'employer_id' => Employer::factory(),
	        'keywords' => $this->faker->word(),
	        'title' => $this->faker->sentence(),
	        'description' => $this->faker->paragraph(),
	        'location' => $this->faker->word(),
	        'type' => $this->faker->word()
        ];
    }
}
