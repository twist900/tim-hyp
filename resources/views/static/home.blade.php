@extends('layouts.application')
@section('content')

<header class="home-header">
  <div class="header-content">
    <div class="header-content-inner">
        <h1>Join TIM, stay connected</h1>
        <hr>
        <p>Stay connected with your family and friend, anytime, anywhere!</p>
        <a href="{{ action('SubscriptionController@create') }}" class="btn btn-primary btn-xl page-scroll">SIGN UP</a>
    </div>
  </div>
</header>

<section id="services">
       <div class="container">
           <div class="row">
               <div class="col-lg-12 text-center">
                   <h2 class="section-heading">Try our service. Built around you.</h2>
                   <hr class="primary">
               </div>
           </div>
       </div>
       <div class="container">
           <div class="row">
             @foreach( App\Taxon::where('name', 'Smart Life')->first()->children()->limit(4)->get() as $service)
               <div class="col-lg-3 col-md-6 text-center">
                 <div class="service-box">
                    <a href="{{ action('TaxonController@show', ['id' => $service->id]) }}">
                      <img src="{{ $service->icon->url('thumb') }}">
                     </a>
                     <h3>{{ $service->name }}</h3>
                     <p class="text-muted">{{ $service->short_description }}</p>
                 </div>
               </div>
             @endforeach
           </div>
       </div>
   </section>

   <section class="assist-section">
     <div class="header-content">
       <div class="header-content-inner">
           <h1>Need help?</h1>
           <hr>

          <a href="{{ action('TaxonController@show', ['id' => App\Taxon::where('name', 'Assistenza')->first()->id]) }}" class="btn btn-primary btn-xl page-scroll">LET US ASSIST YOU</a>
       </div>
     </div>
   </section>

   <div class="testimonial-container">
    <div class="dk-container">
      <div class="cd-testimonials-wrapper cd-container">
        <h2>Testimonials</h2>
        <ul class="cd-testimonials">
          @foreach( App\Testimonial::all() as $testimonial)
          <li>
            <div class="testimonial-content">
              <p>{{ $testimonial->content }}</p>
              <div class="cd-author">
                <ul class="cd-author-info">
                  <li>{{ $testimonial->firstname }}<strong>{{ $testimonial->lastname }}</strong><br><span>{{"@" . $testimonial->lastname }}</span></li>
                  <li></li>
                </ul>
              </div>
            </div>
          </li>
          @endforeach
        </ul>
      </div>
      <!-- cd-testimonials -->
    </div>
   </div>


@stop