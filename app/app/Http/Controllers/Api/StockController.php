<?php

namespace App\Http\Controllers\Api;

use App\Http\Actions\FilterAction;
use App\Http\Controllers\Controller;
use App\Http\Requests\MainRequest;
use App\Models\Stock;

class StockController extends Controller
{
    public function index(MainRequest $request)
    {
        return FilterAction::execute($request, Stock::query());
    }
}
