<?php

namespace App\Http\Controllers;
use Illuminate\Http\Request;
use App\Http\Controllers\Controller;
use Illuminate\Support\Facades\Cookie;


class AJAXController extends Controller
{
    
   
  public $consentCookies;

  public function setCookieConsent(request $request){

    // boolean
    $consentCookies = $this->hasConsent($request);
    
    // No (affirmative) cookie, attach one
    if (!$consentCookies) {

      $consentCookies = $this->attachCookie();

    }

       
    $vw = view('components.component_consent_cookie')->with('consentCookies'>$this->strConsentCookies($consentCookies));

    return $vw;
 
  }

  
  function hasConsent($request){

    return ((($request->hasCookie('consentCookies')) && (cookie('consentCookies')=='true'))?true:false);

  }

  function attachCookie(){

    Cookie::queue(Cookie::make('consentCookies', 'true', (60*24*365)));
    return true;
    
    }

  function strConsentCookies(bool $var){

   
    return (($var===true? "true": "false"));

  }
}
