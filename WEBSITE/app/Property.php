<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Property extends Model
{
    public function devices()
    {
      return $this->belongsToMany('App\Device')->withPivot('value');
    }
}
