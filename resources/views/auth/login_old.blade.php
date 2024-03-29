<!DOCTYPE html>
<html class="no-js" lang="en">

<!-- Mirrored from netgon.ru/themeforest/yourtravelworld_html/ by HTTrack Website Copier/3.x [XR&CO'2014], Wed, 26 May 2021 09:08:52 GMT -->
<head>
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
</head>
<body class="load">
<div class="progress-load js-progress-load"></div>

{{--
<div class="modal-account modal" id="modalAccount" tabindex="-1" role="dialog">
    <div class="modal-dialog modal-dialog-centered">
        <div class="modal-content">
            <div class="modal-header">
                <ul class="modal-account__tabs nav nav-tabs d-flex js-account-tabs" id="accountTabs" role="tablist">
                    <li class="nav-item w-50"><a class="nav-link" data-toggle="tab" href="#accountLogin" role="tab" aria-controls="accountLogin" aria-selected="false">Login</a></li>
                    <li class="nav-item w-50"><a class="nav-link" data-toggle="tab" href="#accountRegist" role="tab" aria-controls="accountRegist" aria-selected="false">Sign Up</a></li>
                    <li><a class="nav-link p-0 border-0" data-toggle="tab" href="#accountForgot" role="tab" aria-controls="accountForgot" aria-selected="false"></a></li>
                </ul>
                <button class="btn btn-light close pointer" type="button" data-dismiss="modal" aria-label="close"><span class="icon text-dark" aria-hidden="true"><svg xmlns="http://www.w3.org/2000/svg" viewBox="0 0 510 510"><path d="M255 0C114.75 0 0 114.75 0 255s114.75 255 255 255 255-114.75 255-255S395.25 0 255 0zm127.5 346.8l-35.7 35.7-91.8-91.8-91.8 91.8-35.7-35.7 91.8-91.8-91.8-91.8 35.7-35.7 91.8 91.8 91.8-91.8 35.7 35.7-91.8 91.8 91.8 91.8z"/></svg></span></button>
            </div>
            <div class="modal-body">
                <div class="tab-content">
                    <div class="tab-pane" id="accountLogin" role="tabpanel">
                        <form class="modal-account__form js-account-form" id="formLogin" action="#" method="POST" data-toggle="validator">
                            <div class="form-group">
                                <input class="form-control form-control-sm" type="email" name="user_email" placeholder="E-mail address" required="required"/>
                                <div class="help-block with-errors"></div>
                            </div>
                            <div class="form-group">
                                <input class="form-control form-control-sm" type="password" name="user_pass" placeholder="Password" data-minlength="6" required="required"/>
                                <div class="help-block">Your password must be at least 6 characters long</div>
                            </div>
                            <div class="d-flex flex-wrap justify-content-between align-items-center">
                                <button class="btn btn-secondary btn--round mr-2 mb-2" type="submit">sign in
                                </button>
                                <p class="mb-2 display-none"><a class="js-toggle-account" href="#" data-account="forgot">Forgot your password?</a></p>
                            </div>
                            <div class="d-inline-block my-2 w-100 display-none ">
                                <div class="social-sign">
                                    <div class="divider divider-horizontal">
                                        <h5 class="font-weight-normal mx-2">Or click to sign in</h5>
                                    </div>
                                    <ul class="social-sign__list row">
                                        <li class="col col-sm-6"><a class="nav-link" href="#"><img class="nav-icon img-fluid mr-2" src="{{ asset('images/facebook.png') }}" alt="#"/><span class="nav-text">Connect with Facebook</span></a></li>
                                        <li class="col col-sm-6"><a class="nav-link" href="#"><img class="nav-icon img-fluid mr-2" src="{{ asset('images/google-plus.png') }}" alt="#"/><span class="nav-text">Connect with Google</span></a></li>
                                    </ul>
                                </div>
                            </div>
                        </form>
                        <div class="modal-footer d-block">
                            <p class="fz-small mb-0"><em>By accessing your account, you agree to our  <a href="#">Terms and Conditions</a> and   <a href="#">Privacy Policy</a></em></p>
                        </div>
                    </div>
                    <div class="tab-pane active show" id="accountRegist" role="tabpanel">
                        <form class="modal-account__form js-account-form" id="formRegist" action="#" method="POST" data-toggle="validator">
                            <div class="form-group">
                                <input class="form-control form-control-sm" type="text" name="user_name" placeholder="First Name" required="required"/>
                                <div class="help-block">Please enter your name</div>
                            </div>
                            <div class="form-group">
                                <input class="form-control form-control-sm" type="text" name="user_last_name" placeholder="Last Name" required="required"/>
                                <div class="help-block">Please enter your last name</div>
                            </div>
                            <div class="form-group">
                                <input class="form-control form-control-sm" type="email" name="user_email" placeholder="E-mail address" required="required"/>
                                <div class="help-block with-errors"></div>
                            </div>
                            <div class="form-group">
                                <input class="form-control form-control-sm" id="userPass" type="password" name="user_pass" placeholder="Password" data-minlength="6" required="required"/>
                                <div class="help-block">Your password must be at least 6 characters long</div>
                            </div>
                            <div class="form-group">
                                <input class="form-control form-control-sm" type="password" name="user_pass_confirm" placeholder="Confirm Password" data-match="#userPass" required="required"/>
                                <div class="help-block">Please enter the same password as above</div>
                            </div>
                            <div class="form-group">
                                <label class="custom-control custom-checkbox">
                                    <input class="custom-control-input" id="agreePolicy" type="checkbox" required><span class="custom-control-label">I have read and agree to the  <a href="#">Terms of Use</a> and the  <a href="#">Privacy Policy.</a></span>
                                </label>
                                <div class="help-block">Please accept our policy</div>
                            </div>
                            <p class="mb-4 d-flex justify-content-center justify-content-sm-start">
                                <button class="btn btn-secondary btn--round" type="submit">Create Account</button>
                            </p>
                            <div class="d-inline-block my-2 w-100 display-none">
                                <div class="social-sign">
                                    <div class="divider divider-horizontal">
                                        <h5 class="font-weight-normal mx-2">Or click to sign in</h5>
                                    </div>
                                    <ul class="social-sign__list row">
                                        <li class="col col-sm-6"><a class="nav-link" href="#"><img class="nav-icon img-fluid mr-2" src="{{ asset('images/facebook.png') }}" alt="#"/><span class="nav-text">Sign up with Facebook</span></a></li>
                                        <li class="col col-sm-6"><a class="nav-link" href="#"><img class="nav-icon img-fluid mr-2" src="{{ asset('images/google-plus.png') }}" alt="#"/><span class="nav-text">Sign up with Google</span></a></li>
                                    </ul>
                                </div>
                            </div>
                            <div class="modal-footer display-none">
                                <div class="form-group">
                                    <label class="custom-control custom-checkbox">
                                        <input class="custom-control-input" id="dispatchEmail" type="checkbox"><span class="custom-control-label">Please send me Travelocity.com emails with travel deals, special offers, and other information.</span>
                                    </label>
                                </div>
                            </div>
                        </form>
                    </div>
                    <div class="tab-pane" id="accountForgot" role="tabpanel">
                        <form class="modal-account__form" id="formForgot" action="#" method="POST" data-toggle="validator">
                            <div class="form-group">
                                <input class="form-control form-control-sm" type="email" name="user_email" placeholder="E-mail address" required>
                                <div class="help-block with-errors"></div>
                            </div>
                            <p class="text-center">We will email you instructions for resetting your password.</p>
                            <p class="d-flex justify-content-center">
                                <button class="btn btn-secondary btn--round" type="submit">Retrieve Password
                                </button>
                            </p>
                            <p class="d-flex justify-content-center"><a class="js-toggle-account mr-3" href="#" data-account="regist">Create a new account</a><a class="js-toggle-account" href="#" data-account="login">Return to Sign In</a></p>
                        </form>
                    </div>
                </div>
            </div>
        </div>
    </div>
</div>
--}}




<!--Header Section Start-->
{{--@include ('layouts.header')--}}
<!--Header Section End-->

<main class="page-main">
    <div class="container">
        <div class="row justify-content-center mt-50" style="height: 100%;">
       <div class="card">
           <div class="card-header">
           <div class="col-md-12 col-12 text-center mt-50">
                <h3>Pakistani Booking Login Form </h3>
            </div>
           </div>
           <div class="card-body">
           <div class="col-12 col-md-12">
                <form method="POST" action="{{ route('login') }}">
                    @csrf

                    <div class="form-group row">
                        <label for="email" class="col-md-4 col-form-label text-md-right">{{ __('E-Mail Address') }}</label>

                        <div class="col-md-6">
                            <input id="email" type="email" class="form-control @error('email') is-invalid @enderror" name="email" value="{{ old('email') }}" required autocomplete="email" placeholder="Email Address" autofocus>
                            @error('email')
                            <span class="invalid-feedback" role="alert">
                            <strong>{{ $message }}</strong>
                        </span>
                            @enderror
                        </div>
                    </div>

                    <div class="form-group row">
                        <label for="password" class="col-md-4 col-form-label text-md-right">{{ __('Password') }}</label>

                        <div class="col-md-6">
                            <input id="password" type="password" class="form-control @error('password') is-invalid @enderror" name="password" required autocomplete="current-password" placeholder="********">

                            @error('password')
                            <span class="invalid-feedback" role="alert">
                            <strong>{{ $message }}</strong>
                        </span>
                            @enderror
                        </div>
                    </div>

                    {{--<div class="form-group row">
                        <div class="col-md-6 offset-md-4">
                            <div class="form-check">
                                <input class="form-check-input" type="checkbox" name="remember" id="remember" {{ old('remember') ? 'checked' : '' }}>

                                <label class="form-check-label" for="remember">
                                    {{ __('Remember Me') }}
                                </label>
                            </div>
                        </div>
                    </div>--}}

                    <div class="form-group row mb-0">
                        <div class="col-md-8 offset-md-4">
                            <button type="submit" class="btn btn-primary">
                                {{ __('Login') }}
                            </button>

                            {{--@if (Route::has('password.request'))
                                <a class="btn btn-link" href="{{ route('password.request') }}">
                                    {{ __('Forgot Your Password?') }}
                                </a>
                            @endif--}}
                        </div>
                    </div>
                </form>
            </div>
           </div>
       </div>
           

          

        </div>
    </div>
</main>

<!--Footer Section Start-->
{{--@include ('layouts.footer')--}}
<!--Footer Section End-->

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
    $(":input").inputmask();

</script>

<script>
    $(document).on("click", ".browse", function() {
        var file = $(this).parents().find(".file");
        file.trigger("click");
    });
    $('input[type="file"]').change(function(e) {
        var fileName = e.target.files[0].name;
        $("#file").val(fileName);

        var reader = new FileReader();
        reader.onload = function(e) {
            // get loaded data and render thumbnail.
            //document.getElementById("preview").src = e.target.result;
            var url = 'url('+e.target.result+')';

            $("#preview").css("background-image", ""+url+"");
        };
        // read the image file as a data URL.
        reader.readAsDataURL(this.files[0]);
    });
</script>


</body>

<!-- Mirrored from netgon.ru/themeforest/yourtravelworld_html/ by HTTrack Website Copier/3.x [XR&CO'2014], Wed, 26 May 2021 09:10:57 GMT -->
</html>

