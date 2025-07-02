<?php

namespace App\Http\Resources;

use App\Models\Income;
use Illuminate\Http\Request;
use Illuminate\Http\Resources\Json\JsonResource;

class IncomeResource extends JsonResource
{
    /**
     * Transform the resource into an array.
     *
     * @return array<string, mixed>
     */
    public function toArray(Request $request): array
    {
        return [
            'data' => [
                'id' => $this['id'],
                'sale_id' => $this['sale_id'],
                'amount' => $this['amount'],
                'income_date' => $this['income_date'],
                'description' => $this['description'],
            ]
        ];
    }
}
