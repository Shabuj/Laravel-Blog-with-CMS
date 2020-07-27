<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Catagory extends Model
{
     public static function RandomCatSelectForSidebar(){
     $cat = Catagory::all();
                        
        return $cat;
   }
}
