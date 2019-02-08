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
  <h1 class="sr-only">Index page</h1>
  <div id="div-content-container" class="container-fluid">
  <header id="header-row-header" class="row">
    <nav class="col-12 navbar navbar-light navbar-expand-md navbar-dark bg-dark">
      @include('partials.part_nav_main')
    </nav> 
  </header>
  <main id="main-row-main" class="row">
    <section class="col-12 order-12">
        <div id="div-carousel-services" data-ride="carousel" class="carousel slide d-none d-md-block">
          {{--
            -templates
            -mobile
            - bespoke
            - AMP
            - accessible
            - copy --}}
            <ol class="carousel-indicators">
              <li id="li-indicator-welcome" data-target="#div-carousel-services" data-slide-to="0" class="active"></li>
              {{-- mobile --}}
              <li id="li-indicator-mobile" data-target="#div-carousel-services" data-slide-to="1"></li>
              {{-- bespoke --}}
              <li id="li-indicator-bespoke" data-target="#div-carousel-services" data-slide-to="2"></li>
              {{-- templates --}}
              <li id="li-indicator-templates" data-target="#div-carousel-services" data-slide-to="3"></li>
              {{-- copy --}}
              <li id="li-indicator-copy" data-target="#div-carousel-services" data-slide-to="4"></li>
              {{-- AMP --}}
              <li id="li-indicator-AMP" data-target="#div-carousel-services" data-slide-to="5"></li>
              {{-- Accessible --}}
              <li id="li-indicator-accessible" data-target="#div-carousel-services" data-slide-to="6"></li>
            </ol>
            <div class="carousel-inner" data-pause="hover">
              <div id="div-slide-welcome" class="jumbotron carousel-item active">
                <h2 class="display-1 text-center">Welcome</h2>
                <span class="lead">@include('content.content_subtitle')</p>
              </div>
              <div id="div-slide-mobile" class="container-fluid carousel-item card">
                <div class="card-header text-center">
                  <i class="fa fa-mobile fa-4x aria-hidden"></i>
                  <h3 class="display-4">Mobile-first</h3>
                </div>
                <div class="card-body">
                  @include('content.content_services_mobile')
                </div>
              </div>
      
              <div id="div-slide-bespoke" class="container-fluid carousel-item card">
                <div class="card-header text-center">
                  <i class="fa fa-cubes fa-4x aria-hidden"></i>
                  <h3 class="display-4">Design</h3>
                </div>
                <div class="card-body">
                  @include('content.content_services_bespoke')
                </div>
              </div>
      
              <div id="div-slide-accessible" class="container-fluid carousel-item card">
                <div class="card-header text-center">
                  <i class="fa fa-universal-access fa-4x aria-hidden"></i>
                  <h3 class="display-4">Accessibility</h3>
                </div>
                <div class="card-body">
                  @include('content.content_services_accessibility')
                </div>
              </div>
      
              <div id="div-slide-copy" class="container-fluid carousel-item card">
                <div class="card-header text-center">
                  <i class="fa fa-pencil fa-4x aria-hidden"></i>
                  <h3 class="display-4">Copy</h3>
                </div>
                <div class="card-body">
                  @include('content.content_services_copy')
                </div>
              </div>
      
              <div id="div-slide-AMP" class="container-fluid carousel-item card">
                <div class="card-header text-center">
                  <i class="fa fa-X fa-4x aria-hidden">
                    <img src="img/AMP-Brand-Black-Icon.svg" alt="AMP brand logo"><img>
                  </i>
                  <h3 class="display-4">Accelerated Mobile Pages (AMP)</h3>
                </div>
                <div class="card-body">
                  @include('content.content_services_amp_summary')
                </div>
              </div>
      
            </div>
            <a class="carousel-control-prev" href="#div-carousel-services" role="button" data-slide="prev">
              <span class="carousel-control-prev-icon" aria-hidden="true"></p>
              <span class="sr-only">Previous</p>
            </a>
            <a class="carousel-control-next" href="#div-carousel-services" role="button" data-slide="next">
              <span class="carousel-control-next-icon" aria-hidden="true"></p>
              <span class="sr-only">Next</p>
            </a></div>

            {{-- Static services --}}
            <div id="div-static-services" class="d-block d-md-none">
            {{-- mobile --}}
              <section id="section-static-mobile" class="container-fluid card">
                <h3 class="sr-only">Mobile</h3>
                <div class="card-header text-center">
                    <i class="fa fa-mobile fa-4x aria-hidden"></i>
                    <p class="display-4">Mobile-first</p>
                  </div>
                  <div class="card-body">
                    @include('content.content_services_mobile')
                  </div>
              </section>
            {{-- bespoke --}}
              <section id="section-static-design" class="container-fluid card">
                <h3 class="sr-only">Design</h3>
                <div class="card-header text-center">
                    <i class="fa fa-cubes fa-4x aria-hidden"></i>
                    <p class="display-4">Design</p>
                  </div>
                  <div class="card-body">
                    @include('content.content_services_bespoke')
                  </div>
              </section>
            {{-- templates --}}
              <section id="section-static-template" class="container-fluid card">
                <h3 class="sr-only">Templated Sites</h3>
                <div class="card-header text-center">
                    <i class="fa fa-columns fa-4x aria-hidden"></i>
                    <p class="display-4">Templates</p>
                  <div class="card-body">
                    @include('content.content_services_templates')
                  </div>
              </section>
            {{-- copy --}}
              <section id="section-static-copy" class="container-fluid card">
                <h3 class="sr-only">Copy Writing</h3>
                <div class="card-header text-center">
                    <i class="fa fa-pencil fa-4x aria-hidden"></i>
                    <p class="display-4">Copy</p>
                  </div>
                  <div class="card-body">
                    @include('content.content_services_copy')
                  </div>
              </section>
            {{-- AMP --}}
              <section id="section-static-AMP" class="container-fluid card">
                <h3 class="sr-only">Accelerated Mobile Pages</h3>
                <div class="card-header text-center">
                    <i class="fa fa-4x aria-hidden">
                      <img src="img/AMP-Brand-Black-Icon.svg" alt="AMP brand logo"><img>
                    </i>
                    <p class="display-4">Accelerated Mobile Pages (AMP)</p>
                  </div>
                  <div class="card-body">
                      @include('content.content_services_amp_summary')
                    </div>
              </section>
            {{-- Accessible --}}
              <section id="section-static-accessible" class="container-fluid card">
                <h3 class="sr-only">Accessibility</h3>
                <div class="card-header text-center">
                    <i class="fa fa-universal-access fa-4x"></i>
                    <p class="display-4">Accessibility</p>
                  </div>
                  <div class="card-body">
                    @include('content.content_services_accessibility')
                  </div>
              </section>
          </div>

          
    </section>
    <section id="section-about" class="col-12 order-1 order-md-12">
        About
    </section>
  </main>
  <footer id="footer-row-footer" class="row bg-dark">
    <div id="div-footer" class="col-12 col-md6 order-md-12">
      @include('partials.part_footer')
    </div>
    <div id="div-footer-extended" class="d-none d-md-block col-md-6 order-md-1">Extendedfooter</div>
  </footer>
</div>  
@endsection

@section('scripts')
@parent
{{-- Place supplementary scripts here --}}
@endsection