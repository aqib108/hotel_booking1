<?php
$socail = socail_setting();
?>
{{ \TawkTo::widgetCode() }}
<footer  class="page-footer bg-style">
    <div class="page-footer__cover jarallax" data-speed="0.5"><img class="jarallax-img" src="{{ asset('images/footer.jpg') }}" alt="#"></div>
    <div class="container mb-5 mb-lg-4">
        <div class="row">
            <div class="col-12 col-sm-6 col-lg-4 mt-5">
                <h3 class="h3 text-uppercase">Pakistani Booking</h3>
                <ul class="page-footer__address">
                    <li class="mb-2"><strong class="float-left mr-1">A:</strong>
                        {{$setting->address}}
                    </li>
                    <li class="mb-2"><strong class="float-left mr-1">P:</strong>
                        24/7 customer support:
                        <a href="tel:#">{{$setting->phone}}</a>
                    </li>
                    <li class="mb-2"><strong class="float-left mr-1">E:</strong>
                        <a href="mailto:#">{{$setting->Email}}</a>
                    </li>
                </ul>
                <h4 class="h4 mb-2">Follow us:</h4>
                <ul class="footer-social d-flex flex-wrap">
                    <li class="mr-4"><a class="social-link" href="{{ $socail->facebook }}" target="_blank"><i class="fab fa-facebook"></i></a></li>
                    <li class="mr-4"><a class="social-link" href="{{ $socail->twitter }}" target="_blank"><i class="fab fa-twitter"></i></a></li>
                    <li class="mr-4"><a class="social-link" href="{{ $socail->instagram }}" target="_blank"><i class="fab fa-instagram"></i></a></li>
                    <li class="mr-4"><a class="social-link" href="{{ $socail->youtube }}" target="_blank"><i class="fab fa-youtube"></i></a></li>
                    <li class="mr-4"><a class="social-link" href="{{ $socail->whatsapp }}" target="_blank"><i class="fab fa-whatsapp"></i></a></li>
                </ul>
            </div>
            <div class="col-12 col-sm-6 col-lg-4 mt-5">
                <h3 class="h3 text-uppercase">customer support</h3>
                <ul class="page-footer__support list-styled">
                    <li class="mb-2"><a href="{{ route('about-us') }}" target="_blank">About</a></li>
                    <li class="mb-2"><a href="{{ route('contact-us') }}" target="_blank">Contact</a></li>
                    <li class="mb-2"><a href="{{ route('login') }}" target="_blank">Login</a></li>
                    <li class="mb-2"><a href="{{ route('register') }}" target="_blank">Signup</a></li>
                </ul>
            </div>
            <div class="col-12 col-sm-12 col-lg-4 mt-5">
                <h3 class="h3 text-uppercase">get our best offers</h3>
                <form class="subscribe-form" id="subscription" >
                    <div class="input-group input-group--lg flex-nowrap mb-4">
                        <input class="form-control form-control-lg" type="email" placeholder="Enter Your email" id="email" required>
                        <div class="input-group-append">
                            <button class="btn btn-btn btn-light btn--round" type="button" onclick="subscription()"><i class="fas fa-paper-plane"></i>
                            </button>
                        </div>
                    </div>
                    <p>We guarantee your confidentiality, and we also undertake not to transfer your email address to third parties.</p>
                </form>
            </div>
        </div>
    </div>
    <div class="page-footer__copyright text-center">
        <div class="container">
            <div class="hr"></div>YourTravelWorld ltd. All rights reserved.<br/><a class="text-light text-uppercase" href="#">Copyright by {{$setting->title}}
                <script>document.write(new Date().getFullYear());</script></a>
        </div>
    </div>
</footer>
