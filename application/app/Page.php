<?php

namespace App;

use Illuminate\Database\Eloquent\Model;
//Scope to return only active records
use App\Scopes\ActiveScope;

class Page extends Model
{

    protected static function boot()
    {
        parent::boot();

        static::addGlobalScope(new ActiveScope);
    }    

protected $fillable = [

    'name',
    'primary_keyword',
    'secondary_keyword',
    'brand_keyword',
    'display_title',
    'page_title',
    'meta_title',
    'slug',
    'active'
   ];



}
