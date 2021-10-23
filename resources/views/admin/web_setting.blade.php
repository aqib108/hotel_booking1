
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
            <h1>Website Setting</h1>
            
  @if(Session::get('message'))
  <div class="alert alert-success">
  <span> {{Session::get('message')}} </span>
  </div>
  @endif
 
          </div>
          <div class="col-sm-6">
            <ol class="breadcrumb float-sm-right">
              <li class="breadcrumb-item"><a href="#">Home</a></li>
              <li class="breadcrumb-item active myhide"><a href="/products">View Products</a></li>
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
            <h3 class="card-title">Website Setting</h3>
            @if ($errors->any())
    <div class="alert alert-danger">
        <ul>
            @foreach ($errors->all() as $error)
                <li>{{ $error }}</li>
            @endforeach
        </ul>
    </div>
@endif
            <div class="card-tools">
              <button type="button" class="btn btn-tool" data-card-widget="collapse"><i class="fas fa-minus"></i></button>
              <button type="button" class="btn btn-tool" data-card-widget="remove"><i class="fas fa-times"></i></button>
            </div>
          </div>
          <!-- /.card-header -->
          <form method="post" action="{{ route('savesetting') }}" enctype="multipart/form-data" >
            @csrf
          <div class="card-body">
            <div class="row">
          
              <div class="col-md-6">
                <div class="form-group">
                  <label>Website title
                  </label>
                  <input type="text" name="title" id="title" class="form-control" value="<?php if(!empty($webset)){ echo $webset['title']; }else{
                    
                  } ?>" />
                </div>
               
              </div>
              <div class="col-md-6">
                <div class="form-group">
                  <label>Website Email
                  </label>
                  <input type="email" name="email" id="email" class="form-control" value="<?php if(!empty($webset)){ echo $webset['Email']; }else{
                    
                  } ?>" />
                </div>
               
              </div>
         
            </div>
          
        
            <div class="row">
          
          <div class="col-md-6">
            <div class="form-group">
              <label>Website Phone No
              </label>
              <input type="phone" name="phone" id="phone" class="form-control" value="<?php if(!empty($webset)){ echo $webset['phone']; }else{
                
              } ?>" />
            </div>
           
          </div>
          <div class="col-md-6">
            <div class="form-group">
              <label>Website Logo
              </label>
              <input type="file" name="logo" id="logo" class="form-control"  />
            </div>
           
          </div>
          <div class="col-md-6">
            <div class="form-group">
              <label>Address
              </label>
             <textarea name="address" id="address"  class="form-control"><?php if(!empty($webset)){ echo $webset['address']; }else{
                
            } ?></textarea>
            </div>
           
          </div>
          <div class="col-md-6">
            <div class="form-group">
              <label>Logo
              </label><br>
        
             <img src="{{ asset('uploads/logo').'/'.$webset['logo'] }}" style="width: 100px;height: 100px;" />
            </div>
           
          </div>
        </div>
    


      


        

            <!--end of 3nd row-->
            <input type="hidden" id="web_id" name="web_id" value="<?php if(!empty($webset)){ echo $webset['id']; } ?>" />
            <div class="col-md-6">
                
                
               
                <div class="form-group">
                <input class="btn btn-success" type="submit" name="btn-add" id="btn-add" />
                </div>
                <!-- /.form-group -->
              </div>

            <!-- /.row -->

            </form>
              
          
             <!-- Main content -->
    
    <!-- /.content -->
    <div id="myalert" class="toasts-top-right fixed myhide"><div class="toast bg-success fade show" role="alert" aria-live="assertive" aria-atomic="true"><div class="toast-header"><strong id="title" class="mr-auto"></strong></div><div id="dbody" class="toast-body"></div></div></div>
                  
    </section>
    <!-- /.content -->
    <!---social link-->
    <section class="content">
      <div class="container-fluid">
        <!-- SELECT2 EXAMPLE -->
        <div class="card card-default">
          <div class="card-header">
            <h3 class="card-title">Socail Link</h3>

            <div class="card-tools">
              <button type="button" class="btn btn-tool" data-card-widget="collapse"><i class="fas fa-minus"></i></button>
              <button type="button" class="btn btn-tool" data-card-widget="remove"><i class="fas fa-times"></i></button>
            </div>
          </div>
          <!-- /.card-header -->
          <form id="frmsocail" method="post" action="{{ route('save-social') }}">
     @csrf
         <div class="card-body">
            <div class="row">
          
              <div class="col-md-6">
                <div class="form-group">
                  <label>Facebook Link
                  </label>
                  <input type="text" name="facebook" id="facebook" class="form-control" value="<?php if(!empty($socaildata)){ echo $socaildata['facebook']; }else{
                    
                  } ?>" />
                </div>
               
              </div>
              <div class="col-md-6">
                <div class="form-group">
                  <label>Whatsapp Link
                  </label>
                  <input type="text" name="whatsapp" id="whatsapp" class="form-control" value="<?php if(!empty($socaildata)){ echo $socaildata['whatsapp']; }else{
                    
                  } ?>" />
                </div>
               
              </div>
         
            </div>
          
        
            <div class="row">
          
          <div class="col-md-6">
            <div class="form-group">
              <label>Instagram Link
              </label>
              <input type="text" name="instagram" id="instagram" class="form-control" value="<?php if(!empty($socaildata)){ echo $socaildata['instagram']; }else{
                
              } ?>" />
            </div>
           
          </div>
          <div class="col-md-6">
            <div class="form-group">
              <label>Twitter Link
              </label>
              <input type="text" name="twitter" id="twitter" class="form-control" value="<?php if(!empty($socaildata)){ echo $socaildata['twitter']; }else{
                
              } ?>" />
            </div>
           
          </div>
          <div class="col-md-6">
            <div class="form-group">
              <label>Youtube Link
              </label>
              <input type="text" name="youtube" id="youtube" class="form-control" value="<?php if(!empty($socaildata)){ echo $socaildata['youtube']; }else{
                
              } ?>" />
            </div>
           
          </div>
     
        </div>
    


      


        

            <!--end of 3nd row-->
            <input type="hidden" id="socail_id" name="socail_id" value="<?php if(!empty($socaildata)){ echo $socaildata['id']; } ?>" />
            <div class="col-md-6">
                
                
               
                <div class="form-group">
                <input class="btn btn-success" type="submit"  name="btn-add1" id="btn-socail" />
                </div>
                <!-- /.form-group -->
              </div>

            <!-- /.row -->

            </form>
              
          
             <!-- Main content -->
    
    <!-- /.content -->
    
                  
    </section>
    <!-- /.content -->

    <!--end of socail link-->
   
  </div>
  
  @include('master.footer');


  <script>

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

  $('#frmwebsetting').on("submit",function(e){
 alert('hi');
 return false;
    e.preventDefault(); 
     var formData = new FormData();
  var other_data = $('#frmwebsetting').serializeArray();
    $.each(other_data,function(key,input){
        formData.append(input.name,input.value);
    });
  
		   if($('#logo').val()!='')
      {

        formData.append("logo", document.getElementById('logo').files[0]);
        
      } 
		
    $.ajax({
      type: "POST",
      url: "{{ route('savesetting') }}",
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
          console.log(data);
        $('#loader').addClass('myhide');
        if(data.status==200)
        {
          $('#title').html('SUCCESS');
          
          $('#dbody').html(data.message);

          $('#myalert').removeClass('myhide');
          setTimeout(function(){
            $('#myalert').addClass('myhide');
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
////add socail links

function save_socail{
 
// e.preventDefault(); 
  var formData = new FormData();
var other_data = $('#frmsocail').serializeArray();
 $.each(other_data,function(key,input){
     formData.append(input.name,input.value);
 });

        
     
 $.ajax({
   type: "POST",
   url: "{{ route('save-social') }}", 
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
       console.log(data);
     $('#loader').addClass('myhide');
     if(data.status==200)
     {
       $('#title').html('SUCCESS');
       
       $('#dbody').html(data.message);

       $('#myalert').removeClass('myhide');
       setTimeout(function(){
         $('#myalert').addClass('myhide');
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

//end of socail links


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