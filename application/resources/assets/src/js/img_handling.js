/***
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
     let trade = tradeName;

    /**
     * array to record the image designations to load
     * 
     * @constant {array}
     */
    const imgNames = ['A','B','C'];

    // the classname that identifies the div containing the image
    const divClass = '.showcase-img';

    const divs = $(divClass).toArray();

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
    let size = null;
    
   /**
    * [isPhotoFetched description]
    *
    * @var  {[boolean]}
    */
    let photoFetched = false;

    /**
     * @name initialSize
     * @description 'not initialised
     * until first pass of sizing
     * function'
     *
     * @constant  {['string']}
     */
    const initialSize;

    /**
     * @name objSize
     * @var {object}
     * @param {string} // the recorded size of the viewport
     */
     var objSize  = {

        size: null ,
        
        get size() {

            return this.size;

        },
        
        set size(val) {

            this.size = val;

        }

      }

     /**
     * @description Listens for 'onChange' on the MediaQueryList object & call a handler 
     * @listens MQlistLarge,MQlistMedium,MQlistSmall
     * @callback handleMQLChange
     */

         
    $(MQlistLarge).change(handleMQLChange);
    $(MQlistMedium).change(handleMQLChange);
    $(MQlistMedium).change(handleMQLChange);

   function handleMQLChange(){
   


        alert('Fired');

        try {
       
            

        if (MQlistLarge.matches){

            setSize('large');

        }

        else if(MQlistMedium.matches){

            setSize('medium');

        }

        else if (MQlistSmall.matches) {

            setsize('small');
        }

            
        else throw 'Size cannot be determined'

    }

    catch(err) {

        console.log(err);

    }

        return;
        
    };


    function setSize(){};


    




        
    // create an array to hold the trade, image designation and  div id
    
    function assetAssembly(){

    //    let assembly= [];
    //    let elements =[];
       
        $(divClass).each(function( index ) {
            console.log( index + ": " + $(this).attr('id'))
        })
    }
});