<style>
    .btn-primary {
    background-color: #7D2310 !important;
    border-color: #7D2310 !important;
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
             
                 <div class="col-xl-12">
    <div class="card card-default">
      <div class="card-header">
        <h2 class="mb-5">Add Activity</h2>

      </div>

      <div class="card-body">
       
<form method="post" action="{{ route('activity.store') }}" enctype="multipart/form-data">
    @csrf

    <div class="form-group row mb-6" id="videoInput">
        <div class="col-sm-8 col-lg-10">
<input type="text" class="form-control" name="link" placeholder="Enter link" value="{{ old('link') }}">

            @error('link')
                <span class="text-danger">{{ $message }}</span>
            @enderror
        </div>
    </div>

    <div class="d-flex justify-content-end">
        <button type="submit" class="btn btn-primary mb-2 btn-pill">SUBMIT</button>
    </div>
</form>

      </div>
    </div>





  </div>

                </div>
          
        </div>
        
          <!-- Footer -->
    <x-footer/>

      </div>
    </div>

<script src="https://code.jquery.com/jquery-3.6.0.min.js"></script>
  </body>

