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

        
<!-- Google maps API -->

{{--  This loads the API code from google--}}
<script id="script-api-google-maps" src="https://maps.googleapis.com/maps/api/js?key={{env('GEO_GOOGLE_MAPPING_API')}}&callback=initMap" async defer>                   
</script>

<script id="scp-map-loader" async defer>

    let mapWidth= $("#div-location-map").width();
    let mapHeight= $("#div-location-map").height();
    let url = './ajax/map_loader?mapWidth='+mapWidth+'&mapHeight='+mapHeight+''
    
    $.ajaxSetup({
      cache: true
    });
    
    $.getScript( "ajax/test.js" )
      .done(function( script, textStatus ) {
        
      })
      .fail(function( jqxhr, settings, exception ) {
        $( "div#div-api-error" ).text( "Triggered ajaxError handler." );
    });
       
                
</script>
      
</div>
