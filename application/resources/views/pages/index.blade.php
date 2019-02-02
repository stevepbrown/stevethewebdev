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
<div class="container grid-A">
    
  {{-- Main Navigation --}}
  @include('partials.part_nav_main')
  <main class="z0">
    <div id="carouselServices" class="z1 carousel slide" data-ride="carousel">
      {{-- These are the current active services, build out on basis of hard-coded value and then, then make dynamic
      later on

      -templates
      -mobile
      - bespoke
      - AMP
      - accessible
      - copy

      --}}
      <ol class="carousel-indicators">
        <li id="li-indicator-welcome" data-target="#carouselServices" data-slide-to="0" class="active"></li>
        <li id="li-indicator-mobile" data-target="#carouselServices" data-slide-to="1"></li>
        <li id="li-indicator-bespoke" data-target="#carouselServices" data-slide-to="2"></li>
        <li id="li-indicator-accessible" data-target="#carouselServices" data-slide-to="3"></li>
        <li id="li-indicator-copy" data-target="#carouselServices" data-slide-to="4"></li>
        <li id="li-indicator-AMP" data-target="#carouselServices" data-slide-to="5"></li>
      </ol>
      <div class="carousel-inner" data-pause="hover">
        <div id="div-slide-welcome" class="jumbotron carousel-item active">
          <h2 class="display-1 text-center">Welcome</h2>
          <span class="lead">@include('content.content_subtitle')</span>
        </div>
        <div id="div-slide-mobile" class="container-fluid carousel-item card">
          <div class="card-header text-center">
            <i class="fa fa-mobile fa-4x"></i>
            <h3 class="display-4">Mobile-first</h3>
          </div>
          <div class="card-body">
            @include('content.content_services_mobile')
          </div>
        </div>

        <div id="div-slide-bespoke" class="container-fluid carousel-item card">
          <div class="card-header text-center">
            <i class="fa fa-cubes fa-4x"></i>
            <h3 class="display-4">Design</h3>
          </div>
          <div class="card-body">
            @include('content.content_services_bespoke')
          </div>
        </div>

        <div id="div-slide-accessible" class="container-fluid carousel-item card">
          <div class="card-header text-center">
            <i class="fa fa-universal-access fa-4x"></i>
            <h3 class="display-4">Accessibility</h3>
          </div>
          <div class="card-body">
            @include('content.content_services_accessibility')
          </div>
        </div>

        <div id="div-slide-copy" class="container-fluid carousel-item card">
          <div class="card-header text-center">
            <i class="fa fa-pencil fa-4x"></i>
            <h3 class="display-4">Copy</h3>
          </div>
          <div class="card-body">
            @include('content.content_services_copy')
          </div>
        </div>

        <div id="div-slide-AMP" class="container-fluid carousel-item card">
          <div class="card-header text-center">
            <i class="fa fa-X fa-4x">
              <img src="img/AMP-Brand-Black-Icon.svg" alt="AMP brand logo"><img>
            </i>
            <h3 class="display-4">Accelerated Mobile Pages (AMP)</h3>
          </div>
          <div class="card-body">
            @include('content.content_services_amp_summary')
          </div>
        </div>

      </div>
      <a class="carousel-control-prev" href="#carouselServices" role="button" data-slide="prev">
        <span class="carousel-control-prev-icon" aria-hidden="true"></span>
        <span class="sr-only">Previous</span>
      </a>
      <a class="carousel-control-next" href="#carouselServices" role="button" data-slide="next">
        <span class="carousel-control-next-icon" aria-hidden="true"></span>
        <span class="sr-only">Next</span>
      </a>
    </div>
    <section id="z1 section-company-info">THIS IS YOUR SECTION</section>
    <footer class="z0">THIS IS YOUR FOOTER</footer>
    <div class="z1" id="div-brand">THIS IS YOUR BRAND</div>
  </main>

  <h1 class="z1 sr-only">Landing page</h1>
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