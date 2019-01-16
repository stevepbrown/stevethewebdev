<!DOCTYPE html>
 
<html lang="en">

{{-- layouts.main.blade.php  --}}
  
  
  
  @section('head')
   
    @include('partials.part_head')
  
  @show
  
  
    @section('body')
  <!-- Body -->
        <body>
          <noscript class="bg-danger py-5" style="text-align:center; font-size:2rem;">Javascript is disabled, please enable it to make effective use of this page.</noscript>
          @section('nav-main')
            @include('partials.part_nav_main')
            @include('cookieConsent::index')
          @show
    
         
          @section('status_header')
            @include('partials.part_header_status')  
          @show
            
          @section('main')
            @yield('main')
          @show
          @section('footer')
            @include('partials.part_footer')
          @show
          @section('scripts')
            <script src="js/manifest.js"></script>
            <script src="js/vendor.js"></script>
          @show
       
      @show
        
        </body>
    <!-- body END-->
  
</html>
