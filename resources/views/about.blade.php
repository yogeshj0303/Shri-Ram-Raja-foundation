@extends('layout.main')

@section('main.container')


<style>
    .no-gutters>.col, .no-gutters>[class*=col-] {
    padding-right: 24px;
    padding-left: 0;
}
</style>


<section class="page-title bg-1">

  <div class="container">

    <div class="row">

      <div class="col-md-12">

        <div class="block text-center">

          <span class="text-white">who we are</span>

          <h1 class="text-capitalize mb-4 text-lg">About Us</h1>

        </div>

      </div>

    </div>

  </div>

</section>



<section class="section about-page">

	<div class="container">

		<div class="row">

			<div class="col-lg-4">

				<div class="about-item-img">

					

				</div>

			</div>



			<!--<div class="col-lg-8">-->

			<!--	<div class="about-item-content pl-4">-->

			<!--		<h2 class="mb-4 content-title"> Welcome to Charite NonProfit Organization</h2>-->

			<!--		<p class="lead">{{$language->about_us}}</p>-->

					

				

			<!--	</div>-->

			<!--</div>-->

		</div>

	</div>

</section>



@php
use App\Models\About;
$about = About::find(1);


@endphp

    <div class="section pt-0">

	<div class="container">

		<div class="row justify-content-center">

			<div class="col-lg-8">

				<div class="content  mt-3">

					<h2 class="content-title text-center mb-4">About  Us </h2>

					<p> {{ $about->description }} </p>
				</div>

			</div>

		</div>



  		<div class="clients-item-wrap mt-5">

			<div class="row">

				<div class="col-lg-3 col-md-6">

					<a href="#">

				{{-- 		<imgsrc="asset('assets/images/clients/client1.png') " alt="" class="img-fluid "> --}}

					</a>

				</div>



				<div class="col-lg-3 col-md-6">

					<a href="#" class="mt-4 mt-lg-0">

{{-- 					 	<img src="asset('assets/images/clients/client2.png')}}" alt="" class="img-fluid">---}}

					</a>

				</div>



				<div class="col-lg-3 col-md-6">

					<a href="#" class="mt-4 mt-lg-0">

				{{-- 		<imgsrc="asset('assets/images/clients/client5.png') --" alt="" class="img-fluid">--}}

					</a>

				</div>



				<div class="col-lg-3 col-md-6 ">

					<a href="#" class="mt-4 mt-lg-0">

	{{-- 					<imgsrc="asset('assets/images/client --" alt="" class="img-fluid">  --}}

					</a>

				</div>

			</div>

		</div>

	</div>

</div>





<section class="section feature pb-0">

	<div class="container">

		<div class="row no-gutters">

			<div class="col-lg-4 col-md-6">

				<div class="feature-inner">

					<i class="icofont-home"></i>

					<h4>Founded in 09/01/2018</h4>

					<p>Work Since 2018 with Pride!!</p>

					<!--<p>Cum voluptas tenetur, voluptatibus mollitia odio sint, alias debitis quasi ut commodo consequat.</p>-->

				</div>

			</div>

			<div class="col-lg-4 col-md-6">

				<div class="feature-inner">

					<i class="icofont-web"></i>

					<h4 >Our History</h4>

					<p>Mission to make smile the world</p>

					<!--<p>Cum voluptas tenetur, voluptatibus mollitia odio sint, alias debitis quasi ut commodo consequat.</p>-->

				</div>

			</div>

			<div class="col-lg-4 col-md-6">

				<div class="feature-inner">

					<i class="icofont-users"></i>

					<h4>Large Community</h4>

					<p>Join our community & help others</p>

					<!--<p>Cum voluptas tenetur, voluptatibus mollitia odio sint, alias debitis quasi ut commodo consequat.</p>-->

				</div>

			</div>



		</div>

	</div>

</section>



<!--  Section Services Start -->

