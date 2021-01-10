@extends('layouts.master')
@section('content')
<main id="main">

  <!-- ======= Breadcrumbs ======= -->
  <section class="breadcrumbs">
    <div class="container">

      <div class="d-flex justify-content-between align-items-center">
        <h2>Part{{$part->lessonpart_number}}</h2>
        <ol>
          <li><a href="{{route('studenthome')}}">Home</a></li>
          <li><a href="{{route('levels')}}">Lessons</a></li>
          <li><a href="{{route('units',$part->level_number)}}">Level{{$part->level_number}}</a></li>
          <li><a href="{{route('lessons',[$part->unit_number,$part->level_number])}}">Unit{{$part->unit_number}}</a></li>
          <li><a href="{{route('lessonparts',[$part->lesson_number,$part->unit_number,$part->level_number])}}">Lesson{{$part->lesson_number}}</a></li>
          <li>Part{{$part->lessonpart_number}}</li>
        </ol>
      </div>

    </div>
  </section><!-- End Breadcrumbs -->

  <section class="inner-page">
    <div class="container" style="text-align:center;">
      <div class="row">
        <!-- <p style="background-color:gray;text-align:center;display:block;width:100%;padding:200px 0; color:white;"> Video will be displayed here......</p> -->
        <iframe style="background-color:gray;text-align:center;display:block;width:100%;height: 700px;color:white;" src="{{$part->lessonpart_url}}" frameborder="0" allow="accelerometer; autoplay; clipboard-write; encrypted-media; gyroscope; picture-in-picture" allowfullscreen></iframe>
      </div>
      <br/>
      <div class="row">
        <div class="col-lg-12 col-md-12" style="text-algin:center;">
          <a href="#"><i class="icofont-file-pdf"> PDF Note</i></a>|
          <a href="#" ><i class="icofont-file-pdf"> PDF Home Work</i></a>|
          <a href="{{route('quize',$part->id)}}"><i class="icofont-question-circle"> Quiz</i></a>
        </div>

      </div>

    </div>
  </section>

</main><!-- End #main -->
@stop
