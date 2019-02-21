{{-- layout_principal-blade --}}
<!DOCTYPE html>
<html lang="en-gb">

{{-- Head --}}
@component('components.component_head')
    
    @slot('title')
      @yield('title');
    @endslot
    
    @slot('description')
        @yield('description');
    @endslot
        
    @slot('supplementary_styles')
      @yield('supplementary_styles')
    @endslot
@endcomponent
{{-- END - Head --}}

{{-- Body --}}
    <body>
        <a href="#main-row-main" class="sr-only sr-only-focusable">Skip to main content</a>
        <noscript>This page uses javascript to provide an interactive browsing experience &#46; Please enable javascript to experience the site in its intended form &#46;</noscript>
        <div id="div-content">
            <!-- Cookie consent? -->    
            @include('cookieConsent::index')
            @yield('content')
            @yield('supplementary_scripts')
        </div>
    </body>
{{-- END - body --}}
</html>
