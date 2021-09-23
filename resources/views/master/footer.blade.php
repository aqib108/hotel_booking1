 <!-- /.content-wrapper -->
 
 <footer class="main-footer">
    <strong>Copyright &copy; 2021 <?php /// echo Config::get('constants.App_year');  ?> <a href="<?php echo Config::get('constants.App_url');  ?>"><?php echo Config::get('constants.App_name');  ?></a>.</strong>
    All rights reserved.
    <div class="float-right d-none d-sm-inline-block">
      <b>Version</b> 1.0 <?php // echo Config::get('constants.App_version');  ?>
    </div>
  </footer>

  <!-- Control Sidebar -->
  <aside class="control-sidebar control-sidebar-dark">
    <!-- Control sidebar content goes here -->
  </aside>
  <!-- /.control-sidebar -->
</div>
<!-- ./wrapper -->

<!-- jQuery -->

<script src="{{ asset('aassest/js/plugins/jquery/jquery.min.js')}}"></script>
<!-- jQuery UI 1.11.4 -->

<script src="{{ asset('aassest/js/plugins/jquery-ui/jquery-ui.min.js')}}"></script>
<!-- Resolve conflict in jQuery UI tooltip with Bootstrap tooltip -->
<script>
  $.widget.bridge('uibutton', $.ui.button)
</script>
<!-- Bootstrap 4 -->
<script src="{{ asset('aassest/js/plugins/bootstrap/js/bootstrap.bundle.min.js')}}"></script>
<!-- ChartJS -->

<script src="{{ asset('aassest/js/plugins/chart.js/Chart.min.js')}}"></script>
<!-- Sparkline -->

<script src="{{ asset('aassest/js/plugins/sparklines/sparkline.js')}}"></script>
<!-- JQVMap -->

<script src="{{ asset('aassest/js/plugins/jqvmap/jquery.vmap.min.js')}}"></script>
<script src="{{ asset('aassest/js/plugins/jqvmap/maps/jquery.vmap.usa.js')}}"></script>
<!-- jQuery Knob Chart -->

<script src="{{ asset('aassest/js/plugins/jquery-knob/jquery.knob.min.js')}}"></script>
<!-- daterangepicker -->

<script src="{{ asset('aassest/js/plugins/moment/moment.min.js')}}"></script>

<script src="{{ asset('aassest/js/plugins/daterangepicker/daterangepicker.js')}}"></script>
<!-- Tempusdominus Bootstrap 4 -->

<script src="{{ asset('aassest/js/plugins/tempusdominus-bootstrap-4/js/tempusdominus-bootstrap-4.min.js')}}"></script>
<!-- Summernote -->

<script src="{{ asset('aassest/js/plugins/summernote/summernote-bs4.min.js')}}"></script>

<!-- overlayScrollbars -->
<script src="{{ asset('aassest/js/plugins/overlayScrollbars/js/jquery.overlayScrollbars.min.js')}}"></script>

<!-- AdminLTE App -->
<script src="{{ asset('aassest/js/dist/js/adminlte.js')}}"></script>

<!-- AdminLTE dashboard demo (This is only for demo purposes) -->
<script src="{{ asset('aassest/js/dist/js/pages/dashboard.js')}}"></script>

<script src="{{ asset('aassest/js/plugins/datatables-bs4/js/dataTables.bootstrap4.min.js')}}"></script>

<script src="{{ asset('js/plugins/datatables-bs4/js/dataTables.bootstrap4.min.js')}}"></script>

<script src="{{ asset('aassest/js/plugins/datatables-responsive/js/dataTables.responsive.min.js')}}"></script>

<script src="{{ asset('aassest/js/plugins/datatables-responsive/js/responsive.bootstrap4.min.js')}}"></script>
<!--for buttons of datatables-->




<script src="https://cdn.datatables.net/1.10.24/js/jquery.dataTables.min.js" ></script>



