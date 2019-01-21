{{-- index.blade.php --}}


@extends('layouts.layout_principal')

@section('seo')

 <!--Place SEO here --> 

@endsection

@section('styles')

 <!-- styles here --> 
 <link rel="stylesheet" href="/css/app.css">
@endsection
@section('content')
  <div id="div-grid-container" class="grid-container">
    <header></header>
    <nav></nav>
    <div id="div-brand"></div>
    <h1></h1>
    <div id="div-content-container"></div>
    

  </div>
@endsection

@section('scripts')
  @parent
    {{-- Place supplementary scripts here --}}
@endsection
