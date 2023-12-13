<?php

namespace Database\Factories;

use App\Enum\TypeOfServiceEnum;
use Illuminate\Database\Eloquent\Factories\Factory;

/**
 * @extends \Illuminate\Database\Eloquent\Factories\Factory<\App\Models\ServicesProvided>
 */
class ServicesProvidedFactory extends Factory
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
            'value' => fake()->randomNumber(),
            'description' => fake()->text(25),
            'type_of_service' => fake()->randomElement(TypeOfServiceEnum::cases()),
        ];
    }
}
