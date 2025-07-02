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
            'order_number' => rand(1000, 9999),
            'order_date' => $this->faker->date(),
            'status' => $this->faker->randomElement(['в ожидании', 'завершён', 'отменён']),
        ];
    }
}
