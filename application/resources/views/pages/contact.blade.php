{{-- pages.X.blade.php --}}

@extends('layouts.main')
@section('main')
  <main class="container container-fluid mt-3">



  <form action="/contact" id="frm-contact" method="post" novalidate>
    {{ csrf_field() }}
    @if ((session('status')) =='success')
    <div id="div-success" class="text-center alert alert-success">
      <span class="g-font-3">The form submitted successfully, thank you for your enquiry.</span>
     </div>
   @elseif ((session('status')) =='failed')
     <div id="div-failed" class="text-center alert alert-danger">
       <span class="g-font-3">The form was not submitted, please check errors & try again</span>
      </div>
    @endif

    <fieldset id="fieldset-contact-details" class="text-color-ancillary">
      <legend class="text-center text-md-left">Contact Details</legend>
      {{-- First Name --}}
      <div class="form-group {{ ($errors->has('firstName'))? 'alert alert-danger':''}}">
        <label for="txtFirstName">First Name&nbsp;&#42;</label>
        <input id="txtFirstName" class="form-control" name="firstName" placeholder="Enter your first (given) name" type="text" value="{{ old('firstName') }}"/>
        @if ($errors->has('firstName'))
          <ul id="ul-error-first-name" class="alert">
            @foreach ($errors->get('firstName') as $fieldError)
              <li>{{$fieldError}}</li>
            @endforeach
          </ul>
        @endif
      </div>

        {{-- Surname --}}
        <div class="form-group {{ ($errors->has('surname'))? 'alert alert-danger':''}}">
          <label for="txtSurname">Surname&nbsp;&#42;</label>
            <input id="txtSurname" class="form-control" name="surname" placeholder="Enter your surname (family) name" type="text" value="{{ old('surname') }}"/>
            @if ($errors->has('surname'))
              <ul id="ul-error-surname" class="alert">
                @foreach ($errors->get('surname') as $fieldError)
                  <li>{{$fieldError}}</li>
                @endforeach
              </ul>
            @endif
        </div>

        {{-- email --}}
        <div class="form-group {{ ($errors->has('email'))? 'alert alert-danger':''}}">
          <label for="txtEmail">Email&nbsp;&#42;</label>
            <input id="txtEmail" class="form-control" name="email" placeholder="Enter your email address" type="text" value="{{ old('email') }}"/>
            @if ($errors->has('email'))
              <ul id="ul-error-email" class="alert">
                @foreach ($errors->get('email') as $fieldError)
                  <li>{{$fieldError}}</li>
                @endforeach
              </ul>
            @endif
        </div>

        {{-- Confirm Email --}}
        <div class="form-group {{ ($errors->has('confirmEmail'))? 'alert alert-danger':''}}">
          <label for="txtEmail">Re-enter email&nbsp;&#42;</label>
            <input id="txtConfirmEmail" class="form-control" name="confirmEmail" placeholder="Re-enter your email address" type="text" value="{{ old('confirmEmail') }}"/>
            @if ($errors->has('confirmEmail'))
              <ul id="ul-error-confirm-email" class="alert">
                @foreach ($errors->get('confirmEmail') as $fieldError)
                  <li>{{$fieldError}}</li>
                @endforeach
              </ul>
            @endif
        </div>
        {{-- Telephone --}}
        <div class="form-group {{ ($errors->has('phone'))? 'alert alert-danger':''}}">
          <label for="telPhone">Tel.</label>
            <input id="telPhone" class="form-control" name="phone" placeholder="Not required. Enter telephone number (any format)" value="{{ old('phone') }}"/>
            @if ($errors->has('phone'))
              <ul id="ul-error-phone" class="alert">
                @foreach ($errors->get('phone') as $fieldError)
                  <li>{{$fieldError}}</li>
                @endforeach
              </ul>
            @endif
        </div>
        </fieldset>
        {{-- Message --}}
        <fieldset id="fieldset-tarMessage" class="text-color-ancillary">
          <legend class="text-center text-md-left">Message&nbsp;&#42;</legend>
          <div class="form-group {{ ($errors->has('message'))? 'alert alert-danger':''}}">
            <textarea id="tarMessage" rows="8" class="form-control" name="message" required placeholder="Briefly detail your enquiry">{{ old('message') }}</textarea>
            @if ($errors->has('message'))
              <ul id="ul-error-message" class="alert">
                @foreach ($errors->get('message') as $fieldError)
                  <li>{{$fieldError}}</li>
                @endforeach
              </ul>
            @endif
          </div>
        </fieldset>

    <div class="row">
      <div class="col-12 col-sm-10 offset-sm-1 col-md-4 offset-md-4 col-lg-2 offset-lg-5">
        <input class="form-control btn btn-outline-primary my-3 mx-auto" type="submit" value="Submit">
      </div>
    </div>
  </form>
</main>

@endsection
@section('scripts')
  @parent

@endsection
