<!doctype html>

<html lang="en">
<!-- Mirrored from demo.themefisher.com/wishfund/ by HTTrack Website Copier/3.x [XR&CO'2014], Mon, 21 Mar 2022 06:53:32 GMT -->

<head>

  <!-- Required meta tags -->

  <meta charset="utf-8">

  <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">

  <meta name="description" content="">

  <meta name="author" content="#">
  <title> Shri Ram Raja Foundation</title>
  <!-- bootstrap.min css -->

  <link rel="stylesheet" href="{{asset('assets/plugins/bootstrap/css/bootstrap.min.css')}}">

  <!-- Icon Font Css -->

  <link rel="stylesheet" href="{{asset('assets/plugins/themify/css/themify-icons.css')}}">

  <link rel="stylesheet" href="{{asset('assets/plugins/icofont/icofont.css')}}">

  <link rel="stylesheet" href="{{asset('assets/plugins/magnific-popup/dist/magnific-popup.css')}}">

  <!-- Owl Carousel CSS -->

  <link rel="stylesheet" href="{{asset('assets/plugins/slick-carousel/slick/slick.css')}}">

  <link rel="stylesheet" href="{{asset('assets/plugins/slick-carousel/slick/slick-theme.css')}}">

  <link rel="stylesheet" href="{{asset('assets/plugins/modal-video/modal-video.min.css')}}">



  <!-- Main Stylesheet -->

  <link rel="stylesheet" href="{{asset('assets/css/style.css')}}">



</head>
<style>
   
</style>


<body>



<!-- Header Start --> 



<header class="navigation">

	<div class="header-top ">

		<div class="container">

			<div class="row justify-content-between align-items-center">

				<div class="col-lg-6 col-md-4 text-center text-lg-left text-md-left">
 @php
    use App\Models\Address;
    $address = Address::find(1);
@endphp
					<div class="header-top-info">

						<a href=""><i class="icofont-phone mr-2"></i><span>+91 {{ $address->contact_no }}
 </span></a>

						<a href="" ><i class="icofont-email mr-2"></i><span>{{ $address->email }}
</span></a>

					</div>

				</div>

				<div class="col-lg-6 col-md-8">

					<div class="header-top-right text-center text-lg-right text-md-right mt-3 mt-lg-0 text-white">

						<a href="https://www.facebook.com/shriramrajafoundation?mibextid=ZbWKwL" target="_blank" style="color:white"><i class="icofont-facebook"></i></a>

						<a href="https://x.com/twitter" target="_blank" style="color:white"><i class="icofont-twitter"></i></a>

						{{--  <a href="#" target="_blank" style="color:white"><i class="icofont-github"></i></a>  --}}

						<a href="https://www.instagram.com/shriramrajafoundation?igsh=MTRoOXAxOHA1Z29ueA==" target="_blank" style="color:white"><i class="icofont-instagram"></i></a>

						<a href="https://www.linkedin.com/" target="_blank" style="color:white"><i class="icofont-linkedin"></i></a>
						
							<a href="https://youtube.com/@shriramrajafoundation?si=GjMS2PXYpeJc_xHX" target="_blank" style="color:white"><i class="icofont-youtube"></i></a>

						<a href="{{ route('contact')}}" class="top-btn">Register Now</a>

					</div>

				</div>

			</div>

		</div>

	</div>

	<nav class="navbar navbar-expand-lg navigation" id="navbar">

		<div class="container">

		  <a class="navbar-brand" href="/">

         <div >

		  	 <!--<img  class="pull-left" src="{{asset('assets/logo/logo3.jpg')}}" alt="" class="img-fluid">-->

				 


            <h2 class="pull-left">Shri Ram Raja Foundation  </h2> <br>

           <span class="pull-left"> WORK FOR NATION PRIDE </span>

           </div>

		  </a>



		  <button class="navbar-toggler collapsed" type="button" data-toggle="collapse" data-target="#navbarsExample09" aria-controls="navbarsExample09" aria-expanded="false" aria-label="Toggle navigation">

			<span class="ti-menu"></span>

		  </button>

	  

		  <div class="collapse navbar-collapse text-center" id="navbarsExample09">

			<ul class="navbar-nav ml-auto">

			  <li class="nav-item active">

				<a class="nav-link" href="/">Home <span class="sr-only">(current)</span></a>

			  </li>

			   <li class="nav-item"><a class="nav-link" href="{{ route('about') }}">About</a></li>

            <li class="nav-item"><a class="nav-link" href="{{ route('campaigns') }}">Campaign</a></li>

			<li class="nav-item"><a class="nav-link" href="{{ route('event') }}">Event</a></li>
	       	<li class="nav-item"><a class="nav-link" href="{{ route('media') }}">Media</a></li>

  				<li class="nav-item dropdown">

					<a class="nav-link dropdown-toggle" href="#" id="dropdown04" data-toggle="dropdown" aria-haspopup="true" aria-expanded="false">Get Involved<span class="ml-1">+</span></a>

					<ul class="dropdown-menu" aria-labelledby="dropdown04">

						<li><a class="dropdown-item" href="{{ route('contact') }}">Contact Now</a></li>

						<li><a class="dropdown-item" href="{{ route('volunteer') }}">Be a Volunteer </a></li>

					</ul>

			  </li>
           

			   <li class="nav-item"><a class="nav-link" href="{{ route('contact') }}">Contact Us </a></li>

			</ul>

		  </div>

		</div>

	</nav>

</header>



<!-- Header Close --> 