@extends('layouts.master')
@section('content')
<main id="main">

  <!-- ======= Breadcrumbs ======= -->
  <section class="breadcrumbs">
    <div class="container">

      <div class="d-flex justify-content-between align-items-center">
        <h2>Home</h2>
      </div>

    </div>
  </section><!-- End Breadcrumbs -->

  <section class="inner-page">
    <div class="container">
      <div class="row">

        <div class="col-lg-6 col-md-6" style="text-align:center;">
          <a href="{{route('levels')}}" class="link-quiz link-nav"/>Study</a>
        </div>
        
        <div class="col-lg-6 col-md-6" style="text-align:center;">
            <a href="#" class="link-quiz link-nav" style="padding:30 0;"/>New Quizes</a>
        </div>


      </div>
    </div>
  </section>

</main><!-- End #main -->
@stop
