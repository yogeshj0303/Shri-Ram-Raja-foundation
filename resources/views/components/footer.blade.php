<style>
.copyright p { color: #333 !important;}
    footer{ width:100%;}
    @media screen and (max-width:768px){
         footer{
        width: 100% !important;}
    }
</style>
      <footer class="footer mx-auto">
            <div class="copyright bg-white">
              <p style="text-align:center;">
                &copy; <span id="copy-year"></span> Copyright <a class="text-primary" href="http://www.acttconnect.com/" target="_blank" > Act T Connect</a> All rights reserved.
              </p>
            </div>
            <script>
                var d = new Date();
                var year = d.getFullYear();
                document.getElementById("copy-year").innerHTML = year;
            </script>
          </footer>
          
          

    
                    <script src="{{asset('plugins/jquery/jquery.min.js')}}"></script>
                    <script src="{{asset('plugins/bootstrap/js/bootstrap.bundle.min.js')}}"></script>
                    <script src="{{asset('plugins/simplebar/simplebar.min.js')}}"></script>
                    <script src="https://unpkg.com/hotkeys-js/dist/hotkeys.min.js"></script>

                    
                    
                    <script src="{{asset('plugins/apexcharts/apexcharts.js')}}"></script>
                    
                    
                    
                    <script src="{{asset('plugins/DataTables/DataTables-1.10.18/js/jquery.dataTables.min.js')}}"></script>
                    
                    
                    
                    <script src="{{asset('plugins/jvectormap/jquery-jvectormap-2.0.3.min.js')}}"></script>
                    <script src="{{asset('plugins/jvectormap/jquery-jvectormap-world-mill.js')}}"></script>
                    <script src="{{asset('plugins/jvectormap/jquery-jvectormap-us-aea.js')}}"></script>
                    
                    
                    
                    <script src="{{asset('plugins/daterangepicker/moment.min.js')}}"></script>
                    <script src="{{asset('plugins/daterangepicker/daterangepicker.js')}}"></script>
                    <script>
                      jQuery(document).ready(function() {
                        jQuery('input[name="dateRange"]').daterangepicker({
                        autoUpdateInput: false,
                        singleDatePicker: true,
                        locale: {
                          cancelLabel: 'Clear'
                        }
                      });
                        jQuery('input[name="dateRange"]').on('apply.daterangepicker', function (ev, picker) {
                          jQuery(this).val(picker.startDate.format('MM/DD/YYYY'));
                        });
                        jQuery('input[name="dateRange"]').on('cancel.daterangepicker', function (ev, picker) {
                          jQuery(this).val('');
                        });
                      });
                    </script>
                    
                    
                    
                    <script src="https://cdn.quilljs.com/1.3.6/quill.js"></script>
                    
                    
                    
                    <script src="{{asset('plugins/toaster/toastr.min.js')}}"></script>

                    
                    
                    <script src="{{asset('js/mono.js')}}"></script>
                    <script src="{{asset('js/chart.js')}}"></script>
                    <script src="{{asset('js/map.js')}}"></script>
                    <script src="{{asset('js/custom.js')}}"></script>

                    