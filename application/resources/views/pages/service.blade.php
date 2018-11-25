@extends('layouts.main')

@section('main')
<div class="card">
  <i class="fa fa-mobile fa-4x mx-auto" aria-hidden="true"></i>
  <h5 class="text-center">Service Name</h5>
  <div class="card-body">
      <p class="card-text"> service content text</p>
  </div>
</div>
@endsection

@section('scripts')
  @parent
  {{-- Additional scripts would go here  --}}
  <script src="js/custom.js"></script>
@endsection
