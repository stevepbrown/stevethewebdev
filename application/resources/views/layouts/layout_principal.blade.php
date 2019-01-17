<!DOCTYPE html>
<html lang="en-gb">

@section('head')
    <head>
            <meta charset="utf-8">
            <meta name="viewport" content="width=device-width, initial-scale=1.0">
            <meta name="generator" content="Laravel">
            <meta name="author" content="Steve Brown">
            <title> {{ $title }}</title>
            @yield('seo')
            @yield('styles')                  
    </head>

@endsection
@section('body')
    <body>
    @section('header')
        <header id="header-main-header">
            @yield('branding')    
            <nav>
                @yield('navigation')
            </nav>
            <div id="div-main">
            @yield('main')
            </div>
                  </header>
        @endsection 

        @section('scripts')
        
        @endsection
    </body>
@endsection

</html>
