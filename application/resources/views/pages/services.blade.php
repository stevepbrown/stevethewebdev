@extends('layouts.main')

@section('main')

<div class="grid-container">

    @foreach ($services as $service)
    
      {{-- <div class="grid-item" id="div-gi-{{$service->slug}}">
          <div id="div-{{$service->slug}}" class="card">
              <h5>{{$service->name}}</h5>
              <p></p>
          </div>
      </div> --}}
      <div class="grid-item" id="div-gi-{{$service->slug}}">
        <div class="card">
          <i class="fa fa-mobile fa-4x mx-auto" aria-hidden="true"></i>
          <h5 class="text-center">{{$service->slug}}</h5>
          <div class="card-body">
              <p class="card-text"> @include('content.content_{{$service->slug}}')</p>
          </div>
        </div>
    </div>
    @endforeach

</div>  



<hr/>

{{-- Grid implementation  --}}
<div class="grid-container">
  {{-- grid-item-mobile --}}
  <div class="grid-item" id="div-gi-mobile">
      <div class="card">
        <i class="fa fa-mobile fa-4x mx-auto" aria-hidden="true"></i>
        <h5 class="text-center">Mobile</h5>
        <div class="card-body">
            <p class="card-text"> @include('content.content_mobile')</p>
        </div>
      </div>
  </div>
  {{-- grid-item-design --}}
  <div class="grid-item" id="div-gi-design">
    <div class="card">
      <i class="fa fa-cubes fa-4x mx-auto" aria-hidden="true"></i>
        <h5 class="text-center">Design</h5>
        <div class="card-body">
           <p class="card-text"> @include ('content.content_design')</p>
        </div>
    </div>
  </div>
  
  {{-- grid-item-CMS --}}
  <div class="grid-item" id="div-gi-cms">
    <div class="card">
      <i class="fa fa-dashboard fa-4x mx-auto" aria-hidden="true"></i>
        <h5 class="text-center">Content Managment System (CMS)</h5>
        <div class="card-body">
           <p class="card-text"> @include ('content.content_cms')</p>
        </div>
    </div>
  </div>
  
  {{-- grid-item-ecommerce --}}
  <div class="grid-item" id="div-gi-ecommerce">
    <div class="card">
      <i class="fa fa-gbp fa-4x mx-auto" aria-hidden="true"></i>
      <h5 class="text-center">E-commerce</h5>
      <div class="card-body">
          <p class="card-text"> @include ('content.content_e-commerce')</p>
      </div>
    </div>
  </div>
  
  {{-- grid-item-copy --}}
  <div class="grid-item" id="div-gi-copy">
    <div class="card">
        <i class="fa fa-pencil fa-4x mx-auto" aria-hidden="true"></i>
        <h5 class="text-center">Copy Writing</h5>
        <div class="card-body">
           <p class="card-text"> @include ('content.content_copy-writing')</p>
        </div>
    </div>
  </div>
  
  {{-- grid-item-seo --}}
  <div class="grid-item" id="div-gi-seo">
    <div class="card">
        <i class="fa fa-search fa-4x mx-auto" aria-hidden="true"></i>
        <h5 class="text-center">Search Engine optimisation (SEO)</h5>
        <div class="card-body">
           <p class="card-text"> @include ('content.content_seo')</p>
        </div>
    </div>
  </div>
  
  {{-- grid-item-analytics --}}
  <div class="grid-item" id="div-gi-analytics">
    <div class="card">
        <i class="fa fa-area-chart fa-4x mx-auto" aria-hidden="true"></i>
        <h5 class="text-center">Web Analytics</h5>
        <div class="card-body">
           <p class="card-text"> @include ('content.content_analytics_summary')</p>
            <a href="/analytics" class="btn btn-secondary">Learn More</a>
        </div>
    </div>
  </div>
  
  {{-- grid-item-social --}}
  <div class="grid-item" id="div-gi-social">
    <div class="card">
        <i class="fa fa-facebook-square fa-4x mx-auto" aria-hidden="true"></i>
        <h5 class="text-center">Social Media</h5>
        <div class="card-body">
         <p class="card-text"> @include ('content.content_social')</p>
        </div>
    </div>
  </div>
  
  {{-- grid-item-amp --}}
  <div class="grid-item" id="div-gi-accessibility">
    <div class="card">
        <i class="fa fa-4x mx-auto" aria-hidden="true"><img src="img/AMP-Brand-Black-Icon.svg" alt="AMP brand logo"><img></i>
        <h5 class="text-center">Accelerated Mobile Pages (AMP)</h5>
        <div class="card-body">
           <p class="card-text"> @include ('content.content_amp_summary')</p>
            <a href="/amp" class="btn btn-secondary">Learn More</a>
        </div>
    </div>
  </div>

  {{-- grid-item-accessibility --}}
  <div class="grid-item" id="div-gi-amp">
    <div class="card">
        <i class="fa fa-universal-access fa-4x mx-auto" aria-hidden="true"></i>
        <h5 class="text-center">Accessibility</h5>
        <div class="card-body">
         <p class="card-text"> @include ('content.content_access')</p>
        </div>
    </div>
  </div>
</div>

@endsection
@section('scripts')
  @parent
  {{-- Additional scripts would go here  --}}
  <script src="js/custom.js"></script>
@endsection
