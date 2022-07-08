<?php

namespace Database\Factories;

use App\Models\User;
use Illuminate\Database\Eloquent\Factories\Factory;

/**
 * @extends \Illuminate\Database\Eloquent\Factories\Factory<\App\Models\Ticket>
 */
class TicketFactory extends Factory
{
    /**
     * Define the model's default state.
     *
     * @return array<string, mixed>
     */
    public function definition()
    {
        return [
            'origin_city' => fake()->city(),
            "destination_city" => fake()->city(),
            "return_date" => fake()->dateTime(),
            "price" => fake()->randomFloat($nbMaxDecimals = 2, $min = 500, $max = 1000),
            "airline" => fake()->company(),
            "number_scales" => fake()->numberBetween($int1 = 1, $int2 = 5),
            "flight_duration" => fake()->numberBetween($int1 = 1, $int2 = 25)." hours",
            "user_id" => fake()->numberBetween($int1 = 1, $int2 = 10),
        ];
    }
}