<section class="section team">

	<div class="container">

		<div class="row justify-content-center">

			<div class="col-lg-7 text-center">

				<div class="section-title">

					<!--<span class="h6 text-color">Our Partners</span>-->

					<h2 class="mt-3 content-title">Our Partners</h2>

				</div>

			</div>

		</div>



		<div class="row justify-content-center">

			<div class="col-lg-3 col-md-6 col-sm-6">

				<div class="team-item-wrap mb-5">

					<div class="team-item position-relative">

						<img src="https://media.gettyimages.com/id/1294125876/photo/business-meeting-stock-photo.jpg?s=612x612&w=0&k=20&c=jGi7tIKGmTO4muV8Jp-Dpb880-da8mhCkJpUgbJZpn8=" alt="" class="img-fluid w-100 " style="height:200px;" >

						<div class="team-img-hover">

							<ul class="team-social list-inline">

								<li class="list-inline-item">

									<a href="#" class="facebook"><i class="icofont-facebook" aria-hidden="true"></i></a>

								</li>

								<li class="list-inline-item">

									<a href="#" class="twitter"><i class="icofont-twitter" aria-hidden="true"></i></a>

								</li>

								<li class="list-inline-item">

									<a href="#" class="instagram"><i class="icofont-instagram" aria-hidden="true"></i></a>

								</li>

								<li class="list-inline-item">

									<a href="#" class="linkedin"><i class="icofont-linkedin" aria-hidden="true"></i></a>

								</li>

							</ul>

						</div>

					</div>

					<div class="team-item-content">

						<h4 class="mt-3 mb-0 text-capitalize">abc </h4>

						<p>President</p>

					</div>

				</div>

			</div>



			<div class="col-lg-3 col-md-6 col-sm-6">

				<div class="team-item-wrap mb-5">

					<div class="team-item position-relative">

						<img src="https://media.gettyimages.com/id/1302673316/photo/business-women-shaking-hands-on-business-event-after-deal-on-interview-stock-photo.jpg?s=612x612&w=0&k=20&c=PeRkZLWElftUrgfS1bkP-CXoPUkOv5SSbIANV8D1_H4=" alt="" class="img-fluid w-100" style="height:200px;">

						<div class="team-img-hover">

							<ul class="team-social list-inline">

								<li class="list-inline-item">

									<a href="#" class="facebook"><i class="icofont-facebook" aria-hidden="true"></i></a>

								</li>

								<li class="list-inline-item">

									<a href="#" class="twitter"><i class="icofont-twitter" aria-hidden="true"></i></a>

								</li>

								<li class="list-inline-item">

									<a href="#" class="instagram"><i class="icofont-instagram" aria-hidden="true"></i></a>

								</li>

								<li class="list-inline-item">

									<a href="#" class="linkedin"><i class="icofont-linkedin" aria-hidden="true"></i></a>

								</li>

							</ul>

						</div>

					</div>

					<div class="team-item-content">

						<h4 class="mt-3 mb-0 text-capitalize">abc</h4>

						<p>Vice President</p>

					</div>

				</div>

			</div>



			<div class="col-lg-3 col-md-6 col-sm-6">

				<div class="team-item-wrap mb-5 ">

					<div class="team-item position-relative">

						<img src="https://media.gettyimages.com/id/1359662582/photo/group-of-happy-college-student-stock-photo.jpg?s=612x612&w=0&k=20&c=Oq4d6V5XJi9LayES7cH6n2obZWqVuzJOq2CtSBSiP6g=" alt="" class="img-fluid w-100" style="height:200px;">

						<div class="team-img-hover">

							<ul class="team-social list-inline">

								<li class="list-inline-item">

									<a href="#" class="facebook"><i class="icofont-facebook" aria-hidden="true"></i></a>

								</li>

								<li class="list-inline-item">

									<a href="#" class="twitter"><i class="icofont-twitter" aria-hidden="true"></i></a>

								</li>

								<li class="list-inline-item">

									<a href="#" class="instagram"><i class="icofont-instagram" aria-hidden="true"></i></a>

								</li>

								<li class="list-inline-item">

									<a href="#" class="linkedin"><i class="icofont-linkedin" aria-hidden="true"></i></a>

								</li>

							</ul>

						</div>

					</div>

					<div class="team-item-content">

						<h4 class="mt-3 mb-0 text-capitalize">abc</h4>

						<p>Secretary</p>

					</div>

				</div>

			</div>



			<div class="col-lg-3 col-md-6 col-sm-6">

				<div class="team-item-wrap mb-5">

					<div class="team-item position-relative">

						<img src="https://media.gettyimages.com/id/1071488226/photo/business-concepts.jpg?s=612x612&w=0&k=20&c=P0m93R7OZsBxFwE_72gd0bwpooJSZKEs7zmf_agBRGE=" alt="" class="img-fluid w-100" style="height:200px;">

						<div class="team-img-hover">

							<ul class="team-social list-inline">

								<li class="list-inline-item">

									<a href="#" class="facebook"><i class="icofont-facebook" aria-hidden="true"></i></a>

								</li>

								<li class="list-inline-item">

									<a href="#" class="twitter"><i class="icofont-twitter" aria-hidden="true"></i></a>

								</li>

								<li class="list-inline-item">

									<a href="#" class="instagram"><i class="icofont-instagram" aria-hidden="true"></i></a>

								</li>

								<li class="list-inline-item">

									<a href="#" class="linkedin"><i class="icofont-linkedin" aria-hidden="true"></i></a>

								</li>

							</ul>

						</div>

					</div>

					<div class="team-item-content">

						<h4 class="mt-3 mb-0 text-capitalize">abc</h4>

						<p>Joint Secretary</p>

					</div>

				</div>

			</div>



			<div class="col-lg-3 col-md-6 col-sm-6">

				<div class="team-item-wrap mb-5">

					<div class="team-item position-relative">

						<img src="https://media.gettyimages.com/id/1475087566/photo/co-workers-gathered-in-an-office-cubicle-working-and-discussing-using-laptop-and-documents.jpg?s=612x612&w=0&k=20&c=4TrkgyCHv3pZUbW25YkOyK1uQsajzsxsNpFhikQ31uY=" alt="" class="img-fluid w-100" style="height:200px;">

						<div class="team-img-hover">

							<ul class="team-social list-inline">

								<li class="list-inline-item">

									<a href="#" class="facebook"><i class="icofont-facebook" aria-hidden="true"></i></a>

								</li>

								<li class="list-inline-item">

									<a href="#" class="twitter"><i class="icofont-twitter" aria-hidden="true"></i></a>

								</li>

								<li class="list-inline-item">

									<a href="#" class="instagram"><i class="icofont-instagram" aria-hidden="true"></i></a>

								</li>

								<li class="list-inline-item">

									<a href="#" class="linkedin"><i class="icofont-linkedin" aria-hidden="true"></i></a>

								</li>

							</ul>

						</div>

					</div>

					<div class="team-item-content">

						<h4 class="mt-3 mb-0 text-capitalize">abc</h4>

						<p>Treasurer</p>

					</div>

				</div>

			</div>



			<div class="col-lg-3 col-md-6 col-sm-6">

				<div class="team-item-wrap mb-5 ">

					<div class="team-item position-relative">

						<img src="https://media.gettyimages.com/id/1475087566/photo/co-workers-gathered-in-an-office-cubicle-working-and-discussing-using-laptop-and-documents.jpg?s=612x612&w=0&k=20&c=4TrkgyCHv3pZUbW25YkOyK1uQsajzsxsNpFhikQ31uY=" alt="" class="img-fluid w-100" style="height:200px;">

						<div class="team-img-hover">

							<ul class="team-social list-inline">

								<li class="list-inline-item">

									<a href="#" class="facebook"><i class="icofont-facebook" aria-hidden="true"></i></a>

								</li>

								<li class="list-inline-item">

									<a href="#" class="twitter"><i class="icofont-twitter" aria-hidden="true"></i></a>

								</li>

								<li class="list-inline-item">

									<a href="#" class="instagram"><i class="icofont-instagram" aria-hidden="true"></i></a>

								</li>

								<li class="list-inline-item">

									<a href="#" class="linkedin"><i class="icofont-linkedin" aria-hidden="true"></i></a>

								</li>

							</ul>

						</div>

					</div>

					<div class="team-item-content">

						<h4 class="mt-3 mb-0 text-capitalize">abc </h4>

						<p>Member</p>

					</div>

				</div>

			</div>
				<div class="col-lg-3 col-md-6 col-sm-6">

				<div class="team-item-wrap mb-5 ">

					<div class="team-item position-relative">

						<img src="https://media.gettyimages.com/id/2048705043/photo/volunteering-together.jpg?s=612x612&w=0&k=20&c=XsywwMHAmJtBfBOE98eKn7zOiC9T0fBI0l3MgAPz2-Y=" alt="" class="img-fluid w-100" style="height:200px;">

						<div class="team-img-hover">

							<ul class="team-social list-inline">

								<li class="list-inline-item">

									<a href="#" class="facebook"><i class="icofont-facebook" aria-hidden="true"></i></a>

								</li>

								<li class="list-inline-item">

									<a href="#" class="twitter"><i class="icofont-twitter" aria-hidden="true"></i></a>

								</li>

								<li class="list-inline-item">

									<a href="#" class="instagram"><i class="icofont-instagram" aria-hidden="true"></i></a>

								</li>

								<li class="list-inline-item">

									<a href="#" class="linkedin"><i class="icofont-linkedin" aria-hidden="true"></i></a>

								</li>

							</ul>

						</div>

					</div>

					<div class="team-item-content">

						<h4 class="mt-3 mb-0 text-capitalize">abc </h4>

						<p>Member</p>

					</div>

				</div>

			</div>

		</div>



		<div class="row">

			<div class="col-lg-12 mb-4">

				<div class="text-center">

					<a href="{{ route('volunteer') }}" class="btn btn-main rounded">Become a volunteer</a>

				</div>

			</div>

		</div>

	</div>

