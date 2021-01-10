<?php

namespace App\Http\Controllers;

use Illuminate\Foundation\Auth\Access\AuthorizesRequests;
use Illuminate\Foundation\Bus\DispatchesJobs;
use Illuminate\Foundation\Validation\ValidatesRequests;
use Illuminate\Routing\Controller as BaseController;
use App\Models\Lessonpart;
class StudentProfileController extends BaseController
{

  public function index()
  {

  }
  public function showLevels()
  {
    return view('student.levels');
  }
  public function showUnits(int $levelid)
  {
    //select distinct unit number from lesson part where level=levelid
    $unitscount=5;
    return view('student.units',compact('unitscount','levelid'));
  }
  public function showLessons(int $unitid,int $levelid)
  {
    $lessonscount=5;
    return view('student.lessons',compact('lessonscount','unitid','levelid'));
  }
  public function showLessonParts(int $lessonid,int $unitid,int $levelid)
  {
    $partscount=5;
    return view('student.lessonparts',compact('partscount','lessonid','unitid','levelid'));
  }
  public functionn showPart(Lessonpart $part)
  {
    return view('student.lessonparts',compact('part'));
  }

}
