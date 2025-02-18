@extends('layout.main')

@section('main.container')





<section class="page-title bg-1">

  <div class="container">

    <div class="row">

      <div class="col-md-12">

        <div class="block text-center">

          <span class="text-white">Be a Volunteer</span>

          <h1 class="text-capitalize mb-4 text-lg">We need your help</h1>

        </div>

      </div>

    </div>

  </div>

</section>



<section class="section volunteer-section">

	<div class="container">

		<div class="row">

			<div class="col-lg-6 ">

				<p class="lead mt-5">Help a child discover the joy of learning and join us in our efforts to put Every Child in School!</p>

				<p>Lorem ipsum dolor sit amet, consectetur adipisicing elit. Iusto deserunt quo aliquid porro corrupti, pariatur, quaerat culpa libero sunt assumenda eos nihil facilis, inventore mollitia a? Excepturi sed, ex quam.</p>



				<div class="member-benifit mt-4">

					<h4>Volunteer benefits</h4>

					<p>As a volunteer you will get benefit from:</p>



					<ul class="list-unstyled member-benifits-list lh-35">

						<li><strong>Training</strong> - get discounted rates on our unique training courses.</li>

						<li><strong>Events</strong> - receive discounted tickets and invitations to member-only events.</li>

						<li><strong>Community</strong> - share knowledge and best practice with peers.</li>

						<li><strong>Networking</strong> - talk to the right people when you need to.</li>

						<li><strong>Expertise </strong>-  access the Bond groups and the best tools and resources. </li>

					</ul>

				</div>

			</div>



			<div class="col-lg-6 mt-5">

				<span class="text-color mt-5 mt-lg-0 ">Join With Us</span>

				<h2 class="mb-5 text-md">Become A Volunteer</h2>

				<form method="POST" action="{{ route('volunteerstore') }}" id="contact-form">
					{{ csrf_field() }}
					<div class="form-group">


						<input type="text" class="form-control" placeholder="Full Name" name="name" required="">

					</div>

					<div class="form-group">

						<input type="email" class="form-control" placeholder="Emaill Address" name="email" required="">

					</div>

					<div class="form-group">

						<input type="text" class="form-control" placeholder="Phone Number" name="phone" required="">

					</div>

					<div class="form-group">

						<input type="text" class="form-control" placeholder="Adress" name="address" required="">

					</div>

					<div class="form-group">

						<input type="text" class="form-control" placeholder="Occupation" name="occupation" required="">

					</div>

					<div class="form-group">

						<textarea  cols="30" rows="6" class="form-control" placeholder="Your Message" name="message" required=""></textarea>

					</div>


					<button type="submit" class="theme-btn btn-style-two mb-4 bg-danger text-white" style="border-radius:12px">Send Message </button>

				</form>

			</div>

		</div>

	</div>

</section>







@endsection