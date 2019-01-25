{{-- index.blade.php --}}


@extends('layouts.layout_principal')

@section('seo')

 <!--Place SEO here --> 

@endsection

@section('styles')
  @parent
  {{-- Place any supplementary styles here --}}
@endsection


{{-- Note that here we're using grid to position elements dynamically, and so the order and relative
placement of elements is independant of the order in which the appear here!

Uses 'z' classes to arrange placement on z-axis

--}}
@section('content')
<div class="container-fluid grid-A">
      <header class="z0">THIS IS YOUR HEADER</header>
      <main class="z0 container-fluid"></main>
      <div id="carouselExampleIndicators" class="z1 carousel slide" data-ride="carousel">
          <ol class="z1 carousel-indicators">
            <li data-target="#carouselExampleIndicators" data-slide-to="0" class="active"></li>
            <li data-target="#carouselExampleIndicators" data-slide-to="1"></li>
            <li data-target="#carouselExampleIndicators" data-slide-to="2"></li>
          </ol>
          <div class="carousel-inner">
            <div class="carousel-item active">
              {{-- <img class="d-block w-100" src="..." alt="First slide"> --}}
              <div class="display-4 text-center">Slide 1</div>
            </div>
            <div class="carousel-item">
              {{-- <img class="d-block w-100" src="..." alt="Second slide"> --}}
              <div class="display-4 text-center">Slide 2</div>
            </div>
            <div class="carousel-item text-center">
              {{-- <img class="d-block w-100" src="..." alt="Third slide"> --}}
              <div class="display-4 text-center">Slide 3</div>
            </div>
          </div>
          <a class="carousel-control-prev" href="#carouselExampleIndicators" role="button" data-slide="prev">
            <span class="carousel-control-prev-icon" aria-hidden="true"></span>
            <span class="sr-only">Previous</span>
          </a>
          <a class="carousel-control-next" href="#carouselExampleIndicators" role="button" data-slide="next">
            <span class="carousel-control-next-icon" aria-hidden="true"></span>
            <span class="sr-only">Next</span>
          </a>
        </div>
      <section id="z1 section-company-info">THIS IS YOUR SECTION</section>
      <footer class="z0">THIS IS YOUR FOOTER</footer> 
      <div class="z1" id="div-brand">THIS IS YOUR BRAND</div>
      <nav class="z1">THIS IS YOUR NAV</nav>
      <h1 class="z1">THIS IS YOUR H1</h1>
      <div class="z1" id="div-footer-partial">
        @include('partials.part_footer')
      </div>
      <div class="z1" id="div-footer-extended">FOOTER EXTENDED</div>
</div>
  @endsection

@section('scripts')
  @parent
    {{-- Place supplementary scripts here --}}
@endsection
