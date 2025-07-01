<?php

namespace Database\Factories;

use Illuminate\Database\Eloquent\Factories\Factory;

/**
 * @extends \Illuminate\Database\Eloquent\Factories\Factory<\App\Models\Model>
 */
class SaleFactory extends Factory
{
    /**
     * Define the model's default state.
     *
     * @return array<string, mixed>
     */
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
            'sale_date' => $this->faker->date(),
        ];
    }
}
