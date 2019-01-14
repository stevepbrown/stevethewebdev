<?php

namespace App;

use Illuminate\Database\Eloquent\Model;


//Scope to return only active records
use App\Scopes\ActiveScope;


class Trade extends Model{

    protected static function boot()
    {
        parent::boot();

        static::addGlobalScope(new ActiveScope);
    }

    public function themes() {
    
        return $this->hasManyThrough('App\Theme','App\TradeTheme','trade_id','id','id','theme_id');
       
         
    }

  
  

}