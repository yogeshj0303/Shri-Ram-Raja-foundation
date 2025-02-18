@extends('layout.main')

@section('main.container')



<section class="page-title bg-1">

  <div class="container">

    <div class="row">

      <div class="col-md-12">

        <div class="block text-center">

          <span class="text-white">Build for school</span>

          <h1 class="text-capitalize mb-4 text-lg">Compaign Details</h1>

        </div>

      </div>

    </div>

  </div>

</section>





<section class="section cause-single" style="margin-top:20px">

	<div class="container">

		<div class="row justify-content-center">

			<div class="col-lg-8">

				<div class="single-details">

<img src="{{ asset('uploads/images/' . $campaign->campaigns_image) }}" alt="" class="img-fluid w-100">


				
					<h2 class="my-4 text-lg">{{$campaign->campaigns_title}}</h2>



					<div class="bg-light p-4 d-flex align-items-center justify-content-between mb-4">

						<div class="cause-meta">

							<ul class="list-inline mb-0">

					        	<li class="list-inline-item"><i class="icofont-check text-color mr-2"></i>Goal:	<span class="font-weight-bold"></span></li>


					        </ul>

						</div>

						<a href="donation.html" class="btn btn-main rounded">Donate now</a>

					</div>



					<h2 class="mb-3 mt-5">We Need Your Help.Let's Work together.</h2>

					<p>{!! $campaign->campaigns_desc !!}</p>



					<div class="row">

						<div class="col-lg-6">

							<img src="images/about/image-1.jpg" alt="" class="img-fluid w-100">

						</div>

						<div class="col-lg-6">

							<img src="images/about/image-2.jpg" alt="" class="img-fluid w-100">

						</div>

					</div>



				





			

				</div>

			</div>

            <div class="col-lg-4">

                <div class="sidebar-wrap mt-5 mt-lg-0">



	<div class="sidebar-widget latest-post p-4 mb-3">

		<h5>Latest Posts</h5>



        <div class="border-bottom py-3">

            <span class="text-sm text-muted"></span>

            <h5 class="my-2"><a href="#">Thoughtful living in los Angeles</a></h5>

        </div>



      



      

	</div>







</div>

            </div>   

		</div>

	</div>

</section>







@endsection