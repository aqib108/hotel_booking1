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
                    <h3>Booking</h3>
                      <hr>
                      <div class="row">
                        <div class="col-12 col-md-8 d-flex">
                          <div class="hotel__intro hotel-card w-100">
                             
                              <table id="example" class="table table-striped table-bordered" style="width:100%">
  <thead>
    <tr>
      <th scope="col">#</th>
      <th scope="col">Name</th>
      <th scope="col">Phone</th>
      <th scope="col">Cnic</th>
      <th scope="col">Address</th>
      <th scope="col">Room Title</th>
      <th scope="col">Room Type</th>
      <th scope="col">From Date</th>
      <th scope="col">To Date</th>
      <th scope="col">Status</th>
      <th scope="col">Action</th>
    </tr>
  </thead>
  <tbody>
  <?php $i=1; ?>
@foreach($booking as $bk)
    <tr>
      <th scope="row">{{ $i++ }}</th>
      <td>{{ $bk->name }}</td>
      <td>{{ $bk->phone }}</td>
      <td>{{ $bk->cnic }}</td>
      <td>{{ $bk->address }}</td>
      <td>{{ $bk->room_title }}</td>
      <td>{{ $bk->room_type }}</td>
      <td>{{ $bk->from_date }}</td>
      <td>{{ $bk->to_date }}</td>
      <td>
      @if($bk->status==0)
      <span class="badge badge-primary">Pending</span>
      @elseif($bk->status==1)
      <span class="badge badge-secondary">Approved</span>
      @elseif($bk->status==2)
      <span class="badge badge-info">On Going</span>
      @elseif($bk->status==3)
      <span class="badge badge-dark">Compeleted</span>
      @elseif($bk->status==4)
      <span class="badge badge-warning">Cancel</span>
      @else
      <span class="badge badge-dark">Compeleted</span>
      @endif
      </td>
      <td>
      <ul style="display: flex;">
          <!-- <li style="    margin-right: 10px;">
          <button class="btn-xs btn-outline" style="cursor: pointer;"><i class="fa fa-trash"></i></button>
          </li> -->
          <li>
              <?php
      $status = array(
          0=>'Pending',
          1=>'Approved',
          2=>'On Going',
          3=>'Compeleted',
          4=>'Cancel'
    
          )
              ?>
          <select onchange="change_booking_status(this.value,{{$bk->id}})" style="border: none;" claas="form-control">
          @foreach($status as $key=>$value)
          @if($bk->status==$key)
          <option selected value="{{$key}}">{{ $value }}</option>
          @else
          <option  value="{{$key}}">{{ $value }}</option>
          @endif
          @endforeach
          </select>
          </li>
      </ul>
     
      
    
    </td>
    </tr>
@endforeach
  </tbody>
</table>
      </div>
                            
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