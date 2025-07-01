<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;
use Illuminate\Database\Eloquent\Relations\HasOne;

class Income extends Model
{
    public function sales(): hasOne
    {
        return $this->HasOne(Sale::class);
    }
}
