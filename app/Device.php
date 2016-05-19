<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Device extends Model
{
  protected $guarded = [];
  /**
      * Get all of the comment's likes.
      */
     public function attachments()
     {
        return $this->morphMany('App\Attachment', 'viewable');
     }

     public function properties()
     {
        return $this->belongsToMany('App\Property')->withPivot('value');
     }

     public function taxons()
     {
        return $this->belongsToMany('App\Taxon');
     }

}
