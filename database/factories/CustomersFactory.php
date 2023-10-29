<?php

namespace Database\Factories;

use Illuminate\Database\Eloquent\Factories\Factory;

/**
 * @extends \Illuminate\Database\Eloquent\Factories\Factory<\App\Models\Customers>
 */
class CustomersFactory extends Factory
{
    /**
     * Define the model's default state.
     *
     * @return array<string, mixed>
     */
    public function definition(): array
    {
        $arrayValues = ['Jakarta', 'Bekasi', 'Bogor'];
        return [
            'name' => fake()->name(),
            'phone' => "085612332123",
            'address' => $arrayValues[rand(0, 2)],
        ];
    }
}
