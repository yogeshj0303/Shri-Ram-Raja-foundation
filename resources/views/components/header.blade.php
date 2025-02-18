<style>
    .navbar .navbar-right .navbar-nav .user-menu .dropdown-link-item {justify-content: unset !important;}
</style>  
    <head>
  <meta charset="utf-8" />
  <meta http-equiv="X-UA-Compatible" content="IE=edge" />
  <meta name="viewport" content="width=device-width, initial-scale=1" />

  <title>Ram Raja Foundation | Admin</title>
    
  <!-- theme meta -->
  <meta name="theme-name" content="" />
   <!--<link rel="icon" type="image/png" href="{{asset('images/HRFF.png')}}">-->
 <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.2/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-T3c6CoIi6uLrA9TneNEoa7RxnatzjcDSCmG1MXxSR1GAsXEV/Dwwykc2MPK8M2HN" crossorigin="anonymous">
 <script src="https://cdn.jsdelivr.net/npm/@popperjs/core@2.11.8/dist/umd/popper.min.js" integrity="sha384-I7E8VVD/ismYTF4hNIPjVp/Zjvgyol6VFvRkX/vR+Vc4jQkC+hVqc2pM8ODewa9r" crossorigin="anonymous"></script>
<script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.2/dist/js/bootstrap.min.js" integrity="sha384-BBtl+eGJRgqQAUMxJ7pMwbEyER4l1g+O15P+16Ep7Q9Q+zqX6gSbd85u4mG4QzX+" crossorigin="anonymous"></script>
  <!-- GOOGLE FONTS -->
  <link href="https://fonts.googleapis.com/css?family=Karla:400,700|Roboto" rel="stylesheet">
  <link href="{{asset('plugins/material/css/materialdesignicons.min.css')}}" rel="stylesheet" />
  <link href="{{asset('plugins/simplebar/simplebar.css')}}" rel="stylesheet" />

  <!-- PLUGINS CSS STYLE -->
  <link href="{{asset('plugins/nprogress/nprogress.css')}}" rel="stylesheet" />
  
  
  
  
  <link href="{{asset('plugins/DataTables/DataTables-1.10.18/css/jquery.dataTables.min.css')}}" rel="stylesheet" />
  
  
  
  <link href="{{asset('plugins/jvectormap/jquery-jvectormap-2.0.3.css')}}" rel="stylesheet" />
  
  
  
  <link href="{{asset('plugins/daterangepicker/daterangepicker.css')}}" rel="stylesheet" />
  
  
  
  <link href="https://cdn.quilljs.com/1.3.6/quill.snow.css" rel="stylesheet">
  
  
  
  <link href="{{asset('plugins/toaster/toastr.min.css')}}" rel="stylesheet" />
  
  
  <!-- MONO CSS -->
  <link id="main-css-href" rel="stylesheet" href="{{asset('css/style.css')}}" />

  



  <!--
    HTML5 shim and Respond.js for IE8 support of HTML5 elements and media queries
  -->
  <!-- WARNING: Respond.js doesn't work if you view the page via file:// -->
  <!--[if lt IE 9]>
    <script src="https://oss.maxcdn.com/html5shiv/3.7.2/html5shiv.min.js"></script>
    <script src="https://oss.maxcdn.com/respond/1.4.2/respond.min.js"></script>
  <![endif]-->
  <script src="{{asset('plugins/nprogress/nprogress.js')}}"></script>
  <script src="https://ajax.googleapis.com/ajax/libs/jquery/3.7.1/jquery.min.js"></script>
