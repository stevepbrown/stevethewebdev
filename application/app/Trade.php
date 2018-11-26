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

}