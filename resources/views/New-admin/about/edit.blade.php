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
                @if(session()->has('success'))
    <div class="alert alert-success alert-dismissible fade show" role="alert">
        <strong>Success!</strong> {{ session('success') }}
        <button type="button" class="close" data-dismiss="alert" aria-label="Close">
            <span aria-hidden="true">×</span>
        </button>
    </div>
@endif
             
                 <div class="col-xl-12">
    <div class="card card-default">
     
      <div class="card-body">
       
  <form method="POST" action="{{ route('adminabout.update', $about->id) }}" enctype="multipart/form-data">
                                @csrf
                                @method('PUT')

                             <div class="form-group row mb-6">
    <div class="col-sm-8 col-lg-10">
        <textarea class="form-control" name="description" placeholder="Enter description" style="height: 500px;">{{ old('description', $about->description) }}</textarea>

        @error('description')
            <span class="text-danger">{{ $message }}</span>
        @enderror
    </div>
</div>


                                <div class="d-flex justify-content-end">
                                    <button type="submit" class="btn btn-primary mb-2 btn-pill">UPDATE</button>
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

