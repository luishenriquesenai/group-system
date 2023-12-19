<?php

namespace Database\Factories;

use App\Enum\ReservationStatusEnum;
use App\Models\Customer;
use App\Models\ServicesProvided;
use App\Models\User;
use Illuminate\Database\Eloquent\Factories\Factory;

/**
 * @extends \Illuminate\Database\Eloquent\Factories\Factory<\App\Models\Reservation>
 */
class ReservationFactory extends Factory
{
    /**
     * Define the model's default state.
     *
     * @return array<string, mixed>
     */
    public function definition(): array
    {
        return [
            'id_customer' => Customer::factory()->create()->id,
            'id_services_provided' => ServicesProvided::factory()->create()->id,
            'id_user' => User::factory()->create()->id,
            'price' => fake()->numerify(),
            'status' => fake()->randomElement(ReservationStatusEnum::cases()),
            'reserved_at' => fake()->dateTime(),
        ];
    }
}
