<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Student extends Model
{
    //use HasFactory;
    public function quizes()
    {
      return $this->hasMany(Student_Quize::class);
    }
    public function user()
    {
      return $this->belongsTo(User::class);
    }
}
