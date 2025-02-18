



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
<!-- Slider Start -->
<div class="wrapper">
   <div class="carousel">
      <div class="slider" style="background: url({{asset('https://media.gettyimages.com/id/155378233/photo/world-connection-concept.jpg?s=612x612&w=0&k=20&c=KfpOi7jIWT9OyLiHOxRqqPWYbU-B2nrp30excdJkP1c=')}}) no-repeat; ">
         <div class="container">
            <div class="row justify-content-center">
               <div class="col-lg-12 col-md-12">
                  <div class="block text-center">
                     <!--<span class="d-block mb-3 text-white text-capitalize">Small help can make change</span>-->
                     <h1 class="animated fadeInUp mb-4">New hope for <br>near future</h1>
                   
                     <a href="{{ route('alldonate') }}"class="btn btn-main animated fadeInUp rounded">Donate Now</a>
                  </div>
               </div>
            </div>
         </div>
      </div>
      <div class="slider" style="background: url({{asset('assets/images/bg/banner-1.jpg')}}) no-repeat;">
         <div class="container">
            <div class="row justify-content-center">
               <div class="col-lg-12 col-md-12">
                  <div class="block text-center">
                     <!--<span class="d-block mb-3 text-white text-capitalize">Small help can make change</span>-->
                     <h1 class="animated fadeInUp mb-4">Open Your Heart To Those In Need.</h1>
                     <!--<p class="mb-4">Your small contribution means a lot. Natus officia amet hic  <br>accusamus repellat magni reprehenderit dolorem.</p>-->
                     <a href="{{ route('alldonate') }}"class="btn btn-main animated fadeInUp rounded">Donate Now</a>
                  </div>
               </div>
            </div>
         </div>
      </div>
      <div class="slider" style="background: url({{asset('assets/images/bg/banner-2.jpg')}}) no-repeat;">
         <div class="container">
            <div class="row justify-content-center">
               <div class="col-lg-12 col-md-12">
                  <div class="block text-center">
                     <!--<span class="d-block mb-3 text-white text-capitalize">Small help can make change</span>-->
                     <h1 class="animated fadeInUp mb-4">Many Are In Need Of Your Helping Hand.</h1>
                     <!--<p class="mb-4">Your small contribution means a lot. Natus officia amet hic  <br>accusamus repellat magni reprehenderit dolorem.</p>-->
                     <a href="{{ route('alldonate') }}"class="btn btn-main animated fadeInUp rounded">Donate Now</a>
                  </div>
               </div>
            </div>
         </div>
      </div>
      <!-- <div><img src="https://picsum.photos/300/200?random=2"></div>
         <div><img src="https://picsum.photos/300/200?random=3"></div>
         <div><img src="https://picsum.photos/300/200?random=4"></div>
         <div><img src="https://picsum.photos/300/200?random=5"></div>
         <div><img src="https://picsum.photos/300/200?random=6"></div> -->
   </div>
</div>
<!-- Section Intro Start -->

<section class="section intro">

   <div class="container">

     <div class="row align-items-center">
         <!--@if($pagesettings[0]->welcome_status)-->
        <div class="col-lg-8">

            <div class="section-title">

               <!--<span class="text-color ">   About Aasra Society NGO </span>-->

               <h2 class="mt-3 cont0ent-title">Welcome to Shri Ram Raja Foundation</h2>


               <p style="text-align: justify;">Shri Ram Raja Foundation is a progressively organized, committed non-profit NGO consisting of a group of committed social workers, engineers, doctors, management experts, professors, trainers, and entrepreneurs who have pledged to help, develop, support, and facilitate the urban and rural community in the areas of poverty, education, health, agriculture, environment, watershed, and overall development in Uttar Pradesh and India. Earlier, the name of the society was Jesus And Mary Educational Social Welfare Society.</p>

            </div>

         </div>
         @endif
        <div class="col-lg-4" style="">

          <div class="mb-4 story-item pad-10 center-item">

               <div class="row no-gutters">

                  <h3 class="text-center center-item mt-3 mb-3">

                     <a class="text-center" href="#">Shri Ram Raja Foundation</a>

                  </h3>
                  <img src="https://media.gettyimages.com/id/1382389203/photo/volunteers-planning-their-next-project.jpg?s=612x612&w=0&k=20&c=Fts0FjsGZMDH8Csl4BThM9mcTiRyvvAfdel-DMZrN54=" alt="" class="img-fluid w-100" style="height:275px;">

               

                  <p class="card-text mb-4"></p>

               </div>

            </div>

         </div>

      </div>

   </div>

   </div>