</section>

<!--  Section Services End -->

<div class="cta-block section">

	<div class="container">

		<div class="row justify-content-center ">

			<div class="col-lg-7 col-md-12">

				<div class="cta-content text-center">

					<i class="icofont-diamond text-lg text-color"></i>

					<h2 class="text-white text-lg mb-5 mt-3">We can’t help everyone, but everyone can help someone</h2>

					<a href="{{ route('contact') }}" class="btn btn-main rounded">Contact Now</a>

				</div>

			</div>

		</div>

	</div>

</div>





<!--<section class="section gallery">-->

<!--	<div class="container">-->

<!--		<div class="row justify-content-center">-->

<!--			<div class="col-lg-8 col-md-10">-->

<!--				<div class="section-title text-center mt-3">-->

<!--					<span class="text-color ">Our Gallery</span>-->

<!--					<h2 class="mt-3 mb-4 position-relative content-title">Awards and Recognition</h2>-->

<!--				</div>-->

<!--			</div>-->

<!--		</div>-->

<!--	</div>-->



<!--	<div class="container">-->

<!--		<div class="gallery-wrap">-->

<!--			<div class="row">-->
<!--				@foreach ($portfolio as $temp )-->
<!--				<div class="col-lg-4">-->
	
					
<!--					<div class="gallery-item">-->
<!--						<a href="`" class="gallery-popup">-->
						


