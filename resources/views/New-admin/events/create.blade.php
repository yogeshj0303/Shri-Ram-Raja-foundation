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
        <h2 class="mb-5">Create Events</h2>

      </div>

      <div class="card-body">
       
<form method="post" action="{{ route('Event.store') }}" enctype="multipart/form-data" id="mediaForm">
    @csrf

    <div class="form-group row mb-6" id="fileInput">
        <label for="confirm_password" class="col-sm-4 col-lg-2 col-form-label">Event Title<span style="color:red">*</span></label>
        <div class="col-sm-8 col-lg-10">
            <input type="text" class="form-control" name="event_title" placeholder="Enter Event Title">
        </div>
    </div>

    <div class="form-group row mb-6" id="fileInput">
        <label for="confirm_password" class="col-sm-4 col-lg-2 col-form-label">Event Image<span style="color:red">*</span></label>
        <div class="col-sm-8 col-lg-10">
            <input type="file" class="form-control" name="event_image">
        </div>
    </div>

     <div class="form-group row mb-6" id="fileInput">
        <label for="confirm_password" class="col-sm-4 col-lg-2 col-form-label">Event Description<span style="color:red">*</span></label>
        <div class="col-sm-8 col-lg-10">
          <textarea class="form-control" name="event_desc"></textarea>

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