</section>




<section>


  







<!-- Section Intro END -->
<section class="section video">
   <div class="container">
      <div class="row ">
         <div class="col-lg-8 col-md-8 col-sm-12">
            <div class="video-content  mb-5 mb-lg-0">
               <h2 class="mt-3 mb-2 position-relative text-lg">Our Reach</h2>
               <p>
                  In keeping with its philosophy of 'Real Work Real Change', Ram Raja  NGO Foundation , India to support the underserved, has taken its intervention into the interiors of India, reaching the unreached in the remotest of rural areas and urban slums with our services and making this helping foundation in India, the best NGO in India.
               </p>
               <div class="counter-section">
         <div class="row">
            <div class="col-lg-4 col-md-6 col-sm-6">
               <div class="counter-item-2 mb-5 mb-lg-0 pt-5">
                  <span class="counter-stat">5</span>
                  <p>Years of Experience</p>
               </div>
            </div>
            <div class="col-lg-4 col-md-6 col-sm-6">
               <div class="counter-item-2 mb-5 mb-lg-0 pt-5">
                  <span class="counter-stat font-weight-bold ">500</span>
                  <p>Active Volunteer</p>
               </div>
            </div>
            <div class="col-lg-4 col-md-6 col-sm-6">
               <div class="counter-item-2 mb-5 mb-lg-0 pt-5">
                  <span class="counter-stat">1</span>
                  <p>Availble Country</p>
               </div>
            </div>
         
         </div>
      </div>
            </div>
         </div>
         <div class="col-lg-4 col-md-4 col-sm-12">
            <!-- <div class="video-block">
               <div class="img-block"> -->
                  <img src="{{asset('assets/images/map.png')}}" alt="" class="img-fluid">
               <!-- </div>            
            </div> -->
         </div>
      </div>
    
 
   </div>
</section>




