<?php

namespace Database\Factories;

use Illuminate\Database\Eloquent\Factories\Factory;

/**
 * @extends \Illuminate\Database\Eloquent\Factories\Factory<\App\Models\Orders>
 */
class OrdersFactory extends Factory
{
    /**
     * Define the model's default state.
     *
     * @return array<string, mixed>
     */
    public function definition(): array
    {
        $startDate = '2022-01-01 00:00:00';
        $endDate = '2022-12-31 23:59:59';
        $createdAt = fake()->dateTimeBetween($startDate, $endDate);
        return [
            'customer_id' => mt_rand(1, 10),
            'code' => mt_rand(100000000000, 999999999999),
            'resi_number' => fake()->numerify('O-##################'),
            'created_at' => $createdAt,
        ];
    }
}
