{{-- pages.templates.blade.php --}}
@extends('layouts.layout_principal')

{{-- Yielded parameters --}}
@section('page_title')
  {{$page_title}}
@endsection

@section('meta_title')
  Here you can place an extensive meta title
@endsection

@section('description')
  Here you can place an extensive meta description
@endsection


@section('supplementary_styles')
  <!-- Supplementarystyles go here -->
@endsection

@section('supplementary_scripts')
  <!-- Supplementary scripts go here -->
@endsection


{{-- END - yielded parameters --}}


<ul id="ul-trade-links">
        @isset($links)    
        @foreach ($links as $link)
            <li><a href="/templates?trade={{$link->slug}}">{{$link->name}}</a></li>
        @endforeach
        
        @else
        
            <span>No links were returned</span>
            </ul>
        
        
        @endisset
        </ul>