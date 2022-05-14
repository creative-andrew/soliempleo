<?php

namespace Database\Factories;

use Illuminate\Database\Eloquent\Factories\Factory;

/**
 * @extends \Illuminate\Database\Eloquent\Factories\Factory<\App\Models\Employer>
 */
class EmployerFactory extends Factory
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
	        'name' => $this->faker->name,
	        'email' => $this->faker->email,
	        'logo' => $this->faker->image,
	        'password' => $this->faker->password,
        ];
    }
}
