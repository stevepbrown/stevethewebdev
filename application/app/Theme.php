<?php

namespace App;
//Scope to return only active records
use App\Scopes\ActiveScope;
 

use Illuminate\Database\Eloquent\Model;

class Theme extends Model
{ protected static function boot()
    {
        parent::boot();

        static::addGlobalScope(new ActiveScope);
    }
   
      
}
