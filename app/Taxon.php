<?php

namespace App;
use Illuminate\Database\Eloquent\Model;
use Kalnoy\Nestedset\NodeTrait;

use Codesleeve\Stapler\ORM\StaplerableInterface;
use Codesleeve\Stapler\ORM\EloquentTrait;

class Taxon extends Model implements StaplerableInterface
{
  use EloquentTrait;
  use NodeTrait;

  public function __construct(array $attributes = array()) {
      $this->hasAttachedFile('icon', [
          'styles' => [
              'thumb' => '60x60',
              'menu' => '50x50'
          ]
      ]);

      $this->hasAttachedFile('wide_image', [
          'styles' => [
              'wide' => '1920x1200',
          ]
      ]);

      parent::__construct($attributes);
  }

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
