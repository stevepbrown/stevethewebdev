webpackJsonp([1],[
/* 0 */,
/* 1 */,
/* 2 */
/***/ (function(module, exports, __webpack_require__) {

module.exports = __webpack_require__(3);


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

// Require the jquery module


// Detect that the window is loaded

$(document).ready(function () {

    /**
     * 
     * @name trade
     * @description 'this value originates server-side,
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
        } catch (err) {

            console.error(err);
            success = false;

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
        // let mImageCount = imgNames.length;
        var mImagefiles = [];

        for (imgName in imgNames) {

            var str = trade + '-' + imgName + '-' + mSize;

            mImagefiles.push(str);
        }

        assetSource(mImagefiles);
    }

    // Append the style background image to the matching elements

    function assetSource(files) {

        // Iterate the containing divs
        for (div in divs) {

            var loc = 'img/templates/';
            var file = files.pop();
            var url = '' + loc + file;

            // append style / image
            div.attr('style', 'background-image:url($(url))');
        }
    }
});
/* WEBPACK VAR INJECTION */}.call(exports, __webpack_require__(0)))

/***/ })
],[2]);