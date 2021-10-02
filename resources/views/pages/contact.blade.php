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
                                <h1 class="h1 intro__title prlx-scroll">Contact US</h1>
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
          <div class="row">
            <aside class="sidebar col-lg-3 order-1 order-lg-0">
              <div class="sidebar__content js-sticky-top">
                <section class="sidebar__card card">
                  <div class="sidebar__card-title">
                    <h4 class="card-title">Contacts</h4>
                    <hr class="my-3"/>
                  </div>
                  <ul class="sidebar__contacts">
                    <li class="d-flex align-items-baseline"><i class="icon icon-phone mr-2"></i><a href="tel:#">8-800-0011-2222-333</a></li>
                    <li class="d-flex align-items-baseline"><i class="icon icon-building mr-2"></i>
                      <p class="mb-0">314-336 Bourke St,<br>Melbourne VIC 3000,<br>Australia</p>
                    </li>
                    <li class="d-flex align-items-baseline"><i class="icon icon-envelope-close mr-2"></i><a href="mailto:#">Yourtravel@gmail.com</a></li>
                  </ul>
                </section>
                <section class="sidebar__card card">
                  <div class="sidebar__card-title">
                    <h4 class="card-title">Send us a message</h4>
                    <hr class="my-3"/>
                  </div>
                  <form class="sidebar__subscribe" action="#" method="POST" data-toggle="validator">
                    <div class="form-group">
                      <input class="form-control" type="text" name="name" placeholder="Name" required>
                    </div>
                    <div class="form-group">
                      <input class="form-control" type="email" name="email" placeholder="E-mail" required>
                    </div>
                    <div class="form-group">
                      <textarea class="form-control rounded" rows="7" name="message" placeholder="Your message..." required></textarea>
                    </div>
                    <div class="form-group mb-0">
                      <button class="btn btn-secondary btn--round mx-auto mx-lg-0" type="submit">Send
                      </button>
                    </div>
                  </form>
                </section>
              </div>
            </aside>
            <div class="col-lg-9 d-flex">
              <div class="contacts-layer card">
                <div class="contacts-layer__box">
                  <div class="contacts-layer__map" id="map"></div>
                </div>
              </div>
            </div>
          </div>
        </div>
        <button class="btn btn-primary btn-nav btn-nav--up js-scroll-up" type="button"><i class="fa fa-angle-up"></i></button>
      </div>
@endsection

@section('customJs')


@endsection