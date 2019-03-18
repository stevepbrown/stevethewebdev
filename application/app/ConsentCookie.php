<?php

namespace App;

use Illuminate\Database\Eloquent\Model;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Cookie;



class ConsentCookie extends Model
{
        protected $request;
        protected $cookieStatus;
                       
        public function __construct(Request $request)
        {
            // capture incoming request in variable
            $this->request = $request;
            $this->setCookieStatus();
                        

        }
     
        

        // $method
        function getMethodAttribute(){
            
            return $this->request->method();

        }

        // $route
        function getRouteAttribute(){

            return $this->request->path();

        }

        function getIsAjaxAttribute(){

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
        
        public function makeCookie(){

            switch($this->cookieStatus){

                case 'true': $this->pushToQueue(false);
                                break;
                case 'pending': $this->pushToQueue(true);
                                break;
                default:
                        break;


            }
        }
            


            function pushToQueue($update){

                               
                if($update){

                                      
                    Cookie::queue(Cookie::make('consentCookies', 'true', (60*24*364)));

                }

                               

            }

            public function getCookieStatusAttribute(){

                return $this->cookieStatus;

            }  
            
                       
            private function setCookieStatus(){


                $ajaxParams=[

                    'method'=>$this->method,
                    'isAjax'=>$this->isAjax,
                    'route'=>$this->route
                ];              
            
                
                if (($this->request->hasCookie('consentCookies')?($this->request->cookie('consentCookies')?true:false):false)){

                    $this->cookieStatus= 'true';
                }
                elseif(($this->method == 'POST') && ($this->isAjax) && ($this->route=='ajax/consent_cookies')){

                    $this->cookieStatus = 'pending';
                  
                    }
                
                else {
                    $this->cookieStatus= 'false';
                }

    
                               
            }
    
    }

