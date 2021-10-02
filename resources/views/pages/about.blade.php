@extends('layouts.app')

@section('mainContent')
<section class="intro d-flex flex-column load">
        <div class="intro__bg js-intro-bg">
            <div class="over"></div>
            <div class="swiper-container js-intro-slider-bg">
                <div class="swiper-wrapper">
                    <div class="swiper-slide"><img class="img-cover" src="{{ asset('images/intro/item-1.jpg') }}" alt="#"></div>
                    <div class="swiper-slide"><img class="img-cover" src="{{ asset('images/intro/item-2.jpg') }}" alt="#"></div>
                    <div class="swiper-slide"><img class="img-cover" src="{{ asset('images/intro/item-1.jpg') }}" alt="#"></div>
                    <div class="swiper-slide"><img class="img-cover" src="{{ asset('images/intro/item-4.jpg') }}" alt="#"></div>
                    <div class="swiper-slide"><img class="img-cover" src="{{ asset('images/intro/item-5.jpg') }}" alt="#"></div>
                </div>
            </div>
        </div>
        <div class="intro__desc js-intro-slider-desc swiper-container">
            <div class="swiper-wrapper align-items-center">
                <div class="swiper-slide">
                    <div class="container w-100 text-center">
                        <div class="row">
                            <div class="col-12 col-lg-10 mx-auto">
                                <h4 class="h4 intro__caption prlx-scroll">Looking for something amazing?</h4>
                                <h1 class="h1 intro__title prlx-scroll">About US</h1>
                                <p class="prlx-scroll">
                                    we have collected the best offers in
                                    <span class="js-counter">4 217</span>
                                    accommodation options - to see them, just enter the dates!
                                </p>
                            </div>
                        </div>
                    </div>
                </div>
               
               
              
                
            </div>
            <a href="/" class="intro__btn-scroll js-intro-btn-jump" type="button"><span></span></a>
        </div>
        <div class="intro__content d-flex flex-column justify-content-end js-intro-content">
           
            <div class="intro__hotels ">
                <div class="container-fluid p-0">
                    <div class="swiper-container js-intro-hotels display-none">
                        <div class="swiper-wrapper">
                            <div class="swiper-slide">
                                <div class="card-intro d-block" style="background-image: url({{ asset('images/hotels/item-1.jpg') }});">
                                    <div class="card-price"><span class="mr-1">from</span><span class="count text-secondary">300$</span></div>
                                    <div class="card-intro__footer">
                                        <h4 class="h4 f-primary">Resort Spa Hotel</h4>
                                        <div class="card-intro__local d-flex align-items-center"><i class="icon icon-label mr-1"></i><span>Thailand</span></div>
                                        <div class="card-intro__rating">
                                            <select class="js-rating-stat" data-current-rating="5">
                                                <option value="1">1</option>
                                                <option value="2">2</option>
                                                <option value="3">3</option>
                                                <option value="4">4</option>
                                                <option value="5" selected="selected">5</option>
                                            </select>
                                        </div>
                                    </div>
                                    <div class="card-hover">
                                        <h3 class="h3 text-uppercase">Resort Spa Hotel</h3><a class="btn btn-light btn--round card-hover__view" href="category.html">VIEW</a>
                                    </div>
                                </div>
                            </div>
                          
                       
                            
                           
                        </div>
                    </div>
                    
                </div>
            </div>
        </div>
    </section>
<div class="page-content pt-5">
        <div class="container">
          <div class="col-12 col-lg-6 float-lg-left px-0 pr-lg-4 mb-3"><a href="contacts.html"><img class="img-fluid mx-auto" src="{{ asset('images/intro/item-1.jpg') }}" alt="#"></a></div>
          <ul class="d-flex justify-content-between">
            <li>
              <h5 class="fw-bold">Your Travel World</h5>
            </li>
          
          </ul>
         
          <p>There are many variations of passages of Lorem Ipsum available, but the majority have suffered alteration in some form, by injected humour, or randomised words which don't look even slightly believable. If you are going to use a passage of Lorem Ipsum, you need to be sure there isn't anything embarrassing hidden in the middle of text. All the Lorem Ipsum generators on the Internet tend to repeat predefined chunks as necessary, making this the first true generator on the Internet. It uses a dictionary of over 200 Latin words, combined with a handful of model sentence structures, to generate Lorem Ipsum which looks reasonable. The generated Lorem Ipsum is therefore always free from repetition, injected humour, or non-characteristic words etc. There are many variations of passages of Lorem Ipsum available, but the majority have suffered alteration in some form, by injected humour, or randomised words which don't look even slightly believable. If you are going to use a passage of Lorem Ipsum, you need to be sure there isn't anything embarrassing hidden in the middle of text. All the Lorem Ipsum generators on the Internet tend to repeat predefined chunks as necessary, making this the first true generator on the Internet. It uses a dictionary of over 200 Latin words, combined with a handful of model sentence structures, to generate Lorem Ipsum which looks reasonable. The generated Lorem Ipsum is therefore always free from repetition, injected humour, or non-characteristic words etc. It uses a dictionary of over 200 Latin words, combined with a handful of model sentence structures, to generate Lorem Ipsum which looks reasonable. The generated Lorem Ipsum is therefore always free from repetition.The generated Lorem Ipsum is therefore always free from repetition, injected humour, or non-characteristic words etc. It uses a dictionary of over 200 Latin words, combined with a handful of model sentence structures, to generate Lorem Ipsum which looks reasonable. The generated Lorem Ipsum is therefore always free from repetition.</p>
          <p>There are many variations of passages of Lorem Ipsum available, but the majority have suffered alteration in some form, by injected humour, or randomised words which don't look even slightly believable. If you are going to use a passage of Lorem Ipsum, you need to be sure there isn't anything embarrassing hidden in the middle of text. All the Lorem Ipsum generators on the Internet tend to repeat predefined chunks as necessary, making this the first true generator on the Internet. It uses a dictionary of over 200 Latin words, combined with a handful of model sentence structures, to generate Lorem Ipsum which looks reasonable. The generated Lorem Ipsum is therefore always free from repetition, injected humour, or non-characteristic words etc.</p>
          <p>I am a business owner myself. I coach, blog, maintain a website and develop curricula for leadership-development workshops. I use social media, including Facebook, Twitter and LinkedIn. By far, my biggest distraction was Facebook on my iPhone.There are many variations of passages of Lorem Ipsum available, but the majority have suffered alteration in some form, by injected humour, or randomised words which don't look even slightly believable. If you are going to use a passage of Lorem Ipsum, you need to be sure there isn't anything embarrassing hidden in the middle of text. All the Lorem Ipsum generators on the Internet tend to repeat predefined chunks as necessary, making this the first true generator on the Internet. It uses a dictionary of over 200 Latin words, combined with a handful of model sentence structures, to generate Lorem Ipsum which looks reasonable. The generated Lorem Ipsum is therefore always free from repetition, injected humour, or non-characteristic words etc.</p>
          <p class="text-right"><a class="btn btn-btn btn-dark" href="contacts.html" role="button">Our contacts</a>
          </p>
        </div>
        <button class="btn btn-primary btn-nav btn-nav--up js-scroll-up" type="button"><i class="fa fa-angle-up"></i></button>
      </div>

@endsection

@section('customJs')


@endsection