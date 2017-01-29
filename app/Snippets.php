<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Snippets extends Model
{
  // Get the user this snippet belongs to
  public function user()
  {
    return $this->belongsTo(User::class);
  }
      public function food()
    {
      return $this->hasMany(Food::class);
    }

}
