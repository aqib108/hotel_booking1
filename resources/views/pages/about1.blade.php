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
                                <h1 class="h1 intro__title prlx-scroll">your best trip</h1>
                                <p class="prlx-scroll">
                                    we have collected the best offers in
                                    <span class="js-counter">4 217</span>
                                    accommodation options - to see them, just enter the dates!
                                </p>
                            </div>
                        </div>
                    </div>
                </div>
                <div class="swiper-slide">
                    <div class="container w-100 text-center">
                        <div class="row">
                            <div class="col-12 col-lg-10 mx-auto">
                                <h4 class="h4 intro__caption prlx-scroll">We offer a variety of services and options</h4>
                                <h1 class="h1 intro__title prlx-scroll">discover places</h1>
                                <p class="prlx-scroll">
                                    we have collected the best offers in
                                    <span class="js-counter">4 217</span>
                                    accommodation options - to see them, just enter the dates!
                                </p>
                            </div>
                        </div>
                    </div>
                </div>
                <div class="swiper-slide">
                    <div class="container w-100 text-center">
                        <div class="row">
                            <div class="col-12 col-lg-10 mx-auto">
                                <h4 class="h4 intro__caption prlx-scroll">Visit museum with a dedicated tour guide</h4>
                                <h1 class="h1 intro__title prlx-scroll">city tours</h1>
                                <p class="prlx-scroll">
                                    we have collected the best offers in
                                    <span class="js-counter">4 217</span>
                                    accommodation options - to see them, just enter the dates!
                                </p>
                            </div>
                        </div>
                    </div>
                </div>
                <div class="swiper-slide">
                    <div class="container w-100 text-center">
                        <div class="row">
                            <div class="col-12 col-lg-10 mx-auto">
                                <h4 class="h4 intro__caption prlx-scroll">City tours / tour tickets / tour guides</h4>
                                <h1 class="h1 intro__title prlx-scroll">more tours</h1>
                            </div>
                        </div>
                    </div>
                </div>
                <div class="swiper-slide">
                    <div class="container w-100 text-center">
                        <div class="row">
                            <div class="col-12 col-lg-10 mx-auto">
                                <h4 class="h4 intro__caption prlx-scroll">Looking for something amazing?</h4>
                                <h1 class="h1 intro__title prlx-scroll">Your travel tours</h1>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
            <button class="intro__btn-scroll js-intro-btn-jump" type="button"><span></span></button>
        </div>
        <div class="intro__content d-flex flex-column justify-content-end js-intro-content">
            <div class="intro__search">
                <div class="container">
                    <div class="search-hotels shadow-sm">
                        <ul class="search-hotels__tabs nav nav-tabs" role="tablist">
                            <li class="nav-item display-none"><a class="nav-link active" data-toggle="tab" href="#tabHotel" role="tab" aria-controls="tabHotel" aria-selected="false"><span class="d-none d-md-block">Hotel</span><i class="icon icon-building d-md-none mx-1 text-secondary"></i></a>
                            </li>
                            <li class="nav-item display-none"><a class="nav-link" data-toggle="tab" href="#tabFlight" role="tab" aria-controls="tabFlight" aria-selected="true"><span class="d-none d-md-block">Flight</span><i class="icon icon-airplane d-md-none mx-1 text-secondary"></i></a>
                            </li>
                            <li class="nav-item display-none"><a class="nav-link" data-toggle="tab" href="#tabFlightHotel" role="tab" aria-controls="tabFlightHotel" aria-selected="true"><span class="d-none d-md-block">Flight &amp; Hotel</span><i class="icon icon-airplane d-md-none mx-1 text-secondary"></i>
                                    <i class="icon icon-building d-md-none mx-1 text-secondary"></i></a>
                            </li>
                        </ul>
                        <div class="tab-content">
                            <div class="tab-pane active show" id="tabHotel" role="tabpanel">
                                <form class="search-hotels__form" action="#" method="GET" data-toggle="validator">
                                    <div class="row">
                                        <div class="form-group col-12 col-md-6 col-lg-4 col-xl-3">
                                            <label class="label-text">Place or name of the hotel</label>
                                            <div class="d-flex"><span class="select-local d-flex"> <i style="font-size: 18px;" class="p-1 fas fa-map-marker-alt  text-secondary"></i>
                              <select class="select2 js-select-locality" name="search_hotel" data-placeholder="Enter here a place or hotel">
                                <option value="Resort Spa Hotel">Resort Spa Hotel</option>
                                <option value="Black Pearl">Black Pearl</option>
                                <option value="Marsol">Marsol</option>
                                <option value="Macronissos Village Bungalows">Macronissos Village Bungalows</option>
                                <option value="Iberotel Aquamarine Resort">Iberotel Aquamarine Resort</option>
                              </select></span>
                                            </div>
                                        </div>
                                        <div class="form-group col-12 col-md-6 col-lg-4 col-xl-4 d-flex justify-content-center">
                                            <div class="form-group-date text-nowrap text-center">
                                                <div class="d-inline-block">
                                                    <label class="label-text">Check  in date</label>
                                                    <div class="input-date-group position-relative"><i class=" far fa-calendar-alt text-secondary"></i>
                                                        <input class="form-control js-input-date hidden " id="hotelDate1" type="text" name="hotel_from" required="required"/>
                                                        <label class="form-control date" for="hotelDate1"></label>
                                                    </div>
                                                </div><i class="bullet mx-4"></i>
                                                <div class="d-inline-block">
                                                    <label class="label-text">Check out date</label>
                                                    <div class="input-date-group position-relative"><i class=" far fa-calendar-alt text-secondary"></i>
                                                        <input class="form-control js-input-date hidden " id="hotelDateTo1" type="text" name="hotel_to" required="required"/>
                                                        <label class="form-control date" for="hotelDateTo1"></label>
                                                    </div>
                                                </div>
                                            </div>
                                        </div>
                                        <div class="form-group col-12 col-lg-4 col-xl-3 d-flex justify-content-center">
                                            <div class="mx-2">
                                                <label class="label-text">Rooms</label>
                                                <div class="qty">
                                                    <input class="js-qty" type="text" name="rooms" value="2" data-mask="00"/>
                                                </div>
                                            </div>
                                            <div class="mx-2">
                                                <label class="label-text">Adults</label>
                                                <div class="qty">
                                                    <input class="js-qty" type="text" name="adults" value="2" data-mask="00"/>
                                                </div>
                                            </div>
                                            <div class="mx-2">
                                                <label class="label-text">Children</label>
                                                <div class="qty">
                                                    <input class="js-qty" type="text" name="children" value="2" data-mask="00"/>
                                                </div>
                                            </div>
                                        </div>
                                        <div class="form-group col-12 col-xl-2 d-flex">
                                            <button class="btn btn-secondary btn--round align-self-center" type="submit">Search
                                            </button>
                                        </div>
                                    </div>
                                </form>
                            </div>
                            <div class="tab-pane" id="tabFlight" role="tabpanel">
                                <form class="search-hotels__form" action="#" method="POST">
                                    <div class="row">
                                        <div class="col-12 col-xl-6">
                                            <div class="row">
                                                <div class="form-group col-12 col-sm-6 border-0">
                                                    <label class="label-text">Flying from</label>
                                                    <div class="d-flex"><span class="select-local d-flex"><i class="icon icon-label mr-2 text-secondary"></i>
                                  <select class="select2 js-select-locality" name="flying_from" data-placeholder="Orly airport">
                                    <option value="Gatwick Airport">Gatwick Airport</option>
                                    <option value="Saskatoon John G. Diefenbaker International Airport">Saskatoon John G. Diefenbaker International Airport</option>
                                    <option value="London Airport">London Airport</option>
                                    <option value="Fort St John Airport">Fort St John Airport</option>
                                    <option value="Rimouski Airport">Rimouski Airport</option>
                                    <option value="Sioux Lookout Airport">Sioux Lookout Airport</option>
                                    <option value="Whale Cove Airport">Whale Cove Airport</option>
                                  </select></span>
                                                    </div>
                                                </div>
                                                <div class="form-group col-12 col-sm-6 border-0">
                                                    <label class="label-text">Flying to</label>
                                                    <div class="d-flex"><span class="select-local d-flex"><i class="icon icon-label mr-2 text-secondary"></i>
                                  <select class="select2 js-select-locality" name="flying_to" data-placeholder="Orly airport">
                                    <option value="Gatwick Airport">Gatwick Airport</option>
                                    <option value="Saskatoon John G. Diefenbaker International Airport">Saskatoon John G. Diefenbaker International Airport</option>
                                    <option value="London Airport">London Airport</option>
                                    <option value="Fort St John Airport">Fort St John Airport</option>
                                    <option value="Rimouski Airport">Rimouski Airport</option>
                                    <option value="Sioux Lookout Airport">Sioux Lookout Airport</option>
                                    <option value="Whale Cove Airport">Whale Cove Airport</option>
                                  </select></span>
                                                    </div>
                                                </div>
                                            </div>
                                        </div>
                                        <div class="form-group col-12 col-sm-7 col-md-6 col-xl-4 d-flex flex-wrap justify-content-center">
                                            <div class="form-group-date text-nowrap text-center">
                                                <div class="d-inline-block">
                                                    <label class="label-text">Departing</label>
                                                    <div class="input-date-group position-relative"><i class="mr-2 icon icon-calendar text-secondary"></i>
                                                        <input class="form-control js-input-date hidden " id="flyingDate1" type="text" name="departing" required="required"/>
                                                        <label class="form-control date" for="flyingDate1"></label>
                                                    </div>
                                                </div><i class="bullet mx-4"></i>
                                                <div class="d-inline-block">
                                                    <label class="label-text">Returning</label>
                                                    <div class="input-date-group position-relative"><i class="mr-2 icon icon-calendar text-secondary"></i>
                                                        <input class="form-control js-input-date hidden " id="flyingDateTo1" type="text" name="returning" required="required"/>
                                                        <label class="form-control date" for="flyingDateTo1"></label>
                                                    </div>
                                                </div>
                                            </div>
                                        </div>
                                        <div class="form-group col-12 col-sm-5 col-md-3 col-xl-2 d-flex justify-content-center">
                                            <div class="mx-2">
                                                <label class="label-text">Adults</label>
                                                <div class="qty">
                                                    <input class="js-qty" type="text" name="adults" value="2" data-mask="00"/>
                                                </div>
                                            </div>
                                            <div class="mx-2">
                                                <label class="label-text">Children</label>
                                                <div class="qty">
                                                    <input class="js-qty" type="text" name="children" value="2" data-mask="00"/>
                                                </div>
                                            </div>
                                        </div>
                                        <div class="form-group col-12 col-md-3 col-xl-12 d-flex">
                                            <button class="btn btn-secondary btn--round align-self-center" type="submit">Search
                                            </button>
                                        </div>
                                    </div>
                                </form>
                            </div>
                            <div class="tab-pane" id="tabFlightHotel" role="tabpanel">
                                <form class="search-hotels__form" action="#" method="GET" data-toggle="validator">
                                    <div class="row">
                                        <div class="col-12 col-sm-12 mb-2">
                                            <div class="row">
                                                <div class="form-group col-12 col-lg-4 border-0">
                                                    <label class="label-text">Place or name of the hotel</label>
                                                    <div class="d-flex"><span class="select-local d-flex"><i class="icon icon-label mr-2 text-secondary"></i>
                                  <select class="select2 js-select-locality" name="search_hotel" data-placeholder="Enter here a place or hotel">
                                    <option value="Resort Spa Hotel">Resort Spa Hotel</option>
                                    <option value="Black Pearl">Black Pearl</option>
                                    <option value="Marsol">Marsol</option>
                                    <option value="Macronissos Village Bungalows">Macronissos Village Bungalows</option>
                                    <option value="Iberotel Aquamarine Resort">Iberotel Aquamarine Resort</option>
                                  </select></span>
                                                    </div>
                                                </div>
                                                <div class="form-group col-12 col-sm-6 col-lg-4 border-0">
                                                    <label class="label-text">Flying from</label>
                                                    <div class="d-flex"><span class="select-local d-flex"><i class="icon icon-label mr-2 text-secondary"></i>
                                  <select class="select2 js-select-locality" name="flying_from" data-placeholder="Orly airport">
                                    <option value="Gatwick Airport">Gatwick Airport</option>
                                    <option value="Saskatoon John G. Diefenbaker International Airport">Saskatoon John G. Diefenbaker International Airport</option>
                                    <option value="London Airport">London Airport</option>
                                    <option value="Fort St John Airport">Fort St John Airport</option>
                                    <option value="Rimouski Airport">Rimouski Airport</option>
                                    <option value="Sioux Lookout Airport">Sioux Lookout Airport</option>
                                    <option value="Whale Cove Airport">Whale Cove Airport</option>
                                  </select></span>
                                                    </div>
                                                </div>
                                                <div class="form-group col-12 col-sm-6 col-lg-4 border-0">
                                                    <label class="label-text">Flying to</label>
                                                    <div class="d-flex"><span class="select-local d-flex"><i class="icon icon-label mr-2 text-secondary"></i>
                                  <select class="select2 js-select-locality" name="flying_to" data-placeholder="Orly airport">
                                    <option value="Gatwick Airport">Gatwick Airport</option>
                                    <option value="Saskatoon John G. Diefenbaker International Airport">Saskatoon John G. Diefenbaker International Airport</option>
                                    <option value="London Airport">London Airport</option>
                                    <option value="Fort St John Airport">Fort St John Airport</option>
                                    <option value="Rimouski Airport">Rimouski Airport</option>
                                    <option value="Sioux Lookout Airport">Sioux Lookout Airport</option>
                                    <option value="Whale Cove Airport">Whale Cove Airport</option>
                                  </select></span>
                                                    </div>
                                                </div>
                                            </div>
                                        </div>
                                        <div class="col-12 col-sm-12 col-lg-8">
                                            <div class="row">
                                                <div class="form-group col-12 col-md-6 d-flex justify-content-center mb-3">
                                                    <div class="form-group-date text-nowrap text-center">
                                                        <div class="d-inline-block">
                                                            <label class="label-text">Departing</label>
                                                            <div class="input-date-group position-relative"><i class="mr-2 icon icon-calendar text-secondary"></i>
                                                                <input class="form-control js-input-date hidden " id="flyingDate2" type="text" name="departing" required="required"/>
                                                                <label class="form-control date" for="flyingDate2"></label>
                                                            </div>
                                                        </div><i class="bullet mx-4"></i>
                                                        <div class="d-inline-block">
                                                            <label class="label-text">Returning</label>
                                                            <div class="input-date-group position-relative"><i class="mr-2 icon icon-calendar text-secondary"></i>
                                                                <input class="form-control js-input-date hidden " id="flyingDateTo2" type="text" name="returning" required="required"/>
                                                                <label class="form-control date" for="flyingDateTo2"></label>
                                                            </div>
                                                        </div>
                                                    </div>
                                                </div>
                                                <div class="form-group col-12 col-md-6 d-flex justify-content-center">
                                                    <div class="form-group-date text-nowrap text-center">
                                                        <div class="d-inline-block">
                                                            <label class="label-text">Check in date</label>
                                                            <div class="input-date-group position-relative"><i class="mr-2 icon icon-calendar text-secondary"></i>
                                                                <input class="form-control js-input-date hidden " id="hotelDate2" type="text" name="hotel_date_from" required="required"/>
                                                                <label class="form-control date" for="hotelDate2"></label>
                                                            </div>
                                                        </div><i class="bullet mx-4"></i>
                                                        <div class="d-inline-block">
                                                            <label class="label-text">Check out date</label>
                                                            <div class="input-date-group position-relative"><i class="mr-2 icon icon-calendar text-secondary"></i>
                                                                <input class="form-control js-input-date hidden " id="hotelDateTo2" type="text" name="hotel_date_to" required="required"/>
                                                                <label class="form-control date" for="hotelDateTo2"></label>
                                                            </div>
                                                        </div>
                                                    </div>
                                                </div>
                                            </div>
                                        </div>
                                        <div class="form-group col-12 col-lg-4 d-flex justify-content-center">
                                            <div class="mx-2">
                                                <label class="label-text">Rooms</label>
                                                <div class="qty">
                                                    <input class="js-qty" type="text" name="rooms" value="2" data-mask="00"/>
                                                </div>
                                            </div>
                                            <div class="mx-2">
                                                <label class="label-text">Adults</label>
                                                <div class="qty">
                                                    <input class="js-qty" type="text" name="adults" value="2" data-mask="00"/>
                                                </div>
                                            </div>
                                            <div class="mx-2">
                                                <label class="label-text">Children</label>
                                                <div class="qty">
                                                    <input class="js-qty" type="text" name="children" value="2" data-mask="00"/>
                                                </div>
                                            </div>
                                        </div>
                                        <div class="form-group col-lg-12 d-flex">
                                            <button class="btn btn-secondary btn--round align-self-center" type="submit">Search
                                            </button>
                                        </div>
                                    </div>
                                </form>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
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
                            <div class="swiper-slide">
                                <div class="card-intro d-block" style="background-image: url(img/hotels/item-2.jpg);">
                                    <div class="card-price"><span class="mr-1">from</span><span class="count text-secondary">300$</span></div>
                                    <div class="card-intro__footer">
                                        <h4 class="h4 f-primary">Black Pearl</h4>
                                        <div class="card-intro__local d-flex align-items-center"><i class="icon icon-label mr-1"></i><span>Cuba</span></div>
                                        <div class="card-intro__rating">
                                            <select class="js-rating-stat" data-current-rating="4">
                                                <option value="1">1</option>
                                                <option value="2">2</option>
                                                <option value="3">3</option>
                                                <option value="4" selected="selected">4</option>
                                                <option value="5">5</option>
                                            </select>
                                        </div>
                                    </div>
                                    <div class="card-hover">
                                        <h3 class="h3 text-uppercase">Black Pearl</h3><a class="btn btn-light btn--round card-hover__view" href="category.html">VIEW</a>
                                    </div>
                                </div>
                            </div>
                            <div class="swiper-slide">
                                <div class="card-intro d-block" style="background-image: url({{ asset('images/hotels/item-3.jpg') }});">
                                    <div class="card-price"><span class="mr-1">from</span><span class="count text-secondary">300$</span></div>
                                    <div class="card-intro__footer">
                                        <h4 class="h4 f-primary">Marsol</h4>
                                        <div class="card-intro__local d-flex align-items-center"><i class="icon icon-label mr-1"></i><span>Costa Brava, Spain</span></div>
                                        <div class="card-intro__rating">
                                            <select class="js-rating-stat" data-current-rating="4">
                                                <option value="1">1</option>
                                                <option value="2">2</option>
                                                <option value="3">3</option>
                                                <option value="4" selected="selected">4</option>
                                                <option value="5">5</option>
                                            </select>
                                        </div>
                                    </div>
                                    <div class="card-hover">
                                        <h3 class="h3 text-uppercase">Marsol</h3><a class="btn btn-light btn--round card-hover__view" href="category.html">VIEW</a>
                                    </div>
                                </div>
                            </div>
                            <div class="swiper-slide">
                                <div class="card-intro d-block" style="background-image: url({{ asset('images/hotels/item-4.jpg') }});">
                                    <div class="card-price"><span class="mr-1">from</span><span class="count text-secondary">300$</span></div>
                                    <div class="card-intro__footer">
                                        <h4 class="h4 f-primary">Macronissos Village Bungalows</h4>
                                        <div class="card-intro__local d-flex align-items-center"><i class="icon icon-label mr-1"></i><span>Ayia Napa, Cyprus</span></div>
                                        <div class="card-intro__rating">
                                            <select class="js-rating-stat" data-current-rating="4">
                                                <option value="1">1</option>
                                                <option value="2">2</option>
                                                <option value="3">3</option>
                                                <option value="4" selected="selected">4</option>
                                                <option value="5">5</option>
                                            </select>
                                        </div>
                                    </div>
                                    <div class="card-hover">
                                        <h3 class="h3 text-uppercase">Macronissos Village Bungalows</h3><a class="btn btn-light btn--round card-hover__view" href="category.html">VIEW</a>
                                    </div>
                                </div>
                            </div>
                            <div class="swiper-slide">
                                <div class="card-intro d-block" style="background-image: url({{ asset('images/hotels/item-5.jpg') }});">
                                    <div class="card-price"><span class="mr-1">from</span><span class="count text-secondary">300$</span></div>
                                    <div class="card-intro__footer">
                                        <h4 class="h4 f-primary">Iberotel Aquamarine Resort</h4>
                                        <div class="card-intro__local d-flex align-items-center"><i class="icon icon-label mr-1"></i><span>Hurghada, Egypt</span></div>
                                        <div class="card-intro__rating">
                                            <select class="js-rating-stat" data-current-rating="4">
                                                <option value="1">1</option>
                                                <option value="2">2</option>
                                                <option value="3">3</option>
                                                <option value="4" selected="selected">4</option>
                                                <option value="5">5</option>
                                            </select>
                                        </div>
                                    </div>
                                    <div class="card-hover">
                                        <h3 class="h3 text-uppercase">Iberotel Aquamarine Resort</h3><a class="btn btn-light btn--round card-hover__view" href="category.html">VIEW</a>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>
                    <div class="intro__hotels-controls display-none">
                        <button class="btn btn-primary btn-nav btn-nav--left js-prev" type="button"><i class="fa fa-angle-left"></i></button>
                        <button class="btn btn-primary btn-nav btn-nav--right js-next" type="button"><i class="fa fa-angle-right"></i></button>
                    </div>
                </div>
            </div>
        </div>
    </section>


    <div class="page-content">
        <div class="container">
            <div class="row">
                <div class="col-12 text-center">
                    <div class="section-header">
                        <h2 class="h2">Popular destinations around the world</h2>
                        <div class="section-header__stars mb-3"><i class="fa fa-star"></i><i class="fa fa-star center"></i><i class="fa fa-star"></i></div>
                        <p class="fz-norm mb-0"><em>The best choice of hotels we have</em></p>
                    </div>
                </div>
            </div>

            <div class="row">
            <div class="page-content">
        <div class="container">
          <div class="col-12 col-lg-6 float-lg-left px-0 pr-lg-4 mb-3"><a href="contacts.html"><img class="img-fluid mx-auto" src="img/upload/14.jpg" alt="#"></a></div>
          <ul class="d-flex justify-content-between">
            <li>
              <h5 class="fw-bold">Your Travel World</h5>
            </li>
            <li><a class="fw-bold text-dark text-nowrap" href="#"><i class="fa fa-file-text-o mr-2"></i><span>16 Article</span></a></li>
          </ul>
          <ul class="social-links d-flex mb-3">
            <li class="mr-3"><a href="#" target="_blank"><i class="fa fa-twitter"></i></a></li>
            <li class="mr-3"><a href="#" target="_blank"><i class="fa fa-facebook"></i></a></li>
            <li class="mr-3"><a href="#" target="_blank"><i class="fa fa-vimeo"></i></a></li>
            <li class="mr-3"><a href="#" target="_blank"><i class="fa fa-google-plus"></i></a></li>
            <li class="mr-3"><a href="#" target="_blank"><i class="fa fa-instagram"></i></a></li>
            <li class="mr-3"><a href="#" target="_blank"><i class="fa fa-rss"></i></a></li>
          </ul>
          <p>There are many variations of passages of Lorem Ipsum available, but the majority have suffered alteration in some form, by injected humour, or randomised words which don't look even slightly believable. If you are going to use a passage of Lorem Ipsum, you need to be sure there isn't anything embarrassing hidden in the middle of text. All the Lorem Ipsum generators on the Internet tend to repeat predefined chunks as necessary, making this the first true generator on the Internet. It uses a dictionary of over 200 Latin words, combined with a handful of model sentence structures, to generate Lorem Ipsum which looks reasonable. The generated Lorem Ipsum is therefore always free from repetition, injected humour, or non-characteristic words etc. There are many variations of passages of Lorem Ipsum available, but the majority have suffered alteration in some form, by injected humour, or randomised words which don't look even slightly believable. If you are going to use a passage of Lorem Ipsum, you need to be sure there isn't anything embarrassing hidden in the middle of text. All the Lorem Ipsum generators on the Internet tend to repeat predefined chunks as necessary, making this the first true generator on the Internet. It uses a dictionary of over 200 Latin words, combined with a handful of model sentence structures, to generate Lorem Ipsum which looks reasonable. The generated Lorem Ipsum is therefore always free from repetition, injected humour, or non-characteristic words etc. It uses a dictionary of over 200 Latin words, combined with a handful of model sentence structures, to generate Lorem Ipsum which looks reasonable. The generated Lorem Ipsum is therefore always free from repetition.The generated Lorem Ipsum is therefore always free from repetition, injected humour, or non-characteristic words etc. It uses a dictionary of over 200 Latin words, combined with a handful of model sentence structures, to generate Lorem Ipsum which looks reasonable. The generated Lorem Ipsum is therefore always free from repetition.</p>
          <p>There are many variations of passages of Lorem Ipsum available, but the majority have suffered alteration in some form, by injected humour, or randomised words which don't look even slightly believable. If you are going to use a passage of Lorem Ipsum, you need to be sure there isn't anything embarrassing hidden in the middle of text. All the Lorem Ipsum generators on the Internet tend to repeat predefined chunks as necessary, making this the first true generator on the Internet. It uses a dictionary of over 200 Latin words, combined with a handful of model sentence structures, to generate Lorem Ipsum which looks reasonable. The generated Lorem Ipsum is therefore always free from repetition, injected humour, or non-characteristic words etc.</p>
          <p>I am a business owner myself. I coach, blog, maintain a website and develop curricula for leadership-development workshops. I use social media, including Facebook, Twitter and LinkedIn. By far, my biggest distraction was Facebook on my iPhone.There are many variations of passages of Lorem Ipsum available, but the majority have suffered alteration in some form, by injected humour, or randomised words which don't look even slightly believable. If you are going to use a passage of Lorem Ipsum, you need to be sure there isn't anything embarrassing hidden in the middle of text. All the Lorem Ipsum generators on the Internet tend to repeat predefined chunks as necessary, making this the first true generator on the Internet. It uses a dictionary of over 200 Latin words, combined with a handful of model sentence structures, to generate Lorem Ipsum which looks reasonable. The generated Lorem Ipsum is therefore always free from repetition, injected humour, or non-characteristic words etc.</p>
          <p class="text-right"><a class="btn btn-btn btn-dark" href="contacts.html" role="button">Our contacts</a>
          </p>
        </div>
        <button class="btn btn-primary btn-nav btn-nav--up js-scroll-up" type="button"><i class="fa fa-angle-up"></i></button>
      </div>
            </div>

            <div class="row">
                <div class="col-12 text-center">
                    <div class="section-header">
                        <h2 class="h2">The opportunities we provide</h2>
                        <div class="section-header__stars mb-3"><i class="fa fa-star"></i><i class="fa fa-star center"></i><i class="fa fa-star"></i></div>
                        <p class="fz-norm mb-0"><em>Explore the features and benefits of our service</em></p>
                    </div>
                </div>

                <!-- Services Section Start -->
                @for($i=0; $i<6; $i++)
                    <div class="col-12 col-sm-6 col-lg-4 d-flex mb-4">
                        @include('layouts.servicesDesign')
                    </div>
                @endfor
                <div class="col-12 page-section__more text-center">
                    <button class="btn btn-secondary btn--round btn-load" type="button">Show more<i class="fa fa-spin"></i>
                    </button>
                </div>
                <!-- Services Section End -->

            </div>
        </div>
        <button class="btn btn-primary btn-nav btn-nav--up js-scroll-up bg-style" type="button"><i class="fa fa-angle-up"></i></button>
    </div>
@endsection