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

/***/ "./resources/assets/src/js/img_handling.js":
/***/ (function(module, exports, __webpack_require__) {

/* WEBPACK VAR INJECTION */(function($) {/***
 *      _              _                 _ _ _              _    
 *     (_)_ __  __ _  | |_  __ _ _ _  __| | (_)_ _  __ _   (_)___
 *     | | '  \/ _` | | ' \/ _` | ' \/ _` | | | ' \/ _` |_ | (_-<
 *     |_|_|_|_\__, |_|_||_\__,_|_||_\__,_|_|_|_||_\__, (_)/ /__/
 *             |___/___|                           |___/ |__/    
 */

// Require the jquery module


// Detect that the window is loaded

$(document).ready(function () {

    //assign breakpoints based on the root css 
    var bpLarge = $("html").css('--breakpoint-xl');
    var bpMedium = $("html").css('--breakpoint-md');
    var bpSmall = $("html").css('--breakpoint-xs');

    /**
     * 
     * @name trade
     * @description this value originates server-side,
     * and is injected into a javascript
     * variable outside of this script
     *
     * @var  {string}
     */
    var trade = tradeName;

    /**
     * @name imgNames    
     * @constant {array}
     */
    var imgNames = ['A', 'B', 'C'];

    /** 
     * @name imgSizes
     * @constant {array}
     */
    var imgSizes = [[0, 'small'], [1, 'medium'], [2, 'large']];

    /**
     * @name imgPath;
     * @description Holds the image path
     * @type  {contstant}
     * @returns {string}
     */
    var imgPath = 'img/templates/';
    /**
     * @name divClass
     * @description The class name that identifies image placeholders
     * @type  {constant}
     * @returns {sring}
     */
    var divClass = '.showcase-img';

    /**
     * 
     * @name divs
     * @description the collection divs 
     * which act as image placeholders
     *
     * @type  {constant}
     * @returns Jquery object collection wrapper;
     * 
     */
    var divs = $(divClass);

    /**
     * @name MQlistLarge,MQlistMedium,MQlistSmall
     * @param {string} ['min-width'||'min-width' && 'max-width']
     * @returns {MediaQueryList} // one for each media query, as named
     */
    var MQlistLarge = window.matchMedia("(min-width: " + bpLarge + ")");
    var MQlistMedium = window.matchMedia("(min-width: " + bpMedium + ")");
    var MQlistSmall = window.matchMedia("(min-width: " + bpSmall + ")");

    // call the handler when the page is first opened
    handleMQLChange();

    /**
     * @name [handleMQLChange description]
     *
     * @return  {[type]}  [return description]
     */
    function handleMQLChange() {

        try {

            if (MQlistLarge.matches) {

                assetAssembly('large');
            } else if (MQlistMedium.matches) {

                assetAssembly('medium');
            } else if (MQlistSmall.matches) {

                assetAssembly('small');
            } else {
                throw 'Size cannot be determined';
            }

            return true;
        } catch (err) {

            console.error(err);
            return false;
        }

        return true;
    };

    /**
     * @description Listens for 'onChange' on the MediaQueryList object & call a handler 
     * @listens MQlistLarge,MQlistMedium,MQlistSmall
     * @callback handleMQLChange
     */
    $(MQlistLarge).on('change', handleMQLChange);
    $(MQlistMedium).on('change', handleMQLChange);
    $(MQlistMedium).on('change', handleMQLChange);

    function assetAssembly(size) {

        var mSize = size;
        var mTrade = trade;
        var mImagefiles = [];

        imgNames.forEach(function (value) {
            var str = trade + "-" + value + "-" + mSize;
            mImagefiles.push(str);
        });

        assetSource(mImagefiles);
    }

    /**
     * [assetSource description]
     *
     * @param   {[type]}  files  [files description]
     *
     * @return  {[boolean]}         [return description]
     */
    function assetSource(files) {

        try {

            if (divs.length !== files.length) {

                throw 'Number files does not correspond number target divs';
            }

            for (var i = 0; i < divs.length; i++) {

                var file = files.shift() + '.png';
                var url = "" + imgPath + file;
                div = divs[i];
                srcBackgroundImage(div, url);
            }
        } catch (error) {

            console.error(error);
            return false;
        }

        return true;
    }

    /**
     * [srcBackgroundImage description]
     *
     * @param   {object}  placeholder  - the placeholder element 
     * @param   {string}  url          [url description]
     *
     */
    function srcBackgroundImage(placeholder, url) {

        // get first child
        var div = $(placeholder).first();

        // set the style attribute on the returned child
        div.attr('style', "background-image:url('" + url + "'");
    }
});
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
__webpack_require__("./resources/assets/src/js/img_handling.js");
__webpack_require__("./resources/assets/src/sass/app.scss");
module.exports = __webpack_require__("./resources/assets/src/sass/templates.scss");


/***/ })

},[0]);