<section class="gallery">

   <div class="container">

      <div class="row justify-content-center">

         <div class="col-lg-8 col-md-10">

            <div class="section-title text-center">

               <!--<span class="text-color">Our Gallery</span>-->

               <h2 class="mt-3 mb-4 position-relative content-title">We connect with people across different sectors. we take risksand we always keep learning.</h2>

            </div>

         </div>

      </div>

   </div>

   <div class="container-fluid">

      <div class="gallery-wrap">

         <div class="row">

            <div class="container-fluid">

               <div class="row">

                  <div class="bd-example bd-example-tabs">

                     <nav>

                        <div class="nav nav-tabs" id="nav-tab" role="tablist">

                    <a class="nav-item nav-link active text-center" id="nav-education-tab" data-toggle="tab" href="#nav-education" role="tab" aria-controls="nav-education" aria-selected="true"><span class="pad">Education</span></a>

                   <a class="nav-item nav-link text-center" id="nav-health-tab" data-toggle="tab" href="#nav-health" role="tab" aria-controls="nav-health" aria-selected="false"><span class="pad">Health</span></a>

                    <a class="nav-item nav-link text-center" id="nav-livelihood-tab" data-toggle="tab" href="#nav-livelihood" role="tab" aria-controls="nav-livelihood" aria-selected="false"><span class="pad">Livelihood</span></a>

                           <a class="nav-item nav-link text-center" id="nav-Woman-Empowerment" data-toggle="tab" href="#nav-Woman-Empowerment" role="tab" aria-controls="nav-Woman-Empowerment" aria-selected="false">Woman Empowerment</a>

                        </div>

                     </nav>

                     <div class="tab-content" id="nav-tabContent" >

                        <div class="tab-pane fade show active" id="nav-education" role="tabpanel" aria-labelledby="nav-education-tab">

						<div class="tab-slider">

                              <div class="tab-slider-inner" style="width:100%;  background: url({{asset('assets/images/bg/banner.jpg')}}) no-repeat;">

                                 <div class="container">

                                    <div class="row justify-content-center">

                                       <div class="col-lg-12 col-md-12">

                                          <div class="block text-center">

                                             <h1 class="animated fadeInUp mb-4">New hope for <br>near future</h1>

                                          </div>

                                       </div>

                                    </div>

                                 </div>

                              </div>

                              <div class="tab-slider-inner" style=" height:500px; width:100%;   background: url({{asset('assets/images/bg/banner-1.jpg')}}) no-repeat;">

                                 <div class="container">

                                    <div class="row justify-content-center">

                                       <div class="col-lg-12 col-md-12">

                                          <div class="block text-center">

                                             <h1 class="animated fadeInUp mb-4">Open Your Heart To Those In Need.</h1>

                                          </div>

                                       </div>

                                    </div>

                                 </div>

                              </div>

                              <div class="tab-slider-inner" style="  width:100%; background: url({{asset('assets/images/bg/banner-2.jpg')}}) no-repeat;">

                                 <div class="container">

                                    <div class="row justify-content-center">

                                       <div class="col-lg-12 col-md-12">

                                          <div class="block text-center">

                                             <h1 class="animated fadeInUp mb-4">Many Are In Need Of Your Helping Hand.</h1>

                                          </div>

                                       </div>

                                    </div>

                                 </div>

                              </div>

                           </div>

                        </div>

                        <div class="tab-pane fade" id="nav-health" role="tabpanel" aria-labelledby="nav-health-tab">

                           <div class="tab-slider">

                              <div class="tab-slider-inner" style=" width:100%;     background: url({{asset('assets/images/bg/banner.jpg')}}) no-repeat;">

                                 <div class="container">

                                    <div class="row justify-content-center">

                                       <div class="col-lg-12 col-md-12">

                                          <div class="block text-center">

                                             <h1 class="animated fadeInUp mb-4">New hope for <br>near future</h1>

                                          </div>

                                       </div>

                                    </div>

                                 </div>

                              </div>

                              <div class="tab-slider-inner" style="width:100%; background: url({{asset('assets/images/bg/banner-1.jpg')}}) no-repeat;">

                                 <div class="container">

                                    <div class="row justify-content-center">

                                       <div class="col-lg-12 col-md-12">

                                          <div class="block text-center">

                                             <h1 class="animated fadeInUp mb-4">Open Your Heart To Those In Need.</h1>

                                          </div>

                                       </div>

                                    </div>

                                 </div>

                              </div>

                              <div class="tab-slider-inner" style=" height:500px; width:100%;  background: url({{asset('assets/images/bg/banner-2.jpg')}}) no-repeat;">

                                 <div class="container">

                                    <div class="row justify-content-center">

                                       <div class="col-lg-12 col-md-12">

                                          <div class="block text-center">

                                             <h1 class="animated fadeInUp mb-4">Many Are In Need Of Your Helping Hand.</h1>

                                          </div>

                                       </div>

                                    </div>

                                 </div>

                              </div>

                           </div>

                        </div>

                        <div class="tab-pane fade" id="nav-livelihood" role="tabpanel" aria-labelledby="nav-livelihood-tab">

							<div class="tab-slider">

								<div class="tab-slider-inner" style=" height:500px; width:100%;      background: url({{asset('assets/images/bg/banner.jpg')}}) no-repeat;">

									<div class="container">

										<div class="row justify-content-center">

										<div class="col-lg-12 col-md-12">

											<div class="block text-center">

												<h1 class="animated fadeInUp mb-4">New hope for <br>near future</h1>

											</div>

										</div>

										</div>

									</div>

								</div>

								<div class="tab-slider-inner" style=" height:500px; width:100%;  background: url({{asset('assets/images/bg/banner-1.jpg')}}) no-repeat;">

									<div class="container">

										<div class="row justify-content-center">

										<div class="col-lg-12 col-md-12">

											<div class="block text-center">

												<h1 class="animated fadeInUp mb-4">Open Your Heart To Those In Need.</h1>

											</div>

										</div>

										</div>

									</div>

								</div>

								<div class="tab-slider-inner" style=" height:500px; width:100%;  background: url({{asset('assets/images/bg/banner-2.jpg')}}) no-repeat;">

									<div class="container">

										<div class="row justify-content-center">

										<div class="col-lg-12 col-md-12">

											<div class="block text-center">

												<h1 class="animated fadeInUp mb-4">Many Are In Need Of Your Helping Hand.</h1>

											</div>

										</div>

										</div>

									</div>

								</div>

							</div>

						</div>

						<div class="tab-pane fade" id="nav-Woman-Empowerment" role="tabpanel" aria-labelledby="nav-Woman-Empowerment

                  -tab">

							<div class="tab-slider">

								<div class="tab-slider-inner" style=" width:100%;    background: url({{asset('assets/images/bg/banner.jpg')}}) no-repeat;">

									<div class="container">

										<div class="row justify-content-center">

										<div class="col-lg-12 col-md-12">

											<div class="block text-center">

												<h1 class="animated fadeInUp mb-4">New hope for <br>near future</h1>

											</div>

										</div>

										</div>

									</div>

								</div>

								<div class="tab-slider-inner" style=" width:100%;    background: url({{asset('assets/images/bg/banner-1.jpg')}}) no-repeat;">

									<div class="container">

										<div class="row justify-content-center">

										<div class="col-lg-12 col-md-12">

											<div class="block text-center">

												<h1 class="animated fadeInUp mb-4">Open Your Heart To Those In Need.</h1>

											</div>

										</div>

										</div>

									</div>

								</div>

								<div class="tab-slider-inner" style="  width:100%;  background: url({{asset('assets/images/bg/banner-2.jpg')}}) no-repeat;">

									<div class="container">

										<div class="row justify-content-center">

										<div class="col-lg-12 col-md-12">

											<div class="block text-center">

												<h1 class="animated fadeInUp mb-4">Many Are In Need Of Your Helping Hand.</h1>

											</div>

										</div>

										</div>

									</div>

								</div>

							</div>

						</div>



                     </div>

                  </div>

               </div>

            </div>

         </div>

      </div>

   </div>

