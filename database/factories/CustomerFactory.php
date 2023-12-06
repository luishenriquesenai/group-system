<?php

namespace Database\Factories;

use Illuminate\Database\Eloquent\Factories\Factory;

/**
 * @extends \Illuminate\Database\Eloquent\Factories\Factory<\App\Models\Customer>
 */
class CustomerFactory extends Factory
{
    /**
     * Define the model's default state.
     *
     * @return array<string, mixed>
     */
    public function definition(): array
    {
        return [
            'name' => fake()->name(),
            'address' => fake()->address(),
            'cep' => fake()->randomNumber(),
            'uf' => fake()->text(5),
            'country' => fake()->text(5),
            'age' => fake()->randomNumber(),
            'cpf' => fake()->randomNumber(),
            'email' => fake()->email(),
            'telephone' => fake()->randomNumber(),
        ];
    }
}
