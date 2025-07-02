<?php

namespace App\Http\Actions;

use App\Http\Requests\MainRequest;
use App\Models\User;

class FilterAction
{
    // query передаем в зависимости от сущности (например: Order::query())
    public static function execute(MainRequest $request, $query)
    {
        $data = $request->validated();

        if ($data['key'] != User::query()->get('key')[0]['key']) {
            return response()->json([
                'message' => 'Не доступно для вас.'
            ], 403);
        }

        if (isset($data['dateFrom'])) {
            $query->where('date', '>=', $data['dateFrom']);
        }
        if (isset($data['dateTo'])) {
            $query->where('date', '<=', $data['dateTo']);
        }

        // Получаем лимит и страницу из запроса
        $limit = $data['limit'] ?? 500; // по умолчанию 500
        $page = $data['page'] ?? 1; // по умолчанию 1

        return $query->paginate($limit, ['*'], 'page', $page);
    }
}
