{{-- templates.template_sbs_landing_page --}}
@extends('layouts.main')
@section('main')

{{$title = $trade->name}}

<h3 style="background-color:yellow;">Trade templates - {{$trade->name}}</h3>         
<iframe src="/trades" width="100% "frameborder="0"></iframe>

@endsection

@section('scripts')
@endsection