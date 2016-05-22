@if(isset($device))
  <div class="col-sm-4">
    <div class="product-image-wrapper">
      <div class="single-products">
          <div class="productinfo text-center">
            @if( !$device->attachments()->get()->isEmpty())
              <img src="{{ $device->attachments()->first()->image->url('large') }}" alt="" />
            @endif
            <h2>$ {{ $device->cost }}</h2>
            <div class="product-name">
              {!! Html::linkAction('DeviceController@show', $device->name,  $device->id, []) !!}
            </div>
          </div>

      </div>

    </div>
  </div>
@endif