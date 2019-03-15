<?php

namespace App\Http\Middleware;

use Illuminate\Http\Request;
use App\ConsentCookie as ConsentCookie;
use Closure;





class CookieConsent
{  
   
    
        
    public function handle($request , Closure $next)
    {
       
        

        $consentCookie = new ConsentCookie($request);

        $consentCookie->makeCookie();
      
        if (($consentCookie->cookieType()=='client') && ($consentCookie->consented())){

            $request->session()->put('consented', true);

        }

        else
'
            // Do not show anything
            echo 'blah';
        }
        else {
            $request->session()->put('key', 'value');

        }

        
    }
      
}





