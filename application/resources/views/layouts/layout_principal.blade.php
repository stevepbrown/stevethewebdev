{{-- layout_principal-blade --}}
<!DOCTYPE html>
<html lang="en-gb">
<head>
    @section('head')
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta name="generator" content="Laravel">
    <meta name="author" content="Steve Brown">
    <meta name="description" content="A comprehensive description here">
    <meta name="keywords" content="A list of keywords">
    <title>A comprehensive title here</title>
    
    @section('styles')
    <!-- Standard styles here -->
    <link rel="stylesheet" href="/css/app.css">
    @show
    
    @show
    {{-- Do not index pages which are not live! --}}
    @if ((env('APP_ENV'))!=='live')

    <meta name="robots" content="noindex, nofollow">

    @endif
</head>
<body>
    <noscript>This page uses javascript to provide an interactive browsing experience &#46; Please enable javascript to
        experience the site in its intended form &#46;</noscript>
    <a href="#main-row-main" class="sr-only sr-only-focusable">Skip to main content</a>
    <div id="div-content">
            @yield('content')
    </div>
    <div id="div-scripts" hidden>
        @section('scripts')
        <script src="js/manifest.js"></script>
        <script src="js/vendor.js"></script>
        {{-- extend / override as necessary, inlcuding polyfills --}}
        @show
    </div>
</body>
</html>
