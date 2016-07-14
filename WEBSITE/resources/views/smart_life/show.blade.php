@extends('layouts.application')
@section('content')
<div class="container">

  <h2>{{ $smartLifeService->name }}</h2>
  <h3>{!! $smartLifeService->description !!}</h3>
  <p>{!! $smartLifeService->benefits !!}</p>

  @unless($relatedDevices->isEmpty())
    <h3>Related Devices:</h3>
    <ul class="list-group">


      <div class="col-sm-12" style="width: 100%; padding:35px;">
          @foreach( $relatedDevices as $device )
            @include('shared._device', ['device' => $device])
          @endforeach
      </div>
    </ul>

    {!! $relatedDevices->render() !!}
  @endunless

</div>

@stop