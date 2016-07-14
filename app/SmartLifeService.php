<?php

namespace App;

use Illuminate\Database\Eloquent\Model;
use Illuminate\Database\Eloquent\Builder;

class SmartLifeService extends Service
{
    protected $table = "services";

    protected $attributes = array(
      'type' => 'SmartLifeService'
    );

    public static function boot()
    {
        parent::boot();

        static::addGlobalScope('type', function(Builder $builder) {
            $builder->where('type', 'SmartLifeService');
        });
    }

    public function devices()
    {
      return $this->belongsToMany('App\Device',  'device_service', 'device_id', 'service_id');
    }

}
