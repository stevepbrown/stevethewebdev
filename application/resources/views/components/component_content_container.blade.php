{{-- components.content_container.blade --}}

<div id="div-content">
  <h1 class="sr-only">$title</h1>
  @include('cookieConsent::index')
  <div id="div-content-container" class="container-fluid">
    {{$content}}  
  </div>
</div>


