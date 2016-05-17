<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Service extends Model
{
    public function taxon()
    {
      return $this->belongsTo('App\Taxon');
    }

    public function faqs()
    {
      return $this->hasMany('App\Faq');
    }
}
