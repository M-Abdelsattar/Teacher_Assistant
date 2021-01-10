<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Student_Quize extends Model
{
    //use HasFactory;
    public function student()
    {
      return $this->belongsTo(Student::class);
    }

    public function quize()
    {
      return $this->belongsTo(Quize::class);
    }
    public function answers()
    {
      return $this->hasMany(Student_Quize_Answer::class);
    }
}
