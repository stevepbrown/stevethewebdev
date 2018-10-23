@extends('layouts.main')

@section('main')

  <div class="jumbotron">
    <h2 class="display-4">Hello, I&apos;m Steve , a freelance web developer, at your service! </h2>
    <h3 class="lead"> @include('content.content_subtitle')</h3>
  </div>


  <!-- test cards starts-->
  <div class="container-fluid">
    <div class="row">
    <!-- mobile -->
    <div class="col-xs-12 col-md-6 col-lg-4 col-xl-3">
      <div id="div-card-mobile" class="card">
        <i class="fa fa-mobile fa-4x mx-auto" aria-hidden="true"></i>
        <h5 class="text-center">Mobile</h5>
        <div class="card-body">
           <p class="card-text"> @include('content.content_mobile')</p>
        </div>
      </div>
    </div>




    <!-- design -->
    <div class="col-md-6 col-lg-4 col-xl-3">
      <div id="div-card-design" class="card">
        <i class="fa fa-cubes fa-4x mx-auto" aria-hidden="true"></i>
        <h5 class="text-center">Design</h5>
        <div class="card-body">
           <p class="card-text"> @include ('content.content_design')</p>
        </div>
      </div>
    </div>
    <!-- CMS -->
    <div class="col-md-6 col-lg-4 col-xl-3">
      <div id="div-card-cms" class="card">
        <i class="fa fa-dashboard fa-4x mx-auto" aria-hidden="true"></i>
        <h5 class="text-center">Content Managment System (CMS)</h5>
        <div class="card-body">
           <p class="card-text"> @include ('content.content_cms')</p>
        </div>
      </div>
    </div>
    <!-- e-commerce -->
    <div class="col-md-6 col-lg-4 col-xl-3">
      <div id="div-card-ecommerce" class="card">
        <i class="fa fa-gbp fa-4x mx-auto" aria-hidden="true"></i>
        <h5 class="text-center">E-commerce</h5>
        <div class="card-body">
           <p class="card-text"> @include ('content.content_e-commerce')</p>
        </div>
      </div>
    </div>
    <!-- copy-writing -->
    <div class="col-md-6 col-lg-4 col-xl-3">
      <div id="div-card-copywriting" class="card">
        <i class="fa fa-pencil fa-4x mx-auto" aria-hidden="true"></i>
        <h5 class="text-center">Copy Writing</h5>
        <div class="card-body">
           <p class="card-text"> @include ('content.content_copy-writing')</p>
        </div>
      </div>
    </div>
    <!-- SEO -->
    <div class="col-md-6 col-lg-4 col-xl-3">
      <div id="div-card-seo" class="card">
        <i class="fa fa-search fa-4x mx-auto" aria-hidden="true"></i>
        <h5 class="text-center">Search Engine optimisation (SEO)</h5>
        <div class="card-body">
           <p class="card-text"> @include ('content.content_seo')</p>
        </div>
      </div>
    </div>
    <!-- Web analytics-->
    <div class="col-md-6 col-lg-4 col-xl-3">
      <div id="div-card-analytics" class="card">
        <i class="fa fa-area-chart fa-4x mx-auto" aria-hidden="true"></i>
        <h5 class="text-center">Web Analytics</h5>
        <div class="card-body">
           <p class="card-text"> @include ('content.content_analytics_summary')</p>
            <a href="/analytics" class="btn btn-secondary">Learn More</a>
        </div>
            </div>
    </div>
    <!-- Social media -->
    <div class="col-md-6 col-lg-4 col-xl-3">
      <div id="div-card-social-media" class="card">
        <i class="fa fa-facebook-square fa-4x mx-auto" aria-hidden="true"></i>
        <h5 class="text-center">Social Media</h5>
        <div class="card-body">
         <p class="card-text"> @include ('content.content_social')</p>
        </div>
      </div>
    </div>
    <!--AMP -->
    <div class="col-md-6 col-lg-4 col-xl-3">
      <div id="div-card-amp" class="card">
        <i class="fa fa-4x mx-auto" aria-hidden="true"><img src="img/AMP-Brand-Black-Icon.svg" alt="AMP brand logo"><img></i>
        <h5 class="text-center">Accelerated Mobile Pages (AMP)</h5>
        <div class="card-body">
           <p class="card-text"> @include ('content.content_amp_summary')</p>
            <a href="/amp" class="btn btn-secondary">Learn More</a>
        </div>
      </div>
    </div>
      <!-- Accessibility-->
    <div class="col-md-6 col-lg-4 col-xl-3">
      <div id="div-card-accessibility" class="card">
        <i class="fa fa-universal-access fa-4x mx-auto" aria-hidden="true"></i>
        <h5 class="text-center">Accessibility</h5
        <div class="card-body">
         <p class="card-text"> @include ('content.content_access')</p>
        </div>
      </div>
    </div>
@endsection
@section('scripts')
  @parent
  {{-- Additional scripts would go here  --}}
  <script src="js/custom.js"></script>
@endsection
