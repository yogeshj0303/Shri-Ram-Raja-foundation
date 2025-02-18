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
              @if(session()->has('success'))
          <div class="alert alert-success alert-dismissible fade show" role="alert">
  <strong>Success !</strong> Password updated successfully.
  <button type="button" class="close" data-dismiss="alert" aria-label="Close">
    <span aria-hidden="true">×</span>
  </button>
</div>
          @endif
                 <div class="col-xl-9">
    <div class="card card-default">
      <div class="card-header">
        <h2 class="mb-5">Change Password</h2>

      </div>

      <div class="card-body">
       
    <form method="post" action="{{ route('update.password') }}">
    @csrf

    <div class="form-group row mb-6">
        <label for="password" class="col-sm-4 col-lg-2 col-form-label">Password<span style="color:red">*</span></label>
        <div class="col-sm-8 col-lg-10">
            <input type="password" class="form-control @error('password') is-invalid @enderror" name="password" id="password" placeholder="Enter Password Here">
            @error('password')
            <div class="invalid-feedback">{{ $message }}</div>
            @enderror
        </div>
    </div>

    <div class="form-group row mb-6">
        <label for="confirm_password" class="col-sm-4 col-lg-2 col-form-label">Confirm Password<span style="color:red">*</span></label>
        <div class="col-sm-8 col-lg-10">
            <input type="password" class="form-control @error('confirm_password') is-invalid @enderror" name="confirm_password" id="confirm_password" placeholder="Enter Confirm Password Here">
            @error('confirm_password')
            <div class="invalid-feedback">{{ $message }}</div>
            @enderror
        </div>
    </div>

    <div class="d-flex justify-content-end">
        <button type="submit" class="btn btn-primary mb-2 btn-pill" style="background: #7D2310;">Update Password</button>
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
    -  -->


  </body>

