<?php

namespace App\Http\Controllers;
use Illuminate\Http\Request;
use App\Http\Controllers\Controller;
use Illuminate\Support\Facades\Cookie;

class AJAXController extends Controller
{
    
   
  
  public function setCookieConsent(request $request){
      

       Cookie::queue(Cookie::make('consentCookies', 'true', (60*24*365)));   
        // view to return in response
        
        $vw = view('components.component_consent_cookie',['consentCookies'=>true]);

        

      return $vw;

    }
}
