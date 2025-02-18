@extends('layout.main')

@section('main.container')







<section class="page-title bg-1">

  <div class="container">

    <div class="row">

      <div class="col-md-12">

        <div class="block text-center">

          <span class="text-white">What we do</span>

          <h1 class="text-capitalize mb-4 text-lg">Our Recent Compaign</h1>

        </div>

      </div>

    </div>

  </div>

</section>



<!-- Section About Start -->

<section class="section causes">
    <div class="container">
        <div class="row mt-4">
            <!-- Loop through Campaigns -->
            @foreach($Campaign as $campaign)
            <a href="{{ route('viewcampaign' , $campaign->id)}}">
                
                
                                <div class="col-lg-4 col-md-6 mb-4">
                    <div class="card cause-item">
                        <div class="row no-gutters">
                            <!-- Dynamic Image -->
                            <img src="{{ asset('uploads/images/' . $campaign->campaigns_image) }}" class="img-fluid w-100" alt="Campaign Image" style="height:200px;">

                            <div class="card-body">
                                <!-- Dynamic Title -->
                                <h3 class="mb-3 text-center">
                                    <a href="{{ url('campaign/' . $campaign->id) }}" style="color:black;">
                                        {{ $campaign->campaigns_title }}
                                    </a>
                                </h3>

                                <!-- Dynamic Details -->
                                <!--<ul class="list-inline border-bottom border-top py-3">-->
                                <!--    <li class="list-inline-item">-->
                                <!--        <i class="icofont-check text-color mr-2"></i>Goal: -->
                                <!--        <span> 0 Donations</span>-->
                                <!--    </li>-->
                                <!--</ul>-->

                                <!-- Dynamic Description -->
                                <p class="card-text mb-4">
                                    {{ Str::limit($campaign->campaigns_desc, 100) }}
                                </p>

                                <!-- Dynamic Donate Button -->
                                <a href="{{ route('contact') }}" class="btn btn-main rounded">Contact Now</a>
                            </div>
                        </div>
                    </div>
                </div>
                </a>

            @endforeach
            <!-- End Loop -->
        </div>
    </div>
</section>





@endsection