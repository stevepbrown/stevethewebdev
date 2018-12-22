webpackJsonp([1],[
/* 0 */,
/* 1 */,
/* 2 */
/***/ (function(module, exports, __webpack_require__) {

__webpack_require__(3);
__webpack_require__(4);
module.exports = __webpack_require__(5);


/***/ }),
/* 3 */
/***/ (function(module, exports, __webpack_require__) {

/* WEBPACK VAR INJECTION */(function($) {/***
 *      _              _                 _ _ _              _    
 *     (_)_ __  __ _  | |_  __ _ _ _  __| | (_)_ _  __ _   (_)___
 *     | | '  \/ _` | | ' \/ _` | ' \/ _` | | | ' \/ _` |_ | (_-<
 *     |_|_|_|_\__, |_|_||_\__,_|_||_\__,_|_|_|_||_\__, (_)/ /__/
 *             |___/___|                           |___/ |__/    
 */

// Detect that the window is loaded

$(document).ready(function () {

    /**
     * this value originates server-side,
     * and is injected into a javascript
     * variable outside of this script
     *
     * @var  {string}
     */
    var trade = tradeName;

    /**
     * array to record the image designations to load
     * 
     * @constant {array}
     */
    var imgNames = ['A', 'B', 'C'];

    // the classname that identifies the div containing the image
    var divClass = '.showcase-img';

    var divs = $(divClass).toArray();

    /**
      * @name MQlistLarge,MQlistMedium,MQlistSmall
      * @param {string} ['min-width'||'min-width' && 'max-width']
      * @returns {MediaQueryList} // one for each media query, as named
     */
    var MQlistLarge = window.matchMedia("(min-width: 992px)");
    var MQlistMedium = window.matchMedia("(min-width: 577px) AND (max-width: 991px)");
    var MQlistSmall = window.matchMedia("(max-width: 576px)");

    /**
     * The 'view size'
     *
     * @var  {[string]}
     */
    var size = null;

    /**
     * [isPhotoFetched description]
     *
     * @var  {[boolean]}
     */
    var photoFetched = false;

    /**
     * @var initialSize
     * @description 'not initialised
     * until first pass of sizing
     * function'
     * @var {['string']}
     */
    var initialSize = void 0;

    /**
     * @name objSize
     * @var {object}
     * @param {string} // the recorded size of the viewport
     * @description 'Provides an object to hold,
     *                get & set the recorded size'
     */

    function handleMQLChange() {

        var success = true;

        try {

            if (MQlistLarge.matches) {

                assetAssembly('large');
            } else if (MQlistMedium.matches) {

                assetAssembly('medium');
            } else if (MQlistSmall.matches) {

                assetAssembly('small');
            } else throw 'Size cannot be determined';
        } catch (err) {

            console.log(err);
            success = false;
        }

        return success;
    };

    /**
    * @description Listens for 'onChange' on the MediaQueryList object & call a handler 
    * @listens MQlistLarge,MQlistMedium,MQlistSmall
    * @callback handleMQLChange
    */

    $(MQlistLarge).on('change', handleMQLChange);
    $(MQlistMedium).on('change', handleMQLChange);
    $(MQlistMedium).on('change', handleMQLChange);

    // create an array to hold the trade, image designation and  div id

    function assetAssembly(size) {

        //    let assembly= [];
        //    let elements =[];

        alert('Asset assembly for ' + size);

        // $(divClass).each(function( index ) {
        //     console.log( index + ": " + $(this).attr('id'))
        // })
    }
});
/* WEBPACK VAR INJECTION */}.call(exports, __webpack_require__(0)))

/***/ }),
/* 4 */
/***/ (function(module, exports) {

// removed by extract-text-webpack-plugin

/***/ }),
/* 5 */
/***/ (function(module, exports) {

// removed by extract-text-webpack-plugin

/***/ })
],[2]);