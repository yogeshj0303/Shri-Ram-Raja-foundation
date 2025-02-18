@extends('layout.main')

@section('main.container')
<style>
    .card-title
    {
     color:black !important;   
    }
    .card-img-top{
        height:250px!important;
    }
</style>

<section class="page-title bg-1">

  <div class="container">

    <div class="row">

      <div class="col-md-12">

        <div class="block text-center">

          <span class="text-white">{{$language->blog}}</span>

          <h1 class="text-capitalize mb-4 text-lg">All Events</h1>

        </div>

      </div>

    </div>

  </div>

</section>





<section class="section event" style="margin-top: 29px;">
    <div class="container">
        <!-- Section Heading -->
        <div class="row justify-content-center mt-3">
            <!-- Start Event Cards -->
            @foreach($events as $event)
         <a href="{{ route('eventdetails', $event->id) }}">
                <div class="col-lg-4 col-md-6 mb-4">
                    <div class="card blog-item">
                        <!-- Dynamic Image -->
                        <img src="{{ asset('uploads/images/' . $event->event_image) }}" class="card-img-top" alt="Event Image">

                        <!-- Card Body -->
                        <div class="card-body mt-2">
                            <!-- Dynamic Title -->
                            <h3 class="mb-3 text-center">
                                <a href="{{ url('/event/' . $event->id) }}" class="text-dark">{{ $event->event_title }}</a>
                            </h3>
                            <!-- Dynamic Description -->
                            <p>{{ Str::limit($event->event_desc, 100) }}</p>
                        </div>
                    </div>
                </div>
                </a>
            @endforeach
            <!-- End Event Cards -->
        </div>
    </div>
</section>





@endsection