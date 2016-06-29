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

Route::get('/', ['as' => 'home', function () {
    return view('static.home');
}]);

Route::resource('taxon', 'TaxonController', ['only' => [
    'index', 'show'
]]);

Route::resource('device', 'DeviceController', ['only' => [
    'index', 'show'
]]);

Route::resource('assistance-service', 'AssistanceServiceController', ['only' => [
    'index', 'show'
]]);

Route::resource('smart-life-service', 'SmartLifeServiceController', ['only' => [
    'index', 'show'
]]);

Route::resource('subscription', 'SubscriptionController', ['only' => [
    'create', 'store'
]]);

Route::get('/the-group', ['as' => 'the_group', function () {
    return view('static.the_group');
}]);

Route::get('/who-we-are', ['as' => 'who_we_are', function () {
    return view('static.who_we_are');
}]);