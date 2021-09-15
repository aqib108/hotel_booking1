
@include('master.header');
  @include('master.aside');
  <style>
  .container{
    width: 50%; 
    margin: 0;
      
}
.myicon{
  font-size: 20px;
    font-weight: bold;
    color: red;
    /* border: 1px solid; */
    position: absolute;
}
.element{
    margin-bottom: 10px;
}

.add,.remove{
    border: 1px solid black;
    padding: 2px 10px;
}

.add:hover,.remove:hover{
    cursor: pointer;
}
  
  </style>
  <!-- Content Wrapper. Contains page content -->
  <div class="content-wrapper">
    <!-- Content Header (Page header) -->
    <section class="content-header">
      <div class="container-fluid">
        <div class="row mb-2">
          <div class="col-sm-6">
            <h1>Profile</h1>
          </div>
          <div class="col-sm-6">
            <ol class="breadcrumb float-sm-right">
              <li class="breadcrumb-item"><a href="#">Home</a></li>
              <li class="breadcrumb-item active"><a href="/products">View stock-Report</a></li>
            </ol>
          </div>
        </div>
      </div><!-- /.container-fluid -->
    </section>
    
    <!-- Main content -->
    <section class="content">
      <div class="container-fluid">
        <!-- SELECT2 EXAMPLE -->
        <div class="card card-default">
          <div class="card-header">
            <h3 class="card-title">Hotel Profile</h3>

            <div class="card-tools">
              <button type="button" class="btn btn-tool" data-card-widget="collapse"><i class="fas fa-minus"></i></button>
              <button type="button" class="btn btn-tool" data-card-widget="remove"><i class="fas fa-times"></i></button>
            </div>
          </div>
          <!-- /.card-header -->
          <form id="frmregister">
          <div class="card-body">
          <h2 class="text-center">{{ $profile->name; }}</h2>
          <hr style="border-top: 5px solid rgba(0,0,0,.1);
    margin-top: 3rem;
    margin-bottom: 3rem;">
     <div class="row">
     <div class="col-md-4">
     Contact No :<b> {{$profile->phone}} </b> 
     </div>
     <div class="col-md-4">
     Email : <b> {{$profile->email}} </b> 
     </div>
     <div class="col-md-4">
     City : <b> {{$profile->city}} </b>
     </div>
     </div>
     <hr style="border-top: 5px solid rgba(0,0,0,.1);
    margin-top: 3rem;
    margin-bottom: 3rem;">
   <div class="row">
     <div class="col-md-4">
     Price Range :<b> {{$profile->Price_range}} </b> 
     </div>
     <div class="col-md-4">
     Address : <b> {{$profile->address}} </b> 
     </div>
     <div class="col-md-4">
     Status :  @if($profile->status==1)
                    <span class="badge badge-success">Active</span>
                    @else
                    <span class="badge badge-info">InActive</span>
                    @endif 
     </div>
     </div>
     <hr style="border-top: 5px solid rgba(0,0,0,.1);
    margin-top: 3rem;
    margin-bottom: 3rem;">
    <div class="row">
     <div class="col-md-6">
     <label>Profile Image</label><br>
     <img src="/uploads/hotel_profile/{{ $profile->thumbnail }}" style=" width: 200px;
    height: 180px;" /> 
     </div>
     <div class="col-md-6">
     <label>Description</label><br>
     <b> {{$profile->description}} </b> 
     </div>
    
     </div>
     <hr style="border-top: 5px solid rgba(0,0,0,.1);
    margin-top: 3rem;
    margin-bottom: 3rem;">
    <div class="row">
    <div class="col-md-6">
    </div>
     <div class="col-md-6">
     @if($profile->status==0)
     <a style="float: right;" href="{{ route('change-status',[$profile->id,'hotels','1']) }}" class="btn  btn-info p-2">Active Hotel</a>
     @else
     <a style="float: right;" href="{{ route('change-status',[$profile->id,'hotels','0']) }}" class="btn  btn-info p-2">InActive Hotel</a>
     @endif
    
     </div>
     
    
     </div>
      
        
          
          
 
          
         
         
     





        
      
      
            <!--end of 3nd row-->
          
     

            <!-- /.row -->

            </form>
              
          
             <!-- Main content -->
    
    <!-- /.content -->
    <div id="myalert" class="toasts-top-right fixed myhide"><div class="toast bg-success fade show" role="alert" aria-live="assertive" aria-atomic="true"><div class="toast-header"><strong id="title" class="mr-auto"></strong></div><div id="dbody" class="toast-body"></div></div></div>
                  
    </section>
  
  </div>
    <!-- /.content -->
    @include('master.footer');



  <script>

  //end of
///function get total price
function gettotalprice(amt)
{
 // alert(amt);
  qty=$('#qty').val();
  pprice = $('#pprice').val();
  if(qty!=0 && pprice!=0 )
  {
    dis = $('#discount').val();
    if(dis>0)
    {
      tamt = qty*pprice;
      tamt = tamt-dis;
    }
    else
    {
      tamt = qty*pprice;
    }

$('#tprice').val(tamt);
  }
}