</section>

<section>

   <div class="container">

      <div class="row">

         <div class="col-lg-12">

            <div class="section-divider"></div>

         </div>

      </div>

   </div>

</section>
@if($pagesettings[0]->blog_status)
<section class="section latest-blog">

   <div class="container">

      <div class="row justify-content-center">

         <div class="col-lg-7 text-center">

            <div class="section-title">

               <span class="h6 text-center">{{$languages->blog_title}}</span>

               <h2 class="mt-3 content-title">{{$languages->blog_text}}</h2>

            </div>

         </div>

      </div>

      <div class="row justify-content-center">
         <!--@foreach($blogs as $blog)-->
         <!--<div class="col-lg-4 col-md-6 mb-5 mb-lg-0 ">-->

         <!--   <div class="card blog-item ">-->

         <!--      <img src="{{url('/')}}/assets/images/blog/{{$blog->featured_image}}" alt="" class="img-fluid" style="height:230px;">-->

         <!--      <div class="card-body mt-2  ">-->

         <!--         {{--  <span class="text-sm text-color text-uppercase font-weight-bold">{{date('d M Y',strtotime($blog->created_at))}}</span>  --}}-->

         <!--         <h3 class="mb-3 text-center"><a href="{{url('/')}}/event/{{$blog->id}}" class="text-dark">{{$blog->title}}</a></h3>-->

         <!--         <p>{{substr(strip_tags($blog->details),0,125)}}</p>-->

         <!--      </div>-->

         <!--   </div>-->

         <!--</div>-->
         <!--@endforeach-->
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
         
           
      </div>

   </div>

