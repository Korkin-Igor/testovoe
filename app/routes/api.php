<?php

use App\Http\Controllers\Api\IncomeController;
use App\Http\Controllers\Api\OrderController;
use App\Http\Controllers\Api\SaleController;
use App\Http\Controllers\Api\StockController;
use Illuminate\Support\Facades\Route;

Route::get('/stocks', [StockController::class, 'index']);
Route::get('/incomes', [IncomeController::class, 'index']);
Route::get('/sales', [SaleController::class, 'index']);
Route::get('/orders', [OrderController::class, 'index']);

Route::any('/{any}', function () {
    return response()->json([
        'message' => 'Не найдено.'
    ], 404);
});
