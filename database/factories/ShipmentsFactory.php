<?php

namespace Database\Factories;

use Illuminate\Database\Eloquent\Factories\Factory;

/**
 * @extends \Illuminate\Database\Eloquent\Factories\Factory<\App\Models\Shipments>
 */
class ShipmentsFactory extends Factory
{
    /**
     * Define the model's default state.
     *
     * @return array<string, mixed>
     */
    public function definition(): array
    {
        $arrayValues = ['waiting', 'sent', 'cancel'];
        $startDate = '2022-01-01 00:00:00';
        $endDate = '2022-12-31 23:59:59';

        $createdAt = fake()->dateTimeBetween($startDate, $endDate);
        return [
            'order_id' => mt_rand(1, 40),
            'code' => fake()->numerify('S-##################'),
            'status' => $arrayValues[rand(0, 2)],
            'created_at' => $createdAt,
        ];
    }
}
