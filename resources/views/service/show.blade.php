@extends('layouts.application')
@section('content')
<div class="container">

  <h2>{{ $service->name }}</h2>
  <p>{!! $service->description !!}</p>

  @unless($faqs->count() == 0)

    <h2>FAQ</h2>

    <div class="panel-group accordion" id="accordion-15800067" style=" padding-bottom: 50px;">
      @foreach($faqs as $faq)

        <div class="panel panel-default">
          <div class="panel-heading active">
            <h4 class="panel-title">
              <a data-toggle="collapse" data-parent="#accordion-{{ $faq->id }}" href="#collapse-{{ $faq->id }}">
                {{ $faq->title }}
              </a>
            </h4>
          </div>

          <div id="collapse-{{ $faq->id }}" class="panel-collapse collapse">
            <div class="panel-body">
              {!! $faq->content !!}
            </div>
          </div>
        </div>

      @endforeach
    </div>

  @endunless

</div>
@stop