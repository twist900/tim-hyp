<ul class="list-group">
@foreach($childTaxon->assistanceServices as $assistanceService)

  <li class="list-group-item">
    {!! HTML::linkAction('AssistanceServiceController@show', $assistanceService->name,  $assistanceService->id, []) !!}
  </li>

@endforeach
</ul>
