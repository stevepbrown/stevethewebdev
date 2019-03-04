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
// $is_admin = ($user['permissions'] == 'admin') ? true : false;

$consentCookie = $request->cookie('consentCookies');


if (!isset($consentCookies)) {

    // // Cookie not set, attach new cookie, set to false
    Cookie::queue(Cookie::make('consentCookies', 'false', (60*24*365) ));

    
}

return $next($request);











    // if (!$request->hasCookie('consentCookies'))

    // $cookie = $request->

      
    // $uri = $request->path();

    // // Does it have a cookie?
    
    //  //No
    // if (!$request->hasCookie('consentCookies')){

    //     $cookie = cookie('consentCookies', 'false', 525600);

    //     // Attach a consent cookie, set to false
    //    return $next($request)->cookie($cookie);

    // }
    // // Yes
    // else
    // {
    //     return $next($request);
    // }
    
   

}





}
