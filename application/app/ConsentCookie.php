<?php

namespace App;

use Illuminate\Database\Eloquent\Model;
use Illuminate\Http\Request;
use Illuminate\Cookie\CookieJar;
use Mockery\Undefined;
use PhpParser\Node\Stmt\TryCatch;


class ConsentCookie extends Model
{
    protected $request;
    protected $mStatus;
    protected $method;
    protected $path;
   
    
    
    public function __construct(Request $request)
    {
      
        // instantiate instance of Cookijar
        $this->cookie = CookieJar::class;
        $this->request = $request;
        //set status based upon request 
        $this->setStatus();
        // Make status available as a public property
        $this->status = $this->getStatus();
        
        
    }

    

    // status getter
    private function getStatus(){

        return $this->mStatus;
    }

    // status setter
    private function setStatus(){

        
        if ($this->request->hasCookie('consentCookies')) {

            $this->mStatus  =  ($this->request->cookie('consentCookies'));

        }
        
        else {

            $this->mStatus = 'pending';

        }

       
        
    }

    private function setPath(){

        $this->path = $this->request->path;


    } 
    private function getPath(){

        return $this->path;


    } 

    private function setMethod(){
        $this->method = $this->request->method;

    }
    private function getMethod(){
        return $this->method;
    }

        
    private function makeCookie(){

          if((($this->getMethod()=="POST") && ($this->getPath()=='ajax/consent_cookies'))){

            // make it 
            $this->cookie->make($name='consentCookies', $value=true, $minutes=(60*24*364));

            // queue it
            $this->queue();
          }

    
    }

    public function status(){

        return $this->getStatus();
    }


}    
        



