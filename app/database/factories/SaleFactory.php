<?php

namespace Database\Factories;

use App\Models\Order;
use Illuminate\Database\Eloquent\Factories\Factory;

/**
 * @extends \Illuminate\Database\Eloquent\Factories\Factory<\App\Models\Sale>
 */
class SaleFactory extends Factory
{
    public function definition(): array
    {
        $quantity = rand(1, 10);
        $price = rand(100, 1000);
        return [
            'order_id' => Order::factory(),
            'product_name' => $this->faker->word,
            'quantity' => $quantity,
            'price' => $price,
            'total' => $quantity * $price,
            'date' => $this->faker->date(),
        ];
    }
}
