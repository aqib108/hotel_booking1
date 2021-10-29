@extends('layouts.app')

@section('mainContent')
<style>
 .nav-link.active{
     background-color: #003580 !important;
 }
 .filelabel{
    padding: 10px;
    background-color: #003580 !important;
    color: #fff;
     }



input[type="file"] {
    display: none;
}
 </style>  
<div class="page-content">
        <div class="container">
          <div class="row">
           
            <div class="col-lg-12 pt-5" id="barba-wrapper">
              <div class="barba-container">
                <nav class="hotel-nav">
                  <ul class="hotel-nav__menu nav nav-tabs" role="tablist">
                    <li class="nav-item d-flex col-12 col-sm p-0"><a class="nav-link active" data-toggle="tab" href="#profile" role="tab" aria-controls="profile" aria-selected="false"><span>Profile</span></a>
                    </li>
                    <li class="nav-item d-flex col-12 col-sm p-0"><a class="nav-link" data-toggle="tab" href="#updatepassword" role="tab" aria-controls="updatepassword" aria-selected="true"><span>Update Password</span></a>
                    </li>
                    <!-- <li class="nav-item d-flex col-12 col-sm p-0"><a class="nav-link" data-toggle="tab" href="#hotelAccommodation" role="tab" aria-controls="hotelAccommodation" aria-selected="true"><span>Accommodation conditions</span></a>
                    </li>
                    <li class="nav-item d-flex col-12 col-sm p-0"><a class="nav-link" data-toggle="tab" href="#hotelReviews" role="tab" aria-controls="hotelReviews" aria-selected="true"><span>Guest reviews</span></a> -->
                    </li>
                  </ul>
                </nav>
                <div class="tab-content">
                  <div class="tab-pane active show" id="profile" role="tabpanel">
                    <section>
                    <h3>Update Profile</h3>
                      <hr>
                      <div class="row">
                        <div class="col-12 col-md-8 d-flex">
                          <div class="hotel__intro hotel-card w-100">
                              <div class="text-center">
                   <img src="images/uploads/users/{{$data->image}}" id="pimage"  style="    height: 200px;
    width: 224px;
    border-radius: 50%;" />
  <br>
  <label  class="filelabel mt-3">Update Image
    <input type="file" size="60" id="fileupload" >
    </label> 
                              </div>
                          <form method="post" action="{{ route('update-profile-data') }}" enctype="multipart/form-data" >
                                        @csrf
                                       
                                            <div class="form-group">
                                          <label>Name</label>
                                            <input type="text" class="form-control" value="{{$data->name ?? ''}}" name="name" required id="name"  />
                                            
                                            </div>
                                            <div class="form-group">
                                          <label>phone</label>
                                            <input type="text" class="form-control" value="{{$data->phone ?? ''}}" name="phone" required id="phone"  />
                                            
                                            </div>
                                            
                                           
                                            <div class="form-group">
                                          <label>Address</label>
                                            <input type="text" class="form-control" name="address" value="{{$data->address ?? ''}}" required id="address"  />
                                            
                                            </div>
                                            
                                       
  
  
  
  
  
                                        <input type="submit" id="btnsubmit" class="mbtn" style="cursor: pointer;" name="btnsubmit" value="Submit" />
                                        </form> 
                            
                          </div>
                        </div>
                        
                      </div>
                   
                     
                    </section>
                  </div>
                  <div class="tab-pane" id="updatepassword" role="tabpanel">
                 
                    <section>
                     <h3>Update Password</h3>
                      <hr>
                      <div class="row">
                        <div class="col-12 col-md-8 d-flex">
                          <div class="hotel__intro hotel-card w-100">
                          <form method="post" action="{{ route('update-profile-password') }}" enctype="multipart/form-data" >
                                        @csrf
                                       
                                            <div class="form-group">
                                          <label>Password</label>
                                            <input type="password" class="form-control" name="password" required id="password"  />
                                            
                                            </div>
                                           
                                            
                                            <div class="form-group">
                                          <label>Confirm Password </label>
                                               <input type="password" class="form-control" name="confirmed" required id="confirm_password"  />
                                            </div>
                                           
                                        
                                            
                                       
  
  
  
  
  
                                        <input type="submit" id="btnsubmit" class="mbtn" style="cursor: pointer;" name="btnsubmit" value="Submit" />
                                        </form> 
                            
                          </div>
                        </div>
                        
                      </div>
                   
                     
                    </section>
                
                  </div>
                  
                
                </div>
              </div>
            </div>
          </div>
        </div>
        <button class="btn btn-primary btn-nav btn-nav--up js-scroll-up" type="button"><i class="fa fa-angle-up"></i></button>
      </div>
@endsection

@section('customJs')

    <script>
        /***
         * This code is for multiple images upload gallery
         * */


        $(function () {
            $("#fileupload").change(function () {
              updateimage();  
               
            });
        });
        /***
         * END Of multiple images gallery
         * */

    </script>



    <script>
        
    

    //delete image


    //end of delete image
    function updateimage()
    {
      
          ///sweetalert
var formData = new FormData();

if($('#fileupload').val()!='')
      {
        formData.append("file", document.getElementById('fileupload').files[0]);
        
      } 
      else
      {
          swal('Please Select Image');
          return false;
      } 
    
swal({
  title: "Are you sure?",
  text: "Profile Image, Update Profile Image ",
  icon: "warning",
  buttons: true,
  dangerMode: true,
})
.then((willDelete) => {
  if (willDelete) {
    ///start ajaxcode
    $.ajax({
      type: "POST",
      url: "{{ route('update-profile-image') }}",
      headers: {'X-CSRF-TOKEN': $('meta[name="csrf-token"]').attr('content')},
      data: formData,
      cache: false,
      contentType: false,
      processData: false,
      dataType: 'JSON',
       beforeSend:function(){
            
       },
      success: function(data) {
      
        if(data.status==200)
        {

          $('#pimage').attr('src',data.image_src);  
          swal('successfully Update');    
        }
        if(data.status==204)
        {
          swal(data.message);
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
  
    }

   
    </script>

@endsection