<?php

namespace App\Http\Controllers;
use Illuminate\Http\Request;
use App\Http\Controllers\Controller;
use Illuminate\Support\Facades\Cookie;

class AJAXController extends Controller
{
    
  
  public function setCookieConsent(request $request){
    
  
     
  if ($this->attachCookie? (Cookie::queue(Cookie::make('consentCookies', 'true', (60*24*365)))):false);

  else {



  }
  // 
  view to return in response
        
  $vw = view('components.component_consent_cookie',['consentCookies'=>($this->$attachCookie)];

        return $vw;

    }

/**
   * 
   * @param boolean request->hasCookie // presence of cookie;
   * @param string request->consentCookies // value of cookie; 
   * 
   * Ataches a consent cookie (set true) if there is no cookie,
   * or if consent cookie is set to false
   * 
   * @return boolean attachCookie;
   */

   
   /**
    * attachCookie
    * @param 
    * @return boolean 
    */
   protected function attachCookie(){

    if ($this->request->hasCookie('consentCookies')? ($this->request->cookie('consentCookies' == true? false:true)): true){

      return true;
  
    }
  
    else {
  
      return false;
  
    }
  
    }




}
