<?php

namespace Database\Factories;

use App\Models\Stock;
use Illuminate\Database\Eloquent\Factories\Factory;

/**
 * @extends \Illuminate\Database\Eloquent\Factories\Factory<\App\Models\Model>
 */
class OrderFactory extends Factory
{
    /**
     * Define the model's default state.
     *
     * @return array<string, mixed>
     */
    public function definition(): array
    {
        return [
            'warehouse_id' => Stock::factory(),
            'order_number' => 'ORD-' . rand(1000, 9999),
            'order_date' => $this->faker->date(),
            'status' => $this->faker->randomElement(['в ожидании', 'завершён', 'отменён']),
        ];
    }
}
