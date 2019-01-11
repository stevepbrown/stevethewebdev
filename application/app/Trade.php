<?php

namespace App;

use Illuminate\Database\Eloquent\Model;
use App\Theme;

//Scope to return only active records
use App\Scopes\ActiveScope;


class Trade extends Model{

    protected static function boot()
    {
        parent::boot();

        static::addGlobalScope(new ActiveScope);
    }

    public function tradesThemes()
    {
        return $this->hasMany('App\TradeTheme', 'trade_id', 'id');
    }
    

    
    
}