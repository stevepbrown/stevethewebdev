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
                                                   
        return $next($request);       

    }
      
}





