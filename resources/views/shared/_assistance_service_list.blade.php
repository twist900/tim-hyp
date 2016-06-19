<ul class="list-group">
@foreach($childTaxon->assistanceServices as $assistanceService)

  <li class="list-group-item">
    {!! Html::linkAction('AssistanceServiceController@show', $assistanceService->name,  $assistanceService->id, []) !!}
  </li>

@endforeach
</ul>
