<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Http\Controllers\Controller;

class AJAXController extends Controller
{
    public function setCookieConsent(){

        $cookie = cookie('consentCookies', 'false', (60*24*365) );

        // view to return in response
        $vw = view('components.component_consent_cookie'['consent' => true]);

      response($vw,201)

    }
}
