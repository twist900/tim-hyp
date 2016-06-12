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

  public function companies()
  {
     return $this->belongsToMany('App\Company');
  }

  public function assistanceServices()
  {
    return $this->hasMany('App\AssistanceService');
  }
  public function smartLifeServices()
  {
    return $this->hasMany('App\SmartLifeService');
  }
}
