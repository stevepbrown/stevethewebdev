<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Http\Controllers\Controller;
use App\ConsentCookie;
use App\Location;

class AjaxController extends Controller
{
    public function cookieConsent() {

               
        $consentCookie = new ConsentCookie(request());

        $consentCookie->makeCookie();

            
            return view('components.component_consent_cookie',['cookieStatus'=>$consentCookie->cookieStatus]);
            
         
        }

        
  

    public function mapLoader(Request $request){

               
        $location = new Location($request);

        return response($location->toHtml());


    }
}

