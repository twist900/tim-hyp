<?php

namespace App;

trait ViewsCountTrait{

  /**
      * Get all of the service views.
      */
  public function views()
  {
     return $this->morphMany('App\View', 'viewable');
  }

  function hit(){
      $this->views()->save(new View());
  }

}