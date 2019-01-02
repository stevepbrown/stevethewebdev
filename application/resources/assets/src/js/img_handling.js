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

     
    /**
     * 
     * @name trade
     * @description 'this value originates server-side,
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
    const imgNames = ['A','B','C'];

    /** 
     * @name imgSizes
     * @constant {array}
     */
    const imgSizes = [

        [0, 'small'],
        [1, 'medium'],
        [2, 'large']
    ];

          
    // the classname that identifies the div containing the image
    const divClass = '.showcase-img';

    const divs = $(divClass);

    /**
      * @name MQlistLarge,MQlistMedium,MQlistSmall
      * @param {string} ['min-width'||'min-width' && 'max-width']
      * @returns {MediaQueryList} // one for each media query, as named
     */
    var MQlistLarge = window.matchMedia("(min-width: 992px)");
    var MQlistMedium = window.matchMedia("(min-width: 577px) AND (max-width: 991px)");
    var MQlistSmall = window.matchMedia("(max-width: 576px)");

   
   // call the handler when the page is first opened
   handleMQLChange(); 

   function handleMQLChange(){
   

       
    try {
       

            

            if (MQlistLarge.matches){

                assetAssembly('large');
                
            }

            else if(MQlistMedium.matches){

                assetAssembly('medium');
                
            }

            else if (MQlistSmall.matches) {

                assetAssembly('small');

            }

                
            else {
                throw 'Size cannot be determined';
            }
            

        }

        catch(err) {

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
    $(MQlistLarge).on('change',handleMQLChange);
    $(MQlistMedium).on('change',handleMQLChange);
    $(MQlistMedium).on('change',handleMQLChange);
    


    
      
    function assetAssembly(size){

        let mSize = size;
        let mTrade = trade;
        // let mImageCount = imgNames.length;
        let mImagefiles = [];
        
        imgNames.forEach(function (value) {
            let str = `${trade}-${value}-${mSize}`;
            mImagefiles.push(str);
        })

        assetSource(mImagefiles);    

        }

    // Append the style background image to the matching elements
    
    function assetSource(files){



    // Iterate the containing divs
    for (div in divs) {

        const loc = 'img/templates/';
        let file =  ((files.pop()) + 'jpg');
        let url = `${loc}${file}`;
      
        
        
        // append style / image
        div.attr('style',`background-image:url($(url))`);
        
    }     

    }
   


});