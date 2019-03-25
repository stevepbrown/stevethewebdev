<div id="div-scripts" hidden>
        <noscript>This page uses javascript to provide an interactive browsing experience &#46; Please enable javascript to experience the site in its intended form &#46;</noscript>
        
        {{-- 
                The version method will automatically append a unique hash to the filenames of all compiled files, allowing for more convenient cache busting:
        --}}
        
        <script src="{{mix('js/manifest.js')}}"></script>
        <script src="{{mix('js/vendor.js')}}"></script>
        <script src="{{mix('js/app.js')}}"></script>
        
        <!-- Google maps API -->
        <script id="script-api-google-maps" src="https://maps.googleapis.com/maps/api/js?key={{env('GEO_GOOGLE_MAPPING_API')}}&callback=initMap" async defer>                   
        </script>
        
        {{$supplementary_scripts}}
        {{$slot}}
</div>