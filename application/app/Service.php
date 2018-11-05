<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Service extends Model
{
     public static function getActive(){

        $active_services = self::where('active','=',1);
        
        
        return $active_services->get();

    }
}
