<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Food extends Model
{
  // Get the meal this food belongs to
  public function food()
  {
    return $this->belongsTo(Snippets::class);
  }
}
