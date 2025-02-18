<!-- footer Start -->
<style>
@media only screen and (max-width: 600px) {
 .footer_involved
        {
    /*margin-top: -269px !important;*/
    /*margin-left: 161px !important;*/
        margin-top: -258px !important;
    margin-left: 155px !important;
    }
  .quick
  {
   margin-left: 0% !important;
    
  }
  .logo
{
 margin-top: 0%!important;
}
}
.quick
{
    
    margin-left: 29%;
}
.logo
{
 margin-top: -14%;
}
.logo
{
 margin-top: 0%!important;
}
element.style {
}
.footer-menu li a {
    color: rgba(255, 255, 255, 0.7);
}
.nav-link {
    display: block;
     padding: 4px !important; 
}
</style>
<footer class="footer section ">
  @php
    use App\Models\Address;
    $address = Address::find(1);
@endphp

	<div class="container ">
		<div class="row p-5">
			<div class="col-lg-3 col-md-4 col-sm-6">
				<div class="widget footer-widget logo">
					<!--<img src ="" style="width:100%">-->
					 <h2 class="pull-left" style="color:#fff;font-size:20px;width:max-content;" >Shri Ram Raja Foundation  </h2>

				   <span class="pt-1 text-white">Shri Ram Raja Foundation is a progressively organized committed non-profit NGO consists a group of Committed Social Workers, Engineers, Doctors, Management Experts.</span>	
				</div>
			</div>

			<div class="col-lg-3 col-md-4 col-sm-6">
				<div class="widget footer-widget quick">
					<h4 class="text-capitalize mb-4 text-white">Quick Links</h4>

					<ul class="list-unstyled footer-menu lh-35">
						<li><a href="{{ route('about') }}">About</a></li>
						<li><a href="{{ route('campaigns') }}">Campaigns</a></li>
						<li><a href="{{ route('event') }}">Events</a></li>
						<li><a href="{{ route('contact') }}">Contact</a></li>
						<li><a href="/privacy">Privacy & Policy</a></li>
						
					</ul>
				</div>
			</div>

			<div class="col-lg-3 col-md-4 col-sm-6 footer_involved">
				<div class="footer-widget widget">
					<h4 class="text-capitalize mb-4 text-white">Get Involved</h4>
				  	
					{{--  <a href="#" class="btn btn-main btn-small rounded">subscribe</a>---}}

					<ul class="list-unstyled footer-menu lh-35">
						
						<li class="nav-item"><a class="nav-link" href="{{ route('volunteer') }}">Volunteer</a></li>
						<li class="nav-item"><a class="nav-link" href="{{ route('alldonate') }}">All Donation</a></li>

						
					</ul>

					
						
					
						
					

				{{--	<form action="#" class="sub-form">
					<input type="text" class="form-control mb-4" placeholder="Subscribe Now ...">
					 <a href="#" class="btn btn-main btn-small rounded">subscribe</a>
					</form>--}}
				</div>
			</div>
            <div class="col-lg-3 col-md-4 col-sm-6">
				<div class="footer-widget widget">
					<h4 class="text-capitalize mb-4 text-white">Ram Raja Foundation</h4>
					<p>{{ $address->address }} <br>{{ $address->pin_no }} </p>

					<ul class="list-unstyled footer-menu mt-4">
						<li><a href=""><i class="icofont-phone"></i>+91 {{ $address->contact_no }}
</a>
						</li>
						<li><a href="#"><i class="icofont-email"></i>{{ $address->email }}
