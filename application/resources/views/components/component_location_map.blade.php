<div id="div-location-map">
<style>
    #map {
      width: 100%;
      height: 400px;
      background-color: grey;
    }
   </style>

  <script async defer src="{{$src}}">

var $api = {{env('GEO_GOOGLE_MAPPING_API')}}
var $src = "https://maps.googleapis.com/maps/api/js?key=".$api."&callback=initMap"



</script>

</div>