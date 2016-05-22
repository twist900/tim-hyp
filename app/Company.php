<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Company extends Model
{
    public function taxons()
    {
       return $this->belongsToMany('App\Taxon');
    }

    public function devices()
    {
       return $this->hasMany('App\Device');
    }
}
