{{-- layouts.main.blade.php  --}}

<!DOCTYPE html>
<html lang="en">
  @section('head')
    @include('partials.part_head')
  @show

  <!-- Head END-->

  @section('body')
<!-- Body START-->
    <body>
      <noscript class="bg-danger py-5" style="text-align:center; font-size:2rem;">Javascript is disabled, please enable it to make effective use of this page.</noscript>
      @section('nav-main')
        @include('partials.part_nav_main')
        @include('cookieConsent::index')
      @show
      @section('main')
        @yield('main')
      @show
      @section('footer')
        @include('partials.part_footer')
      @show
      @section('scripts')
        <script src="js/vendor.js"></script>
        <script src="js/custom.js"></script>
      @show
    </body>
  @show

</html>
