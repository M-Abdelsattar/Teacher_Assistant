@extends('layouts.master')
@section('content')
<main id="main">

  <!-- ======= Breadcrumbs ======= -->
  <section class="breadcrumbs">
    <div class="container">

      <div class="d-flex justify-content-between align-items-center">
        <h2>Unit{{$unitid}}</h2>
        <ol>
          <li><a href="{{route('studenthome')}}">Home</a></li>
          <li><a href="{{route('levels')}}">Lessons</a></li>
          <li><a href="{{route('units',$levelid)}}">Level{{$levelid}}</a></li>
          <li>Unit{{$unitid}}</li>
        </ol>
      </div>

    </div>
  </section><!-- End Breadcrumbs -->

  <section class="inner-page">
    <div class="container" style="text-align:center;">
      <div class="row">
        @for($i=1;$i<=$lessonscount;$i++)
        <div class="col-lg-3 col-md-3" style="text-align:center;">
            <a href="{{route('lessonparts',[$i,$unitid,$levelid])}}" class="link-nav"/>Lesson{{$i}}</a>
        </div>
        @endfor
        <!-- <div class="col-lg-3 col-md-3" style="text-align:center;">
          <a href="#" class="link-nav"/>Lesson1</a>
        </div>
        <div class="col-lg-3 col-md-3" style="text-align:center;">
            <a href="#" class="link-nav"/>Lesson1</a>
        </div>

        <div class="col-lg-3 col-md-3" style="text-align:center;">
          <a href="#" class="link-nav"/>Lesson1</a>
        </div>

        <div class="col-lg-3 col-md-3" style="text-align:center;">
            <a href="#" class="link-nav"/>Lesson1</a>
        </div>

        <div class="col-lg-3 col-md-3" style="text-align:center;">
          <a href="#" class="link-nav"/>Lesson1</a>
        </div> -->

      </div>
    </div>
  </section>

</main><!-- End #main -->
@stop
