<style>
.table.table-product thead th {
    text-transform: capitalize !important;}
    .dataTables_wrapper.no-footer div.dataTables_scrollHead table.dataTable{
    margin-left: 4px !important;}
    .dataTables_wrapper.no-footer div.dataTables_scrollBody>table {width: 99% !important;}
    
    .dropdown-menu-right {
    margin-top: -34px !important;}
    .table-head{
        overflow-x:hidden !important;
    }
    .table-head table{
        width:100%; !important;
    }
</style>
<meta name="csrf-token" content="{{ csrf_token() }}">
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
                    <!-- Alert for success messages -->
                     @if(session()->has('success'))
    <div class="alert alert-success alert-dismissible fade show" role="alert">
        <strong>Success!</strong> {{ session('success') }}
        <button type="button" class="close" data-dismiss="alert" aria-label="Close">
            <span aria-hidden="true">×</span>
        </button>
    </div>
@endif

                    <table id="productsTable" class="table table-bordered table-product" style="width:100%">
                        <thead>
                            <tr>
                                <th>S.No.</th>
                                <th>First Name</th>
                                <th>Email</th>
                                <th>Mobile No</th>
                                 <th>Occupation</th>
                                <th>Message</th>
                                <th>Action</th>
                            </tr>
                        </thead>
                        <tbody>
                         <?php
                         $vol=DB::table('volunteers')->orderBy('id','DESC')->get();
                         ?>
                         @foreach($vol as $key =>$temp)
                            <tr>
                                <td>{{++$key}}</td>
                                <td>{{$temp->name}}</td>
                                <td>{{$temp->email}}</td>
                                <td>{{$temp->phone}}</td>
                                <td>{{$temp->occupation}}</td>
                                <td>{{$temp->message}}</td>
                               
                                <td>
                                    <div class="dropdown">
                                        <a class="dropdown-toggle icon-burger-mini" href="#" role="button"
                                            id="dropdownMenuLink" data-toggle="dropdown" aria-haspopup="true"
                                            aria-expanded="false" data-display="static">
                                        </a>

                                        <div class="dropdown-menu dropdown-menu-right"
                                            aria-labelledby="dropdownMenuLink">
                                            <form action="{{ route('Volunteer.destroy', $temp->id) }}" method="POST">
                                            @csrf
                                            @method('DELETE')
                                            <button type="submit" class="dropdown-item delete-media" data-confirm="Are you sure you want to delete this media?">Delete Volunteer</button>
                                        </form>
                                        </div>
                                    </div>
                                </td>
                            </tr>
                      @endforeach

                        </tbody>
                    </table>
                </div>

            <!-- Footer -->
            <x-footer/>

        </div>
    </div>
    <!--  -->

</body>
