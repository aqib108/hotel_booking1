@include('master.header');
  @include('master.aside');

  <!-- Content Wrapper. Contains page content -->
  <div class="content-wrapper">
    <!-- Content Header (Page header) -->
    <section class="content-header">
      <div class="container-fluid">
        <div class="row mb-2">
          <div class="col-sm-6">
            <h1>Register Hotel</h1>
            <?php ///print_r(getsupplier()); ?>
          </div>
          <div class="col-sm-6">
            <ol class="breadcrumb float-sm-right">
              <li class="breadcrumb-item"><a href="#">Home</a></li>
              <li class="breadcrumb-item active"><a href="/saveproducts">Live View</a></li>
            </ol>
          </div>
        </div>
      </div><!-- /.container-fluid -->
    </section>
    <div>
    <button onclick="addsuppliermodal()" style="    margin-left: 18px;
    margin-bottom: 10px; display: none" class="btn btn-info">Add Catgry</button>
    <?php
//print_r($data);
    ?>
    </div>
    
    <!-- Main content -->
  
            <div class="card">
            
              <div class="card-header">
                <h3 class="card-title">Register Hotels</h3>
              </div>
              <!-- /.card-header -->
              <div class="card-body ">
              <div class="table-responsive">
                <table id="protable" class="table table-bordered table-striped">
                  <thead>
                  <tr>
                    <th>#</th>
                    <th>Name</th>
                    <th>Email</th>
                    <th>Phone</th>
                    <th>Status</th>
                    <th>Address</th>
                    <th>Images</th>
                    <th>Register is</th>
                    <th>Created At</th>
                    <th>Action</th>
                  </tr>
                  </thead>
                  <tbody>
                  
                  <?php
                  $i=1;
                  foreach($data as $sp )
                  {
                      ?>
                  <tr id="<?php echo "s_".$sp->id; ?>" >
                    <td><?php echo $i; ?></td>
                    <td><?php echo $sp->name; ?></td>
                    <td><?php echo $sp->email; ?></td>
                    <td><?php echo $sp->phone; ?></td>
                    <td>
                    @if($sp->status==1)
                    <span class="badge badge-success">Active</span>
                    @else
                    <span class="badge badge-success">InActive</span>
                    @endif
                    </td>
                    <td><?php echo $sp->address; ?> </td>
                    <td><img src="<?php echo 'images/uploads/users/'.$sp->image ?>" style="border-radius: 50%;
    height: 50px;
    width: 58px;"     /></td>
                    <td><?php echo 'hotel'; ?>
                    
                    <td><?php echo $sp->created_at; ?></td>
                    


                
                    
                    <td>
                  @if(checkhotelprofile($sp->id))
                  
                    <a href="{{ route('hotel-profile',[$sp->id]) }}" class="btn btn-xs btn-info p-2">Vist Profile</a>
                  
                  @endif
                  @if($sp->status==1)
        
<a href="{{ route('change-status',[$sp->id,'users','0']) }}" class="btn btn-xs btn-danger">InActive</a>
                  
                  @else
                  
                    <a href="{{ route('change-status',[$sp->id,'users','1']) }}"  class="btn btn-xs btn-success">Active</a>
                  
                  @endif
                    </td>
                  </tr>

                      <?php
                      $i++;
                  }
                  ?>
                  
                 
                 
                  
                  </tbody>
                 
                </table>
              </div>
              </div>
              <!-- /.card-body -->
            </div>
            <!-- /.card -->
          </div>
          <!-- /.col -->
        </div>
        <!-- /.row -->
      </div>
      <!-- /.container-fluid -->
    </section>
    <!-- /.content -->
  </div>
  <div class="modal fade" id="suppliermodal">
        <div class="modal-dialog">
          <div class="modal-content">
            <div class="modal-header">
              <h4 class="modal-title" id="modaltitle" ></h4>
              <button type="button" class="close" data-dismiss="modal" aria-label="Close">
                <span aria-hidden="true">&times;</span>
              </button>
            </div>
            <div class="modal-body">
            <div id="info" class="alert alert-danger myhide"></div>
            <form id="addsupplier">
            <?php
     //  $catgries = getcatgries();
       ///print_r($catgries);
            ?>
           
            <input type="hidden" id="subcat_id" name="subcat_id" />
            <label>Catgry Name</label>
              <input type="text" class="form-control" name="subcat_name" id="subcat_name" />
              
        
              
            </div>
            <div class="modal-footer justify-content-between">
              <button type="button" class="btn btn-default" data-dismiss="modal">Close</button>
              <button id="btnadd" class="btn btn-primary" type="submit" >
  <span  id="btnloader" class="" role="status" aria-hidden="true"></span>
  save changes
