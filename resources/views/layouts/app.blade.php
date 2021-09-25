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
    <link rel="stylesheet" type="text/css" 
     href="https://cdnjs.cloudflare.com/ajax/libs/toastr.js/latest/toastr.min.css">
     <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/fancybox/3.5.7/jquery.fancybox.css" integrity="sha512-nNlU0WK2QfKsuEmdcTwkeh+lhGs6uyOxuUs+n+0oXSYDok5qy0EI0lt01ZynHq6+p/tbgpZ7P+yUb+r71wqdXg==" crossorigin="anonymous" referrerpolicy="no-referrer" />
</head>
<body class="load">
<div class="progress-load js-progress-load"></div>

<div class="demo-panel bx4dp d-none d-sm-block display-none" id="demoSwitcher">
    <div class="container">
        <div class="demo-panel__toggle btn btn-light text-primary shadow-sm js-panel-toggle"><i class="fa fa-cog"></i></div>
    </div>
    <div class="demo-panel__content bg-light pt-3">
        <div class="container">
            <div class="row flex-nowrap">
                <div class="col-auto mb-2 d-flex align-items-center">
                    <h4>Colors</h4>
                    <div class="demo-panel__colors nav"><a class="nav-link js-toggle-theme is-active" href="#" data-path="skins/style-default.css" role="button"></a><a class="nav-link js-toggle-theme" href="#" data-path="skins/style-orange.css" role="button"></a><a class="nav-link js-toggle-theme" href="#" data-path="skins/style-green.css" role="button"></a><a class="nav-link js-toggle-theme" href="#" data-path="skins/style-red.css" role="button"></a><a class="nav-link js-toggle-theme" href="#" data-path="skins/style-purple.css" role="button"></a><a class="nav-link js-toggle-theme" href="#" data-path="skins/style-pink.css" role="button"></a>
                    </div>
                </div>
                <div class="col-auto mb-2 d-flex align-items-center">
                    <h4>RTL</h4>
                    <button class="btn-switch text-primary js-switch-rtl" type="button" data-switch="css/bootstrap-rtl.min.css"><span class="bar bg-primary"></span><span class="toggle bg-secondary"></span></button>
                </div>
            </div>
        </div>
    </div>
</div>

<div class="display-none modal-account modal" id="modalAccount" tabindex="-1" role="dialog">
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

<!--Header Section Start-->
 @include ('layouts.header')
<!--Header Section End-->


<div class="container">
    <div class="row">
        <div class="col-12 col-sm-12 mb-20" >
            @if (session('ErrorMessage'))
                <div class="ps-container mt-10">
                    <div class="alert alert-danger alert-dismissable " style="font-size: 16px">
                        <a href="#" class="close mr-20" data-dismiss="alert" aria-label="close" style="font-size: 30px;">&times;</a>
                        <strong> {{ session('ErrorMessage') }} </strong>
                    </div>
                </div>
            @endif
            @if (session('Message'))
                <div class="ps-container mt-10">
                    <div class="alert alert-success alert-dismissable custom-success-box fs-15" style="font-size: 16px">
                        <a href="#" class="close mr-20" data-dismiss="alert" aria-label="close" style="font-size: 30px;">&times;</a>
                        <strong> {{ session('Message') }} </strong>
                    </div>
                </div>
            @endif
            
            @if ($errors->any())
            <div class="ps-container mt-10">
                    <div class="alert alert-success alert-dismissable custom-success-box fs-15" style="font-size: 16px">
                        <a href="#" class="close mr-20" data-dismiss="alert" aria-label="close" style="font-size: 30px;">&times;</a>
                        <ul>
            @foreach ($errors->all() as $error)
                <li>{{ $error }}</li>
            @endforeach
        </ul>          
                    </div>
                </div>
    
            @endif
        </div>
    </div>
</div>



<main class="page-main">
    @yield('mainContent')
</main>

<!--Footer Section Start-->
@include ('layouts.footer')
<!--Footer Section End-->

<div class="modal-map modal" id="modalMap" tabindex="-1">
    <div class="modal-dialog modal-dialog-centered">
        <div class="modal-content">
            <div class="modal-header align-items-center py-2">
                <h4 class="modal-title"><a class="d-flex align-items-center" href="hotel.html"><i class="icon mr-2"><svg xmlns="http://www.w3.org/2000/svg" viewBox="0 0 31.5 22.1"><path d="M0.3,10.3C0.3,10.3,0.3,10.3,0.3,10.3c-0.4,0.5-0.4,1.2,0,1.6l10,10c0,0,0,0,0,0c0.4,0.4,1.1,0.4,1.6,0 c0.4-0.4,0.4-1.1,0-1.6l-8-8h26.6c0.6,0,1.1-0.5,1.1-1.1c0,0,0,0,0,0c0-0.6-0.5-1.1-1.1-1.1H3.8l8-8c0.4-0.4,0.4-1.1,0-1.6 c0,0,0,0,0,0c-0.4-0.4-1.1-0.4-1.6,0L0.3,10.3z"/></svg></i><span class="title">Hotel</span></a></h4>
                <button class="btn btn-secondary btn--round px-4" type="button" data-dismiss="modal">map close
                </button>
            </div>
            <div class="map-contain" id="map"></div>
        </div>
    </div>
</div>
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
<script src="https://cdnjs.cloudflare.com/ajax/libs/fancybox/3.5.7/jquery.fancybox.min.js" integrity="sha512-uURl+ZXMBrF4AwGaWmEetzrd+J5/8NRkWAvJx5sbPSSuOb0bZLqf+tOzniObO00BjHa/dD7gub9oCGMLPQHtQA==" crossorigin="anonymous" referrerpolicy="no-referrer"></script>
<script src="https://unpkg.com/sweetalert/dist/sweetalert.min.js"></script>
<script src="https://maps.googleapis.com/maps/api/js?key=AIzaSyCpfWMKfe2_9VO80AfeAfqI3YmEr9DnWE8&libraries=places&callback=initAutocomplete" async defer></script>
<script>
    $(document).ready(function() {
        google.maps.event.addDomListener(window, 'load', initialize);
        $('.fancybox').fancybox();
    });
   
    function initialize() {
        var input = document.getElementById('address');
        var autocomplete = new google.maps.places.Autocomplete(input);
    }
</script>
@yield('customJs')


</body>

<!-- Mirrored from netgon.ru/themeforest/yourtravelworld_html/ by HTTrack Website Copier/3.x [XR&CO'2014], Wed, 26 May 2021 09:10:57 GMT -->
</html>