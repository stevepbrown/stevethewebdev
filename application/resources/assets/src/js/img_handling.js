/***
 *      _              _                 _ _ _              _    
 *     (_)_ __  __ _  | |_  __ _ _ _  __| | (_)_ _  __ _   (_)___
 *     | | '  \/ _` | | ' \/ _` | ' \/ _` | | | ' \/ _` |_ | (_-<
 *     |_|_|_|_\__, |_|_||_\__,_|_||_\__,_|_|_|_||_\__, (_)/ /__/
 *             |___/___|                           |___/ |__/    
 */



// Detect that the window is loaded

$(document).ready(function () {

    // array to record the image designations to load
    const imgNames = ['A','B','C'];

    // the classname that identifies the div containing the image
    const divClass = '.showcase-img';

    const divs = $(divClass)


    $(divClass).each(function( index ) {
    console.log( index + ": " + $(this).attr('id'));
    });

  
    

    /* this value originates server-side , and is injected into a javascript
    variable outside of this script */
    var trade = tradeName;


    /* note these return the full MediaQueryList object rather than 'matches' property,
    as this is required for listener */
    var MQlistLarge = window.matchMedia("(min-width: 992px)");
    var MQlistMedium = window.matchMedia("(min-width: 577px) AND (max-width: 991px)");
    var MQlistSmall = window.matchMedia("(max-width: 576px)");

    // Listens for 'onChange' on the MediaQueryList object & call a handler
    MQlistLarge.addListener(handleMQLChange);
    MQlistMedium.addListener(handleMQLChange);
    MQlistSmall.addListener(handleMQLChange);


    function handleMQLChange(){};
// Loop through the     
 

/**
 * @
 * @param {*} el
 * @returns  {string}    
 */
    function appendStyle(el){
        let txtHTML;
        
                return txtHTML;
    }
});