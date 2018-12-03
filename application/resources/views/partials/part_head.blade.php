{{-- partials.part_head.blade.php --}}
  <head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta name="generator" content="Laravel">
    <meta name="author" content="Steve Brown">
    <title> {{ $title }}</title>

    {{-- Do not index pages which are not live! --}}
    @if ((env('APP_ENV'))!=='live')
        
        <meta name="robots" content="none"> 

    @endif

    {{-- Add description for SEO --}}
    <meta name="description" content="" />

    @section('styles')
        
    
    <link rel="stylesheet" href="css/app.css" type="text/css">
    
    @show
  </head>



