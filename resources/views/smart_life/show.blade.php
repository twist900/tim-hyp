@extends('layouts.application')
@section('content')

<h2>{{ $smartLife->name }}</h2>
<h3>{!! $smartLife->description !!}</h3>
<p>{!! $smartLife->benefits !!}</p>


@stop