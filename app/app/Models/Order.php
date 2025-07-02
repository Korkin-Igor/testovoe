<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;
use Illuminate\Database\Eloquent\Relations\BelongsTo;
use Illuminate\Database\Eloquent\Relations\HasOne;

class Order extends Model
{
    use HasFactory;
    public function stocks(): hasOne
    {
        return $this->hasOne(Stock::class);
    }

    public function sales(): belongsTo
    {
        return $this->belongsTo(Sale::class);
    }
}