</section>
@endif
<!-- Section About End -->

<div class="cta-block section">

   <div class="container">

      <div class="row justify-content-center ">

         <div class="col-lg-7 col-md-12">

            <div class="cta-content text-center">

               <i class="icofont-diamond text-lg text-color"></i>

               <h2 class="text-white text-lg mb-5 mt-3">We can’t help everyone, but everyone can help someone</h2>


               <a href="{{ route('alldonate') }}" class="btn btn-main rounded">Donate Now</a>

            </div>

         </div>

      </div>

   </div>

</div>



<!-- Section About Start -->

<section class="section causes mt-5 mb-5">

   <div class="container">

 

      <div class="row">

         <div class="col-lg-4 accreditations">



         <h3 class="text-center">  No Hunger </h3>

     <div class="accreditations-slider">

            <div class="card mb-3 accreditations-item">

               <div class="row no-gutters">

                 <img src="data:image/jpeg;base64,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"  style="height:290px;" class="w-100 mt-10" alt="...">

                  <div class="card-body">

                     <h3 class="mb-3"><a href="#" >No Hunger</a></h3>

                    

                     <p class="card-text mb-4">No Hungry Child Free Food Program is focused towards distributing hot, nutritious and fresh food to poor, needy & hungry children across pockets of poverty in India.   </p>

                     

                  </div>

               </div>

             </div>



            <div class="card mb-3 accreditations-item">

               <div class="row no-gutters">

                  <img src="https://encrypted-tbn0.gstatic.com/images?q=tbn:ANd9GcS7DaZTuaKn5NYTIvVsSevOG61liyfBkr2hNw&s" class="img-fluid w-100" alt="..."  style="height:290px;">

                  <div class="card-body">

                     <h3 class="mb-3"><a href="#">No Hunger</a></h3>

                  

                     <p class="card-text mb-4">No Hungry Child Free Food Program is focused towards distributing hot, nutritious and fresh food to poor, needy & hungry children across pockets of poverty in India.  </p>

                    

                  </div>

               </div>

            </div>



            <div class="card mb-3 accreditations-item">

               <div class="row no-gutters">

                  <img src="https://encrypted-tbn0.gstatic.com/images?q=tbn:ANd9GcQep1Rtw8lyaGR4GysEW1yrei9-lRGz0fErmw&s" class="img-fluid w-100" alt="..."  style="height:290px;">

                  <div class="card-body">

                     <h3 class="mb-3"><a href="#">No Hunger</a></h3>

                   

                     <p class="card-text mb-4">No Hungry Child Free Food Program is focused towards distributing hot, nutritious and fresh food to poor, needy & hungry children across pockets of poverty in India.  </p>

                   

                  </div>

               </div>

            </div>

			</div>

         </div>




         <div class="col-lg-4 accreditations">

            <h3 class="text-center">  Educational Rally </h3>
   
   
   
            <div class="accreditations-slider">
   
   
               <div class="card mb-3 accreditations-item">
   
                  <div class="row no-gutters">
   
                     <img src="data:image/jpeg;base64,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" class="img-fluid w-100" alt="..." style="height:270px;">
   
                     <div class="card-body">               

                        <h3 class="mb-3 text-center"><a href="#">Rally Event</a></h3>

                        <p class="card-text mb-4">
   
                           Saying that “Safe School” is the right of each and every student, people has said that the Ram Raja foundation is implementing the “Safe School Access” programme, which aims toward safety of students.  
   
                     </p>
   
                     
   
                     </div>
   
                  </div>
   
               </div>
               
   
   
   
               <div class="card mb-3 accreditations-item">
   
                  <div class="row no-gutters">
   
                     <img src="data:image/jpeg;base64,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" class="img-fluid w-100"  alt="..." style="height:270px;">
   
                     <div class="card-body">               

                        <h3 class="mb-3 text-center"><a href="#">Rally Event</a></h3>

                        <p class="card-text mb-4">
   
                           Saying that “Safe School” is the right of each and every student, people has said that the Ram Raja foundation is implementing the “Safe School Access” programme, which aims toward safety of students.  
   
                     </p>
   
                           
   
                     </div>
   
   
                  </div>
   
               </div>
   
            </div>
         </div>
 
         <div class="col-lg-4 accreditations">

            <h3 class="text-center">  Awards/Recognitions </h3>



         <div class="accreditations-slider">


            <div class="card mb-3 accreditations-item">

               <div class="row no-gutters">

                  <img src="data:image/jpeg;base64,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" class="img-fluid w-100" alt="..." style="height:270px;">

                  <div class="card-body">

                     <h3 class="mb-3 text-center"><a href="#">Awards/Recognitions</a></h3>

                  

                     <p class="card-text mb-4">Ram Raja foundation’s legacy of humanitarianism and service has led to recognition by the international community as we have been named one of the most efficient and wide-reaching non-profit organizations worldwide. </p>

                    

                  </div>

               </div>

            </div>



            <div class="card mb-3 accreditations-item">

               <div class="row no-gutters">

                  <img src="https://encrypted-tbn0.gstatic.com/images?q=tbn:ANd9GcS1_75OPkoVZa-L7voiOkEskHvbZNWBv0yUCg&s" class="img-fluid w-100" alt="..." style="height:270px;">

                  <div class="card-body">

                     <h3 class="mb-3 text-center"><a href="#">Awards/Recognitions</a></h3>

                   

                     <p class="card-text mb-4">Ram Raja Foundation’s legacy of humanitarianism and service has led to recognition by the international community as we have been named one of the most efficient and wide-reaching non-profit organizations worldwide. </p>


                     

                   

                  </div>

               </div>

            </div>

			</div>





         </div>

      </div>

   </div>

