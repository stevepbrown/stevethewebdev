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

    // // No consent cookie, add one (set false)
    // if (!$request->hasCookie('consentCookie')){

    //     Cookie::queue(Cookie::make('consentCookie', 'false', 1));

    // }

return $next($request);

   

}
}


