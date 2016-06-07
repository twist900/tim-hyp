<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class SmartLife extends Model
{
    public function taxon()
    {
    	return $this->belongsTo('App\Taxon');
    }
}
