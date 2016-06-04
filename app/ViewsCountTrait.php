<?php

namespace App;
use Servise;
use DB;

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

  static function mostPopular(){
    $table = (new self)->getTable();
    $morphClass = (new self)->morphClass;

    $array = DB::table($table)
      ->select($table.'.id', DB::raw('count(*) as count'))
      ->join('views', 'views.viewable_id','=', $table.'.id')
      ->where('views.viewable_type', $morphClass)
      ->groupBy($table.'.id')
      ->orderBy('count', 'desc')
      ->take(5)
      ->get();

    $popularCollection = collect([]);
    foreach ($array as $value) {
      $service = Service::find($value->id);
      $popularCollection->push($service);
    }

    return $popularCollection;
  }

}