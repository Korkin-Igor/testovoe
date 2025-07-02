<?php

namespace App\Http\Controllers\Api;

use App\Http\Actions\IncomeFilterAction;
use App\Http\Controllers\Controller;
use App\Http\Requests\MainRequest;
use App\Http\Resources\IncomeResource;
use App\Models\Income;

class IncomeController extends Controller
{
    public function index(MainRequest $request)
    {
        return IncomeResource::collection(IncomeFilterAction::execute($request));
    }
}
