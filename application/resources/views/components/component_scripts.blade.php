<div id="div-scripts" hidden>
        <noscript>This page uses javascript to provide an interactive browsing experience &#46; Please enable javascript to experience the site in its intended form &#46;</noscript>
        
        {{-- 
                The version method will automatically append a unique hash to the filenames of all compiled files, allowing for more convenient cache busting:
        --}}
        
        {{-- <script src="js/manifest.js"></script>
        <script src="js/vendor.js"></script>
        <script src="js/app.js"></script> --}}

        <script src="{{mix('js/manifest.js')}}"></script>
        <script src="{{mix('js/vendor.js')}}"></script>
        <script src="{{mix('js/app.js')}}"></script>        


        {{$supplementary_scripts}}
        {{$slot}}
</div>