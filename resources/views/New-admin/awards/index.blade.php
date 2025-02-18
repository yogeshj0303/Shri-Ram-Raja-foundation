<style>
.pager {
    text-align: right !important;}
    .pg-selected, .pg-normal{ padding: 5px 12px;}
    /*.pager .pg-goto {background: #000; color: #fff; margin: 0 2px; padding: 5px 12px; border-radius: 3px;}*/
    .pg-goto:hover, .pg-selected:hover, .pg-normal:hover{background-color:#7D2310;border: 2px solid #7D2310; !important;}
    
    .pg-selected, .pg-normal {
    padding: 10px 20px;
    margin: 0 5px;
    background: #7D2310;
    color: #fff;
}
    
    .pager .pg-goto {
    background: transparent;
    color: #7D2310;
    margin: 0 2px;
    padding: 10px 20px;
    border: 1px solid #7D2310;}
.table-topDiv{
        margin-top: 58px;
}

/*.content {*/
/*    padding-top: 0px !important;}*/
.btn.btn-pill{    float: unset;
    position: absolute;
    right: 40px;}
.table.table-product thead th {
    text-transform: capitalize !important;}
    .dataTables_wrapper.no-footer div.dataTables_scrollHead table.dataTable{
    margin-left: 4px !important;}
    .dataTables_wrapper.no-footer div.dataTables_scrollBody>table {width: 99% !important;}
 .search-div{
     display: flex;
    align-items: center;
    justify-content: space-between;
    margin-bottom: 15px;
 }
 .search-div input{
     padding: 10px 15px;
    border: 1px solid #e5e9f2;
    border-radius: 5px;
 }
    .btn-secondary {
    background-color: #7D2310 !important;
    border-color: #7D2310 !important;
}
/*.table-topDiv{*/
/*    width:100%;*/
/*    overflow-x:hidden;*/
/*}*/
/*.table-topDiv table{*/
/*    width:100%;*/
/*}*/
@media screen and (max-width:767px){
/*    .table-topDiv{*/
/*    overflow-x:scroll;*/
/*}*/
/*.table-topDiv table{*/
/*    width:200%;*/
/*}*/
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
            <!--<div class="search-div">-->
              <!--<div>-->
              <!--      <label>-->
              <!--          <input type="search" placeholder="Search..." onkeyup="searchTablee()">-->
              <!--      </label>-->
              <!--  </div>-->
                <a href="{{route('createAwards')}}"><button type="button" style="float:right" class="mb-1 btn btn-pill btn-secondary"><span class"mdi-folder-plus-outline">Create Awards</span></button></a>
            <!--</div>-->
                <div class="table-topDiv">
                <table id="productsTable" class="table table-bordered table-product paginatedthree">
                        <thead>
                            <tr>
                                <th>S.No.</th>
                            
                              <th>Awards Image</th>
                                <th>Action</th>
                            </tr>
                        </thead>
                        <tbody>
                         <?php
                         $vol=DB::table('awards')->orderBy('id','DESC')->get();
                         ?>
                         @foreach($vol as $key =>$temp)
                            <tr>
                                <td>{{++$key}}</td>
                               
                               <td><img src="{{ asset('uploads/images/' . $temp->awards_image) }}" alt="Awards Image">
                        </td>
                               <td>
                                <div class="dropdown">
                                    <a class="dropdown-toggle icon-burger-mini" href="#" role="button"
                                        id="dropdownMenuLink" data-toggle="dropdown" aria-haspopup="true"
                                        aria-expanded="false" data-display="static">
                                    </a>
                            
                                    <div class="dropdown-menu dropdown-menu-right" aria-labelledby="dropdownMenuLink">
                                        <!-- Add delete link -->
                                        <form action="{{ route('Awards.destroy', $temp->id) }}" method="POST">
                                            @csrf
                                            @method('DELETE')
                                            <button type="submit" class="dropdown-item delete-media" data-confirm="Are you sure you want to delete this media?">Delete Media</button>
                                        </form>
                                    </div>
                                </div>
                            </td>

                            </tr>
                      @endforeach

                        </tbody>
                    </table>
                    <div id="noRecordsFound" style="display: none; text-align: center;">No matching records found</div>
                </div>    
                </div>

            <!-- Footer -->
            <x-footer/>

        </div>
    </div>
    <!--  -->
    <script src="https://code.jquery.com/jquery-3.6.0.min.js"></script>
<script>
function searchTablee() {
    var input, filter, table, tr, td, i, txtValue;
    var noMatch = true; // Assume no matches initially
    input = document.querySelector("input[type='search']");
    filter = input.value.toUpperCase();
    table = document.getElementById("productsTable");
    tr = table.getElementsByTagName("tr");
    const noRecordsFound = document.getElementById("noRecordsFound");

    for (i = 1; i < tr.length; i++) { // Skip the header row
        td = tr[i].getElementsByTagName("td");
        tr[i].style.display = "none"; // Hide all rows initially

        for (var j = 0; j < td.length; j++) {
            if (td[j]) {
                txtValue = td[j].textContent || td[j].innerText;
                if (txtValue.toUpperCase().indexOf(filter) > -1) {
                    tr[i].style.display = ""; // Show the row
                    noMatch = false; // Found a match
                    break;
                }
            }
        }
    }

    // Show or hide the 'No matching records found' message based on search result
    noRecordsFound.style.display = noMatch ? "" : "none";
}
</script>
<script>
        $('table.paginatedthree').each(function () {
            var $table = $(this);
            var itemsPerPage = 10;
            var currentPage = 0;
            var pages = Math.ceil($table.find("tr:not(:has(th))").length / itemsPerPage);
            $table.bind('repaginate', function () {
              
                    var pager;
                    if ($table.next().hasClass("pager"))
                        pager = $table.next().empty(); else
                        pager = $('<div class="pager" style="padding-top: 20px; direction:ltr; " align="center"></div>');


                    $('<button class="pg-goto"> Prev </button>').bind('click', function () {
                        if (currentPage > 0)
                            currentPage--;
                        $table.trigger('repaginate');
                    }).appendTo(pager);

                    var startPager = currentPage > 2 ? currentPage - 2 : 0;
                    var endPager = startPager > 0 ? currentPage + 3 : 5;
                    if (endPager > pages) {
                        endPager = pages;
                        startPager = pages - 5; if (startPager < 0)
                            startPager = 0;
                    }

                    for (var page = startPager; page < endPager; page++) {
                        $('<button id="pg' + page + '" class="' + (page == currentPage ? 'pg-selected' : 'pg-normal') + '"></button>').text(page + 1).bind('click', {
                            newPage: page
                        }, function (event) {
                            currentPage = event.data['newPage'];
                            $table.trigger('repaginate');
                        }).appendTo(pager);
                    }

                    $('<button class="pg-goto"> Next </button>').bind('click', function () {
                        if (currentPage < pages - 1)
                            currentPage++;
                        $table.trigger('repaginate');
                    }).appendTo(pager);

                    if (!$table.next().hasClass("pager"))
                        pager.insertAfter($table);
                    //pager.insertBefore($table);

                // end $table.bind('repaginate', function () { ...

                $table.find(
                    'tbody tr:not(:has(th))').hide().slice(currentPage * itemsPerPage, (currentPage + 1) * itemsPerPage).show();
            });

            $table.trigger('repaginate');
        });
    </script>
</body>
