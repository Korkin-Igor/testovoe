<?php

namespace App\Http\Actions;

use App\Http\Requests\MainRequest;
use App\Models\User;

class FilterAction
{
    public static function execute(MainRequest $request, $query)
    // query передаем в зависимости от сущности (например: Order::query())
    {
        if ($request->key != User::query()->get('key')[0]['key']) {
            return response()->json([
                'message' => 'Не доступно для вас.'
            ], 403);
        }

        if ($request->has('date_from')) {
            $query->where('income_date', '>=', $request->date_from);
        }
        if ($request->has('date_to')) {
            $query->where('income_date', '<=', $request->date_to);
        }

        // Получаем лимит и страницу из запроса
        $limit = $request->input('limit', 500); // по умолчанию 500
        $page = $request->input('page', 1);     // по умолчанию 1

        return $query->paginate($limit, ['*'], 'page', $page);
    }
}
