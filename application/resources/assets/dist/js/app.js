webpackJsonp([1],{

/***/ "./resources/assets/src/js/cookie.js":
/***/ (function(module, exports, __webpack_require__) {

"use strict";
/* WEBPACK VAR INJECTION */(function($) {

/*** cookie.js
 *                  _   _        _    
 *      __ ___  ___| |_(_)___   (_)___
 *     / _/ _ \/ _ \ / / / -_)_ | (_-<
 *     \__\___/\___/_\_\_\___(_)/ /__/
 *                            |__/    
 */

/* Cookie consent */



$(function () {

  $.ajaxSetup({
    headers: {
      'X-CSRF-TOKEN': $('meta[name="csrf-token"]').attr('content')
    }
  });

  $("button#btn-consent-cookies").click(function (event) {

    // Do not submit the form from its action method
    event.preventDefault();

    cookieAffirmation();

    return;
  });

  //AJAX post to confirm cookie consent
  function cookieAffirmation() {

    $.get("settings");

    $.ajax({
      url: '/ajax/consent_cookies',
      method: 'post',
      data: { cookieConsent: 'true' },
      complete: function complete(result) {
        console.log(result);
      }

    });
  };
});
/* WEBPACK VAR INJECTION */}.call(exports, __webpack_require__("./node_modules/jquery/dist/jquery.js")))

/***/ }),

/***/ 0:
/***/ (function(module, exports, __webpack_require__) {

module.exports = __webpack_require__("./resources/assets/src/js/cookie.js");


/***/ })

},[0]);