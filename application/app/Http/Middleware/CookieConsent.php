<?php

namespace App\Http\Middleware;

use Closure;
use Cookie;


class CookieConsent
{

    

    /**
     * Handle an incoming request.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  \Closure  $next
     * @return mixed
     */
public function handle($request , Closure $next)
{

       
    $uri = $request->path();

    // Does it have a cookie?
    if (!$request->hasCookie('consentCookies')){

        // Attach a consent cookie set to false
        Cookie::queue(Cookie::make('consentCookies', 'false', 525600));
        return $next($request);

    }

    else
    {
        return $next($request);
    }
    
   

}





}
