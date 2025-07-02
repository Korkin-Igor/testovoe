<?php

namespace App\Http\Controllers\Api;

use App\Http\Actions\IncomeFilterAction;
use App\Http\Controllers\Controller;
use App\Http\Requests\MainRequest;

class IncomeController extends Controller
{
    public function index(MainRequest $request)
    {
        return IncomeFilterAction::execute($request);
    }
}
