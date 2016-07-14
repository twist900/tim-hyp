<div class="container">
  <h2>{{ $taxon->name }}</h2>
  <ul class="list-group">
  @foreach($assistanceServices as $assistanceService)

    <li class="list-group-item">
      @if($taxon->most_popular)
        <span class="label label-default label-pill pull-right">{{ $assistanceService->views()->count() }}</span>
      @endif

      {!! HTML::linkAction('AssistanceServiceController@show', $assistanceService->name,  $assistanceService->id, []) !!}
    </li>

  @endforeach
  </ul>
</div>