

/***
 *      _              _                 _ _ _              _    
 *     (_)_ __  __ _  | |_  __ _ _ _  __| | (_)_ _  __ _   (_)___
 *     | | '  \/ _` | | ' \/ _` | ' \/ _` | | | ' \/ _` |_ | (_-<
 *     |_|_|_|_\__, |_|_||_\__,_|_||_\__,_|_|_|_||_\__, (_)/ /__/
 *             |___/___|                           |___/ |__/    
 */




"use strict";

// Detect that the window is loaded
$(document).ready(function(){
    


function DetectSize(){

    var WinWidth = window.innerWidth;

    console.log(WinWidth);

    var size= 'Not Set!'; 

    if (WinWidth >= 900){

        size = 'Large'

    }

    else if (Winwidth >= 600) {

        size='Medium'
    }

    else {
        size='Small'
    }

    console.log(WinWidth);

    return size;
    }

    


});

// Get collection of elements with the data-bg-image attribute

// Iterate the collection , obtaining the attribute value

// Make the AJAX call to the image endpoint (route) , passing the viewport size

// Return a JSON object for the image

// Remove the spinner class & any other 'holding' attributes

// Set the background image, alt tag, title etc. for the iteration of element




