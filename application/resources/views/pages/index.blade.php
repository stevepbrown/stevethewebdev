{{-- index.blade.php --}}


@extends('layouts.layout_principal')

@section('seo')

 <!--Place SEO here --> 

@endsection

@section('styles')

 <!-- styles here --> 

@endsection

@section('header')

 <span>Place header</span> 

@endsection

@section('main')

 @parent
 {{-- extend / override as necessary --}}

 <span>Place main here</span> 

@endsection

@section('footer')

  @parent
 <span>Place footer extensions here</span> 

@endsection

@section('scripts')
  @parent
    <span>Place supplementary scripts here</span>
@endsection