</section>


@php
use App\Models\Activity;
$activity = Activity::all();
@endphp

<section class="section latest-blog">

   <div class="container" style="margin-bottom:100px">

      <div class="row justify-content-center">

         <div class="col-lg-7 text-center">

            <div class="section-title">

               <span class="h6 text-center">Activity</span>

               <h2 class="mt-3 content-title">Our Activity</h2>

            </div>

         </div>

      </div>

      <div class="row ">
         <!--@foreach($blogs as $blog)-->
         <!--<div class="col-lg-4 col-md-6 mb-5 mb-lg-0 ">-->

         <!--   <div class="card blog-item ">-->

         <!--      <img src="{{url('/')}}/assets/images/blog/{{$blog->featured_image}}" alt="" class="img-fluid" style="height:230px;">-->

         <!--      <div class="card-body mt-2  ">-->

         <!--         {{--  <span class="text-sm text-color text-uppercase font-weight-bold">{{date('d M Y',strtotime($blog->created_at))}}</span>  --}}-->

         <!--         <h3 class="mb-3 text-center"><a href="{{url('/')}}/event/{{$blog->id}}" class="text-dark">{{$blog->title}}</a></h3>-->

         <!--         <p>{{substr(strip_tags($blog->details),0,125)}}</p>-->

         <!--      </div>-->

         <!--   </div>-->

         <!--</div>-->
         <!--@endforeach-->
 @foreach($activity as $activities)
            @php
            if (preg_match('/(?:youtube\.com\/watch\?v=|youtu\.be\/|youtube\.com\/embed\/)([^"&?\/\s]+)/', $activities->link, $matches)) {
                $youtubeID = $matches[1];
            } else {
                $youtubeID = $activities->link;
            }
        @endphp
        
                <div class="col-lg-4 col-md-6 ">
                    <div class="card">
                        <!-- Dynamic Image -->
  <iframe width="560" height="315"
                src="https://www.youtube.com/embed/{{ $youtubeID }}"
                frameborder="0" 
                allow="accelerometer; autoplay; clipboard-write; encrypted-media; gyroscope; picture-in-picture" 
                allowfullscreen>
        </iframe>
                        <!-- Card Body -->
                       
                    </div>
                </div>
            
            @endforeach
         
      

      </div>

   </div>

</section>





@endsection



