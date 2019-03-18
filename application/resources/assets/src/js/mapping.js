

/***
 *                                     .__                         __         
 *      _____  _____   ______  ______  |__|  ____    ____         |__|  ______
 *     /     \ \__  \  \____ \ \____ \ |  | /    \  / ___\        |  | /  ___/
 *    |  Y Y  \ / __ \_|  |_> >|  |_> >|  ||   |  \/ /_/  >       |  | \___ \ 
 *    |__|_|  /(____  /|   __/ |   __/ |__||___|  /\___  / /\ /\__|  |/____  >
 *          \/      \/ |__|    |__|             \//_____/  \/ \______|     \/ 
 */

'use strict'; 


 $(function(){

        function LoadMap() {

        // The location of Office
        var office = {lat: 53.4866871, lng: -2.6514702};
        // The map, centered at Office
        var map = new google.maps.Map(
            document.getElementById('div-location-map'), {zoom: 4, center: office});
        // The marker, positioned at Office
        var marker = new google.maps.Marker({position: office, map: map});


        };


 });