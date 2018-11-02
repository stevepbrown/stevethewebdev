<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Service extends Model
{
     public function getActive(){

        $active_services = $this->where('active','=',1);
        
        
        return $active_services;

    }
}
