<?php

/*
|--------------------------------------------------------------------------
| Application Routes
|--------------------------------------------------------------------------
|
| Here is where you can register all of the routes for an application.
| It's a breeze. Simply tell Laravel the URIs it should respond to
| and give it the controller to call when that URI is requested.
|
*/

Route::get('/', function () {
    $taxon = App\Taxon::first();
    $devices = null;
    if(isset($taxon)){
      $devices = $taxon->devices();
    }
    return view('taxon.show', ['taxon' => $taxon, 'devices' => $devices]);
});

Route::resource('taxon', 'TaxonController', ['only' => [
    'index', 'show'
]]);

Route::resource('device', 'DeviceController', ['only' => [
    'index', 'show'
]]);

Route::resource('service', 'ServiceController', ['only' => [
    'index', 'show'
]]);