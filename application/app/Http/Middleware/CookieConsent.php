<?php

namespace App\Http\Middleware;

use Illuminate\Http\Request;
use App\ConsentCookie as ConsentCookie;
use Closure;





class CookieConsent
{  


    protected $session;
   
    public function handle($request , Closure $next)
    {
        
        if (!(session()->has('consentCookies'))){

            session()->put('consentCookies',false);
   
           }
        
        $consentCookie = new ConsentCookie($request);
        $consentCookie->makeCookie();

               
        session()->flash('cookieStatus', $consentCookie->cookieStatus);

        return $next($request);
      
    
    }
}