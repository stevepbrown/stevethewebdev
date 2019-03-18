

/*** cookie.js
 *                  _   _        _    
 *      __ ___  ___| |_(_)___   (_)___
 *     / _/ _ \/ _ \ / / / -_)_ | (_-<
 *     \__\___/\___/_\_\_\___(_)/ /__/
 *                            |__/    
 */

/* Cookie consent */

"use strict";

$(function() {



  /**
   * Append the CSRF token to the settings collection
   */  
  $.ajaxSetup({
    headers: {
        'X-CSRF-TOKEN': $('meta[name="csrf-token"]').attr('content')
    }
});

  

  $("button#btn-consent-cookies").click(function(event) {
    
    // Do not submit the form from its action method
    event.preventDefault();
    
    cookieAffirmation();

    return;

  });
    


  //AJAX post to confirm cookie consent
  function cookieAffirmation() {

    /**
     * A set of key/value pairs that configure the Ajax request,
     * in this case 
     */
    
    
    $.ajax(
      {
        url: '/ajax/consent_cookies',
        method: 'post',
        data: {cookieConsent: 'pending'},
        dataType: 'html',
        success: function(result){
          loadContent(result);},
        error: function(result){
          alert('Error, logging.');
          console.log(result);
        },
        complete: function(){
          alert('Completed.');
        },        
      
      }

    )
   
  };

  
  /**
   * Loads the AJAX response into the target element
   */
  function loadContent(result){

    let status;

    try {
      $('#div-cookie-consent').html(result);
        status=true;
      }
     
    catch(err) {
      alert('Failed to load AJAX response data, see error log.');
      console.log(err);
      status=false;
    }
    finally {
            return status;
            }

    
  }


    })