<?php

namespace App\Http\Middleware;

use Closure;


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

    
    if (!$request->cookie('consentCookies')) {
       
        dd('Code the redirect to cookies');

    } 
    else{
        return $next($request);
    }
    
   

}





}
