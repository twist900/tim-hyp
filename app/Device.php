<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Device extends Model
{
  protected $guarded = [];
  /**
      * Get all of the device attachments.
      */
     public function attachments()
     {
        return $this->morphMany('App\Attachment', 'viewable');
     }

     public function properties()
     {
        return $this->belongsToMany('App\Property')->withPivot('value');
     }

     public function assistanceServices()
     {
        return $this->belongsToMany('App\AssistanceService',  'device_service', 'service_id', 'device_id');

     }

     public function smartLifeServices()
     {
        return $this->belongsToMany('App\SmartLifeService',  'device_service', 'service_id', 'device_id');
     }

     public function taxons()
     {
        return $this->belongsToMany('App\Taxon');
     }

     public function company()
     {
        return $this->belongsTo('App\Company');
     }
}
