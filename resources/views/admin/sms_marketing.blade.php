
@include('master.header');
  @include('master.aside');
  <link rel="stylesheet" href="{{ asset('aassest/multi/css/style.css')}}">
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

            <div class="card-tools">
              <button type="button" class="btn btn-tool" data-card-widget="collapse"><i class="fas fa-minus"></i></button>
              <button type="button" class="btn btn-tool" data-card-widget="remove"><i class="fas fa-times"></i></button>
            </div>
          </div>
          <!-- /.card-header -->
          <form id="frmwebsetting">
          <div class="card-body">
           
          
        
          <div class="row">
          <div class="col-md-12">
          <input type="checkbox" id="checkAll"  /><span>Check All</span>
          </div>
          @foreach($data as $d)
         <div class="col-md-4">
         <input type="checkbox" name="phone[]" value="{{ $d->phone }}" /><span>{{$d->name}}</span>
         </div>
          @endforeach

          </div>
          <div class="row">
          <div class="col-md-12">
            <div class="form-group">
              <label>Message
              </label>
             <textarea name="address" id="address"  class="form-control"><?php if(!empty($webset)){ echo $webset['address']; }else{
                
            } ?></textarea>
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
   
   
  </div>
  
  @include('master.footer');


  
