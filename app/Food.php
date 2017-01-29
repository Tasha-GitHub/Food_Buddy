<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Food extends Model
{
  // Get the meal this food belongs to
  public function meal()
  {
    return $this->belongsTo(Meals::class);
  }
}
