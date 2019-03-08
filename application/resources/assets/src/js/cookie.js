

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

      $.get("settings");

    $.ajax(
      {
        url: '/ajax/consent_cookies',
        method: 'post',
        data: {cookieConsent: 'true'},
        complete: function(result){console.log(result)},        
      
      }

    )
   
  };


    })