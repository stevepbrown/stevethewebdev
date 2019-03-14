<?php

namespace App;

use Illuminate\Database\Eloquent\Model;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Cookie;
use Illuminate\Support\Collection;






class ConsentCookie extends Model
{
    protected $request;
    
    // session or client
    protected $cookieType;
    protected $method;
    protected $route;
        
    // request cookie present 
    protected $hasClientCookie;
    
    // session cookie present
    protected $hasSessionCookie;
    
    // value of active cookie
    protected $cookieVal;
    
    public function __construct(Request $request)
    {
        // capture incoming request in variable
        $this->request = $request;
       
        
    }

   

    // Getters

        // $CookieType
   function getCookieType(){

        return $cookieType;

    }


        // $method
    function getMethod(){

        return $method;

    }

        // $route
    function getRoute(){

        return $route;

    }

    // $clientCookie
    function getHasClientCookie(){

        return $hasClientCookie;

    }


    // Setters
    
        // $cookieType
        function setCookieType(){
            
            if ($request->hasCookie('consentCookie')){
            
            $cookieType='client';

            }

            elseif ($request->session->hasCookie('consentCookie')){

                $cookieType='session';

            }

            else {

                $cookieType='pending';

            }
        }
  
        // $method
        function setMethod(){

            $method=  $this->request->method();

        }
 

        // $route
        function setRoute(){

            $route = $this->request->route();

        }


        function setCookie() {

            $cookie =  $this->makeCookie();
        }

        // $clientCookie
        function setClientCookie(){

        if ($request->hasCookie('consentCookies')){
            return true;
        }
        else {

            return false;
        }

    // other methods
    
    function makeCookie(){

        switch ($this->cookieType){

            // pending - generate session
            case 'pending':
                            generateSessionCookie();
                            break;

            // session - 
            case 'session':processSessionCookie();
                            break;

            // client
            case 'client': processClientCookie();
                            break;

        }

        function generateSessionCookie(){

            session(['consentCookies' => 'false']);

        }

        function processSessionCookie(){



        }

        function processClientCookie(){

            if ($this->request->cookie('consentCookies')==true){

                pushToQueue($update=false);


            }

        }

        
    } 



  

   
 
}



