/***
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
    const bpLarge = $("html").css('--breakpoint-xl');
    const bpMedium= $("html").css('--breakpoint-md');
    const bpSmall = $("html").css('--breakpoint-xs');

    
    /**
     * 
     * @name trade
     * @description this value originates server-side,
     * and is injected into a javascript
     * variable outside of this script
     *
     * @var  {string}
     */
    let trade = tradeName;

    /**
     * @name imgNames    
     * @constant {array}
     */
    const imgNames = ['A', 'B', 'C'];

    /** 
     * @name imgSizes
     * @constant {array}
     */
    const imgSizes = [

        [0, 'small'],
        [1, 'medium'],
        [2, 'large']
    ];

    /**
     * @name imgPath;
     * @description Holds the image path
     * @type  {contstant}
     * @returns {string}
     */
    const imgPath = 'img/templates/';
    /**
     * @name divClass
     * @description The class name that identifies image placeholders
     * @type  {constant}
     * @returns {sring}
     */
    const divClass = '.showcase-img';

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
    const divs = $(divClass);

    /**
     * @name MQlistLarge,MQlistMedium,MQlistSmall
     * @param {string} ['min-width'||'min-width' && 'max-width']
     * @returns {MediaQueryList} // one for each media query, as named
     */
    var MQlistLarge = window.matchMedia(`(min-width: ${bpLarge})`);
    var MQlistMedium = window.matchMedia(`(min-width: ${bpMedium})`);
    var MQlistSmall = window.matchMedia(`(min-width: ${bpSmall})`);


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

        let mSize = size;
        let mTrade = trade;
        let mImagefiles = [];

        imgNames.forEach(function (value) {
            let str = `${trade}-${value}-${mSize}`;
            mImagefiles.push(str);
        })

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

                throw ('Number files does not correspond number target divs');
            }


            for (let i=0; i < divs.length; i++) {

                let file = ((files.shift()) + '.png');
                let url = `${imgPath}${file}`;
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
        let div = $(placeholder).first();

        // set the style attribute on the returned child
        (div).attr('style', `background-image:url('${url}'`);

    }

});