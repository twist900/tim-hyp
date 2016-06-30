<!-- <h2>{{ $taxon->name }}</h2>

 -->
@foreach($smartLifeServices as $smartLifeService)

  <section class="group-panel" style="background-image: url({{ URL::to($smartLifeService->wide_image->url('wide')) }});">
    <div class="header-content">
      <div class="header-content-inner">
        <a href="{!! action('SmartLifeServiceController@show', ['id' => $smartLifeService->id]); !!}">
        <div class="content">
          <h1>{{ $smartLifeService->name }}</h1>
          <h2 style="color:DimGray; ">{{ $smartLifeService->description }}</h2>
        </div>
      </div>
    </div>
  </section>

@endforeach



