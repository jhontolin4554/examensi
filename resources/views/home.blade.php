@extends('layouts.app')
@section('content')

<main class="main" id="top">

    <section class="py-xxl-10 pb-0" id="home">
      <div class="bg-holder bg-size" style="background-image:url(assets/img/gallery/hero-bg.png);background-position:top center;background-size:cover;">
      </div>
      <!--/.bg-holder-->

      <div class="container">
        <div class="row min-vh-xl-100 min-vh-xxl-25">
          <div class="col-md-75 col-xl-6 col-xxl-5 text-md-start text-center py-6">
            <br>
            <br>
           <h1> <strong>Sistema De Control De </strong><br />&nbsp;<strong> Expedientes Judiciales.</strong></h1>
                      </div>
                      <br>
                      <br>
                      <br>
                      <div class="col-md-5 col-xl-6 col-xxl-7 order-0 order-md-1 text-end">
                          <img src="{{asset('img/folders.jpg')}}" alt="hero-header" /></div>

        </div>
      </div>
    </section>


  </main>
@endsection
