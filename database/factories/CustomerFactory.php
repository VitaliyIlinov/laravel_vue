<?php

namespace Database\Factories;

use Illuminate\Database\Eloquent\Factories\Factory;

class CustomerFactory extends Factory
{

    /**
     * Define the model's default state.
     *
     * @return array
     */
    public function definition()
    {
        return [
            'firstname' => $this->faker->firstName(),
            'lastname' => $this->faker->lastName(),
            'city' => $this->faker->city(),
            'avatar' => $this->faker->emoji(),
            'email' => $this->faker->unique()->safeEmail(),
            'phone' => $this->faker->phoneNumber(),
            'language' => $this->faker->randomDigit(),
            'newsletter' => $this->faker->boolean(),
            'status' => $this->faker->boolean(),
        ];
    }
}
