<?php

namespace Database\Factories;

use App\Models\User;
use Illuminate\Database\Eloquent\Factories\Factory;

/**
 * @extends \Illuminate\Database\Eloquent\Factories\Factory<\App\Models\UserDomicilio>
 */
class UserDomicilioFactory extends Factory
{
    /**
     * Define the model's default state.
     *
     * @return array<string, mixed>
     */
    public function definition(): array
    {
        return [
            'user_id' => User::factory(),
            'domicilio' => fake()->sentence ,
            'numero_exterior' => rand(1,1000) ,
            'colonia' => fake()->sentence(2) ,
            'cp' => rand(1,9999) ,
            'ciudad' => fake()->sentence(1) ,
        ];
    }
}
