<?php

namespace App\Http\Middleware;

use Illuminate\Http\Request;
use App\ConsentCookie;
use Closure;




class CookieConsent
{  
   
    protected $cookie;

    
    public function handle($request , Closure $next)
    {
     
             

        $consentCookie= new consentCookie($request);

        $cookie = $consentCookie->makeCookie();
        
        if (isset($cookie)){

            
            // queue the cookie
            return $next($request)->cookie($cookie);
            
        }
    else        
        {
            return $next($request);
        }
    } 
}