</a></li>
					</ul>
					<!--<ul class="list-inline footer-socials">-->
					<!--	<li class="list-inline-item"><a href="#"><i class="icofont-facebook"></i></a></li>-->
					<!--	<li class="list-inline-item"><a href="#"><i class="icofont-twitter"></i></a></li>-->
					<!--	<li class="list-inline-item"><a href="#"><i class="icofont-linkedin"></i></a></li>-->
					<!--</ul>-->
				</div>
			</div>
			
			
			<!-- <div class="col-lg-3 col-md-6 col-sm-6">-->
			<!--	<div class="widget footer-widget">-->
			<!--		<h4 class="text-capitalize mb-4 text-white">Gallery</h4>-->

			<!--		 <div class="gallery-wrap">-->
			<!--			<div class="gallery-img">-->
			<!--				<img src="{{asset('assets/images/about/lev1.jpg')}}" alt="" class="img-fluid">-->
			<!--			</div>-->
			<!--			<div class="gallery-img">-->
			<!--				<img src="{{asset('assets/images/about/lev2.jpg')}}" alt="" class="img-fluid">-->
			<!--			</div>-->
			<!--			<div class="gallery-img">-->
			<!--				<img src="{{asset('assets/images/about/lev3.jpg')}}" alt="" class="img-fluid">-->
			<!--			</div>-->
			<!--			<div class="gallery-img">-->
			<!--				<img src="{{asset('assets/images/about/lev4.jpg')}}" alt="" class="img-fluid">-->
			<!--			</div>-->
			<!--			<div class="gallery-img">-->
			<!--				<img src="{{asset('assets/images/about/lev5.jpg')}}" alt="" class="img-fluid">-->
			<!--			</div>-->
			<!--			<div class="gallery-img">-->
			<!--				<img src="{{asset('assets/images/about/lev6.jpg')}}" alt="" class="img-fluid">-->
			<!--			</div>-->
			<!--		</div>-->
			<!--	</div>-->
			<!--</div>-->
		</div>
		
		<div class="footer-btm">
			<div class="row justify-content-center">
				<div class="col-lg-6">
					<div class="copyright text-center">
						&copy; Copyright 2024, All rights Reserved to Ram Raja Foundation NGO Powered by <a href="https://acttconnect.com/" target="_blank" class="text-color text-white">Act T Connect</a>
					</div>
				</div>
			</div>
		</div>
	</div>
</footer>


    <!-- 
    Essential Scripts
    =====================================-->

    
    <!-- Main jQuery -->
    <script src="{{asset('assets/plugins/jquery/jquery.js')}}"></script>
    <script src="js/contact.js"></script>
    <!-- Bootstrap 4.3.1 -->
    <script src="{{asset('assets/plugins/bootstrap/js/popper.js')}}"></script>
    <script src="{{asset('assets/plugins/bootstrap/js/bootstrap.min.js')}}"></script>
   <!--  Magnific Popup-->
    <script src="{{asset('assets/plugins/magnific-popup/dist/jquery.magnific-popup.min.js')}}"></script>
    <!-- Slick Slider -->
    <script src="{{asset('assets/plugins/slick-carousel/slick/slick.min.js')}}"></script>
    <!-- Counterup -->
    <script src="{{asset('assets/plugins/counterup/jquery.waypoints.min.js')}}"></script>
    <script src="{{asset('assets/plugins/counterup/jquery.counterup.min.js')}}"></script>

    <script src="{{asset('assets/plugins/modal-video/jquery-modal-video.min.js')}}"></script>

    <!-- Google Map -->
    <script src="{{asset('assets/plugins/google-map/map.js')}}"></script>
    <script src="https://maps.googleapis.com/maps/api/js?key=AIzaSyAkeLMlsiwzp6b3Gnaxd86lvakimwGA6UA&amp;callback=initMap"></script>    
    
    <script src="{{asset('assets/js/script.js')}}"></script>

	<script>
		$(".tab-slider").slick();

		// Fix slick slider using multitabs
		$('.nav-tabs a[data-toggle="tab"]').on('shown.bs.tab', function(e) {
			e.target
			e.relatedTarget
			$('.tab-slider').slick('setPosition');
		});
	</script>

  </body>
  
<!-- Mirrored from demo.themefisher.com/wishfund/ by HTTrack Website Copier/3.x [XR&CO'2014], Mon, 21 Mar 2022 06:53:54 GMT -->
</html>
   