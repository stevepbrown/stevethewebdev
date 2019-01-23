{{-- index.blade.php --}}


@extends('layouts.layout_principal')

@section('seo')

 <!--Place SEO here --> 

@endsection

@section('styles')
  @parent
  {{-- Place any supplementary styles here --}}
@endsection


{{-- Note that here we're using grid to position elements dynamically, and so the order and relative
placement of elements is independant of the order in which the appear here! --}}
@section('content')
<div class="grid-A">
  <header>THIS IS YOUR HEADER
      
  </header>
  <nav>THIS IS YOUR NAV</nav>
  <main>THIS IS YOUR MAIN</main>
  <footer>THIS IS YOUR FOOTER</footer>
  
 
  {{-- <div id="div-brand"></div> --}}
  {{-- <h1></h1> --}}
  {{-- <h1>THIS IS YOUR H1</h1> --}}
  {{-- <main></main> --}}
  {{-- <div class="carousel"></div> --}}
  {{-- <div id="div-content-container"></div> --}}
  {{-- <div id="div-footer-partial"></div> --}}
  {{-- <div id="div-footer-extended"></div> --}}
</div>
  @endsection

@section('scripts')
  @parent
    {{-- Place supplementary scripts here --}}
@endsection
