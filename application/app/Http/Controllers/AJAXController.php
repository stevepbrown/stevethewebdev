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

        
  

    /**
     * Function mapLoader -
     * Receives an AJAX requeust and
     * returns a Google Map API
     * script for loading
     * a location map
     * 
     * 
     *
     * @param Request $request
     * @return text
     */
    public function mapLoader(Request $request){

               
        $location = new Location($request);

        return response($location->toHtml());


    }
}

