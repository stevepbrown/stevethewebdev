
@extends('layouts.layout_principal')

@section('content')
<div class="card">
<i class="fa {{((!blank($service->icon))?$service->icon:'fa-ban')}} fa-4x mx-auto" aria-hidden="true"></i>
  <h5 class="text-center">{{$page->title}}</h5>
  <div id="div-service_abstract" class="card-body">
        
          <p class="card-text"> @include('content.content_services_'.$service->slug.'_summary')</p>
          
  </div>
</div>
<div id="div-service-detail" class="bg-danger">
  @include('content.content_services_'.$service->slug.'_detail')
</div>
@endsection


