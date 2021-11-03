


<!-- This snippet uses Font Awesome 5 Free as a dependency. You can download it at fontawesome.io! -->
<html>
<head>
<meta name="csrf-token" content="{{ csrf_token() }}" /> 
    <meta charset="utf-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="description" content="Looking for something amazing?">
    <meta name="viewport" content="width=device-width, initial-scale=1.0, user-scalable=no">
    <meta name="HandheldFriendly" content="True">
    <title>Pakistani Booking</title>
    <!-- Edge and IE-->
    <meta name="msapplication-tap-highlight" content="no">
    <!-- Add to homescreen for Chrome on Android-->
    <meta name="mobile-web-app-capable" content="yes">
    <meta name="application-name" content="Looking for something amazing?">
    <link rel="icon" sizes="192x192" href="{{ asset('images/touch/chrome-touch-icon-192x192.png') }}">
    <!-- Add to homescreen for Safari on iOS-->
    <meta name="apple-mobile-web-app-capable" content="yes">
    <meta name="apple-mobile-web-app-status-bar-style" content="black">
    <meta name="apple-mobile-web-app-title" content="Your Travel World">
    <link rel="apple-touch-icon" href="img/touch/apple-touch-icon.png">
    <!-- Google Fonts-->
    <link href="https://fonts.googleapis.com/css?family=Open+Sans:400,400i,500,600,700%7CPoppins:400,500,600,700" rel="stylesheet">
    <link rel="stylesheet" href="{{ asset('css/jquery-ui.structure.min.css ') }}">
    <link rel="stylesheet" href="{{ asset('css/jquery-ui.theme.min.css') }}">
    <link rel="stylesheet" href="{{ asset('css/bootstrap.min.css') }}">
    <link id="cssRtl" rel="stylesheet" href="#">
    <link rel="stylesheet" href="{{ asset('css/flatpickr.min.css') }}">
    <link rel="stylesheet" href="{{ asset('css/font-awesome-4.7.0/font-awesome.min.css') }}">
    <link rel="stylesheet" href="{{ asset('css/fontawesome-stars-o.css') }}">
    <link rel="stylesheet" href="{{ asset('css/swiper.min.css') }}">
    <link rel="stylesheet" href="{{ asset('css/jquery.mCustomScrollbar.min.css') }}">
    <link rel="stylesheet" href="{{ asset('css/select2.min.css') }}">
    <link rel="stylesheet" href="{{ asset('css/nouislider.min.css') }}">
    <link rel="stylesheet" href="{{ asset('css/blueimp-gallery.min.css') }}">
    <link rel="stylesheet" href="{{ asset('css/style.min.css') }}">
    <link id="cssTheme" rel="stylesheet" href="{{ asset('css/skins/style-default.css') }}">
    <link rel="stylesheet" href="{{ asset('css/custom.css') }}">
    <link rel="stylesheet" href="https://pro.fontawesome.com/releases/v5.10.0/css/all.css" integrity="sha384-AYmEC3Yw5cVb3ZcuHtOA93w35dYTsvhLPVnYs9eStHfGJvOvKxVfELGroGkvsg+p" crossorigin="anonymous"/>
<style>
.myhide{
display: none;
}
/* Absolute Center Spinner */
.loading {
  position: fixed;
  z-index: 999;
  height: 2em;
  width: 2em;
  overflow: visible;
  margin: auto;
  top: 0;
  left: 0;
  bottom: 0;
  right: 0;
}
.myalertmsg{
  color: red;
}
/* Transparent Overlay */
.loading:before {
  content: '';
  display: block;
  position: fixed;
  top: 0;
  left: 0;
  width: 100%;
  height: 100%;
  background-color: rgba(0,0,0,0.3);
}

/* :not(:required) hides these rules from IE9 and below */
.loading:not(:required) {
  /* hide "loading..." text */
  font: 0/0 a;
  color: transparent;
  text-shadow: none;
  background-color: transparent;
  border: 0;
}

