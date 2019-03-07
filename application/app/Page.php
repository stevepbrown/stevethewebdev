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

    /**
     * getKeywordTitleAttribute()
     *
     * This is the accessor that provides
     * the 'keyword_title' property.NB. Laravel
     * infers the property from the function
     * name in format get[blah]Attribute
     * 
     * @return string
     */
      public function getKeywordTitleAttribute()
      {
    
        if (isset($this->secondary_keyword)) {
            return ($this->primary_keyword)."|".($this->secondary_keyword)."|".($this->brand_keyword);
        }
        else{
            return ($this->primary_keyword)."|".($this->brand_keyword);
        }
    
                
      }
 
    
}
