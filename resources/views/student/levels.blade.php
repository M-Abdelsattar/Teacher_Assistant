@extends('layouts.master')
@section('content')
<main id="main">

  <!-- ======= Breadcrumbs ======= -->
  <section class="breadcrumbs">
    <div class="container">

      <div class="d-flex justify-content-between align-items-center">
        <h2>Levels</h2>
        <ol>
          <li><a href="{{route('studenthome')}}">Home</a></li>
          <li>Levels</li>

        </ol>
      </div>

    </div>
  </section><!-- End Breadcrumbs -->

  <section class="inner-page">
    <div class="container" style="text-align:center;">
      <div class="row">

        <div class="col-lg-3 col-md-3" style="text-align:center;">

        </div>

        <div class="col-lg-3 col-md-3" style="text-align:center;">
          <a href="{{route('units',2)}}" class="link-nav"/>Level2</a>
        </div>
        <div class="col-lg-3 col-md-3" style="text-align:center;">
            <a href="{{route('units',3)}}" class="link-nav"/>Level3</a>
        </div>

        <div class="col-lg-3 col-md-3" style="text-align:center;">

        </div>
      </div>

    </div>
  </section>

</main><!-- End #main -->
@stop
