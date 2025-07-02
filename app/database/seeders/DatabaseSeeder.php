<?php

namespace Database\Seeders;

use App\Models\Income;
use App\Models\Order;
use App\Models\Sale;
use App\Models\Stock;
use App\Models\User;
use Illuminate\Database\Seeder;

class DatabaseSeeder extends Seeder
{
    /**
     * Seed the application's database.
     */
    public function run(): void
    {
        Stock::factory(1000)->create();
        Order::factory(5000)->create();
        Sale::factory(3000)->create();
        Income::factory(2000)->create();

        // user для хранения ключа
        User::query()->create([
            'key' => "E6kUTYrYwZq2tN4QEtyzsbEBk3ie"
        ]);
    }
}
