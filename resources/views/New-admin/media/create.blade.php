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
        <h2 class="mb-5">Create Media</h2>

      </div>

      <div class="card-body">
       
<form method="post" action="{{ route('media.store') }}" enctype="multipart/form-data" id="mediaForm">
    @csrf

    <div class="form-group row mb-6">
        <label for="password" class="col-sm-4 col-lg-2 col-form-label">Select Type<span style="color:red">*</span></label>
        <div class="col-sm-8 col-lg-10">
            <select class="form-control" name="type" id="mediaType">
                <option value="">Select Media</option> 
                <option value="gallery">Gallery</option> 
                <!--<option value="video">Video</option>-->
            </select>
        </div>
    </div>

    <div class="form-group row mb-6" id="fileInput">
        <label for="confirm_password" class="col-sm-4 col-lg-2 col-form-label">Choose File<span style="color:red">*</span></label>
        <div class="col-sm-8 col-lg-10">
            <input type="file" class="form-control" name="file">
        </div>
    </div>

    <div class="form-group row mb-6" id="videoInput" style="display: none;">
        <label for="video_link" class="col-sm-4 col-lg-2 col-form-label">YouTube Link<span style="color:red">*</span></label>
        <div class="col-sm-8 col-lg-10">
            <input type="text" class="form-control" name="video_link" placeholder="Enter Youtube Link">
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
<script>
    $(document).ready(function() {
        $('#mediaType').change(function() {
            var selectedType = $(this).val();
            if (selectedType === 'video') {
                $('#fileInput').hide();
                $('#videoInput').show();
            } else {
                $('#fileInput').show();
                $('#videoInput').hide();
            }
        });
    });
</script>
  </body>