.loading:not(:required):after {
  content: '';
  display: block;
  font-size: 10px;
  width: 1em;
  height: 1em;
  margin-top: -0.5em;
  -webkit-animation: spinner 1500ms infinite linear;
  -moz-animation: spinner 1500ms infinite linear;
  -ms-animation: spinner 1500ms infinite linear;
  -o-animation: spinner 1500ms infinite linear;
  animation: spinner 1500ms infinite linear;
  border-radius: 0.5em;
  -webkit-box-shadow: rgba(0, 0, 0, 0.75) 1.5em 0 0 0, rgba(0, 0, 0, 0.75) 1.1em 1.1em 0 0, rgba(0, 0, 0, 0.75) 0 1.5em 0 0, rgba(0, 0, 0, 0.75) -1.1em 1.1em 0 0, rgba(0, 0, 0, 0.5) -1.5em 0 0 0, rgba(0, 0, 0, 0.5) -1.1em -1.1em 0 0, rgba(0, 0, 0, 0.75) 0 -1.5em 0 0, rgba(0, 0, 0, 0.75) 1.1em -1.1em 0 0;
  box-shadow: rgba(0, 0, 0, 0.75) 1.5em 0 0 0, rgba(0, 0, 0, 0.75) 1.1em 1.1em 0 0, rgba(0, 0, 0, 0.75) 0 1.5em 0 0, rgba(0, 0, 0, 0.75) -1.1em 1.1em 0 0, rgba(0, 0, 0, 0.75) -1.5em 0 0 0, rgba(0, 0, 0, 0.75) -1.1em -1.1em 0 0, rgba(0, 0, 0, 0.75) 0 -1.5em 0 0, rgba(0, 0, 0, 0.75) 1.1em -1.1em 0 0;
}

/* Animation */

@-webkit-keyframes spinner {
  0% {
    -webkit-transform: rotate(0deg);
    -moz-transform: rotate(0deg);
    -ms-transform: rotate(0deg);
    -o-transform: rotate(0deg);
    transform: rotate(0deg);
  }
  100% {
    -webkit-transform: rotate(360deg);
    -moz-transform: rotate(360deg);
    -ms-transform: rotate(360deg);
    -o-transform: rotate(360deg);
    transform: rotate(360deg);
  }
}
@-moz-keyframes spinner {
  0% {
    -webkit-transform: rotate(0deg);
    -moz-transform: rotate(0deg);
    -ms-transform: rotate(0deg);
    -o-transform: rotate(0deg);
    transform: rotate(0deg);
  }
  100% {
    -webkit-transform: rotate(360deg);
    -moz-transform: rotate(360deg);
    -ms-transform: rotate(360deg);
    -o-transform: rotate(360deg);
    transform: rotate(360deg);
  }
}
@-o-keyframes spinner {
  0% {
    -webkit-transform: rotate(0deg);
    -moz-transform: rotate(0deg);
    -ms-transform: rotate(0deg);
    -o-transform: rotate(0deg);
    transform: rotate(0deg);
  }
  100% {
    -webkit-transform: rotate(360deg);
    -moz-transform: rotate(360deg);
    -ms-transform: rotate(360deg);
    -o-transform: rotate(360deg);
    transform: rotate(360deg);
  }
}
@keyframes spinner {
  0% {
    -webkit-transform: rotate(0deg);
    -moz-transform: rotate(0deg);
    -ms-transform: rotate(0deg);
    -o-transform: rotate(0deg);
    transform: rotate(0deg);
  }
  100% {
    -webkit-transform: rotate(360deg);
    -moz-transform: rotate(360deg);
    -ms-transform: rotate(360deg);
    -o-transform: rotate(360deg);
    transform: rotate(360deg);
  }
}
</style>
<style>

:root {
  --input-padding-x: 1.5rem;
  --input-padding-y: .75rem;
}

body {
  background: url('https://bindopos.com/blog/wp-content/uploads/2014/06/shutterstock_169474442-800x600.jpg');
    background-size: cover;
}

.card-signin {
  border: 0;
  border-radius: 1rem;
  box-shadow: 0 0.5rem 1rem 0 rgba(0, 0, 0, 0.1);
}

.card-signin .card-title {
  margin-bottom: 2rem;
  font-weight: 300;
  font-size: 1.5rem;
}

.card-signin .card-body {
  padding: 2rem;
  background: gold;
}

.form-signin {
  width: 100%;
}

.form-signin .btn {
  font-size: 80%;
  border-radius: 5rem;
  letter-spacing: .1rem;
  font-weight: bold;
  padding: 1rem;
  transition: all 0.2s;
}

.form-label-group {
  position: relative;
  margin-bottom: 1rem;
}

.form-label-group input {
  height: auto;
  border-radius: 2rem;
}

