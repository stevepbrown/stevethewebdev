<?php

namespace App;

use Illuminate\Database\Eloquent\Model;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Cookie;




class ConsentCookie extends Model
{
        protected $request;
        
        public function __construct(Request $request)
        {
            // capture incoming request in variable
            $this->request = $request;

        }

        
        // $cookieType
        function cookieType(){

                
            
            if ($this->request->hasCookie('consentCookie')){
            
            return 'client';

            }

            elseif ($this->sessionCookieExists()){

                return 'session';

            }

            else {

                return 'pending';

            }
        }

        // $method
        function method(){

            
            return $this->request->method();

        }


        // $route
        function route(){

            return $this->request->path();

        }

        function isAjax(){

            return $this->request->ajax();
        }


        // $clientCookie
        function clientCookieExists(){

            if ($this->request->hasCookie('consentCookies')){
                return true;
            }
            else {

                return false;
            }
        }

        function sessionCookieExists(){

            $flag= ((session('consentCookies')!==null?true:false));
            return $flag;
        }

        // other methods
        
        function makeCookie(){

            switch ($this->cookieType()){
           
               

                // pending - generate session
                case 'pending':
                                $this->generateSessionCookie();
                                break;

                // session - 
                case 'session': $this->processSessionCookie();
                                break;

                // client
                case 'client': $this->processClientCookie();
                                break;

            }

        }
            

            function generateSessionCookie(){

                     
                session(['consentCookies' => 'true']);
              
            }

            function processSessionCookie(){

                // dd('processSessionCookie');
               
                // dd($this->method(),$this->route(),$this->isAjax());

                if(($this->method()=='POST') && ($this->route() == 'ajax/consent_cookies') && ($this->isAjax())) {
                  
                    $this->pushToQueue(true);

                } 

            }

            function processClientCookie(){

                dd('processClientCookie');
                if ($this->request->cookie('consentCookies')==true){

                    $this->pushToQueue(false);


                }

            }

            function pushToQueue($update){


               
                if($update){

                    
                    $minutes= (60*24*364);

                }

                else {
                    dd('$this_>pushToQueue - no update');
                    $minutes=$this->request->cookie('consentCookie','array');
                }
                
                Cookie::queue(Cookie::make('consentCookies', true, $minutes));
                


            }
    
    }

