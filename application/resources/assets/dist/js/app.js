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

  /**
   * Append the CSRF token to the settings collection
   */
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

    /**
     * A set of key/value pairs that configure the Ajax request,
     * in this case 
     */

    $.ajax({
      url: '/ajax/consent_cookies',
      method: 'post',
      data: { cookieConsent: 'pending' },
      dataType: 'html',
      success: function success(result) {
        loadContent(result);
      },
      error: function error(result) {
        alert('Error, logging.');
        console.log(result);
      },
      complete: function complete() {
        alert('Completed.');
      }

    });
  };

  /**
   * Loads the AJAX response into the target element
   */
  function loadContent(result) {

    var status = void 0;

    try {
      $('#div-cookie-consent').html(result);
      status = true;
    } catch (err) {
      alert('Failed to load AJAX response data, see error log.');
      console.log(err);
      status = false;
    } finally {
      return status;
    }
  }
});
/* WEBPACK VAR INJECTION */}.call(exports, __webpack_require__("./node_modules/jquery/dist/jquery.js")))

/***/ }),

/***/ "./resources/assets/src/js/mapping.js":
/***/ (function(module, exports, __webpack_require__) {

/* WEBPACK VAR INJECTION */(function($) {

/*** mapping.js
 *                                     .__                         __         
 *      _____  _____   ______  ______  |__|  ____    ____         |__|  ______
 *     /     \ \__  \  \____ \ \____ \ |  | /    \  / ___\        |  | /  ___/
 *    |  Y Y  \ / __ \_|  |_> >|  |_> >|  ||   |  \/ /_/  >       |  | \___ \ 
 *    |__|_|  /(____  /|   __/ |   __/ |__||___|  /\___  / /\ /\__|  |/____  >
 *          \/      \/ |__|    |__|             \//_____/  \/ \______|     \/ 
 */

// Detect that the document is loaded

$(document).ready(function () {

  var mapWidth = $("#div-location-map").width();
  var mapHeight = $("#div-location-map").height();
  var dimensions = mapWidth + 'x' + $.ajax({
    url: '/ajax/map_loader',
    method: 'get',
    //   data: {dimensions: '100X100'},
    dataType: 'html',
    success: function success(result) {
      loadMapContent(result);
    },
    error: function error(result) {
      alert('Error, logging.');
      console.log(result);
    },
    complete: function complete() {
      alert('Completed.');
    }

  });

  //  method to invoke AJAX request   
  loadMapContent();
});

/**
  * Loads the AJAX response into the target element
  */
function loadMapContent(result) {

  var status = void 0;

  try {
    $('#div-location-map').html(result);
    status = true;
  } catch (err) {
    alert('Failed to load AJAX response data, see error log.');
    console.log(err);
    status = false;
  } finally {
    return status;
  }
}
/* WEBPACK VAR INJECTION */}.call(exports, __webpack_require__("./node_modules/jquery/dist/jquery.js")))

/***/ }),

/***/ 0:
/***/ (function(module, exports, __webpack_require__) {

__webpack_require__("./resources/assets/src/js/cookie.js");
module.exports = __webpack_require__("./resources/assets/src/js/mapping.js");


/***/ })

},[0]);