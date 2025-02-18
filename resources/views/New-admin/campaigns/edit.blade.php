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
        <h2 class="mb-5">Edit Campaigns</h2>

      </div>

      <div class="card-body">
       
<form method="post" action="{{ route('editcampaigns.update', $campaign->id) }}" enctype="multipart/form-data">
    @csrf
    @method('PUT')

    <div class="form-group row mb-6" id="fileInput">
        <label for="confirm_password" class="col-sm-4 col-lg-2 col-form-label">Campaigns Title<span style="color:red">*</span></label>
        <div class="col-sm-8 col-lg-10">
            <input type="text" class="form-control" name="campaigns_title" value="{{$campaign->campaigns_title}}" placeholder="Enter Campaigns Title">
        </div>
    </div>

    <div class="form-group row mb-6" id="fileInput">
        <label for="confirm_password" class="col-sm-4 col-lg-2 col-form-label">Current Campaigns Image</label>
        <div class="col-sm-8 col-lg-10">
            @if($campaign->campaigns_image)
                <img src="{{ asset('uploads/images/' . $campaign->campaigns_image) }}" alt="Current Campaign Image" style="max-width: 200px;">
            @else
                <p>No image uploaded</p>
            @endif
        </div>
    </div>

    <div class="form-group row mb-6" id="fileInput">
        <label for="confirm_password" class="col-sm-4 col-lg-2 col-form-label">Upload New Image<span style="color:red">*</span></label>
        <div class="col-sm-8 col-lg-10">
            <input type="file" class="form-control" name="campaigns_image">
        </div>
    </div>

    <div class="form-group row mb-6" id="fileInput">
        <label for="confirm_password" class="col-sm-4 col-lg-2 col-form-label">Campaigns Description<span style="color:red">*</span></label>
        <div class="col-sm-8 col-lg-10">
            <textarea class="form-control" name="campaigns_desc">{{$campaign->campaigns_desc}}</textarea>
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


  </body>

