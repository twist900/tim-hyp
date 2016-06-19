<div class="col-sm-9" style="width: 100%; padding:35px;">
    @foreach( $childTaxon->devices()->limit(3)->get() as $device )
      @include('shared._device', ['device' => $device])
    @endforeach
</div>
