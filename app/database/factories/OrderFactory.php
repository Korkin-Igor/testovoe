<?php

namespace Database\Factories;

use App\Models\Stock;
use Illuminate\Database\Eloquent\Factories\Factory;

/**
 * @extends \Illuminate\Database\Eloquent\Factories\Factory<\App\Models\Order>
 */
class OrderFactory extends Factory
{
    public function definition(): array
    {
        return [
            'stock_id' => Stock::factory(),
            'order_number' => fake()->unique()->numberBetween(1, 99999),
            'order_date' => $this->faker->date(),
            'status' => $this->faker->randomElement(['в ожидании', 'завершён', 'отменён']),
        ];
    }
}
