<?php

namespace App;

use Illuminate\Database\Eloquent\Model;
use Illuminate\Support\Collection;
use Illuminate\Http\Request;


class Location extends Model
{
   
    public function __construct(Request $request)
    {
            $this->size= $request->dimensions;
            $this->setApiKeyAttribute();                         
    }   

    

    /* center (required if markers not present) defines the center of the map, equidistant from all edges of the map. This parameter takes a location as either a comma-separated {latitude,longitude} pair (e.g. "40.714728,-73.998672") or a string address (e.g. "city hall, new york, ny") identifying a unique location on the face of the earth. For more information, see Locations below.*/
    protected $center;  
    
    protected function setCenterAttribute(){

        $lat = config('location.latitude');
        $long = config('location.longitude');
        $this->center= $lat.','.$long;

    }

    protected function getCenterAttribute(){
        
        return $this->center;
    }
  
    // zoom (required if markers not present) defines the zoom level of the map, which determines the magnification level of the map. This parameter takes a numerical value corresponding to the zoom level of the region desired. For more information, see zoom levels below.

    protected $zoom;

    protected function setZoomAttribute($level=1){

        $this->zoom = $level;

    }

    protected function getZoomAttribute(){

        return $this->zoom;

    }

 
    // size (required) defines the rectangular dimensions of the map image. This parameter takes a string of the form {horizontal_value}x{vertical_value}. For example, 500x400 defines a map 500 pixels wide by 400 pixels high. Maps smaller than 180 pixels in width will display a reduced-size Google logo. This parameter is affected by the scale parameter, described below; the final output size is the product of the size and scale values.
  
    protected $size;


    protected function setSizeAttribute($dimensions){

        $this->size = $dimensions;
    }
    protected function getSizeAttribute(){

        return $this->size;
    }


    // scale (optional) affects the number of pixels that are returned. scale=2 returns twice as many pixels as scale=1 while retaining the same coverage area and level of detail (i.e. the contents of the map don't change). This is useful when developing for high-resolution displays, or when generating a map for printing. The default value is 1. Accepted values are 2 and 4 (4 is only available to Google Maps APIs Premium Plan customers.) See Scale Values for more information.
    protected $scale;

    
    protected function setScaleAttribute($level=1){

        $this->scale = $level;
        
    }
    protected function getScaleAttribute(){

        return $this->scale;
    }

    // format (optional) defines the format of the resulting image. By default, the Maps Static API creates PNG images. There are several possible formats including GIF, JPEG and PNG types. Which format you use depends on how you intend to present the image. JPEG typically provides greater compression, while GIF and PNG provide greater detail. For more information, see Image Formats.
    protected $format;

    
    protected function setFormatAttribute($filetype="JPEG"){

        $this->format = $filetype;
    }

    protected function getFormatAttribute(){

        return $this->format;
    }

    //     maptype (optional) defines the type of map to construct. There are several possible maptype values, including roadmap, satellite, hybrid, and terrain. For more information, see Maps Static API Maptypes below.
    protected $type;

    
    protected function setTypeAttribute($type="roadmap"){

        $this->type = $type;
        
    }
    
