<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;
use Illuminate\Database\Eloquent\Relations\BelongsToMany;

class Warehouse extends Model
{
    public function orders(): belongsToMany
    {
        return $this->belongsToMany(Order::class);
    }
}
