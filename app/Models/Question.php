<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Question extends Model
{
  public function quize()
  {
    return $this->belongsTo(Quize::class);
  }
  public function options()
  {
    return $this->hasMany(Option::class);
  }
}
