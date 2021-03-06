<?php

namespace App;

use Illuminate\Database\Eloquent\Model;
use Illuminate\Database\Eloquent\Builder;

class AssistanceService extends Service
{
    use ViewsCountTrait;

    protected $table = "services";

    protected $attributes = array(
      'type' => 'AssistanceService'
    );



    public static function boot()
    {
        parent::boot();

        static::addGlobalScope('type', function(Builder $builder) {
            $builder->where('type', 'AssistanceService');
        });
    }

    public function devices()
    {
      return $this->belongsToMany('App\Device',  'device_service', 'device_id', 'service_id');
    }
}
