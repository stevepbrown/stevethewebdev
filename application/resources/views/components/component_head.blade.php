{{-- component.head.blade --}}
<head>
        <meta charset="utf-8">
        <meta name="viewport" content="width=device-width, initial-scale=1.0">
        <meta name="generator" content="Laravel">
        <meta name="author" content="Steve Brown">
        <meta name="description" content="{{$meta_description}}">
        <meta name="csrf-token" content="{{ csrf_token() }}">
        <title title="{{$meta_title_title}}">{{$keyword_title}}</title>
        <link rel="stylesheet" href="{{mix('css/app.css')}}">
        {{$supplementary_styles}}
        @if ((env('APP_ENV'))!=='live')
        <!-- Do not index pages which are not live! -->
        <meta name="robots" content="noindex, nofollow">
        @endif
</head>