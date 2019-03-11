<?php

namespace App\Http\Middleware;

use Illuminate\Http\Request;
use Illuminate\Support\Facades\Cookie;
use App\ConsentCookie;
use Closure;




class CookieConsent
{  
   


    public function handle($request , Closure $next)
    {
     

        $next($request);
        // $consentCookie= new consentCookie($request);


        // if ($consentCookie->status === 'pending') {

            
        //     // make & queue a cookie
        //     // Cookie::queue(Cookie::make($name='consentCookies', $value=true, $minutes=(60*24*364)));
        //     $next($request);

        // }

        // else{
        //     $next($request);
        //     }
 
          
    } 



      
}





