{{-- index.blade.php --}}


@extends('layouts.layout_principal')

@section('seo')

 <!--Place SEO here --> 

@endsection

@section('styles')

 <!-- styles here --> 
 <link rel="stylesheet" href="/css/app.css">
@endsection

@section('header')

 <span>Place header</span> 

@endsection

@section('main')

 <div class="layout-A">
   <header class="header">HEADER</header>
   <main class="main">MAIN</main>
   <footer class="footer">FOOTER</footer>
  </div>  

@endsection


@section('scripts')
  @parent
    {{-- Place supplementary scripts here --}}
@endsection
