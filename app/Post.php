<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Post extends Model
{
   public static function RandomPostSelectForSidebar()
   {
        $posts = Post::orderBy('created_at', 'desc')
                         ->limit(2)
                         ->get();
        return $posts;
   }
}
