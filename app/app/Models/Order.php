<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;
use Illuminate\Database\Eloquent\Relations\BelongsTo;
use Illuminate\Database\Eloquent\Relations\HasOne;

class Order extends Model
{
    public function warehouses(): hasOne
    {
        return $this->hasOne(Warehouse::class);
    }

    public function sales(): belongsTo
    {
        return $this->belongsTo(Sale::class);
    }
}
