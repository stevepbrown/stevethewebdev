<?php

namespace App;

use Illuminate\Database\Eloquent\Model;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Cookie;




class ConsentCookie extends Model
{
    protected $request;
    protected $mStatus;
    protected $method;
    protected $path;
   
    
    
    public function __construct(Request $request)
    {
        // capture incoming request in variable
        $this->request = $request;
                   
        
    }

    // Accessors
    public function getStatusAttribute(){

        if ($this->request->hasCookie('consentCookies')) {

            return ($this->request->cookie('consentCookies'));

        }
        
        else {

            return 'pending';

        }

    }

    private function getMethodAttribute(){

        return $this->request->method();
    }
    
    private function getPathAttribute(){

        return $this->request->path();
    }
       
        
    // Returns a 'true' or 'false' consentCookie, depending on parameter
    public function makeCookie($consent){

        $value = $consent;
        
        if (!($consent)){

            $minutes=2;
        }

        else {
            $minutes=(60*24*364);
        }

        


            // if((($this->getMethod()=="POST") && ($this->getPath()=='ajax/consent_cookies'))){

    }


}    
        



