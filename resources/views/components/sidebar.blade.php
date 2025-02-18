<style>
.app-brand{
    display: flex !important;
    align-items: center;
   padding: 20px 0px;
}
    .app-brand h1{
    max-width: unset !important;
    width: 100%;
    height: 100%;
    object-fit: cover;
    font-size:20px !important;
}
.app-brand a {
    width: 45% !important;}
    .app-brand .brand-name {
    /*font-size: 16px !important;*/
    color: #7D2310 !important;
    font-weight: 800;
    margin-left: 0.31rem;
}
.left-sidebar.sidebar-light .sidebar .sidebar-inner > li > a {
    color: #333 !important;
}
.sidebar .nav > li > a i {color:#7D2310 !important;}

@media (max-width:768px){
    .app-brand a {
    width: 35% !important;
}
    
   .left-sidebar {
    width: 250px;
    transition: all 0.3s ease-in-out;
}

.left-sidebar.collapsed {
    width: 60px;
}

.left-sidebar .nav-text {
    display: inline-block;
    transition: opacity 0.3s ease-in-out;
}

.left-sidebar.collapsed .nav-text {
    opacity: 0;
    visibility: hidden;
}

/* Page & header shift */
.main-content {
    margin-left: 250px;
    transition: margin-left 0.3s ease-in-out;
}

.main-content.shifted {
    margin-left: 60px;
}

/* Sidebar icons always visible */
.sidebar .nav > li > a i {
    margin-right: 10px;
    font-size: 20px;
}

/* Hide the full sidebar title when collapsed */
.left-sidebar.collapsed .app-brand h1 {
    display: none;
}

}

</style>
<link href="{{asset('assets/logo/HRF.png')}}" rel="shortcut icon" />
        <!-- ====================================
          ——— LEFT SIDEBAR WITH OUT FOOTER
        ===================================== -->
        <aside class="left-sidebar sidebar-light" id="left-sidebar">
          <div id="sidebar" class="sidebar sidebar-with-footer">
            <!-- Aplication Brand -->
            <div class="app-brand text-center">
              <!--<a href="{{url('newdashboard')}}">-->
                <!--<img src="{{asset('assets/logo/HRF.png')}}" alt="">-->
                <!--<span class="brand-name">MONO</span>-->
              <!--</a>-->
              <h1 class="brand-name">Ram Raja Foundation</h1>
            </div>
            <!-- begin sidebar scrollbar -->
            <div class="sidebar-left" data-simplebar style="height: 100%;">
              <!-- sidebar menu -->
              <ul class="nav sidebar-inner" id="sidebar-menu">
                

                
                  <li class="" >
                    <a class="sidenav-item-link" href="{{url('newdashboard')}}">
                      <i class="mdi mdi-briefcase-account-outline"></i>
                      <span class="nav-text"> Dashboard</span>
                    </a>
                  </li>
                
  <li>
                    <a class="sidenav-item-link" href="{{ route('adminabout.edit' , 1)}}">
                      <i class="mdi mdi-human-handsdown"></i>
                      <span class="nav-text">About us</span>
                    </a>
                  </li>
                  
                   <li>
                    <a class="sidenav-item-link" href="{{ route('activity.index')}}">
    <i class="mdi mdi-format-list-checks"></i>
                      <span class="nav-text">Activity</span>
                    </a>
                  </li>
                 <li>
                    <a class="sidenav-item-link" href="{{route('showEvent')}}">
                      <i class="mdi mdi-account-group"></i>
                      <span class="nav-text">Events</span>
                    </a>
                  </li>

                        <li>
                    <a class="sidenav-item-link" href="{{route('showCampaigns')}}">
                      <i class="mdi mdi-flag-variant"></i>
                      <span class="nav-text">Compaign</span>
                    </a>
                  </li>
                
                         <li>
                    <a class="sidenav-item-link" href="{{route('showMedia')}}">
                      <i class="mdi mdi-animation-play"></i>
                      <span class="nav-text">Media</span>
                    </a>
                  </li>
                   
                         <li>
                    <a class="sidenav-item-link" href="{{route('showAwards')}}">
                      <i class="mdi mdi-image-area"></i>
                      <span class="nav-text">Awards</span>
                    </a>
                  </li>
                         <li>
                    <a class="sidenav-item-link" href="{{route('contacts')}}">
                      <i class="mdi mdi-phone-classic"></i>
                      <span class="nav-text">Contacts</span>
                    </a>
                  </li>
                  
                            <li>
                    <a class="sidenav-item-link" href="{{url('donation-view')}}">
                      <i class="mdi mdi-human-handsdown"></i>
                      <span class="nav-text">Donation</span>
                    </a>
                  </li>
                   <li>
                    <a class="sidenav-item-link" href="{{ route('address.edit' , 1)}}">
 <i class="mdi mdi-map-marker"></i>
 <span class="nav-text">Address</span>
                    </a>
                  </li>
                  
                  
              </ul>

            </div>

          </div>
        </aside>
        