    protected function getTypeAttribute(){

        return $this->type;

    }

    
//     language (optional) defines the language to use for display of labels on map tiles. Note that this parameter is only supported for some country tiles; if the specific language requested is not supported for the tile set, then the default language for that tileset will be used.
protected $language;


protected function setLanguageAttribute(){

    $this->language = 'EN-GB';
        
}
protected function getLanguageAttribute(){

    return $this->language;

}

//     region (optional) defines the appropriate borders to display, based on geo-political sensitivities. Accepts a region code specified as a two-character ccTLD ('top-level domain') value.
protected $region;


protected function setRegionAttribute($ccTLD="UK"){

        $this->region = $ccTLD;
}
protected function getRegionAttribute(){

    return $this->region;
}



//     markers (optional) define one or more markers to attach to the image at specified locations. This parameter takes a single marker definition with parameters separated by the pipe character (|). Multiple markers may be placed within the same markers parameter as long as they exhibit the same style; you may add additional markers of differing styles by adding additional markers parameters. Note that if you supply markers for a map, you do not need to specify the (normally required) center and zoom parameters. For more information, see Maps Static API Markers below.
protected $markers;


protected function setMarkersAttribute($definition){

    $this->markers = $definition;    

}
protected function getMarkersAttribute(){

    return $this->markers;
}

//     path (optional) defines a single path of two or more connected points to overlay on the image at specified locations. This parameter takes a string of point definitions separated by the pipe character (|), or an encoded polyline using the enc: prefix within the location declaration of the path. You may supply additional paths by adding additional path parameters. Note that if you supply a path for a map, you do not need to specify the (normally required) center and zoom parameters. For more information, see Maps Static API Paths below.
protected $path;


protected function setPathAttribute($pathString){

    $this->path = $pathString;
        
}
protected function getPathAttribute(){

    return $this->path;
}

//     visible (optional) specifies one or more locations that should remain visible on the map, though no markers or other indicators will be displayed. Use this parameter to ensure that certain features or map locations are shown on the Maps Static API.
protected $visible; 


protected function setVisibleAttribute($location){

        $this->visible = $location;
}
protected function getVisibleAttribute(){

    return $this->visible;
}

//     style (optional) defines a custom style to alter the presentation of a specific feature (roads, parks, and other features) of the map. This parameter takes feature and element arguments identifying the features to style, and a set of style operations to apply to the selected features. You can supply multiple styles by adding additional style parameters. For more information, see the guide to styled maps.
protected $style;


protected function setStyleAttribute($feature){

        $this->feature = $feature;
}
protected function getStyleAttribute(){

    return $this->style;
}

// Key and Signature Parameters

//     key (required) allows you to monitor your application's API usage in the Google Cloud Platform Console, and ensures that Google can contact you about your application if necessary. For more information, see Get a Key and Signature.

protected $apiKey;


protected function setApiKeyAttribute(){

   $this->apiKey = env('GEO_GOOGLE_MAPPING_API'); 
   
    
}
protected function getApiKeyAttribute(){

   return $this->apiKey;

}

//     signature (recommended) is a digital signature used to verify that any site generating requests using your API key is authorized to do so. Requests without a digital signature might fail. For more information, see Get a Key and Signature.
protected $signature;



protected function setSignatureAttribute(){

    $this->signature = env('GEO_GOOGLE_SIGNING_SECRET');
        
}
protected function getSignatureAttribute(){

    return $this->signature;
}


protected function loadApiSrc(){

    
    $string = 'https://maps.googleapis.com/maps/api/js?key=';
    $string .= $this->apiKey;
    $string .= '&callback=initMap';

 
    return $string;
  
 
}


function mapTemplate(){
    
    // the map parameters collection
    $collection = collect([

        'center'=>$this->center,
        'zoom'=>$this->zoom,
        'format'=>$this->format,
        'language'=>$this->language,
        'markers'=>$this->markers,
        'path'=>$this->path,
        'region'=>$this->region,
        'scale'=>$this->scale,
        'type'=>$this->type,
        'visible'=>$this->visible,
        'style'=>$this->style,

    ]);

    // The map options JSON 
    $mapOpts= $collection->toJson();

    $template = '<script>';
    $template.='var map;';
    $template.='function initMap()';
    $template.='{';
    $template.='map = new google.maps.Map';
    $template.='(';
    $template.='document.getElementById';
    $template.='(div-location-map,';
    $template.='@@';
    $template.=')';
    $template.=')';
    $template.='};';
    $template.='</script>';

    return str_replace_array('@@',[$mapOpts], $template);
}

protected function apiTemplate(){

    $string = '<script id="scp-map-api" src="@@"><script>';

    $replaced = str_replace_array('@@', [$this->loadApiSrc()], $string);
   
    return $replaced;
    
 
}


/**
 * function toHtml()
 *
 * Concatenates the html for the map and the api script,
 * returning the html 
 * 
 * @return html
 *  
 */
public function toHtml(){
    
    $apiTemplate = $this->apiTemplate();
    $mapTemplate = $this->mapTemplate();
    return ($apiTemplate.'</br>'.$mapTemplate);

}




}
