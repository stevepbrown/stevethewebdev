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

    // Check consent cookie
    if (!$request->hasCookie('consentCookie')){

        

    }

return $next($request);

   

}
}


