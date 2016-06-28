<h2>{{ $taxon->name }}</h2>
<ul class="list-group">

@foreach($smartLifeServices as $smartLifeService)

  <li class="list-group-item">
    {!! HTML::linkAction('SmartLifeServiceController@show', $smartLifeService->name,  $smartLifeService->id, []) !!}
  </li>

@endforeach
</ul>