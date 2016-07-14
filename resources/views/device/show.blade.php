@extends('layouts.application')


@section('content')
<div class="container">
  <div class="col-sm-12 padding-right">
    <div class="product-details"><!--product-details-->
      <div class="col-sm-5">
        <div class="product-view-slider">
          @if( !$device->attachments()->get()->isEmpty())
            @foreach($device->attachments as $attachment)
                <div>
                  <img src="{{ $attachment->image->url('large') }}" alt="" />
                </div>
            @endforeach
          @endif
        </div>
      </div>
      <div class="col-sm-7">
        <div class="product-information"><!--/product-information-->
          <h2>{{ $device->name }}</h2>
          <span>
            <span>EUR {{ $device->cost }}</span>
          </span>
          <p><b>Availability:</b> In Stock</p>
          <p><b>Condition:</b> New</p>
          <p><b>Brand:</b> {{ $device->company->name }}</p>

        @unless($device->smartLifeServices->isEmpty())
          <h3>Related Smart Life Services:</h3>
          <ul class="list-group">
            @foreach($device->smartLifeServices as $smartLifeService)
              <li class="list-group-item">
                 {!! HTML::linkAction('SmartLifeServiceController@show', $smartLifeService->name,  $smartLifeService->id, []) !!}
               </li>
            @endforeach
          </ul>
        @endunless

        @unless($device->assistanceServices->isEmpty())
          <h3>Related Assistance Services:</h3>
          <ul class="list-group">
            @foreach($device->assistanceServices as $assistanceService)
              <li class="list-group-item">
                 {!! HTML::linkAction('AssistanceServiceController@show', $assistanceService->name,  $assistanceService->id, []) !!}
               </li>
            @endforeach
          </ul>
        @endunless
      </div><!--/product-information-->

    </div><!--/product-details-->



    <div class="category-tab shop-details-tab"><!--category-tab-->
      <div class="col-sm-12">
        <ul class="nav nav-tabs">
          <li ><a href="#details" data-toggle="tab">DESCRIPTION</a></li>
          <li class="active"><a href="#specs" data-toggle="tab">TECNICHAL SPECIFICATIONS</a></li>
        </ul>
      </div>
      <div class="tab-content">
          <div class="tab-pane fade" id="details" >
            <div class="col-sm-12">
              <p>{{ $device->description }}</p>
            </div>
          </div>

          <div class="tab-pane fade in active" id="specs" >
            <table class="table">
              <thead>
                <tr>
                  <th></th>
                  <th></th>
                </tr>
              </thead>
              <tbody>
                @foreach( $device->properties as $property)
                  <tr>
                    <td>{{ $property->name }}</td>
                    <td>{{ $property->pivot->value }}</td>
                  </tr>
                @endforeach
              </tbody>
              </table>
          </div>
      </div>
    </div><!--/category-tab-->

  </div>
</div>
</div>
@stop