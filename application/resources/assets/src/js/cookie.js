

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
    

$("button#btn-consent-cookies").click(function(event) {
  
  // Do not submit the form from its action method
  event.preventDefault();
  
  cookieAffirmation();

{
    
};

// AJAX post to confirm cookie consent
function cookieAffirmation() {

  $.ajax({
       type:'POST',
       url:'/ajax/consent_cookies'
       

}

function processCookieTrue() {}

})