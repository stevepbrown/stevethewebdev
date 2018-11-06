<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Page extends Model
{
//   

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


}
