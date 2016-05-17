<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Device extends Model
{
  /**
      * Get all of the comment's likes.
      */
     public function images()
     {
         return $this->morphMany('App\Attachment', 'viewable');
     }
}
