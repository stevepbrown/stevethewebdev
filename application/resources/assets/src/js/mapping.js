

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

    let mapWidth= $("#div-location-map").width();

    alert(mapWidth);

    let mapHeight= $$("#div-location-map").height();

    alert(mapHeight);

    //assign breakpoints based on the root css 
    // const bpXS = $("html").css('--breakpoint-xs');
    // const bpSM = $("html").css('--breakpoint-sm');
    // const bpMD = $("html").css('--breakpoint-md');
    // const bpLG = $("html").css('--breakpoint-lg');
    // const bpXL = $("html").css('--breakpoint-xl');

    // Determine the viewport size
    let containerSize = 
    
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



function LoadMapAPI(){




}