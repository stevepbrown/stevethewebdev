<?php

namespace App;

use Illuminate\Database\Eloquent\Model;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Cookie;
use Mockery\Undefined;



class ConsentCookie extends Model
{
    
    protected $request;
    protected $method;
    protected $path;
    protected $cookie;
     
    
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
       
        
    // Returns a consentCookie ('true' or 'false')vagra , depending on parameter
    public function makeCookie(){

        $minutes;
        $cookie_value;
        
        
        // This determines that a cookie is required
        if($this->status=='pending'){
        
            // set the cookie to true, expires after a year
            if (($this->method=='post') && ($this->path=='ajax/consent_cookies')){

                $cookie_minutes=(60*24*364);
                $cookie_value= 'true';

            }
            // set the cookie to false, expires after a minute 
            else {
                $cookie_minutes=(60*24*364);
                $cookie_value= 'false';
            }

            $cookie = Cookie::make($name='consentCookies', $value=$cookie_value, $minutes=$cookie_minutes, null, null, null, false);
            return $cookie;
           
        }

        return null;
    }


}    
        



