@extends('layouts.application')

@section('content')

<h2>{{ $service->name }}</h2>

<p>{!! $service->description !!}</p>

@stop