<?php

namespace App;
 

use Illuminate\Database\Eloquent\Model;

class Theme extends Model
{
  
    public function tradeThemes()
    {
        return $this->hasMany('App\TradeTheme', 'theme_id', 'id');
    }
      
}
