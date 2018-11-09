<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Theme extends Model
{
    public function trades() {          
             return $this->belongsToMany('App\Trade');
          }

      
}