<!--							<a href="{{url('/assets/images/portfolio')}}/{{$temp->image}}" class="gallery-popup">-->

<!--								<img src="{{url('/assets/images/portfolio')}}/{{$temp->image}}" alt="" class="img-fluid w-100" style="height:275px;">-->


					

<!--						</a>-->

<!--					</div>-->

<!--				</div>-->
<!--				@endforeach-->

<!--			{{--  	<div class="col-lg-4">-->

<!--					<div class="gallery-item">-->

						


<!--							<a href="{{asset('assets/images/assra2.jpg.jpg')}}" class="gallery-popup">-->

<!--								<img src="{{asset('assets/images/assra2.jpg.jpg')}}" alt="" class="img-fluid w-100" style="height:275px;">-->






<!--						</a>-->

<!--					</div>-->

<!--				</div>-->

<!--				<div class="col-lg-4">-->

<!--					<div class="gallery-item">-->

<!--						<a href="{{asset('assets/images/assra6.jpg')}}" class="gallery-popup">-->

<!--							<img src="{{asset('assets/images/assra6.jpg')}}" alt="" class="img-fluid w-100" style="height:275px;">-->

<!--						</a>-->

<!--					</div>-->

<!--				</div>-->









				

<!--				<div class="col-lg-4">-->

<!--					<div class="gallery-item">-->

<!--						<a href="{{asset('assets/images/award2.jpg')}}" class="gallery-popup">-->

<!--							<img src="{{asset('assets/images/award2.jpg')}}" alt="" class="img-fluid w-100"style="height:375px;" >-->

<!--						</a>-->

<!--					</div>-->

<!--				</div>-->



<!--				<div class="col-lg-4">-->

<!--					<div class="gallery-item">-->

<!--						<a href="{{asset('assets/images/awa3.jpg')}}" class="gallery-popup">-->

<!--							<img src="{{asset('assets/images/awa3.jpg')}}" alt="" class="img-fluid w-100" style="height:375px;" >-->

<!--						</a>-->

<!--					</div>-->

<!--				</div>-->

<!--				<div class="col-lg-4">-->

<!--					<div class="gallery-item">-->

<!--						<a href="{{asset('assets/images/6.jpg')}}" class="gallery-popup">-->

<!--							<img src="{{asset('assets/images/aasra11.jpg')}}" alt="" class="img-fluid w-100" style="height:375px;">-->

<!--						</a>-->

<!--					</div>-->

<!--				</div>-->

<!--				<div class="col-lg-6">-->

<!--					<div class="gallery-item">-->

<!--						<a href="{{asset('assets/images/awa4.jpg.jpg')}}" class="gallery-popup">-->

<!--							<img src="{{asset('assets/images/awa3.jpg.jpg')}}" alt="" class="img-fluid w-100" style="height:370px;" >-->

<!--						</a>-->

<!--					</div>-->

<!--				</div>-->

<!--				<div class="col-lg-6">-->

<!--					<div class="gallery-item">-->

<!--						<a href="{{asset('assets/images/8.jpg')}}" class="gallery-popup ">-->

<!--							<img src="{{asset('assets/images/awa4.jpg.jpg')}}" alt="" class="img-fluid w-100" style="height:363px;">-->

<!--						</a>-->

<!--					</div>-->

<!--				</div>-->

<!--			</div>-->

<!--		</div>-->

<!--	</div>---}}-->

<!--</section>-->



<section>

	<div class="container">

		<div class="row">

			<div class="col-lg-12">

				<div class="section-divider"></div>

			</div>

		</div>

	</div>

</section>







@endsection