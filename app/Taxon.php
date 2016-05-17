<?php

namespace App;
use Illuminate\Database\Eloquent\Model;
use Kalnoy\Nestedset\NodeTrait;

class Taxon extends Model
{
  use NodeTrait;

  public function devices()
  {
     return $this->belongsToMany('App\Device');
  }

}
