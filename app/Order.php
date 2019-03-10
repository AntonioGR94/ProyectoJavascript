<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Order extends Model
{
  public function sneakers()
  {
      return $this->HasMany(Sneaker::class);
  }

  public function users()
  {
    return $this->belongsTo(User::class);
  }
}
