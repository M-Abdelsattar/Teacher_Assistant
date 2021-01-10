<?php

use Illuminate\Support\Facades\Route;
use App\Http\Controllers\StudentProfileController;
use App\Http\Middleware\Student;

/*
|--------------------------------------------------------------------------
| Web Routes
|--------------------------------------------------------------------------
|
| Here is where you can register web routes for your application. These
| routes are loaded by the RouteServiceProvider within a group which
| contains the "web" middleware group. Now create something great!
|
*/
Auth::routes();

Route::get('/home', [App\Http\Controllers\HomeController::class, 'index'])->name('home');
Route::get('/', [App\Http\Controllers\HomeController::class, 'index']);

Route::group(['prefix' => '/student', 'middleware' => ['auth', 'App\Http\Middleware\Student']], function () {

    Route::get('/studenthome',function(){
      return view('student.studenthome');
    })->name('studenthome');
    // Route::get('lessons',function(){
    //   return view('student.lessons');
    // })->name('lessons');
    Route::get('/lessons/{unitid}/{levelid}','App\Http\Controllers\StudentProfileController@showLessons')->name('lessons');
    Route::get('/levels',function(){
      return view('student.levels');
    })->name('levels');
    // Route::get('units',function(){
    //   return view('student.units');
    // })->name('units');
    Route::get('/units/{levelid}','App\Http\Controllers\StudentProfileController@showUnits')->name('units');
    // Route::get('lessonparts',function(){
    //   return view('student.lessonparts');
    // })->name('lessonparts');
    Route::get('/lessonparts/{lessonid}/{unitid}/{levelid}','App\Http\Controllers\StudentProfileController@showLessonParts')->name('lessonparts');
    // Route::get('part',function(){
    //   return view('student.part');
    // })->name('part');
    Route::get('/part/{part}','App\Http\Controllers\StudentProfileController@showPart')->name('part');
    Route::get('/quize/{lessonpart}','App\Http\Controllers\StudentProfileController@showLessonQuize')->name('quize');
    Route::post('/quize/saveanswer','App\Http\Controllers\StudentProfileController@saveStudentAnswer')->name('saveanswer');
    Route::get('/quize/result/{quize}','App\Http\Controllers\StudentProfileController@submitStudentQuize')->name('submitstudentquize');

});


Route::group(['prefix' => 'admin'], function () {
    Voyager::routes();
});
