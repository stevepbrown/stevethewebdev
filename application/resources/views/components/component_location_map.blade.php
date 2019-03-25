<div id="div-location-map" class="p-4">
    <style>
        #div-location-map {

            background-color: #6c757d;
            opacity: 0.5;
            color: #212529;
            font-size: 2em;
            width: 95%;
            margin: auto;


        }
    </style>


    <div class="mx-auto text-center">
        <p class="animated pulse infinite">Map loading</p>
        <i class="fa fa-2x fa-compass fa-spin"></i>
        {{-- <img alt="Map showing location of office"> --}}
    </div>

    <script>
            var map;
            function initMap() {
              map = new google.maps.Map(document.getElementById('map'), {
                center: {lat: -34.397, lng: 150.644},
                zoom: 8
              });
            }
          </script>
      
</div>
