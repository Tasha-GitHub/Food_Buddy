<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Meals extends Model
{
    return $this->belongsTo(User::class);
}
