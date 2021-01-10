<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\Lessonpart;
use App\Models\Question;
use App\Models\Option;
use App\Models\Student_Quize;
use App\Models\Student_Quize_Answer;
use App\Models\Quize;


class StudentProfileController extends Controller
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
    // $levellessonparts=Lessonpart::where('level_number',$levelid)->get();
    // $unitscount=0;
    // $unitsarray=[];
    // foreach ($levellessonparts as $key => $part) {
    //   if(!in_array($part->unit_number,$unitsarray))
    //   {
    //     $unitsarray[]=$part;
    //   }
    // }
    // $unitscount=count($unitsarray);
    $unitscount=Lessonpart::distinct()->where('level_number',$levelid)->get(['unit_number'])->count();
    return view('student.units',compact('unitscount','levelid'));
  }
  public function showLessons(int $unitid,int $levelid)
  {
    $lessonscount=Lessonpart::distinct()->where('level_number',$levelid)->where('unit_number',$unitid)->get(['lesson_number'])->count();
    // $lessonsarray=[];
    // foreach ($levellessonparts as $key => $part) {
    //   if(!in_array($part->unit_number,$lessonsarray))
    //   {
    //     $lessonsarray[]=$part;
    //   }
    // }
    // $unitscount=count($lessosarray);
    return view('student.lessons',compact('lessonscount','unitid','levelid'));
  }
  public function showLessonParts(int $lessonid,int $unitid,int $levelid)
  {
    $lessonparts=Lessonpart::where('lesson_number',$lessonid)->where('level_number',$levelid)->where('unit_number',$unitid)->get();
    return view('student.lessonparts',compact('lessonparts','lessonid','unitid','levelid'));
  }
  public function showPart(Lessonpart $part)
  {
    //$part=Lessonpart::where('lessonpart_number',$partnumber)->get()->first();
    // $part->lessonpart_number=1;
    // $part->lesson_number=1;
    // $part->unit_number=1;
    // $part->level_number=2;
    // $part->lessonpart_title="Introduction to Chemistry";
    // $part->lessonpart_Description="dadddasdsdsadadsadasdsadsadsadasdsadadada";
    // $part->lessonpart_url="https://www.youtube-nocookie.com/embed/VxyRugaKhAw";
    // $part->lessonpart_duration=10;
    // $part->lessonpart_nonteurl="dsdaad";
    // $part->lessonpart_homeworkurl="dsdaad";

    return view('student.part',compact('part'));
  }
  public function downloadNote()
  {

  }
  public function downloadHomework()
  {

  }
  public function showLessonQuize(Lessonpart $lessonpart)
  {
    $submitterstudent=auth()->user()->student;
    $quize=$lessonpart->quize;
    $studentquize=Student_Quize::where('student_id',$submitterstudent->id)->where('quize_id',$quize->id)->first();
    if($studentquize->submited)
    {
      $result=1;
      return view('student.quize',compact('quize','studentquize','result'));
    }
    else {
      return view('student.quize',compact('quize','studentquize'));
    }
    return view('student.quize',compact('quize'));
  }
  public function saveStudentAnswer(Request $request)
  {
    //return "1";

    $question=Question::where('id',$request->question_id)->first();
  //  return "1";
    $option=Option::where('id',$request->option_id)->first();
    //return "2";
    $submitterstudent=auth()->user()->student;
    $studentquize=Student_Quize::where('student_id',$submitterstudent->id)->where('quize_id',$question->quize->id)->first();
    if(!$studentquize)
    {
      $studentquize=new Student_Quize();
      $studentquize->student_id=$submitterstudent->id;
      $studentquize->quize_id=$question->quize->id;
      $studentquize->save();
    }

    $studentquizeanswer=Student_Quize_Answer::where('question_id',$question->id)->where('student_quize_id',$studentquize->id)->first();
    if(!$studentquizeanswer)
    {
      $studentquizeanswer=new Student_Quize_Answer();
      $studentquizeanswer->question_id=$question->id;
      $studentquizeanswer->student_quize_id=$studentquize->id;
    }
    $studentquizeanswer->correctanswer=$option->id;
    $studentquizeanswer->save();

    return "yes";
  }
  public function submitStudentQuize(Quize $quize)
  {
    $submitterstudent=auth()->user()->student;
    $studentquize=Student_Quize::where('student_id',$submitterstudent->id)->where('quize_id',$quize->id)->first();
    $studentquize->submited=true;
      $studentquize->save();
    //$studentquizeanswer=Student_Quize_Answer::where()->where('student_quize_id',$studentquize->id)->orderBy('question_id')->get();
    $result=1;
    return view('student.quize',compact('quize','studentquize','result'));

  }
}
