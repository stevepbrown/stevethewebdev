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

    <div id="div-api-error" class="alert alert-danger d-none">
      {{-- Any api error responses will be placed here --}}
    </div>


    <div class="mx-auto text-center">
        <p class="animated pulse infinite">Map loading</p>
        <i class="fa fa-2x fa-compass fa-spin"></i>
        {{-- <img alt="Map showing location of office"> --}}
    </div>

        
  <script id="scp-map-loader" async defer>
        var map;
        var latitude = {{config('location.latitude')}};
        var longitude = {{config('location.longitude')}}

        alert([latitude,longitude]);
        function initMap() {
          map = new google.maps.Map(document.getElementById('div-location-map'), {
            center: {lat: latitude, lng:longitude  },
            zoom: 8
          });
        }
  </script>

  <!-- Google maps API -->
  <script id="script-api-google-maps" src="https://maps.googleapis.com/maps/api/js?key={{env('GEO_GOOGLE_MAPPING_API')}}&callback=initMap" async defer>                   
  </script>
</div>


