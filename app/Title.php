<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Title extends Model
{
      public static function RandomTitleSelectForSidebar(){
      $title = Title::all();
        return $title;
   }
}