</button>
            </div>
          </div>
          </form>
          <!-- /.modal-content -->
        </div>
        <!-- /.modal-dialog -->
      </div>
      <!-- /.modal -->

    <!--view supplier modal --->
    <div class="modal fade" id="viewsuppliermodal">
        <div class="modal-dialog">
          <div class="modal-content">
            <div class="modal-header">
              <h4 class="modal-title" id="modaltitle" >Product Supplier</h4>
              <button type="button" class="close" data-dismiss="modal" aria-label="Close">
                <span aria-hidden="true">&times;</span>
              </button>
            </div>
            <div class="modal-body">
            <h4 id="sname"></h4>
            <h4 id="saddress"></h4>
          <!-- /.modal-content -->
        </div>
        <!-- /.modal-dialog -->
      </div>
        </div>
    </div>
      <!-- /.modal -->

    <!--end of view supplier modal-->  

  @include('master.footer');
  <script>
  
  function addsuppliermodal()
  {
    $('#addsupplier').trigger("reset"); 
    $('#subcat_id').val(''); 
     $('#modaltitle').html('Add New Subcatgry');
     $('#suppliermodal').modal('show');
  }
  </script>
  <script>
  /**********************************save************************************/

  $('#addsupplier').on("submit",function(e){
    
  ///  alert('hello');
    //return false;
    e.preventDefault(); 
     var formData = new FormData();
  var other_data = $('#addsupplier').serializeArray();
    $.each(other_data,function(key,input){
        formData.append(input.name,input.value);
    });
    /* if($('#image').val()!='')
      {
        formData.append("file", document.getElementById('image').files[0]);        
      } */
    $.ajax({
      type: "POST",
      url: "/addsubcatgry",
      headers: {'X-CSRF-TOKEN': $('meta[name="csrf-token"]').attr('content')},
      data: formData,
      cache: false,
      contentType: false,
      processData: false,
      dataType: 'JSON',
       beforeSend:function(){
            $('#btnloader').addClass('spinner-border spinner-border-sm');
            $('#btnadd').attr('disabled',true);
            },
      success: function(data) {
        $('#btnloader').removeClass('spinner-border spinner-border-sm');
        $('#btnadd').attr('disabled',false);
        $('#info').removeClass('myhide');
        if(data.status==200)
        {
          
          
          $('#info').html(data.message);

          
          setTimeout(function(){
            $('#info').addClass('myhide');
         }, 3000);
          
        }
        if(data.status==204)
        {
            $('#info').html(data.message);

          
setTimeout(function(){
  $('#info').addClass('myhide');
}, 3000);
        }
        if(data.status==1000)
        {
          
          
         
          html = '<ul>'
          $.each(data.error, function(prefix,val){
           
           html = html+"<li>"+val[0]+"</li>";
          } );
          html = html+"</ul>";
         /// alert(html);
         
          $('#info').html(html);


          setTimeout(function(){
  $('#info').addClass('myhide');
}, 3000);
        }
      
            }
      });

  //ajax end 

    });
  ///edit data
function editdata(id)
{
  var formData = new FormData();
  
        formData.append('id',id);
   
  $.ajax({
      type: "POST",
      url: '/editsubcatgry',
      headers: {'X-CSRF-TOKEN': $('meta[name="csrf-token"]').attr('content')},
      data: formData,
      cache: false,
      contentType: false,
      processData: false,
      dataType: 'JSON',
       beforeSend:function(){
            $('#loader').removeClass('myhide');
       },
      success: function(data) {
      //  alert(data.catgryname);
        $('#loader').addClass('myhide');
        if(data.status==200)
        {
         // alert(data.data[0]['id']);
          $('#modaltitle').html('update Catgry');
          $('#subcat_id').val(data.data[0]['id']);
          $('#subcat_name').val(data.data[0]['name']);
          $("#catgry_id option[value='"+data.data[0]['catgry_id']+"']").remove();
$("#catgry_id").append('<option value='+data.data[0]['catgry_id']+' selected="selected" >'+data.catgryname+'</option>');
     $('#suppliermodal').modal('show');
          ///alert(data.data[0]['name']);
          //  $('#s_'+id).hide('slow');      
        }
        if(data.status==204)
        {
          swal("Unable to delete!");
        }
      
            }
      });
}
  //end of edit
  </script>
   <script>
 $('#protable').DataTable({
        
        dom: 'Bfrtip',
        buttons: [
          { "extend": 'copy', "text":'Copy',"className": 'btn btn-info btn-xs' },
          { "extend": 'csv', "text":'Csv',"className": 'btn btn-info btn-xs' },
          { "extend": 'excel', "text":'Excel Export',"className": 'btn btn-info btn-xs' },
          { "extend": 'pdf', "text":'PDF',"className": 'btn btn-info btn-xs' },
          { "extend": 'print', "text":'Print',"className": 'btn btn-info btn-xs ' },
            
        ]
    });
    
  // Fancybox Config
$('[data-fancybox="gallery"]').fancybox({
  buttons: [
    "slideShow",
    "thumbs",
    "zoom",
    "fullScreen",
    "share",
    "close"
  ],
  loop: false,
  protect: true
});

</script>

<!--view supplier on modal-->
<script>
function viewsuppliermodaldata(name,address)
{
  $('#sname').html('Name :'+name);
  $('#saddress').html('Address :'+address);
  $('#viewsuppliermodal').modal('show');
}

</script>