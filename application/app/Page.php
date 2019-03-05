<?php

namespace App;

use Illuminate\Database\Eloquent\Model;
use App\Scopes\ActiveScope;

class Page extends Model
{
//   

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



protected static function boot()
{
    parent::boot();

    static::addGlobalScope(new ActiveScope);
}

/**
 * getRouteKeyName()
 *
 * @return string
 * 
 * If you would like model binding to use a database column other than id when 
 * retrieving a given model class, you may override the getRouteKeyName method on the 
 * Eloquent model:
 */
public function getRouteKeyName()
{
    return 'slug';
}


 /**
     * Get the user's first name.
     *
     * @param  string  $value
     * @return string
     */
    public function getPageTitle()
    {
    
        // Accessor to construct the meta_title 
    
    }




}