</head>


  <!-- Header -->
          <header class="main-header" id="header">
            <nav class="navbar navbar-expand-lg navbar-light" id="navbar">
              <!-- Sidebar toggle button -->
              <button id="sidebar-toggler" class="sidebar-toggle">
                <span class="sr-only">Toggle navigation</span>
              </button>

              <span class="page-title">dashboard</span>

              <div class="navbar-right ">

                <ul class="nav navbar-nav">
                
                  <li class="custom-dropdown">
                    <button class="notify-toggler custom-dropdown-toggler">
                      <i class="mdi mdi-bell-outline icon"></i>
                      <span class="badge badge-xs rounded-circle"></span>
                    </button>
                    <div class="dropdown-notify">

                      <header>
                        <div class="nav nav-underline" id="nav-tab" role="tablist">
                          <a class="nav-item nav-link active" id="all-tabs" data-toggle="tab" href="#all" role="tab" aria-controls="nav-home"
                            aria-selected="true">All (0)</a>
                          <!--<a class="nav-item nav-link" id="message-tab" data-toggle="tab" href="#message" role="tab" aria-controls="nav-profile"-->
                          <!--  aria-selected="false">Msgs (4)</a>-->
                          <!--<a class="nav-item nav-link" id="other-tab" data-toggle="tab" href="#other" role="tab" aria-controls="nav-contact"-->
                          <!--  aria-selected="false">Others (3)</a>-->
                        </div>
                      </header>

                      <div class="" data-simplebar style="height: 325px;">
                        <div class="tab-content" id="myTabContent">

                          <div class="tab-pane fade show active" id="all" role="tabpanel" aria-labelledby="all-tabs">

                            <div class="media media-sm bg-warning-10 p-4 mb-0">
                              <div class="media-sm-wrapper">
                                <a href="">
                                  <img src="{{asset('images/user/user-xs-01.jpg')}}" alt="User Image" style="width: -webkit-fill-available">
                                </a>
                              </div>
                            

                          </div>

                          <!--<div class="tab-pane fade" id="message" role="tabpanel" aria-labelledby="message-tab">-->

                          <!--  <div class="media media-sm p-4 mb-0">-->
                          <!--    <div class="media-sm-wrapper">-->
                          <!--      <a href="user-profile.html">-->
                          <!--        <img src="images/user/user-sm-01.jpg" alt="User Image">-->
                          <!--      </a>-->
                          <!--    </div>-->
                          <!--    <div class="media-body">-->
                          <!--      <a href="user-profile.html">-->
                          <!--        <span class="title mb-0">Selena Wagner</span>-->
                          <!--        <span class="discribe">Lorem ipsum dolor sit amet, consectetur adipisicing elit.</span>-->
                          <!--        <span class="time">-->
                          <!--          <time>15 min ago</time>...-->
                          <!--        </span>-->
                          <!--      </a>-->
                          <!--    </div>-->
                          <!--  </div>-->

                          <!--  <div class="media media-sm p-4 mb-0">-->
                          <!--    <div class="media-sm-wrapper">-->
                          <!--      <a href="user-profile.html">-->
                          <!--        <img src="images/user/user-sm-03.jpg" alt="User Image">-->
                          <!--      </a>-->
                          <!--    </div>-->
                          <!--    <div class="media-body">-->
                          <!--      <a href="user-profile.html">-->
                          <!--        <span class="title mb-0">Sagge Hudson</span>-->
                          <!--        <span class="discribe">On disposal of as landlord Afraid at highly months do things on at.</span>-->
                          <!--        <span class="time">-->
                          <!--          <time>1 hrs ago</time>...-->
                          <!--        </span>-->
                          <!--      </a>-->
                          <!--    </div>-->
                          <!--  </div>-->

                          <!--  <div class="media media-sm bg-warning-10 p-4 mb-0">-->
                          <!--    <div class="media-sm-wrapper">-->
                          <!--      <a href="user-profile.html">-->
                          <!--        <img src="images/user/user-sm-02.jpg" alt="User Image">-->
                          <!--      </a>-->
                          <!--    </div>-->
                          <!--    <div class="media-body">-->
                          <!--      <a href="user-profile.html">-->
                          <!--        <span class="title mb-0">John Doe</span>-->
                          <!--        <span class="discribe">Extremity sweetness difficult behaviour he of. On disposal of as landlord horrible. Afraid-->
                          <!--          at highly months do things on at.</span>-->
                          <!--        <span class="time">-->
                          <!--          <time>Just now</time>...-->
                          <!--        </span>-->
                          <!--      </a>-->
                          <!--    </div>-->
                          <!--  </div>-->

                          <!--  <div class="media media-sm p-4 mb-0">-->
                          <!--    <div class="media-sm-wrapper">-->
                          <!--      <a href="user-profile.html">-->
                          <!--        <img src="images/user/user-sm-04.jpg" alt="User Image">-->
                          <!--      </a>-->
                          <!--    </div>-->
                          <!--    <div class="media-body">-->
                          <!--      <a href="user-profile.html">-->
                          <!--        <span class="title mb-0">Albrecht Straub</span>-->
                          <!--        <span class="discribe"> Beatae quia natus assumenda laboriosam, nisi perferendis aliquid consectetur expedita non tenetur.</span>-->
                          <!--        <span class="time">-->
                          <!--          <time>Just now</time>...-->
                          <!--        </span>-->
                          <!--      </a>-->
                          <!--    </div>-->
                          <!--  </div>-->

                          <!--</div>-->
                          <!--<div class="tab-pane fade" id="other" role="tabpanel" aria-labelledby="contact-tab">-->

                          <!--  <div class="media media-sm p-4 bg-light mb-0">-->
                          <!--    <div class="media-sm-wrapper bg-primary">-->
                          <!--      <a href="user-profile.html">-->
                          <!--        <i class="mdi mdi-calendar-check-outline"></i>-->
                          <!--      </a>-->
                          <!--    </div>-->
                          <!--    <div class="media-body">-->
                          <!--      <a href="user-profile.html">-->
                          <!--        <span class="title mb-0">New event added</span>-->
                          <!--        <span class="discribe">1/3/2014 (1pm - 2pm)</span>-->
                          <!--        <span class="time">-->
                          <!--          <time>10 min ago...</time>...-->
                          <!--        </span>-->
                          <!--      </a>-->
                          <!--    </div>-->
                          <!--  </div>-->

                          <!--  <div class="media media-sm p-4 mb-0">-->
                          <!--    <div class="media-sm-wrapper bg-info-dark">-->
                          <!--      <a href="user-profile.html">-->
                          <!--        <i class="mdi mdi-account-multiple-check"></i>-->
                          <!--      </a>-->
                          <!--    </div>-->
                          <!--    <div class="media-body">-->
                          <!--      <a href="user-profile.html">-->
                          <!--        <span class="title mb-0">Add request</span>-->
                          <!--        <span class="discribe">Add Dany Jones as your contact.</span>-->
                          <!--        <div class="buttons">-->
                          <!--          <a href="#" class="btn btn-sm btn-success shadow-none text-white">accept</a>-->
                          <!--          <a href="#" class="btn btn-sm shadow-none">delete</a>-->
                          <!--        </div>-->
                          <!--        <span class="time">-->
                          <!--          <time>6 hrs ago</time>...-->
                          <!--        </span>-->
                          <!--      </a>-->
                          <!--    </div>-->
                          <!--  </div>-->

                          <!--  <div class="media media-sm p-4 mb-0">-->
                          <!--    <div class="media-sm-wrapper bg-info">-->
                          <!--      <a href="user-profile.html">-->
                          <!--        <i class="mdi mdi-playlist-check"></i>-->
                          <!--      </a>-->
                          <!--    </div>-->
                          <!--    <div class="media-body">-->
                          <!--      <a href="user-profile.html">-->
                          <!--        <span class="title mb-0">Task complete</span>-->
                          <!--        <span class="discribe">Afraid at highly months do things on at.</span>-->
                          <!--        <span class="time">-->
                          <!--          <time>1 hrs ago</time>...-->
                          <!--        </span>-->
                          <!--      </a>-->
                          <!--    </div>-->
                          <!--  </div>-->

                          <!--</div>-->
                        </div>
                      </div>

                      <!--<footer class="border-top dropdown-notify-footer">-->
                      <!--  <div class="d-flex justify-content-between align-items-center py-2 px-4">-->
                      <!--    <span>Last updated 3 min ago</span>-->
                      <!--    <a id="refress-button" href="javascript:" class="btn mdi mdi-cached btn-refress"></a>-->
                      <!--  </div>-->
                      <!--</footer>-->
                    </div>
                  </li>
                  <!-- User Account -->
                  <li class="dropdown user-menu">
                    <button class="dropdown-toggle nav-link" data-toggle="dropdown">
                      <img src="images/user/user-xs-01.jpg" class="user-image rounded-circle" alt="User Image" />
                      <span class="d-none d-lg-inline-block">{{Auth::user()->name}}</span>
                    </button>
                    <ul class="dropdown-menu dropdown-menu-right">
                      <!--<li>-->
                      <!--  <a class="dropdown-link-item" href="user-profile.html">-->
                      <!--    <i class="mdi mdi-account-outline"></i>-->
                      <!--    <span class="nav-text">My Profile</span>-->
                      <!--  </a>-->
                      <!--</li>-->
                      
                      <li>
                        <a class="dropdown-link-item" href="{{url('change-password')}}">
                          <i class="mdi mdi-settings" style="color: #7D2310"></i>
                          <span class="nav-text" style="color:#333">Change Password</span>
                        </a>
                      </li>

                      <li class="dropdown-footer">
                        <a class="dropdown-link-item" href="{{route('newlogout')}}"> <i class="mdi mdi-logout" style="color: #7D2310"></i> <span style="color:#333">Log Out</span> </a>
                      </li>
                    </ul>
                  </li>
                </ul>
              </div>
            </nav>


          </header>