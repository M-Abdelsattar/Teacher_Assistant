@extends('layouts.master')
@section('content')
<main id="main">

  <!-- ======= Breadcrumbs ======= -->
  <section class="breadcrumbs">
    <div class="container">

      <div class="d-flex justify-content-between align-items-center">
        <h2>Level{{$levelid}}</h2>
        <ol>
          <li><a href="{{route('studenthome')}}">Home</a></li>
          <li><a href="{{route('levels')}}">Lessons</a></li>
          <li>Level{{$levelid}}</li>
        </ol>
      </div>

    </div>
  </section><!-- End Breadcrumbs -->

  <section class="inner-page">
    <div class="container" style="text-align:center;">
      <div class="row">
        @for($i=1;$i<=$unitscount;$i++)
        <div class="col-lg-3 col-md-3" style="text-align:center;">
            <a href="{{route('lessons',[$i,$levelid])}}" class="link-nav"/>Unit{{$i}}</a>
        </div>
        @endfor
        <!-- <div class="col-lg-3 col-md-3" style="text-align:center;">
          <a href="#" class="link-nav"/>Unit2</a>
        </div>
        <div class="col-lg-3 col-md-3" style="text-align:center;">
            <a href="#" class="link-nav"/>Unit3</a>
        </div>

        <div class="col-lg-3 col-md-3" style="text-align:center;">
          <a href="#" class="link-nav"/>Unit4</a>
        </div>

        <div class="col-lg-3 col-md-3" style="text-align:center;">
            <a href="#" class="link-nav"/>Unit5</a>
        </div>

        <div class="col-lg-3 col-md-3" style="text-align:center;">
          <a href="#" class="link-nav"/>Unit6</a>
        </div> -->

      </div>
    </div>
  </section>

</main><!-- End #main -->
@stop
