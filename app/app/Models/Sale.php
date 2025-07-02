<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;
use Illuminate\Database\Eloquent\Relations\BelongsTo;
use Illuminate\Database\Eloquent\Relations\BelongsToMany;
use Illuminate\Database\Eloquent\Relations\HasOne;

class Sale extends Model
{
    use HasFactory;
    public function orders(): hasOne
    {
        return $this->hasOne(Order::class);
    }

    public function incomes(): belongsTo
    {
        return $this->belongsTo(Income::class);
    }
}
