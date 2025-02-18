@extends('layout.main')



@section('main.container')







<style>
    iframe {
    width: 100%;
    height: 489px !important;
    margin: 2%;
</style>



<section class="page-title bg-1">



  <div class="container">



    <div class="row">



      <div class="col-md-12">



        <div class="block text-center">



          <span class="text-white">Contact Us</span>



          <h1 class="text-capitalize mb-4 text-lg">Get in Touch</h1>



        </div>



      </div>



    </div>



  </div>



</section>







 @php
    use App\Models\Address;
    $address = Address::find(1);
@endphp



<section class="section">



    <div class="container">



        <div class="row">



             <div class="col-lg-6 col-sm-12 ">



                <div class="contact-content mt-5">



                    <h2 class="mb-5">We’d love to hear from you! <br>Give us call, send us a message?</h2>



                    <ul class="address-block list-unstyled">



                        <li>



                            <h6 class="mb-2">Address</h6>



                        {{ $address->address }}
 {{ $address->pin_no }}





                        </li>



                        <li>



                            <h6 class="mb-2">email us</h6>



                         {{ $address->email }}




                        </li>



                        <li>



                            <h6 class="mb-2">Phone Number</h6>



                            +91  {{ $address->contact_no }}



                        </li>



                    </ul>







                    <ul class="social-icons list-inline mt-5">



                       <li> <h6 class="mb-3">Find us on social media</h6></li>



                        <li class="list-inline-item">



                            <a href="https://www.facebook.com/shriramrajafoundation?mibextid=ZbWKwL"><i class="icofont-facebook mr-2"></i></a>



                        </li>



                        <li class="list-inline-item">



                            <a href="https://x.com/twitter"><i class="icofont-twitter mr-2"></i></a>



                        </li>



                        <li class="list-inline-item">



                            <a href="https://www.linkedin.com/feed/"><i class="icofont-linkedin mr-2"></i></a>



                        </li>



                    </ul>



                </div>



            </div>



            <div class="col-lg-5 col-sm-12 mt-2 ">



                <div class="google-map mt-5 mt-lg-0">

<iframe src="https://www.google.com/maps/embed?pb=!1m18!1m12!1m3!1d3602.5715981289654!2d78.52616177517234!3d25.45258227754747!2m3!1f0!2f0!3f0!3m2!1i1024!2i768!4f13.1!3m3!1m2!1s0x3977710484cb44a1%3A0x7ed4bb317f701119!2sSangam%20Vihar%2C%20Jhansi%2C%20Uttar%20Pradesh%20284003!5e0!3m2!1sen!2sin!4v1735369280741!5m2!1sen!2sin" width="800" height="450" style="border:0;" allowfullscreen="" loading="lazy" referrerpolicy="no-referrer-when-downgrade"></iframe>




                </div>



            </div>



        </div>



    </div>



</section>







<!-- contact form start -->



<section class="contact-wrap section-bottom">



    <div class="container">



        <div class="row">



            <div class="col-lg-12 col-md-12 col-sm-12">



                
                 

                    <span class="text-color">Send a message</span>



                    <h3 class="text-md mb-5">Contact Form</h3>



                 <!-- form message -->


                    <div class="row">



                        <div class="col-12">



                            <div class="alert alert-success contact__msg" style="display: none" role="alert">



                                Your message was sent successfully.



                            </div>



                        </div>



                    </div>



                    <!-- end message -->



                    <form id="contact-form" class="contact__form" method="post" action="{{ route('contact.store') }}">
                        {{csrf_field()}}
                  <div class="row">



                      <div class="col-lg-6">



                           <div class="form-group">



                                <label>Your Name <span class="text-danger">*</span></label>



                                <input name="name" type="text" class="form-control" required="" >



                            </div>



                      </div>



                      <div class="col-lg-6">



                           <div class="form-group">



                            <label>Your Email <span class="text-danger">*</span></label>



                            <input name="email" type="email" class="form-control" required="">



                        </div>



                      </div>



                      <div class="col-lg-6">



                           <div class="form-group">



                                <label> Your Subject <span class="text-danger">*</span></label>



                                <input name="subject" type="text" class="form-control"required="" >



                            </div>



                      </div>



                      <div class="col-lg-6">



                            <div class="form-group">



                                <label>Your Phone Number <span class="text-danger">*</span></label>



                                <input name="number" type="number" class="form-control"required>



                            </div>



                      </div>



                  </div>



                    <div class="form-group mb-4">



                        <label>Your Message <span class="text-danger">*</span></label>



                        <textarea name="message" class="form-control" rows="6" required=""></textarea>



                    </div>



                    <button class="btn btn-main rounded"  type="submit">Send Message</button>



                </form>



            </div>



        </div>



    </div>



</section>











@endsection