@extends('layouts.application')
@section('content')

<h2>{{ $smartLifeService->name }}</h2>
<h3>{!! $smartLifeService->description !!}</h3>
<p>{!! $smartLifeService->benefits !!}</p>


@stop