<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class View extends Model
{
    /**
        * Get all of the owning viewable models.
        */
    public function viewable()
    {
        return $this->morphTo();
    }
}
