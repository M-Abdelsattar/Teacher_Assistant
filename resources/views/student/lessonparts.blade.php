@extends('layouts.master')
@section('content')
<main id="main">

  <!-- ======= Breadcrumbs ======= -->
  <section class="breadcrumbs">
    <div class="container">

      <div class="d-flex justify-content-between align-items-center">
        <h2>Lesson{{$lessonid}}</h2>
        <ol>
          <li><a href="{{route('studenthome')}}">Home</a></li>
          <li><a href="{{route('levels')}}">Lessons</a></li>
          <li><a href="{{route('units',$levelid)}}">Level{{$levelid}}</a></li>
          <li><a href="{{route('lessons',[$unitid,$levelid])}}">Unit{{$unitid}}</a></li>
          <li>Lesson{{$lessonid}}</li>

        </ol>
      </div>

    </div>
  </section><!-- End Breadcrumbs -->

  <section class="inner-page">
    <div class="container" style="text-align:center;">
      <div class="row">

        @foreach($lessonparts as $i=>$part)
        <div class="col-lg-3 col-md-3" style="text-align:center;">
            <a href="{{route('part',$part->id)}}" class="link-nav"/>Part{{$i+1}}</a>
        </div>
        @endforeach
        <!-- <div class="col-lg-3 col-md-3" style="text-align:center;">
          <a href="#" class="link-nav"/>Part1</a>
        </div>
        <div class="col-lg-3 col-md-3" style="text-align:center;">
            <a href="#" class="link-nav"/>Part1</a>
        </div>

        <div class="col-lg-3 col-md-3" style="text-align:center;">
          <a href="#" class="link-nav"/>Part1</a>
        </div>
        <div class="col-lg-3 col-md-3" style="text-align:center;">
            <a href="#" class="link-nav"/>Part1</a>
        </div>

        <div class="col-lg-3 col-md-3" style="text-align:center;">
          <a href="#" class="link-nav"/>Part</a>
        </div> -->

      </div>
    </div>
  </section>

</main><!-- End #main -->
@stop
