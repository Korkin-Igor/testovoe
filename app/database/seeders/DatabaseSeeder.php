<?php

namespace Database\Seeders;

use App\Models\Income;
use App\Models\Order;
use App\Models\Sale;
use App\Models\User;
// use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use App\Models\Warehouse;
use Illuminate\Database\Seeder;

class DatabaseSeeder extends Seeder
{
    /**
     * Seed the application's database.
     */
    public function run(): void
    {
        Warehouse::factory(10)->create();
        Order::factory(50)->create();
        Sale::factory(100)->create();
        Income::factory(100)->create();

        // user для хранения ключа
        $this->call([
            UserSeeder::class,
        ]);
    }
}
