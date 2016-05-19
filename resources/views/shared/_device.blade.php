@if(isset($device))
  <div class="col-sm-4">
    <div class="product-image-wrapper">
      <div class="single-products">
          <div class="productinfo text-center">
            @if( !$device->attachments()->get()->isEmpty())
              <img src="{{ $device->attachments()->first()->image->url('large') }}" alt="" />
            @endif
            <h2>$ {{ $device->cost }}</h2>
            <p>{{ $device->name }}</p>
            <a href="#" class="btn btn-default add-to-cart"><i class="fa fa-shopping-cart"></i>Add to cart</a>
          </div>

      </div>
      <div class="choose">
        <ul class="nav nav-pills nav-justified">
          <li><a href="#"><i class="fa fa-plus-square"></i>Add to wishlist</a></li>
          <li><a href="#"><i class="fa fa-plus-square"></i>Add to compare</a></li>
        </ul>
      </div>
    </div>
  </div>
@endif