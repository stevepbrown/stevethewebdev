<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

//Scope to return only active records
use App\Scopes\ActiveScope;

class Service extends Model
{

    protected static function boot()
    {
        parent::boot();

        static::addGlobalScope(new ActiveScope);
    }

}
