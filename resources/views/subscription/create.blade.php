@extends('layouts.application')
@section('content')
<div class="container">

  <h1>New Request</h1>
  {!! BootForm::open(['model' => new App\Subscription(), 'store' => 'SubscriptionController@store']) !!}
    <!-- /resources/views/projects/partials/_form.blade.php -->
        {!! BootForm::text('firstname') !!}
        {!! BootForm::text('lastname') !!}
        {!! BootForm::email('email') !!}
        {!! BootForm::text('phone') !!}
        {!! BootForm::text('address') !!}
        {!! BootForm::text('country') !!}
        {!! BootForm::text('ssn') !!}
        {!! BootForm::textarea('note') !!}

        {!! BootForm::submit('Send Request') !!}
    </div>
  {!! BootForm::close() !!}
</div>
@stop