.form-label-group>input,
.form-label-group>label {
  padding: var(--input-padding-y) var(--input-padding-x);
}

.form-label-group>label {
  position: absolute;
  top: 0;
  left: 0;
  display: block;
  width: 100%;
  margin-bottom: 0;
  /* Override default `<label>` margin */
  line-height: 1.5;
  color: #495057;
  border: 1px solid transparent;
  border-radius: .25rem;
  transition: all .1s ease-in-out;
}

.form-label-group input::-webkit-input-placeholder {
  color: transparent;
}

.form-label-group input:-ms-input-placeholder {
  color: transparent;
}

.form-label-group input::-ms-input-placeholder {
  color: transparent;
}

.form-label-group input::-moz-placeholder {
  color: transparent;
}

.form-label-group input::placeholder {
  color: transparent;
}

.form-label-group input:not(:placeholder-shown) {
  padding-top: calc(var(--input-padding-y) + var(--input-padding-y) * (2 / 3));
  padding-bottom: calc(var(--input-padding-y) / 3);
}

.form-label-group input:not(:placeholder-shown)~label {
  padding-top: calc(var(--input-padding-y) / 3);
  padding-bottom: calc(var(--input-padding-y) / 3);
  font-size: 12px;
  color: #777;
}

.btn-google {
  color: white;
  background-color: #ea4335;
}

.btn-facebook {
  color: white;
  background-color: #3b5998;
}

/* Fallback for Edge
-------------------------------------------------- */

@supports (-ms-ime-align: auto) {
  .form-label-group>label {
    display: none;
  }
  .form-label-group input::-ms-input-placeholder {
    color: #777;
  }
}

/* Fallback for IE
-------------------------------------------------- */

@media all and (-ms-high-contrast: none),
(-ms-high-contrast: active) {
  .form-label-group>label {
    display: none;
  }
  .form-label-group input:-ms-input-placeholder {
    color: #777;
  }
}
</style>
</head>
<body>
<div id="loader"  class="loading myhide">Loading&#8230;</div>
  <div class="container">
    <div class="row">
      <div style="margin-top: 34px;" class="col-sm-9 col-md-7 col-lg-5 mx-auto">
        <div class="card card-signin my-5">
          <div class="card-body">
            <div id="info" class="alert alert-danger myhide" ></div>
            <h5 class="card-title text-center"> <?php //echo myfun(); ?> Forgot Password</h5>
        <form method="POST" action="{{ route('password.update') }}">
                        @csrf

                        <input type="hidden" name="token" value="{{ $token }}">

                        <div class="form-group row">
                            <label for="email" class="col-md-12 col-form-label ">{{ __('E-Mail Address') }}</label>

                            <div class="col-md-12">
                                <input id="email" type="email" class="form-control @error('email') is-invalid @enderror" name="email" value="{{ $email ?? old('email') }}" required autocomplete="email" autofocus>

                                @error('email')
                                    <span class="invalid-feedback" role="alert">
                                        <strong>{{ $message }}</strong>
                                    </span>
                                @enderror
                            </div>
                        </div>

                        <div class="form-group row">
                            <label for="password" class="col-md-12 col-form-label ">{{ __('Password') }}</label>

                            <div class="col-md-12">
                                <input id="password" type="password" class="form-control @error('password') is-invalid @enderror" name="password" required autocomplete="new-password">

                                @error('password')
                                    <span class="invalid-feedback" role="alert">
                                        <strong>{{ $message }}</strong>
                                    </span>
                                @enderror
                            </div>
                        </div>

                        <div class="form-group row">
                            <label for="password-confirm" class="col-md-12 col-form-label">{{ __('Confirm Password') }}</label>

                            <div class="col-md-12">
                                <input id="password-confirm" type="password" class="form-control" name="password_confirmation" required autocomplete="new-password">
                            </div>
                        </div>
 <button class="btn btn-lg btn-primary btn-block text-uppercase" type="submit">Submit</button>
                        {{-- <div class="form-group row mb-0">
                            <div class="col-md-6 offset-md-4">
                                <button type="submit" class="btn btn-primary">
                                    {{ __('Reset Password') }}
                                </button>
                            </div>
                        </div> --}}
                    </form>
          </div>
        </div>
      </div>
    </div>
  </div>
</body>
</html>
<script src="https://maps.googleapis.com/maps/api/js?key=AIzaSyD3gFKhVywUkygSxQEBdGVrI5-ZRrdjueA"></script>

