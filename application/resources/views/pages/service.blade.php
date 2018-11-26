@extends('layouts.main')


{{-- This is used in the head partial --}}
{{$title = $service->name}}



@section('main')
<div class="card">
  <i class="fa fa-mobile fa-4x mx-auto" aria-hidden="true"></i>
  <h5 class="text-center">{{$title}}</h5>
  <div class="card-body">
          {{-- {{dd('content.content_services_'.$service->slug)}} --}}
          <p class="card-text"> @include('content.content_services_'.$service->slug)</p>
  </div>
</div>
@endsection

@section('scripts')
  @parent
  {{-- Additional scripts would go here  --}}
  {{-- <script src="js/custom.js"></script> --}}
@endsection
