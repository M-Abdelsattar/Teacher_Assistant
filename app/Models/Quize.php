<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Quize extends Model
{
    //use HasFactory;
    public function lessonpart()
    {
      return $this->belongsTo(Lessonpart::class);
    }
    public function questions()
    {
      return $this->hasMany(Question::class);
    }
    public function StudentQuizeAnswer()
    {
      return $this->hasMany(Student_Quize::class);
    }
}