///functio delete image
function deleteproimage(id,path)
{
//  alert(id);

  var formData = new FormData();

        formData.append('id',id);
        formData.append('path',path);
    
        $.ajax({
      type: "POST",
      url: "/deleteproimage",
      headers: {'X-CSRF-TOKEN': $('meta[name="csrf-token"]').attr('content')},
      data: formData,
      cache: false,
      contentType: false,
      processData: false,
      dataType: 'JSON',
       beforeSend:function(){
             ///   $('#btn_result').html('Creating...');
            },
      success: function(data) {
        if(data.status==200)
        {
          $('#div_'+id).hide('slow');
        }
        if(data.status==204)
        {
   alert(data.message);
        }
        
            }
      }); 
       
}

//end of delete image 
//end of get totalprice
/**********************************save************************************/

  $('#frmregister').on("submit",function(e){
      total_qty = $('#aqty').html();
     ost=$('#ostock').val();
     if(ost>parseInt(total_qty))
     {
         alert('The Required Stock is Not Avilable');
         return false;
     }
     // alert('helo');
     // return false;
  //  var v =$('#description').val();
   // alert(v);
    //return false;

 //   post_description = CKEDITOR.instances.editor1.getData();

	//		formData.append("post_description", post_description);
    e.preventDefault(); 
     var formData = new FormData();
  var other_data = $('#frmregister').serializeArray();
    $.each(other_data,function(key,input){
        formData.append(input.name,input.value);
    });
    
    $.ajax({
      type: "POST",
      url: "",
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
        $('#loader').addClass('myhide');
        if(data.status==200)
        {
          $('#title').html('SUCCESS');
          
          $('#dbody').html(data.message);

          $('#myalert').removeClass('myhide');
          setTimeout(function(){
            $('#myalert').addClass('myhide');
            location.reload();
         }, 3000);
          
        }
        if(data.status==204)
        {
          $('#title').html('ERROR');
          
          $('#dbody').html(data.message);

          $('#myalert').removeClass('myhide');
          setTimeout(function(){
            $('#myalert').addClass('myhide');
         }, 3000);
        }
        if(data.status==1000)
        {
          $('#title').html('Valdition Error');
          
         
          html = '<ul>'
          $.each(data.error, function(prefix,val){
           
           html = html+"<li>"+val[0]+"</li>";
          } );
          html = html+"</ul>";
         /// alert(html);
         
          $('#dbody').html(html);


          $('#myalert').removeClass('myhide');
          setTimeout(function(){
            $('#myalert').addClass('myhide');
         }, 3000);
        }
      
            }
      });

  //ajax end 

    });

    ////function of getsubcatgries
function getsubcatgries(cid)
{
        var formData = new FormData();

        formData.append('catgry_id',cid);
    
        $.ajax({
      type: "POST",
      url: "/getsubcatgries",
      headers: {'X-CSRF-TOKEN': $('meta[name="csrf-token"]').attr('content')},
      data: formData,
      cache: false,
      contentType: false,
      processData: false,
      dataType: 'JSON',
       beforeSend:function(){
             ///   $('#btn_result').html('Creating...');
            },
      success: function(data) {
        
        $('#sub_catgry').html(data.html);
            }
      });       
}


//end of function sub get
 
  </script>
  <script>
  $(document).ready(function(){
	localStorage.setItem("images",1);
//localstorage.setItem('images',1);
    // Add new element
    $(".add").click(function(){
        timages=localStorage.getItem("images");
		tot = parseInt(timages)+1;
		localStorage.setItem("images",tot);
		ct=localStorage.getItem("images");
		alert(ct);
        // Finding total number of elements added
        var total_element = $(".element").length;
                    
        // last <div> with element class id
        var lastid = $(".element:last").attr("id");
        var split_id = lastid.split("_");
        var nextindex = Number(split_id[1]) + 1;

        var max = 5;
        // Check total number elements
        if(total_element < max ){
            // Adding new div container after last occurance of element class
            $(".element:last").after("<div class='element' id='div_"+ nextindex +"'></div>");
                        
            // Adding element to <div>
            $("#div_" + nextindex).append("<input name='file' type='file' placeholder='Enter your skill' id='file_"+ nextindex +"'>&nbsp;<span id='remove_" + nextindex + "' class='remove'>-</span>");
                    
        }
                    
    });

    // Remove element
    $('.container').on('click','.remove',function(){
        timages=localStorage.getItem("images");
		tot = parseInt(timages)-1;
		localStorage.setItem("images",tot);
		ct=localStorage.getItem("images");
		alert(ct);        
        var id = this.id;
        var split_id = id.split("_");
        var deleteindex = split_id[1];

        // Remove <div> with id
        $("#div_" + deleteindex).remove();
    });                
});
  


  </script>