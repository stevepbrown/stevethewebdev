/***
 *      _              _                 _ _ _              _    
 *     (_)_ __  __ _  | |_  __ _ _ _  __| | (_)_ _  __ _   (_)___
 *     | | '  \/ _` | | ' \/ _` | ' \/ _` | | | ' \/ _` |_ | (_-<
 *     |_|_|_|_\__, |_|_||_\__,_|_||_\__,_|_|_|_||_\__, (_)/ /__/
 *             |___/___|                           |___/ |__/    
 */



// Detect that the window is loaded

$(document).ready(function () {

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

    // Event handler for the MediaQueryList change
    function handleMQLChange(e) {

        alert(e);
    }



});