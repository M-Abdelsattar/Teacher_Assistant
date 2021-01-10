<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Lessonpart extends Model
{
    //use HasFactory;
    public function quize()
    {
      return $this->hasOne(Quize::class);
    }
}
