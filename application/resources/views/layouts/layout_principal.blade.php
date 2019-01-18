{{-- layout_principal-blade --}}

{{-- 
    
    1. Static container tags are set here, outside of any @section
            
    2. Container tags within moveable sections are set outside of this layout

    3. Sections which contain actual child elements, as opposed to @section declarations, are rendered immediately with a @show, all others with an @endsection

    4. Sections with an @endsection can be overridden or extended. If extended, ensure there is a @parent declaration in the inheriting view.

    5. Blocks of contiguous content can be rendered with @yield instead of a section, as long as the section is specified on the inheriting page.

             
    
    --}}
<!DOCTYPE html>
<html lang="en-gb">
    <head>
        @section('head')
            <meta charset="utf-8">
            <meta name="viewport" content="width=device-width, initial-scale=1.0">
            <meta name="generator" content="Laravel">
            <meta name="author" content="Steve Brown">
            <title> {{ $title }}</title>
            @yield('seo')
            @yield('styles')
        @show                 
    </head>
    <body>
        @section('header')
            <header id="header-main-header">
                @yield('header')    
            </header>
        @show       
    
        @section('main')
            <div id="div-main">
                <h1>H1 here</h1>
                 @yield('main')
            </div>
        @show

        <footer id="footer" class="mt-4 text-color-ancillary">
            @section('footer')
                @yield('footer')
                @include('partials.part_footer')
            @show
        </footer>    
        
        <div id="div-scripts">
            @section('scripts')
                <script src="js/manifest.js"></script>
                <script src="js/vendor.js"></script>
                {{-- extend / override as necessary, inlcuding polyfills --}}
            @show
        </div>
    </body>
</html>
