webpackJsonp([1],{

/***/ "./resources/assets/src/js/cookie.js":
/***/ (function(module, exports, __webpack_require__) {

/* WEBPACK VAR INJECTION */(function($) {

/*** cookie.js
 *                  _   _        _    
 *      __ ___  ___| |_(_)___   (_)___
 *     / _/ _ \/ _ \ / / / -_)_ | (_-<
 *     \__\___/\___/_\_\_\___(_)/ /__/
 *                            |__/    
 */

/* Cookie consent */

$declaration = $;
$cookie = readCookie('consentCookies');

$(function () {

    $declaration = $('div-cookie-consent');
    $cookie = readCookie('consentCookies');

    if ($cookie === 'false') {
        $declaration.show();
    } else {

        $declaration.hide();
    }
});

function readCookie(name) {
    var nameEQ = encodeURIComponent(name) + "=";
    var ca = document.cookie.split(';');
    for (var i = 0; i < ca.length; i++) {
        var c = ca[i];
        while (c.charAt(0) === ' ') {
            c = c.substring(1, c.length);
        }if (c.indexOf(nameEQ) === 0) return decodeURIComponent(c.substring(nameEQ.length, c.length));
    }
    return false;
}
/* WEBPACK VAR INJECTION */}.call(exports, __webpack_require__("./node_modules/jquery/dist/jquery.js")))

/***/ }),

/***/ "./resources/assets/src/sass/app.scss":
/***/ (function(module, exports) {

// removed by extract-text-webpack-plugin

/***/ }),

/***/ "./resources/assets/src/sass/templates.scss":
/***/ (function(module, exports) {

// removed by extract-text-webpack-plugin

/***/ }),

/***/ 0:
/***/ (function(module, exports, __webpack_require__) {

__webpack_require__("./resources/assets/src/js/cookie.js");
__webpack_require__("./resources/assets/src/sass/app.scss");
module.exports = __webpack_require__("./resources/assets/src/sass/templates.scss");


/***/ })

},[0]);