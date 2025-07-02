<?php

namespace Database\Factories;

use App\Models\Sale;
use Illuminate\Database\Eloquent\Factories\Factory;


/**
 * @extends \Illuminate\Database\Eloquent\Factories\Factory<\App\Models\Income>
 */
class IncomeFactory extends Factory
{
    public function definition(): array
    {
        return [
            'sale_id' => Sale::factory(),
            'amount' => $this->faker->randomFloat(2, 50, 1000),
            'income_date' => $this->faker->date(),
            'description' => $this->faker->sentence(),
        ];
    }
}
