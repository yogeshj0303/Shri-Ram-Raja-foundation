@extends('layout.main')

@section('main.container')





<section class="page-title bg-1">

  <div class="container">

    <div class="row">

      <div class="col-md-12">

        <div class="block text-center">

          <span class="text-white">Donation confirmation</span>

          <h1 class="text-capitalize mb-4 text-lg">Donation details</h1>

        </div>

      </div>

    </div>

  </div>

</section>


@php
use App\Models\Address;
$address = Address::find(1);

@endphp
<section class="section donation">

	<div class="container">
         <!-- Alert for success messages -->
                    @if(session()->has('success'))
    <div class="alert alert-success alert-dismissible fade show" role="alert">
        <strong>Success!</strong> {{ session('success') }}
        <button type="button" class="close" data-dismiss="alert" aria-label="Close">
            <span aria-hidden="true">×</span>
        </button>
    </div>
@endif
		<div class="row">

			<div class="col-lg-8">

				<div class="donation-wrap">

					<h2 class="text-md mb-4">I want to support you</h2>

					<p class="mb-5 lead">In order to make an offline donation we ask that you please follow these instructions</p>
<form method="POST" action="{{ route('donate.store') }}" class="donation-form" id="payment_form" enctype="multipart/form-data">
    @csrf

    <h2 class="mb-5 mt-5 border-bottom pb-3">Donor Details</h2>

    <div class="form-group row">
        <label class="col-sm-3 col-form-label">Your Name</label>
        <div class="col-sm-9">
            <input type="text" class="form-control @error('donator_name') is-invalid @enderror" name="donator_name" id="inputname" placeholder="Your Name" value="{{ old('donator_name') }}">
            @error('donator_name')
                <small class="text-danger">{{ $message }}</small>
            @enderror
        </div>
    </div>

    <div class="form-group row">
        <label class="col-sm-3 col-form-label">Email</label>
        <div class="col-sm-9">
            <input type="email" class="form-control @error('donator_email') is-invalid @enderror" name="donator_email" id="inputEmail3" placeholder="Email" value="{{ old('donator_email') }}">
            @error('donator_email')
                <small class="text-danger">{{ $message }}</small>
            @enderror
        </div>
    </div>

    <div class="form-group row">
        <label class="col-sm-3 col-form-label">Phone</label>
        <div class="col-sm-9">
            <input type="number" class="form-control @error('donator_phone') is-invalid @enderror" name="donator_phone" id="inputphone" placeholder="Phone" value="{{ old('donator_phone') }}">
            @error('donator_phone')
                <small class="text-danger">{{ $message }}</small>
            @enderror
        </div>
    </div>

    <div class="form-group row">
        <label class="col-sm-3 col-form-label">Address</label>
        <div class="col-sm-9">
            <input type="text" class="form-control @error('donator_address') is-invalid @enderror" name="donator_address" id="inputname2" placeholder="Your Address" value="{{ old('donator_address') }}">
            @error('donator_address')
                <small class="text-danger">{{ $message }}</small>
            @enderror
        </div>
    </div>
     <div class="form-group row">
        <label class="col-sm-3 col-form-label">City</label>
        <div class="col-sm-9">
            <input type="text" class="form-control @error('donator_city') is-invalid @enderror" name="donator_city" id="inputname3" placeholder="Your City" value="{{ old('donator_city') }}">
            @error('donator_city')
                <small class="text-danger">{{ $message }}</small>
            @enderror
        </div>
    </div>
  <div class="form-group row">
        <label class="col-sm-3 col-form-label">Account Details</label>
    <div class="card mt-9 col-sm-8" style="padding:0px !important; margin-left: 15px ">
    <div class="card-body">
        <p class="mb-1"><strong>Account Name:</strong> Ram Raja Foundation</p>
        <p class="mb-0"><strong>Bank Name:</strong> State Bank of India</p>
        <p class="mb-0"><strong>Account Name:</strong>43334265867</p>
                <p class="mb-0"><strong>IFSC Code:</strong>SBIN0004566</p>


    </div>
</div>
</div>

   
    <div class="form-group row">
        <div class="col-sm-3"> 
            <strong>Payment Via QR</strong>
        </div>
        <div class="col-sm-9">
            <div class="form-check">
                <img src="{{ asset('QR.jpg') }}" width="500px">
            </div>
        </div>
    </div>
    
    <div class="form-group row">
        <label class="col-sm-3 col-form-label">Upload Payment Receipt (Screenshot)</label>
        <div class="col-sm-9">
            <input type="file" class="form-control @error('screen_shot') is-invalid @enderror" name="screen_shot">
            @error('screen_shot')
                <small class="text-danger">{{ $message }}</small>
            @enderror
        </div>
    </div>

    <div class="form-group row">
        <div class="col-sm-12">
            <div class="form-check">
                <input class="form-check-input" type="checkbox" id="gridCheck2">
                <label class="form-check-label">
                    I give my <span class="font-weight-bold">consent for authorized representatives</span> of Smile Foundation to contact me occasionally by mobile and email for informing on the latest developments and updated offerings.
                </label>
            </div>
        </div>
    </div>

    <div class="form-group row mt-4">
        <div class="col-sm-10">
            <button type="submit" class="theme-btn btn-style-two">Donate Now</button>
        </div>
    </div>
</form>

				</div>

			</div>



			<div class="col-lg-4">

				<div class="offline-donation mt-5 mt-lg-0">

					<h4 class="mb-5">In order to make an offline donation we ask that you please follow these instructions:</h4>



					<ul class="list-unstyled">

						<li>1. Make a check payable to <span>"Shri Ram Raja Foundation"</span></li>

						<li>2. On the memo line of the check, please indicate that the donation is for <span>"Shri Ram Raja Foundation"</span></li>

						<li>3. Please mail your check to: 



							<address>

						{{ $address->address }}
	{{ $address->pin_no }}
							</address>

						</li>

						<li>4. Email us in details : <span>{{ $address->email }} </span></li>

						<li>5. Contact us at Phone: <span>+91 {{ $address->contact_no }}
                       </span></li>
						<!--<li>5. Contact us at Phone: <span>+91 123456789, Mob: +91 123456789</span></li>-->

					</ul>



					<p>All contributions will be gratefully acknowledged and are tax deductible.</p>

				</div>

			</div>

		</div>

	</div>

</section>




<script type="text/javascript">
	function meThods(val) { 
		   var action1 = "{{route('payment.submit')}}";
		   var action2 = "{{route('stripe.submit')}}";
		   if (val.value == "Paypal") {
			 $("#payment_form").attr("action", action1);
			 $("#stripes").hide();
		   }
		   if (val.value == "Stripe") {
			 $("#payment_form").attr("action", action2);
			 $("#stripes").show();
		   }
		   if (val.value == "") {
			 $("#payment_form").attr("action", "");
			 $("#stripes").hide();
		   }
	 }
 
	$('#anonym').click(function() {
		if($(this).is(":checked")){
			$("#details").hide();
			$("#details").find('input').attr('required',false);
		}else{
			$("#details").show();
			$("#details").find('input[name="name"]').attr('required',true);
			$("#details").find('input[name="email"]').attr('required',true);
		}
	});
 </script>
@endsection