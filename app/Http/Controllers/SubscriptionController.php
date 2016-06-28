<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

use App\Http\Requests;
use Illuminate\Support\Facades\Input;
use Illuminate\Support\Facades\Redirect;
use App\Subscription;

class SubscriptionController extends Controller
{
    function create(){
      return view('subscription.create');
    }

    function store(Request $request){
      $this->validate($request, [
              'email' => 'required|unique:subscriptions|email',
              'firstname' => 'required',
              'lastname' => 'required'
          ]);

      $input = Input::all();
      Subscription::create( $input );

      return Redirect::route('home')->with('message', 'Request sent successfully');
    }
}