<script src="{{ asset('js/maps.js') }}"></script>
<script src="{{ asset('js/libs/moment.min.js') }}"></script>
<script src="{{ asset('js/libs/wNumb.js') }}"></script>
<script src="{{ asset('js/libs/nouislider.min.js') }}"></script>
<script src="{{ asset('js/libs/jquery.min.js') }}"></script>
<script src="{{ asset('js/libs/jquery-ui.min.js') }}"></script>
<script src="{{ asset('js/libs/barba.min.js') }}"></script>
<script src="{{ asset('js/libs/sticky-kit.min.js') }}"></script>
<script src="{{ asset('js/libs/velocity.min.js') }}"></script>
<script src="{{ asset('js/libs/velocity.ui.min.js') }}"></script>
<script src="{{ asset('js/libs/jquery.waypoints.min.js') }}"></script>
<script src="{{ asset('js/libs/popper.min.js') }}"></script>
<script src="{{ asset('js/libs/bootstrap.min.js') }}"></script>
<script src="{{ asset('js/libs/imagesloaded.pkgd.min.js') }}"></script>
<script src="{{ asset('js/libs/masonry.pkgd.min.js') }}"></script>
<script src="{{ asset('js/libs/isotope.pkgd.min.js') }}"></script>
<script src="{{ asset('js/libs/ofi.min.js') }}"></script>
<script src="{{ asset('js/libs/jarallax.min.js') }}"></script>
<script src="{{ asset('js/libs/jarallax-video.min.js') }}"></script>
<script src="{{ asset('js/libs/jarallax-element.min.js') }}"></script>
<script src="{{ asset('js/libs/jquery.mCustomScrollbar.min.js') }}"></script>
<script src="{{ asset('js/libs/swiper.min.js') }}"></script>
<script src="{{ asset('js/libs/flatpickr/flatpickr.min.js') }}"></script>
<script src="{{ asset('js/libs/flatpickr/rangePlugin.js') }}"></script>
<script src="{{ asset('js/libs/select2.min.js') }}"></script>
<script src="{{ asset('js/libs/select2/en.js') }}"></script>
<script src="{{ asset('js/libs/jquery.mask.min.js') }}"></script>
<script src="{{ asset('js/libs/validator.min.js') }}"></script>
<script src="{{ asset('js/libs/jquery.barrating.min.js') }}"></script>
<script src="{{ asset('js/libs/jquery.blueimp-gallery.min.js') }}"></script>
<script src="{{ asset('js/script.min.js') }}"></script>
<script src="{{ asset('js/demo-switcher.js') }}"></script>
<script src="{{ asset('js/jquery.inputmask.bundle.js') }}"></script>
<script>
  /**********************************save************************************/

  $('#frmlogin').on("submit",function(e){
    // alert('work');
    // return false;
   email = $('#email').val();
   pass = $('#password').val();
   if(email=='')
   {
    $('#mailmsg').html('please input email'); 
    $('#mailmsg').removeClass('myhide');
    setTimeout(function(){
            $('#mailmsg').addClass('myhide');
         }, 3000);
    return false;
   }
   if(pass=='')
   {
    $('passmsg').html('please input password'); 
    $('#passmsg').removeClass('myhide');
    setTimeout(function(){
            $('#passmsg').addClass('myhide');
         }, 3000);
    return false;
   }
    e.preventDefault(); 
     var formData = new FormData();
  var other_data = $('#frmlogin').serializeArray();
    $.each(other_data,function(key,input){
        formData.append(input.name,input.value);
    });
   /* if($('#file').val()!='')
   {
    formData.append("file", document.getElementById('file').files[0]);
   }*/
  //   formData.append('pass',$pass);
    $.ajax({
      type: "POST",
      url: "/accountlogin",
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
          $('#info').html(data.message);
          
          

          $('#info').removeClass('myhide');
          setTimeout(function(){
            $('#info').addClass('myhide');
            window.location.href = '/dashbord';
         }, 5000);
          
        }
        if(data.status==204)
        {
          $('#info').html(data.message);
          
          

          $('#info').removeClass('myhide');
          setTimeout(function(){
            $('#info').addClass('myhide');
         }, 3000);
        }
       /* if(data.status==1000)
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
        }*/
      
            }
      });

  //ajax end 

    });
  
  </script>