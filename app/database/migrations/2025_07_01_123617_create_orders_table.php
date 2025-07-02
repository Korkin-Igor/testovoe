<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

return new class extends Migration
{
    /**
     * Run the migrations.
     */
    public function up(): void
    {
        Schema::create('orders', function (Blueprint $table) {
            $table->id();
            $table->foreignId('stock_id')->references('id')->on('stocks')
                ->onDelete('cascade')->onUpdate('cascade');
            $table->string('order_number')->unique();
            $table->date('date');
            $table->enum('status', ['в ожидании', 'завершён', 'отменён'])->default('в ожидании');
            $table->timestamps();
        });
    }

    /**
     * Reverse the migrations.
     */
    public function down(): void
    {
        Schema::dropIfExists('orders');
    }
};
