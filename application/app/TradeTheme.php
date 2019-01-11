<?php

namespace App;

use Illuminate\Database\Eloquent\Model;


class TradeTheme extends Model
{
   public function trade()
   {
       return $this->belongsTo('App\Trade', 'trade_id', 'id');
   }

   public function theme(){
          return $this->belongsTo('App\Theme', 'theme_id', 'id');

}
}