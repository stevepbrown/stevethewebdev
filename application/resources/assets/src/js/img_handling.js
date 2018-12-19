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
      * @name MQlistLarge,MQlistMedium,MQlistSmall
      * @var  {[type]}
      * @param {string} ['min-width'||'min-width' && 'max-width']
      * @returns {MediaQueryList} // one for each media query, as named
     */
    var MQlistLarge = window.matchMedia("(min-width: 992px)");
    var MQlistMedium = window.matchMedia("(min-width: 577px) AND (max-width: 991px)");
    var MQlistSmall = window.matchMedia("(max-width: 576px)");

     /**
     * @description Listens for 'onChange' on the MediaQueryList object & call a handler 
     * @listens MQlistLarge,MQlistMedium,MQlistSmall
     * @callback handleMQLChange
     */
    MQlistLarge.addListener(handleMQLChange(e));
    MQlistMedium.addListener(handleMQLChange(e));
    MQlistSmall.addListener(handleMQLChange(e));

   function handleMQLChange(e){

        alert('Fired:'+e.target.id);
        
    };


    


    /**
     * array to record the image designations to load
     * 
     * @constant {array}
     */
    const imgNames = ['A','B','C'];

    // the classname that identifies the div containing the image
    const divClass = '.showcase-img';

    const divs = $(divClass).toArray();

    alert(divs);
    
    // create an array to hold the trade, image designation and  div id
    
    function assetAssembly(){

    //    let assembly= [];
    //    let elements =[];
       
        $(divClass).each(function( index ) {
            console.log( index + ": " + $(this).attr('id'))
        })
    }
});