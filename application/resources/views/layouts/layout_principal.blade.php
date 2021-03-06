{{-- layout_principal-blade --}}
<!DOCTYPE html>
<html lang="en-gb">
{{-- Head --}}



@component('components.component_head')
  
   @slot('meta_title_title')
   {{$page->meta_title_title}} 
   @endslot
   
   @slot('meta_description')
   {{$page->meta_description}} 
   @endslot
        
   @slot('keyword_title')
   {{$page->keyword_title}} 
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
    {{-- Header --}}
    <header id="header-main-header">
            
        @component('components.component_brand_header')
            {{-- Branding component --}}
        @endcomponent
        
        @component('components.component_nav_main')
            @slot('display_title')
                {{$page->display_title}}
            @endslot
        @endcomponent

    </header>
    {{-- END - Header --}}

    {{-- Content --}}                                      
    <div id="div-content" class="container-fluid">
        <h1 class="sr-only">$page_title</h1>
        <div id="div-cookie-consent" class="container-fluid">
               
        @if (isset($consentCookies) && $consentCookies === true) 
            @verbatim
            <!-- The user has already given cookie consent -->
            @endverbatim
              
        @else 
            
            @component('components.component_consent_cookie',['consentCookies'=>$consentCookies])
             {{-- Consent declaration will be shown  --}}
            @endcomponent       
                              
        @endif
     
         

        </div>
        <main id="main">
          @yield('content')
        </main>    
    </div>

    {{-- END - Content --}}
    
    {{-- Footer --}}
    <footer id="footer-row-footer" class="row bg-dark brand">
            
            @component('components.component_standard_footer')
            {{-- Standard footer componnent --}}
            @endcomponent 
            
            @component('components.component_extended_footer')
            {{-- Extended footer component --}}
            @endcomponent  

    </footer>
    {{-- END - Footer --}}

    {{-- Scripts --}}
    @component('components.component_scripts')
        @slot('supplementary_scripts')
            @yield('supplementary_scripts')                
        @endslot            
    @endcomponent
    {{-- END - Scripts --}}
</body>
{{-- END - body --}}
</html>
