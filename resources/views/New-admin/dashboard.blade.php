<style>
    .card-default .card-header h2, h3 {color: #fff !important;}
     h4{
        color:#fff !important;
    }
    footer{
        width: 100%;
    position: fixed;
    bottom: 0 !important;
    }
    @media screen and (max-width:767px){
        footer {position: unset !important;}
    }
   
</style>
<link href="{{asset('assets/logo/HRF.png')}}" rel="shortcut icon" />
  <body class="navbar-fixed sidebar-fixed" id="body">

    <!-- ====================================
    ——— WRAPPER
    ===================================== -->
    <div class="wrapper">
      
 <x-sidebar />
      <!-- ====================================
      ——— PAGE WRAPPER
      ===================================== -->
      <div class="page-wrapper">
        
           <x-header/>

        <!-- ====================================
        ——— CONTENT WRAPPER
        ===================================== -->
        <div class="content-wrapper">
          <div class="content">                
                  <!-- Top Statistics -->
                <?php
                $contacts = DB::table('contacts')->count();
                $vol = DB::table('volunteers')->count();
                 $campaigns = DB::table('campaigns')->count();
                 $events = DB::table('events')->count();
                ?>
                
                  <div class="row">
                   <div class="col-xl-3 col-sm-6">
                       <a href="contacts">
                            <div class="card card-default card-mini" style="background-color: #5795b4;">
                                <div class="card-header">
                                    <!-- Add the user icon -->
                                    <div class="user-icon">
                                        <!--<i class="mdi-account-clock"></i>-->
                                        <img src="https://cdn-icons-png.flaticon.com/512/5439/5439135.png" width='45px'>
                                    </div>
                                    <!-- Heading for the total number of users -->
                                    <h4>Total<br> Contacts</h4>
                                   
                                </div>
                                <!-- Content for displaying the total number of users (replace $18,699 with actual count) -->
                                <div class="card-body">
                                    <h3>{{$contacts}}</h3>
                                </div>
                            </div>
                        </a>
                        </div>
                     <div class="col-xl-3 col-sm-6">
                         <a href="show-volunteer">
                      <div class="card card-default card-mini" style="background-color:#b13232">
                        <div class="card-header">
                                    <!-- Add the user icon -->
                                    <div class="user-icon">
                                        <!--<i class="mdi-account-clock"></i>-->
                                        <img src="https://cdn-icons-png.flaticon.com/512/5157/5157840.png" width='45px'>
                                    </div>
                                    <!-- Heading for the total number of users -->
                                    <h4>Total<br> Volunteer</h4>
                                   
                                </div>
                               <div class="card-body">
                                    <h3>{{$vol}}</h3>
                                </div>
                      </div>
                       </a>
                    </div>
                    <div class="col-xl-3 col-sm-6">
                        <a href="show-Campaigns">
                      <div class="card card-default card-mini" style="background-color:#4f9974">
                        <div class="card-header">
                                    <!-- Add the user icon -->
                                    <div class="user-icon">
                                        <!--<i class="mdi-account-clock"></i>-->
                                        <img src="https://cdn-icons-png.flaticon.com/512/5063/5063164.png" width='45px'>
                                    </div>
                                    <!-- Heading for the total number of users -->
                                    <h4>Total<br> Compaigns</h4>
                                   
                                </div>
                               <div class="card-body">
                                    <h3>{{$campaigns}}</h3>
                                </div>
                      </div>
                       </a>
                    </div>
                    <div class="col-xl-3 col-sm-6">
                        <a href="show-event">
                      <div class="card card-default card-mini" style="background-color:#c2a74c">
                        <div class="card-header">
                                    <!-- Add the user icon -->
                                    <div class="user-icon">
                                        <!--<i class="mdi-account-clock"></i>-->
                                        <img src="https://cdn-icons-png.flaticon.com/512/3994/3994092.png" width='45px'>
                                    </div>
                                    <!-- Heading for the total number of users -->
                                    <h4>Total<br> Events</h4>
                                   
                                </div>
                               <div class="card-body">
                                    <h3>{{$events}}</h3>
                                </div>
                      </div>
                       </a>
                    </div>
                  </div>

                </div>
          
        </div>
        
          <!-- Footer -->
    <x-footer/>

      </div>
    </div>
    -  -->


  </body>

