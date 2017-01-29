<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Meals extends Model
{
  // Get the user this meal belongs to
  public function user()
  {
    return $this->belongsTo(User::class);
  }
}
