<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

//Scope to return only active records
use App\Scopes\ActiveScope;
use App\Theme;
use App\

// query the database
use Illuminate\Support\Facades\DB;

class Trade extends Model{

    protected static function boot()
    {
        parent::boot();

        static::addGlobalScope(new ActiveScope);
    }

    /**
     * Get the templates associated with the trade
     * 
     * @return  [type]  [return description]
     */
    protected function trades(){
   
        return $this->hasMany('Theme');
        return $this->hasManyThrough('App\Post', 'App\User');
    }
    
}