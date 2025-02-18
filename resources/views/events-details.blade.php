@extends('layout.main')

@section('main.container')





<section class="page-title bg-1">

  <div class="container">

    <div class="row">

      <div class="col-md-12">

        <div class="block text-center">

          <span class="text-white">{{$blog->event_title}}</span>

          <h1 class="text-capitalize mb-4 text-lg">Event Details</h1>

        </div>

      </div>

    </div>

  </div>

</section>





<section class="section cause-single" style="margin-top: 29px;">

	<div class="container">

		<div class="row justify-content-center">

			<div class="col-lg-8">

				<div class="single-details">


                        <img src="{{ asset('uploads/images/' . $blog->event_image) }}" class="card-img-top" alt="Event Image">


					<!--<h2 class="my-4 text-lg">Build for school for poor child</h2>-->


                            <h2 class="my-0"><a href="#">{{$blog->event_title}}</a></h2>

					<p class="mb-5">{!! $blog->event_desc !!} </p>



				</div>

			</div>

            <div class="col-lg-4">

                <div class="sidebar-wrap mt-5 mt-lg-0">

                  

                    <div class="sidebar-widget latest-post p-4 mb-3">

                        <h5>{{$language->recent_post}}</h5>


                        @foreach($recents as $recent)
                        <div class="border-bottom py-3">
                            

                            <span class="text-sm text-muted">{{$recent->created_at->diffForHumans()}}</span>

                            <h5 class="my-2"><a href="#">{{$recent->event_title}}</a></h5>

                        </div>

                        @endforeach


                     
                    </div>



      



                </div>

            </div>   

		</div>

	</div>

</section>





@endsection