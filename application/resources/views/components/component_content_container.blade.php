{{-- components.content_container.blade --}}
@extends('layouts.layout_principal')


@section('page_title')
  @yield('page_title')
@endsection

@section('content')

@parent

<div id="div-content">
  <h1 class="sr-only">$page_title</h1>
  @include('cookieConsent::index')
  <div id="div-content-container" class="container-fluid">
    <main id="main" class="container container-fluid mt-3">
    {{$content}}
    </main>    
  </div>
</div>
@endsection