<script src="https://cdn.datatables.net/1.10.24/js/jquery.dataTables.min.js"></script>
<script src="https://cdn.datatables.net/1.10.24/js/dataTables.bootstrap4.min.js"></script>
<script src="https://cdn.datatables.net/buttons/1.7.0/js/dataTables.buttons.min.js"></script>
<script src="https://cdnjs.cloudflare.com/ajax/libs/jszip/3.1.3/jszip.min.js"></script>
<script src="https://cdnjs.cloudflare.com/ajax/libs/pdfmake/0.1.53/pdfmake.min.js"></script>
<script src="https://cdnjs.cloudflare.com/ajax/libs/pdfmake/0.1.53/vfs_fonts.js"></script>
<script src="https://cdn.datatables.net/buttons/1.7.0/js/buttons.html5.min.js"></script>

<script src="https://cdn.datatables.net/buttons/1.7.0/js/dataTables.buttons.min.js"></script>
<script src="https://cdn.datatables.net/buttons/1.7.0/js/buttons.print.min.js"></script>
<script src="https://cdn.datatables.net/buttons/1.7.0/js/buttons.colVis.min.js"></script>


<!--end of table-->
<!--for fancybox-->
<script src="https://cdnjs.cloudflare.com/ajax/libs/fancybox/3.5.7/jquery.fancybox.min.js" integrity="sha512-uURl+ZXMBrF4AwGaWmEetzrd+J5/8NRkWAvJx5sbPSSuOb0bZLqf+tOzniObO00BjHa/dD7gub9oCGMLPQHtQA==" crossorigin="anonymous"></script>
<script src="https://cdnjs.cloudflare.com/ajax/libs/fancybox/3.5.7/jquery.fancybox.js" integrity="sha512-j7/1CJweOskkQiS5RD9W8zhEG9D9vpgByNGxPIqkO5KrXrwyDAroM9aQ9w8J7oRqwxGyz429hPVk/zR6IOMtSA==" crossorigin="anonymous"></script>
<!--end of fancybox-->

<!-- AdminLTE for demo purposes -->
<script src="https://unpkg.com/sweetalert/dist/sweetalert.min.js"></script>
<script src="https://cdn.jsdelivr.net/gh/gitbrent/bootstrap4-toggle@3.6.1/js/bootstrap4-toggle.min.js"></script>
<script src="{{ asset('aassest/multi/js/index.js')}}"></script>
<script src="aassest/js/dist/js/demo.js"></script>
</body>
</html>
<script>
  $(function () {
    $("#example1").DataTable({
      "responsive": true,
      "autoWidth": false,
    });
    $('#example2').DataTable({
      "paging": true,
      "lengthChange": false,
      "searching": false,
      "ordering": true,
      "info": true,
      "autoWidth": false,
      "responsive": true,
    });
  });
///delete data function
  
  function deletedata(id,url)
  {
   
///sweetalert
var formData = new FormData();
     formData.append('id',id);
    
swal({
  title: "Are you sure?",
  text: "Once deleted, you will not be able to recover this imaginary file!",
  icon: "warning",
  buttons: true,
  dangerMode: true,
})
.then((willDelete) => {
  if (willDelete) {
    ///start ajaxcode
    $.ajax({
      type: "POST",
      url: url,
      headers: {'X-CSRF-TOKEN': $('meta[name="csrf-token"]').attr('content')},
      data: formData,
      cache: false,
      contentType: false,
      processData: false,
      dataType: 'JSON',
       beforeSend:function(){
            $('#btnloader').addClass('spinner-border spinner-border-sm');
       },
      success: function(data) {
      
        if(data.status==200)
        {
            $('#s_'+id).hide('slow');      
        }
        if(data.status==204)
        {
          swal("Unable to delete!");
        }
      
            }
      });

  //ajax end

    ///end of ajaxcode

  } else {
  ///  swal("Your imaginary file is safe!");
  }
});
//end of sweetalert
  
 /// return false;
   
    

    }
  


//end of delete function
$(document).ready(function() {

		$('#overlay').fadeIn().delay(2000).fadeOut();
	
});
function activeclass(id)
{
///  alert(id);
$(document).removeClass('active');
$('#'+id).addClass('active');
}
</script>
