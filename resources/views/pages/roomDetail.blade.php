@extends('layouts.app')

@section('mainContent')
    <div class="page-content">
        <div class="container">
            <div class="row">

                <aside class="sidebar col-lg-3 display-none">
                    <!-- Room Detail Sidebar Start -->
                     @include('layouts.roomDetailSidebar')
                    <!-- Room Detail Sidebar End -->
                </aside>

                <div class="col-lg-12" id="barba-wrapper">
                    <div class="barba-container">
                        <nav class="hotel-nav">
                            <ul class="hotel-nav__menu nav nav-tabs" role="tablist">
                                <li class="nav-item d-flex col-12 col-sm p-0"><a class="nav-link active" data-toggle="tab" href="#hotel" role="tab" aria-controls="hotel" aria-selected="false"><span>Hotel information and room rates</span></a>
                                </li>
                                <li class="nav-item d-flex col-12 col-sm p-0"><a class="nav-link" data-toggle="tab" href="#hotelServices" role="tab" aria-controls="hotelServices" aria-selected="true"><span>Facilities &amp; Services</span></a>
                                </li>
                                <li class="nav-item d-flex col-12 col-sm p-0"><a class="nav-link" data-toggle="tab" href="#hotelAccommodation" role="tab" aria-controls="hotelAccommodation" aria-selected="true"><span>Book Room</span></a>
                                </li>
                                <li class="nav-item d-flex col-12 col-sm p-0"><a class="nav-link" data-toggle="tab" href="#hotelReviews" role="tab" aria-controls="hotelReviews" aria-selected="true"><span>Guest reviews</span></a>
                                </li>
                            </ul>
                        </nav>
                        <div class="tab-content">
                            <div class="tab-pane active show" id="hotel" role="tabpanel">
                                <section>
                                    <h3 class="fw-md mb-1">{{ $room->name }}</h3>
                                    <ul class="hotel-title mb-3">
                                        <li class="stars mb-2 display-none">
                                            <div class="rating">
                                                <select class="js-rating-stat" data-current-rating="5">
                                                    <option value="1">1</option>
                                                    <option value="2">2</option>
                                                    <option value="3">3</option>
                                                    <option value="4">4</option>
                                                    <option value="5" selected="selected">5</option>
                                                </select>
                                            </div>
                                        </li>
                                        <li class="d-flex">
                                        <?php 
                                        $hotel_address = getspecficedata($hotelId,'address','id','hotels');
                                        $hotel_name = getspecficedata($hotelId,'name','id','hotels');

                                        ?>
                                            <div class="media-object"><i class="fa fa-location"></i></div>
                                            <div class="local"><span>{{ $hotel_address }}</span>
                                                <!--<i class="bullet mx-2"></i>-->
                                                <a  onclick="mapopenmodal('{{$hotel_address}}','{{$hotel_name}}')">Show on map</a>
                                            </div>
                                        </li>
                                    </ul>
                                    <div class="hotel-gallery">
                                        <div class="hotel-gallery__carousel swiper-container js-hotel-carousel">
                                            <div class="swiper-wrapper">
                                                @foreach($room->images as $images)
                                                <div class="swiper-slide"><img class="img-fluid img-cover" src="{{ asset('uploads/hotel/room_images/'.$images->image) }}" alt="#"/>
                                                </div>
                                                @endforeach
                                                
                                                
                                            </div>
                                            <div class="hotel-gallery__controls"><a class="hotel-gallery__arrow shadow-sm js-prev" role="button"><i class="icon" style="color: #003580;"><svg xmlns="http://www.w3.org/2000/svg" viewbox="0 0 44 44"><path d="M22.119 44.237C9.922 44.237 0 34.315 0 22.119S9.922.001 22.119.001s22.119 9.922 22.119 22.118-9.924 22.118-22.119 22.118zm0-42.736C10.75 1.501 1.5 10.75 1.5 22.119c0 11.368 9.25 20.618 20.619 20.618s20.619-9.25 20.619-20.618c0-11.369-9.25-20.618-20.619-20.618z"/><path d="M24.667 29.884a.74.74 0 0 1-.53-.22l-7.328-7.334a.752.752 0 0 1 0-1.061l7.328-7.333a.75.75 0 1 1 1.061 1.061L18.4 21.8l6.798 6.805a.752.752 0 0 1 0 1.061.75.75 0 0 1-.531.218z"/></svg></i></a><a class="hotel-gallery__arrow shadow-sm js-next" role="button"><i class="icon" style="    color: #003580;"><svg xmlns="http://www.w3.org/2000/svg" viewbox="0 0 44 44"><path d="M22.118 44.236C9.922 44.236 0 34.314 0 22.118S9.922 0 22.118 0s22.118 9.922 22.118 22.118-9.922 22.118-22.118 22.118zm0-42.736C10.75 1.5 1.5 10.749 1.5 22.118c0 11.368 9.25 20.618 20.618 20.618 11.37 0 20.618-9.25 20.618-20.618 0-11.369-9.248-20.618-20.618-20.618z"/><path d="M19.341 29.884a.75.75 0 0 1-.53-1.281l6.796-6.804-6.796-6.803a.75.75 0 1 1 1.061-1.061l7.325 7.333a.75.75 0 0 1 0 1.061l-7.325 7.333a.742.742 0 0 1-.531.222z"/></svg></i></a></div>
                                        </div>
                                        <div class="hotel-gallery__thumbs swiper-container js-hotel-carousel-thumbs">
                                            <div class="swiper-wrapper">
                                            @foreach($room->images as $images)
                                            <div class="swiper-slide"><a class="hotel-gallery__thumb js-gallery-link" href="{{ asset('images/upload/10.jpg') }}" data-description="View of the backyard parking area as seen from the upstairs unit deck. There is one parking space per unit (one for upstairs, one for downstairs, and one for us in the tiny house in the back!)">
                                                        <img class="img-cover" src="{{ asset('images/upload/10.jpg') }}" alt="#"/></a>
                                                </div>
                                            @endforeach
                                               
                                            </div>
                                        </div>
                                    </div>
                                    <hr>
                                    <div class="row">
                                        <div class="col-12 col-md-12 d-flex">
                                            <div class="hotel__intro hotel-card w-100">
                                                <section class="pb-4">
                                                    <h5 class="d-flex align-items-center text-primary mb-3"><i class="fa fa-badge mr-2"></i>One of the best hotels in Pakistan by customer recall</h5>
                                                <p>{{ getspecficedata($hotelId,'description','id','hotels') }}</p>
                                                   
                                                </section>
                                                <section>
                                                    <h5>Popular services in the hotel</h5>
                                                   
                                                    <ul class="hotel-package__options list-inline">
                                                               @foreach($room->facilities as $fa)
                                                                <li><span>{{$fa->facility_name}}</span></li>
                                                               @endforeach
                                       
                                                            </ul>
                                                    
                                                </section>
                                            </div>
                                        </div>
                                        <div class="col-12 col-md-4 d-flex display-none">
                                            <div class="hotel-stats hotel-card w-100">
                                                <div class="row">
                                                    <div class="col-12 col-sm-auto col-md-12 display-none">
                                                        <h3 class="mb-3">Guests like:</h3>
                                                        <ul class="hotel-stats__view mb-4">
                                                            <li class="item d-flex align-items-center">
                                                                <div class="media-object"><i class="icon icon-check-button mr-2"></i></div>
                                                                <div class="desc">
                                                                    <div class="fw-bold mb-1">Convenient location</div>
                                                                    <div class="amount">123 reviews</div>
                                                                </div>
                                                            </li>
                                                            <li class="item d-flex align-items-center">
                                                                <div class="media-object"><i class="icon icon-check-button mr-2"></i></div>
                                                                <div class="desc">
                                                                    <div class="fw-bold mb-1">View from window</div>
                                                                    <div class="amount">95 reviews</div>
                                                                </div>
                                                            </li>
                                                            <li class="item d-flex align-items-center">
                                                                <div class="media-object"><i class="icon icon-check-button mr-2"></i></div>
                                                                <div class="desc">
                                                                    <div class="fw-bold mb-1">Cleanliness of the room</div>
                                                                    <div class="amount">1325 reviews</div>
                                                                </div>
                                                            </li>
                                                            <li class="item d-flex align-items-center">
                                                                <div class="media-object"><i class="icon icon-check-button mr-2"></i></div>
                                                                <div class="desc">
                                                                    <div class="fw-bold mb-1">Buffet breakfast</div>
                                                                    <div class="amount">1890 reviews</div>
                                                                </div>
                                                            </li>
                                                        </ul>
                                                    </div>
                                                    <div class="col-12 col-sm col-md-12 display-none">
                                                        <div class="hotel-stats__like d-flex flex-wrap justify-content-between align-items-center mb-3 ">
                                                            <div class="title mr-3 fw-bold">Guest ratings</div>
                                                            <div class="likes"><i class="icon icon-thumbs-up mr-2"></i><span class="amount">8,2 / 10</span></div>
                                                        </div>
                                                        <ul class="hotel-stats__progress js-point-progress display-none">
                                                            <li class="item mb-1">
                                                                <div class="title">Comfort</div>
                                                                <div class="d-flex align-items-center">
                                                                    <div class="progress progress--sm">
                                                                        <div class="progress-bar bg-secondary" role="progressbar" style="width: 0%" aria-valuenow="82" aria-valuemin="0" aria-valuemax="100">
                                                                        </div>
                                                                    </div><span>8.2</span>
                                                                </div>
                                                            </li>
                                                            <li class="item mb-1">
                                                                <div class="title">Facilities</div>
                                                                <div class="d-flex align-items-center">
                                                                    <div class="progress progress--sm">
                                                                        <div class="progress-bar bg-secondary" role="progressbar" style="width: 0%" aria-valuenow="93" aria-valuemin="0" aria-valuemax="100">
                                                                        </div>
                                                                    </div><span>9.3</span>
                                                                </div>
                                                            </li>
                                                            <li class="item mb-1">
                                                                <div class="title">Staff</div>
                                                                <div class="d-flex align-items-center">
                                                                    <div class="progress progress--sm">
                                                                        <div class="progress-bar bg-secondary" role="progressbar" style="width: 0%" aria-valuenow="76" aria-valuemin="0" aria-valuemax="100">
                                                                        </div>
                                                                    </div><span>7.6</span>
                                                                </div>
                                                            </li>
                                                            <li class="item mb-1">
                                                                <div class="title">Food</div>
                                                                <div class="d-flex align-items-center">
                                                                    <div class="progress progress--sm">
                                                                        <div class="progress-bar bg-secondary" role="progressbar" style="width: 0%" aria-valuenow="85" aria-valuemin="0" aria-valuemax="100">
                                                                        </div>
                                                                    </div><span>8.5</span>
                                                                </div>
                                                            </li>
                                                            <li class="item mb-1">
                                                                <div class="title">Price-quality ratio</div>
                                                                <div class="d-flex align-items-center">
                                                                    <div class="progress progress--sm">
                                                                        <div class="progress-bar bg-secondary" role="progressbar" style="width: 0%" aria-valuenow="82" aria-valuemin="0" aria-valuemax="100">
                                                                        </div>
                                                                    </div><span>8.2</span>
                                                                </div>
                                                            </li>
                                                        </ul>
                                                        <a class="btn btn-secondary btn--round btn-block ml-sm-0" href="booking-traveler.html" role="button">
                                                            book now
                                                        </a>
                                                    </div>
                                                </div>
                                            </div>
                                        </div>
                                    </div>
                                    <form class="hotel-card hotel-status display-none" action="#" method="POST" data-toggle="validator">
                                        <h4>Seat availability</h4>
                                        <div class="row">
                                            <div class="col-12 text-center text-xl-left col-xl">
                                                <div class="row">
                                                    <div class="form-group col-12 col-sm-4">
                                                        <label class="label-text">Check in date</label>
                                                        <div class="input-date-group position-relative"><i class="mr-2 icon icon-calendar text-secondary"></i>
                                                            <input class="form-control js-input-date display-none " id="statusDateFrom" type="text" name="date_from" required="required"/>
                                                            <label class="form-control date" for="statusDateFrom"></label>
                                                        </div><span>from 14:00</span>
                                                    </div>
                                                    <div class="form-group col-12 col-sm-4">
                                                        <label class="label-text">Check out date</label>
                                                        <div class="input-date-group position-relative"><i class="mr-2 icon icon-calendar text-secondary"></i>
                                                            <input class="form-control js-input-date display-none " id="statusDateTo" type="text" name="date_to" required="required"/>
                                                            <label class="form-control date" for="statusDateTo"></label>
                                                        </div><span>13 Nights</span>
                                                    </div>
                                                    <div class="form-group col-12 col-sm-4">
                                                        <label class="text-label">Guests:</label><span class="position-relative">
                                  <input class="form-control" type="display-none" name="persons" value="2 Adults, 1 child"><span class="form-control d-inline pointer">2 Adults, 1 child</span></span>
                                                    </div>
                                                </div>
                                            </div>
                                            <div class="col-auto mx-auto">
                                                <button class="btn btn-light btn--round" type="submit">change search parameters
                                                </button>
                                            </div>
                                        </div>
                                    </form>
                                    <div class="hotel-card hotel-items">
                                        <div class="cart-header">
                                            <h4 class="card-title">Available rooms</h4>
                                            <hr>
                                        </div>
                                        <div class="row">
                                            <div class="col-12 col-md-12 order-1 order-md-0">

                    
                                               
                                               
                                                
                                              @foreach($allrooms as $aroom)
                                                <div class="hotel-package mb-4">
                                                    <div class="hotel-package__row row mb-4">
                                                        <div class="col-6 pr-md-1"><a class="hotel-package__img d-block" href="{{ route('roomsDetails',$aroom->id) }}"><img class="img-fluid" src="{{ asset('uploads/hotel/room_images/'.$aroom->images[0]->image) }}" alt="#"/></a></div>
                                                        <div class="col-6">
                                                                    <h4 class="hotel-package__title d-inline-block">{{ $aroom->name }}</h4>
                                                                    <ul class="hotel-package__props">
                                                                    <li class="mb-2 price">
                                                                            <span class="title mr-2">Capcity:</span>
                                                                            <span class="d-inline-block display-none pointer point-fade sale" data-toggle="popover" data-content="And here's some amazing content. It's very engaging. Right?" data-trigger="hover" data-placement="bottom">
                                                                            <i class="hint" data-title="?"></i>
                                                                    </span><span class="cost fw-bold">{{ $aroom->room_capacity}} Persons </span>
                                                                        <li class="mb-2 price">
                                                                            <span class="title mr-2">Price for night:</span>
                                                                            <span class="d-inline-block display-none pointer point-fade sale" data-toggle="popover" data-content="And here's some amazing content. It's very engaging. Right?" data-trigger="hover" data-placement="bottom">
                                                                            <i class="hint" data-title="?"></i>
                                                                    </span><span class="cost fw-bold">Rs. {{ $aroom->room_price }} </span>
                                                                        </li>
                                                                        <li class="mb-2 prepayment"><span class="title mr-1">Room Type:</span><span class="fw-bold">{{ $aroom->room_type }}</span></li>
                                                                        <li class="mb-2 guests"><span class="title mr-1">Status :</span> @if($aroom->status==1) <span class="badge badge-success"> Active</span> @else <span class="badge badge-danger" > InActive </span> @endif </li>
                                                                    </ul>
                                                                    <button class="btn-more fw-bold text-primary pointer point-fade js-hotel-show-more" type="button">More info +</button>
                                                                </div>
                                                    </div>
                                                    <div class="collapse js-addition">
                                                        <div class="hotel-package__more">
                                                            <p class="mb-2">{{ $aroom->description }}</p>
                                                            <!-- <ul class="hotel-package__menu">
                                                                <li class="d-flex align-items-center mb-2"><i class="mr-2 icon icon-coffee-cup text-primary"></i><span class="mt-1 fw-sm">Breakfast is included in the room rate.</span></li>
                                                            </ul> -->
                                                            <h5 class="mb-3 fw-bold">Room Facilities</h5>
                                                            <ul class="hotel-package__options list-inline">
                                                               @foreach($aroom->facilities as $fa)
                                                                <li><span>{{$fa->facility_name}}</span></li>
                                                               @endforeach
                                       
                                                            </ul>
                                                        </div>
                                                    </div>
                                                    <hr class="hr-bottom my-0">
                                                </div>
                                                  @endforeach
                                                  <div>
                                                    {{ $allrooms->links() }}
                                                    </div>
                                            </div>
                                            <div class="col-12 col-md-4 hotel-items__check display-none">
                                                <div class="py-3 js-sticky-top">
                                                    <p class="mb-4">You book 3 room for</p>
                                                    <ul class="text-danger mb-4">
                                                        <li class="price">3 976 €</li>
                                                        <li>You are lucky! Today, this room has a special price!</li>
                                                    </ul>
                                                    <p class="mb-2"><a class="btn btn-secondary btn--round btn-order" href="booking-traveler.html" role="button">book now</a>
                                                    </p>
                                                    <p>This is your fourth trip. Book 1 more trip and get a 10% discount!</p>
                                                </div>
                                            </div>
                                        </div>
                                    </div>
                                </section>
                            </div>
                            <div class="tab-pane" id="hotelServices" role="tabpanel">
                                <section>
                                    <h3 class="fw-md">Facilities & Services</h3>
                                    <hr class="mb-4">
                                    <div class="hotel-card">
                                        <h5>Most popular facilities</h5>
                                        <ul class="hotel-facilities d-flex flex-wrap flex-column flex-md-row mb-3">
                                        @foreach($room->facilities as $fa)
                                        <li class="mr-2"><i class="align-middle icon text-secondary icon-wifi mr-2"></i><span class="align-middle mr-2">{{ $fa->facility_name }}</span><i class="bullet d-none d-md-inline-block"></i></li>
                                                               @endforeach
                                       
                                           
                                        </ul>
                                        <div class="row display-none">
                                            <div class="col-12 col-sm-6">
                                                <div class="hotel-service mb-4">
                                                    <div class="hotel-service__title d-flex mb-3"><i class="icon icon-dinner mr-2"></i>
                                                        <h4 class="h4">Food and Beverages</h4>
                                                    </div>
                                                    <ul class="hotel-service__list">
                                                        <li class="d-flex"><i class="icon icon-check-button text-primary"></i>
                                                            <div class="d-block"><span>Wine / Champagne</span>
                                                            </div>
                                                        </li>
                                                        <li class="d-flex"><i class="icon icon-check-button text-primary"></i>
                                                            <div class="d-block"><span>Special diet menus</span>
                                                            </div>
                                                        </li>
                                                        <li class="d-flex"><i class="icon icon-check-button text-primary"></i>
                                                            <div class="d-block"><span>Snack bar</span>
                                                            </div>
                                                        </li>
                                                        <li class="d-flex"><i class="icon icon-check-button text-primary"></i>
                                                            <div class="d-block"><span>Breakfast in the room</span>
                                                            </div>
                                                        </li>
                                                        <li class="d-flex"><i class="icon icon-check-button text-primary"></i>
                                                            <div class="d-block"><span>Restaurant</span>
                                                            </div>
                                                        </li>
                                                    </ul>
                                                </div>
                                                <div class="hotel-service mb-4">
                                                    <div class="hotel-service__title d-flex mb-3"><i class="icon icon-cleaning mr-2"></i>
                                                        <h4 class="h4">Cleaning services</h4>
                                                    </div>
                                                    <ul class="hotel-service__list">
                                                        <li class="d-flex"><i class="icon icon-check-button text-primary"></i>
                                                            <div class="d-block"><span>Daily cleaning</span>
                                                            </div>
                                                        </li>
                                                        <li class="d-flex"><i class="icon icon-check-button text-primary"></i>
                                                            <div class="d-block"><span>Ironing Service</span>
                                                                <div class="w-100"></div><span class="available">(Paid separately)</span>
                                                            </div>
                                                        </li>
                                                        <li class="d-flex"><i class="icon icon-check-button text-primary"></i>
                                                            <div class="d-block"><span>Dry Cleaning</span>
                                                                <div class="w-100"></div><span class="available">(Paid separately)</span>
                                                            </div>
                                                        </li>
                                                        <li class="d-flex"><i class="icon icon-check-button text-primary"></i>
                                                            <div class="d-block"><span>Laundry</span>
                                                                <div class="w-100"></div><span class="available">(Paid separately)</span>
                                                            </div>
                                                        </li>
                                                    </ul>
                                                </div>
                                                <div class="hotel-service mb-4">
                                                    <div class="hotel-service__title d-flex mb-3"><i class="icon icon-parking mr-2"></i>
                                                        <h4 class="h4">Parking</h4>
                                                    </div>
                                                    <ul class="hotel-service__list">
                                                        <li class="d-flex"><i class="icon icon-check-button text-primary"></i>
                                                            <div class="d-block"><span>Is free! Free private parking is possible on site (reservation is not needed).</span>
                                                            </div>
                                                        </li>
                                                        <li class="d-flex"><i class="icon icon-check-button text-primary"></i>
                                                            <div class="d-block"><span>Parking spaces for people with disabilities</span>
                                                            </div>
                                                        </li>
                                                        <li class="d-flex"><i class="icon icon-check-button text-primary"></i>
                                                            <div class="d-block"><span>Secured parking</span>
                                                            </div>
                                                        </li>
                                                    </ul>
                                                </div>
                                                <div class="hotel-service mb-4">
                                                    <div class="hotel-service__title d-flex mb-3"><i class="icon icon-info mr-2"></i>
                                                        <h4 class="h4">General services</h4>
                                                    </div>
                                                    <ul class="hotel-service__list">
                                                        <li class="d-flex"><i class="icon icon-check-button text-primary"></i>
                                                            <div class="d-block"><span>Common lounge / lounge with TV</span>
                                                            </div>
                                                        </li>
                                                        <li class="d-flex"><i class="icon icon-check-button text-primary"></i>
                                                            <div class="d-block"><span>Air conditioning</span>
                                                            </div>
                                                        </li>
                                                        <li class="d-flex"><i class="icon icon-check-button text-primary"></i>
                                                            <div class="d-block"><span>Smoking is prohibited throughout the property.</span>
                                                            </div>
                                                        </li>
                                                        <li class="d-flex"><i class="icon icon-check-button text-primary"></i>
                                                            <div class="d-block"><span>Soundproofed rooms</span>
                                                            </div>
                                                        </li>
                                                        <li class="d-flex"><i class="icon icon-check-button text-primary"></i>
                                                            <div class="d-block"><span>Elevator</span>
                                                            </div>
                                                        </li>
                                                        <li class="d-flex"><i class="icon icon-check-button text-primary"></i>
                                                            <div class="d-block"><span>Family rooms</span>
                                                            </div>
                                                        </li>
                                                        <li class="d-flex"><i class="icon icon-check-button text-primary"></i>
                                                            <div class="d-block"><span>Facilities for disabled guests</span>
                                                            </div>
                                                        </li>
                                                        <li class="d-flex"><i class="icon icon-check-button text-primary"></i>
                                                            <div class="d-block"><span>Food and beverage delivery to the room</span>
                                                            </div>
                                                        </li>
                                                    </ul>
                                                </div>
                                            </div>
                                            <div class="col-12 col-sm-6">
                                                <div class="hotel-service mb-4">
                                                    <div class="hotel-service__title d-flex mb-3"><i class="icon icon-disabled mr-2"></i>
                                                        <h4 class="h4">Availability</h4>
                                                    </div>
                                                    <ul class="hotel-service__list">
                                                        <li class="d-flex"><i class="icon icon-check-button text-primary"></i>
                                                            <div class="d-block"><span>Cord / button call help in the bathroom</span>
                                                            </div>
                                                        </li>
                                                        <li class="d-flex"><i class="icon icon-check-button text-primary"></i>
                                                            <div class="d-block"><span>Suitable for wheelchair users</span>
                                                            </div>
                                                        </li>
                                                    </ul>
                                                </div>
                                                <div class="hotel-service mb-4">
                                                    <div class="hotel-service__title d-flex mb-3"><i class="icon icon-pets mr-2"></i>
                                                        <h4 class="h4">Pets</h4>
                                                    </div>
                                                    <ul class="hotel-service__list">
                                                        <li class="d-flex"><i class="icon icon-check-button text-primary"></i>
                                                            <div class="d-block"><span>Pets are allowed on request. This service can be paid.</span>
                                                            </div>
                                                        </li>
                                                    </ul>
                                                </div>
                                                <div class="hotel-service mb-4">
                                                    <div class="hotel-service__title d-flex mb-3"><i class="icon icon-family mr-2"></i>
                                                        <h4 class="h4">Entertainment and Family Services</h4>
                                                    </div>
                                                    <ul class="hotel-service__list">
                                                        <li class="d-flex"><i class="icon icon-check-button text-primary"></i>
                                                            <div class="d-block"><span>Children's TV channels</span>
                                                            </div>
                                                        </li>
                                                        <li class="d-flex"><i class="icon icon-check-button text-primary"></i>
                                                            <div class="d-block"><span>Babysitting service</span>
                                                                <div class="w-100"></div><span class="available">(Paid separately)</span>
                                                            </div>
                                                        </li>
                                                        <li class="d-flex"><i class="icon icon-check-button text-primary"></i>
                                                            <div class="d-block"><span>Children's room</span>
                                                            </div>
                                                        </li>
                                                    </ul>
                                                </div>
                                                <div class="hotel-service mb-4">
                                                    <div class="hotel-service__title d-flex mb-3"><i class="icon icon-credits mr-2"></i>
                                                        <h4 class="h4">Business center services</h4>
                                                    </div>
                                                    <ul class="hotel-service__list">
                                                        <li class="d-flex"><i class="icon icon-check-button text-primary"></i>
                                                            <div class="d-block"><span>Fax / Photocopying</span>
                                                                <div class="w-100"></div><span class="available">(Paid separately)</span>
                                                            </div>
                                                        </li>
                                                        <li class="d-flex"><i class="icon icon-check-button text-primary"></i>
                                                            <div class="d-block"><span>Conference hall / banquet hall</span>
                                                                <div class="w-100"></div><span class="available">(Paid separately)</span>
                                                            </div>
                                                        </li>
                                                    </ul>
                                                </div>
                                                <div class="hotel-service mb-4">
                                                    <div class="hotel-service__title d-flex mb-3"><i class="icon icon-receptionist mr-2"></i>
                                                        <h4 class="h4">Reseption</h4>
                                                    </div>
                                                    <ul class="hotel-service__list">
                                                        <li class="d-flex"><i class="icon icon-check-button text-primary"></i>
                                                            <div class="d-block"><span>Concierge Service</span>
                                                            </div>
                                                        </li>
                                                        <li class="d-flex"><i class="icon icon-check-button text-primary"></i>
                                                            <div class="d-block"><span>Luggage office</span>
                                                            </div>
                                                        </li>
                                                        <li class="d-flex"><i class="icon icon-check-button text-primary"></i>
                                                            <div class="d-block"><span>24-hour front desk</span>
                                                            </div>
                                                        </li>
                                                    </ul>
                                                </div>
                                                <div class="hotel-service mb-4">
                                                    <div class="hotel-service__title d-flex mb-3"><i class="icon icon-bellboy mr-2"></i>
                                                        <h4 class="h4">Staff speaks</h4>
                                                    </div>
                                                    <ul class="hotel-service__list">
                                                        <li class="d-flex"><i class="icon icon-check-button text-primary"></i>
                                                            <div class="d-block"><span>English</span>
                                                            </div>
                                                        </li>
                                                        <li class="d-flex"><i class="icon icon-check-button text-primary"></i>
                                                            <div class="d-block"><span>French</span>
                                                            </div>
                                                        </li>
                                                        <li class="d-flex"><i class="icon icon-check-button text-primary"></i>
                                                            <div class="d-block"><span>Italian</span>
                                                            </div>
                                                        </li>
                                                    </ul>
                                                </div>
                                            </div>
                                        </div>
                                    </div>
                                    <div class="hotel-card display-none">
                                        <h4 class="mb-4">Several reasons to choose accommodation option Hotel Ravena</h4>
                                        <ul class="hotel-options row">
                                            <li class="col-12 col-sm-6 d-flex mb-3"><i class="icon icon-check-button"></i><span>Reasonable prices</span></li>
                                            <li class="col-12 col-sm-6 d-flex mb-3"><i class="icon icon-check-button"></i><span>Staff speaks 3 languages</span></li>
                                            <li class="col-12 col-sm-6 d-flex mb-3"><i class="icon icon-check-button"></i><span>One of the best options chosen by guests in the city of Milan</span></li>
                                            <li class="col-12 col-sm-6 d-flex mb-3"><i class="icon icon-check-button"></i><span>Manage reservations online</span></li>
                                            <li class="col-12 col-sm-6 d-flex mb-3"><i class="icon icon-check-button"></i><span>Free parking</span></li>
                                        </ul>
                                    </div>
                                </section>
                            </div>
                            <div class="tab-pane" id="hotelAccommodation" role="tabpanel">
                               <section>
                                  
                               <h3 class="fw-md">Book Your Room</h3>
                                    <hr class="mb-4">
                                    <div class="hotel-checklist hotel-card">
                                        <form method="post" action="{{ route('booking-room') }}" enctype="multipart/form-data" >
                                        @csrf
                                        <input type="hidden" name="room_id" value="{{ $room->id }}" />
                                        <input type="hidden" name="hotel_id" value="{{ $hotelId }}" />
                                            <div class="form-group">
                                          <label>Name</label>
                                            <input type="text" class="form-control" name="name" id="name"  />
                                            
                                            </div>
                                            <div class="form-group">
                                          <label>Phone No</label>
                                            <input type="text" class="form-control" name="phone" id="phone"  />
                                            </div>
                                            <div class="form-group">
                                          <label>Cnic</label>
                                            <input type="text" class="form-control" name="cnic" id="cnic"  />
                                            </div>
                                            <div class="form-group">
                                          <label>Email (optional)</label>
                                            <input type="email" class="form-control" name="email" id="email" value="<?php if(!empty($profile)) echo $profile->email;  ?>" />
                                            </div>
                                        
                                            <div class="form-group">
                                          <label>Hotel Address</label>
                                            <input type="text" class="form-control" name="address" id="address" />
                                            </div>
                                            <div class="form-group">
                                          <label>From Date</label>
                                      <input type="date" name="from_date" id="from_date" class="form-control" />
  </div>
  <div class="form-group">
                                          <label>to Date</label>
                                      <input type="date" name="to_date" id="to_date" class="form-control" />
  </div>
  
  
  
  
                                        <input type="submit" id="btnsubmit" class="mbtn" style="cursor: pointer;" name="btnsubmit" value="Submit" />
                                        </form> 
                               </section>
                                <section class="hotel-popular display-none">
                                    <h3>Popular hotels in the area</h3>
                                    <hr class="mb-4">
                                    <div class="row">
                                        <div class="col-12 d-flex mb-4 pb-2">
                                            <div class="product bg-white product--list">
                                                <div class="product__special bg-primary text-white">special price
                                                </div><a class="product__img-top d-block" href="hotel.html"><img class="img-fluid" src="{{ asset('images/hotels/item-15.jpg') }}" alt="#"/></a>
                                                <div class="product__body">
                                                    <h4 class="product__title"><a href="hotel.html">Al Moggar Garden Beach Club</a></h4>
                                                    <div class="product__rating mb-2">
                                                        <div class="rating">
                                                            <select class="js-rating-stat" data-current-rating="5">
                                                                <option value="1">1</option>
                                                                <option value="2">2</option>
                                                                <option value="3">3</option>
                                                                <option value="4">4</option>
                                                                <option value="5" selected="selected">5</option>
                                                            </select>
                                                        </div>
                                                    </div>
                                                    <ul class="product__stat d-flex flex-wrap justify-content-between align-items-center">
                                                        <li class="mr-3"><span>Egypt</span><i class="bullet"></i><a href="#modalMap" data-toggle="modal" data-title="Al Moggar Garden Beach Club">Show on map</a></li>
                                                        <li class="d-inline-flex align-items-center"><i class="icon icon-thumbs-up mr-1"></i><span>8/10</span></li>
                                                    </ul>
                                                    <hr/>
                                                    <ul class="product__price d-flex justify-content-between align-items-center">
                                                        <li class="mr-2"><span>Price per night from</span></li>
                                                        <li><span class="cost">50 €</span>
                                                        </li>
                                                    </ul>
                                                    <hr/>
                                                    <div class="product__desc">
                                                        <p>The air-conditioned rooms have a balcony with views of the sea or the garden. Each spacious room has a TV with satellite channels. The private bathrooms at the... </p><a class="product__link-more" href="hotel.html">Read more</a>
                                                    </div>
                                                </div>
                                                <hr class="d-none d-sm-block"/>
                                                <div class="product__footer">
                                                    <ul class="product__price d-flex justify-content-between align-items-center">
                                                        <li class="mr-2"><span>Price per night from</span></li>
                                                        <li><span class="cost">50 €</span>
                                                        </li>
                                                    </ul><a class="product__btn-book btn btn-secondary btn--round" href="booking-traveler.html">book now</a>
                                                </div>
                                            </div>
                                        </div>
                                        <div class="col-12 d-flex mb-4 pb-2">
                                            <div class="product bg-white product--list">
                                                <div class="product__special bg-purple text-white">best seller
                                                </div><a class="product__img-top d-block" href="hotel.html"><img class="img-fluid" src="{{ asset('images/hotels/item-16.jpg') }}" alt="#"/></a>
                                                <div class="product__body">
                                                    <h4 class="product__title"><a href="hotel.html">Resort Spa Hotel</a></h4>
                                                    <div class="product__rating mb-2">
                                                        <div class="rating">
                                                            <select class="js-rating-stat" data-current-rating="5">
                                                                <option value="1">1</option>
                                                                <option value="2">2</option>
                                                                <option value="3">3</option>
                                                                <option value="4">4</option>
                                                                <option value="5" selected="selected">5</option>
                                                            </select>
                                                        </div>
                                                    </div>
                                                    <ul class="product__stat d-flex flex-wrap justify-content-between align-items-center">
                                                        <li class="mr-3"><span>Thailand</span><i class="bullet"></i><a href="#modalMap" data-toggle="modal" data-title="Resort Spa Hotel">Show on map</a></li>
                                                        <li class="d-inline-flex align-items-center"><i class="icon icon-thumbs-up mr-1"></i><span>8/10</span></li>
                                                    </ul>
                                                    <hr/>
                                                    <ul class="product__price d-flex justify-content-between align-items-center">
                                                        <li class="mr-2"><span>Price per night from</span></li>
                                                        <li><span class="cost">110 €</span>
                                                        </li>
                                                    </ul>
                                                    <hr/>
                                                    <div class="product__desc">
                                                        <p>A quiet and cozy spa hotel is located just 80 meters from the coast. Here you can relax, relax from everyday bustle, and also undergo various strengthening programs and spa treatments. All ... </p><a class="product__link-more" href="hotel.html">Read more</a>
                                                    </div>
                                                </div>
                                                <hr class="d-none d-sm-block"/>
                                                <div class="product__footer">
                                                    <ul class="product__price d-flex justify-content-between align-items-center">
                                                        <li class="mr-2"><span>Price per night from</span></li>
                                                        <li><span class="cost">110 €</span>
                                                        </li>
                                                    </ul><a class="product__btn-book btn btn-secondary btn--round" href="booking-traveler.html">book now</a>
                                                </div>
                                            </div>
                                        </div>
                                        <div class="col-12 d-flex mb-4 pb-2">
                                            <div class="product bg-white product--list"><a class="product__img-top d-block" href="hotel.html"><img class="img-fluid" src="img/hotels/item-17.jpg" alt="#"/></a>
                                                <div class="product__body">
                                                    <h4 class="product__title"><a href="hotel.html">Macronissos Village Bungalows</a></h4>
                                                    <div class="product__rating mb-2">
                                                        <div class="rating">
                                                            <select class="js-rating-stat" data-current-rating="4">
                                                                <option value="1">1</option>
                                                                <option value="2">2</option>
                                                                <option value="3">3</option>
                                                                <option value="4" selected="selected">4</option>
                                                                <option value="5">5</option>
                                                            </select>
                                                        </div>
                                                    </div>
                                                    <ul class="product__stat d-flex flex-wrap justify-content-between align-items-center">
                                                        <li class="mr-3"><span>Cyprus</span><i class="bullet"></i><a href="#modalMap" data-toggle="modal" data-title="Macronissos Village Bungalows">Show on map</a></li>
                                                        <li class="d-inline-flex align-items-center"><i class="icon icon-thumbs-up mr-1"></i><span>9/10</span></li>
                                                    </ul>
                                                    <hr/>
                                                    <ul class="product__price d-flex justify-content-between align-items-center">
                                                        <li class="mr-2"><span>Price per night from</span></li>
                                                        <li><span class="cost">75 €</span>
                                                        </li>
                                                    </ul>
                                                    <hr/>
                                                    <div class="product__desc">
                                                        <p>The air-conditioned rooms have a balcony with views of the sea or the garden. Each spacious room has a TV with satellite channels. The private bathrooms at the... </p><a class="product__link-more" href="hotel.html">Read more</a>
                                                    </div>
                                                </div>
                                                <hr class="d-none d-sm-block"/>
                                                <div class="product__footer">
                                                    <ul class="product__price d-flex justify-content-between align-items-center">
                                                        <li class="mr-2"><span>Price per night from</span></li>
                                                        <li><span class="cost">75 €</span>
                                                        </li>
                                                    </ul><a class="product__btn-book btn btn-secondary btn--round" href="booking-traveler.html">book now</a>
                                                </div>
                                            </div>
                                        </div>
                                        <div class="col-12 d-flex mb-4 pb-2">
                                            <div class="product bg-white product--list"><a class="product__img-top d-block" href="hotel.html"><img class="img-fluid" src="img/hotels/item-17.jpg" alt="#"/></a>
                                                <div class="product__body">
                                                    <h4 class="product__title"><a href="hotel.html">Macronissos Village Bungalows</a></h4>
                                                    <div class="product__rating mb-2">
                                                        <div class="rating">
                                                            <select class="js-rating-stat" data-current-rating="4">
                                                                <option value="1">1</option>
                                                                <option value="2">2</option>
                                                                <option value="3">3</option>
                                                                <option value="4" selected="selected">4</option>
                                                                <option value="5">5</option>
                                                            </select>
                                                        </div>
                                                    </div>
                                                    <ul class="product__stat d-flex flex-wrap justify-content-between align-items-center">
                                                        <li class="mr-3"><span>Cyprus</span><i class="bullet"></i><a href="#modalMap" data-toggle="modal" data-title="Macronissos Village Bungalows">Show on map</a></li>
                                                        <li class="d-inline-flex align-items-center"><i class="icon icon-thumbs-up mr-1"></i><span>9/10</span></li>
                                                    </ul>
                                                    <hr/>
                                                    <ul class="product__price d-flex justify-content-between align-items-center">
                                                        <li class="mr-2"><span>Price per night from</span></li>
                                                        <li><span class="sale mr-2">95 €</span><span class="cost">75 €</span>
                                                        </li>
                                                    </ul>
                                                    <hr/>
                                                    <div class="product__desc">
                                                        <p>The air-conditioned rooms have a balcony with views of the sea or the garden. Each spacious room has a TV with satellite channels. The private bathrooms at the... </p><a class="product__link-more" href="hotel.html">Read more</a>
                                                    </div>
                                                </div>
                                                <hr class="d-none d-sm-block"/>
                                                <div class="product__footer">
                                                    <ul class="product__price d-flex justify-content-between align-items-center">
                                                        <li class="mr-2"><span>Price per night from</span></li>
                                                        <li><span class="sale mr-2">95 €</span><span class="cost">75 €</span>
                                                        </li>
                                                    </ul><a class="product__btn-book btn btn-secondary btn--round" href="booking-traveler.html">book now</a>
                                                </div>
                                            </div>
                                        </div>
                                        <div class="col-12 d-flex mb-4 pb-2">
                                            <div class="product bg-white product--list">
                                                <div class="product__special bg-purple text-white">best seller
                                                </div><a class="product__img-top d-block" href="hotel.html"><img class="img-fluid" src="img/hotels/item-16.jpg" alt="#"/></a>
                                                <div class="product__body">
                                                    <h4 class="product__title"><a href="hotel.html">Resort Spa Hotel</a></h4>
                                                    <div class="product__rating mb-2">
                                                        <div class="rating">
                                                            <select class="js-rating-stat" data-current-rating="5">
                                                                <option value="1">1</option>
                                                                <option value="2">2</option>
                                                                <option value="3">3</option>
                                                                <option value="4">4</option>
                                                                <option value="5" selected="selected">5</option>
                                                            </select>
                                                        </div>
                                                    </div>
                                                    <ul class="product__stat d-flex flex-wrap justify-content-between align-items-center">
                                                        <li class="mr-3"><span>Thailand</span><i class="bullet"></i><a href="#modalMap" data-toggle="modal" data-title="Resort Spa Hotel">Show on map</a></li>
                                                        <li class="d-inline-flex align-items-center"><i class="icon icon-thumbs-up mr-1"></i><span>8/10</span></li>
                                                    </ul>
                                                    <hr/>
                                                    <ul class="product__price d-flex justify-content-between align-items-center">
                                                        <li class="mr-2"><span>Price per night from</span></li>
                                                        <li><span class="cost">110 €</span>
                                                        </li>
                                                    </ul>
                                                    <hr/>
                                                    <div class="product__desc">
                                                        <p>A quiet and cozy spa hotel is located just 80 meters from the coast. Here you can relax, relax from everyday bustle, and also undergo various strengthening programs and spa treatments. All ... </p><a class="product__link-more" href="hotel.html">Read more</a>
                                                    </div>
                                                </div>
                                                <hr class="d-none d-sm-block"/>
                                                <div class="product__footer">
                                                    <ul class="product__price d-flex justify-content-between align-items-center">
                                                        <li class="mr-2"><span>Price per night from</span></li>
                                                        <li><span class="cost">110 €</span>
                                                        </li>
                                                    </ul><a class="product__btn-book btn btn-secondary btn--round" href="booking-traveler.html">book now</a>
                                                </div>
                                            </div>
                                        </div>
                                        <div class="col-12 d-flex mb-4 pb-2">
                                            <div class="product bg-white product--list">
                                                <div class="product__special bg-primary text-white">special price
                                                </div><a class="product__img-top d-block" href="hotel.html"><img class="img-fluid" src="img/hotels/item-15.jpg" alt="#"/></a>
                                                <div class="product__body">
                                                    <h4 class="product__title"><a href="hotel.html">Al Moggar Garden Beach Club</a></h4>
                                                    <div class="product__rating mb-2">
                                                        <div class="rating">
                                                            <select class="js-rating-stat" data-current-rating="5">
                                                                <option value="1">1</option>
                                                                <option value="2">2</option>
                                                                <option value="3">3</option>
                                                                <option value="4">4</option>
                                                                <option value="5" selected="selected">5</option>
                                                            </select>
                                                        </div>
                                                    </div>
                                                    <ul class="product__stat d-flex flex-wrap justify-content-between align-items-center">
                                                        <li class="mr-3"><span>Egypt</span><i class="bullet"></i><a href="#modalMap" data-toggle="modal" data-title="Al Moggar Garden Beach Club">Show on map</a></li>
                                                        <li class="d-inline-flex align-items-center"><i class="icon icon-thumbs-up mr-1"></i><span>8/10</span></li>
                                                    </ul>
                                                    <hr/>
                                                    <ul class="product__price d-flex justify-content-between align-items-center">
                                                        <li class="mr-2"><span>Price per night from</span></li>
                                                        <li><span class="cost">50 €</span>
                                                        </li>
                                                    </ul>
                                                    <hr/>
                                                    <div class="product__desc">
                                                        <p>The air-conditioned rooms have a balcony with views of the sea or the garden. Each spacious room has a TV with satellite channels. The private bathrooms at the... </p><a class="product__link-more" href="hotel.html">Read more</a>
                                                    </div>
                                                </div>
                                                <hr class="d-none d-sm-block"/>
                                                <div class="product__footer">
                                                    <ul class="product__price d-flex justify-content-between align-items-center">
                                                        <li class="mr-2"><span>Price per night from</span></li>
                                                        <li><span class="cost">50 €</span>
                                                        </li>
                                                    </ul><a class="product__btn-book btn btn-secondary btn--round" href="booking-traveler.html">book now</a>
                                                </div>
                                            </div>
                                        </div>
                                        <div class="col-12 d-flex mb-4 pb-2">
                                            <div class="product bg-white product--list">
                                                <div class="product__special bg-primary text-white">special price
                                                </div><a class="product__img-top d-block" href="hotel.html"><img class="img-fluid" src="img/hotels/item-15.jpg" alt="#"/></a>
                                                <div class="product__body">
                                                    <h4 class="product__title"><a href="hotel.html">Al Moggar Garden Beach Club</a></h4>
                                                    <div class="product__rating mb-2">
                                                        <div class="rating">
                                                            <select class="js-rating-stat" data-current-rating="5">
                                                                <option value="1">1</option>
                                                                <option value="2">2</option>
                                                                <option value="3">3</option>
                                                                <option value="4">4</option>
                                                                <option value="5" selected="selected">5</option>
                                                            </select>
                                                        </div>
                                                    </div>
                                                    <ul class="product__stat d-flex flex-wrap justify-content-between align-items-center">
                                                        <li class="mr-3"><span>Egypt</span><i class="bullet"></i><a href="#modalMap" data-toggle="modal" data-title="Al Moggar Garden Beach Club">Show on map</a></li>
                                                        <li class="d-inline-flex align-items-center"><i class="icon icon-thumbs-up mr-1"></i><span>8/10</span></li>
                                                    </ul>
                                                    <hr/>
                                                    <ul class="product__price d-flex justify-content-between align-items-center">
                                                        <li class="mr-2"><span>Price per night from</span></li>
                                                        <li><span class="cost">50 €</span>
                                                        </li>
                                                    </ul>
                                                    <hr/>
                                                    <div class="product__desc">
                                                        <p>The air-conditioned rooms have a balcony with views of the sea or the garden. Each spacious room has a TV with satellite channels. The private bathrooms at the... </p><a class="product__link-more" href="hotel.html">Read more</a>
                                                    </div>
                                                </div>
                                                <hr class="d-none d-sm-block"/>
                                                <div class="product__footer">
                                                    <ul class="product__price d-flex justify-content-between align-items-center">
                                                        <li class="mr-2"><span>Price per night from</span></li>
                                                        <li><span class="cost">50 €</span>
                                                        </li>
                                                    </ul><a class="product__btn-book btn btn-secondary btn--round" href="booking-traveler.html">book now</a>
                                                </div>
                                            </div>
                                        </div>
                                        <div class="col-12 d-flex mb-4 pb-2">
                                            <div class="product bg-white product--list">
                                                <div class="product__special bg-purple text-white">best seller
                                                </div><a class="product__img-top d-block" href="hotel.html"><img class="img-fluid" src="img/hotels/item-16.jpg" alt="#"/></a>
                                                <div class="product__body">
                                                    <h4 class="product__title"><a href="hotel.html">Resort Spa Hotel</a></h4>
                                                    <div class="product__rating mb-2">
                                                        <div class="rating">
                                                            <select class="js-rating-stat" data-current-rating="5">
                                                                <option value="1">1</option>
                                                                <option value="2">2</option>
                                                                <option value="3">3</option>
                                                                <option value="4">4</option>
                                                                <option value="5" selected="selected">5</option>
                                                            </select>
                                                        </div>
                                                    </div>
                                                    <ul class="product__stat d-flex flex-wrap justify-content-between align-items-center">
                                                        <li class="mr-3"><span>Thailand</span><i class="bullet"></i><a href="#modalMap" data-toggle="modal" data-title="Resort Spa Hotel">Show on map</a></li>
                                                        <li class="d-inline-flex align-items-center"><i class="icon icon-thumbs-up mr-1"></i><span>8/10</span></li>
                                                    </ul>
                                                    <hr/>
                                                    <ul class="product__price d-flex justify-content-between align-items-center">
                                                        <li class="mr-2"><span>Price per night from</span></li>
                                                        <li><span class="cost">110 €</span>
                                                        </li>
                                                    </ul>
                                                    <hr/>
                                                    <div class="product__desc">
                                                        <p>A quiet and cozy spa hotel is located just 80 meters from the coast. Here you can relax, relax from everyday bustle, and also undergo various strengthening programs and spa treatments. All ... </p><a class="product__link-more" href="hotel.html">Read more</a>
                                                    </div>
                                                </div>
                                                <hr class="d-none d-sm-block"/>
                                                <div class="product__footer">
                                                    <ul class="product__price d-flex justify-content-between align-items-center">
                                                        <li class="mr-2"><span>Price per night from</span></li>
                                                        <li><span class="cost">110 €</span>
                                                        </li>
                                                    </ul><a class="product__btn-book btn btn-secondary btn--round" href="booking-traveler.html">book now</a>
                                                </div>
                                            </div>
                                        </div>
                                        <div class="col-12 d-flex mb-4 pb-2">
                                            <div class="product bg-white product--list">
                                                <div class="product__special bg-danger text-white">hot deal
                                                </div><a class="product__img-top d-block" href="hotel.html"><img class="img-fluid" src="img/hotels/item-18.jpg" alt="#"/></a>
                                                <div class="product__body">
                                                    <h4 class="product__title"><a href="hotel.html">Macronissos Village Bungalows</a></h4>
                                                    <div class="product__rating mb-2">
                                                        <div class="rating">
                                                            <select class="js-rating-stat" data-current-rating="4">
                                                                <option value="1">1</option>
                                                                <option value="2">2</option>
                                                                <option value="3">3</option>
                                                                <option value="4" selected="selected">4</option>
                                                                <option value="5">5</option>
                                                            </select>
                                                        </div>
                                                    </div>
                                                    <ul class="product__stat d-flex flex-wrap justify-content-between align-items-center">
                                                        <li class="mr-3"><span>Cyprus</span><i class="bullet"></i><a href="#modalMap" data-toggle="modal" data-title="Macronissos Village Bungalows">Show on map</a></li>
                                                        <li class="d-inline-flex align-items-center"><i class="icon icon-thumbs-up mr-1"></i><span>9/10</span></li>
                                                    </ul>
                                                    <hr/>
                                                    <ul class="product__price d-flex justify-content-between align-items-center">
                                                        <li class="mr-2"><span>Price per night from</span></li>
                                                        <li><span class="sale mr-2">95 €</span><span class="cost">75 €</span>
                                                        </li>
                                                    </ul>
                                                    <hr/>
                                                    <div class="product__desc">
                                                        <p>The air-conditioned rooms have a balcony with views of the sea or the garden. Each spacious room has a TV with satellite channels. The private bathrooms at the... </p><a class="product__link-more" href="hotel.html">Read more</a>
                                                    </div>
                                                </div>
                                                <hr class="d-none d-sm-block"/>
                                                <div class="product__footer">
                                                    <ul class="product__price d-flex justify-content-between align-items-center">
                                                        <li class="mr-2"><span>Price per night from</span></li>
                                                        <li><span class="sale mr-2">95 €</span><span class="cost">75 €</span>
                                                        </li>
                                                    </ul><a class="product__btn-book btn btn-secondary btn--round" href="booking-traveler.html">book now</a>
                                                </div>
                                            </div>
                                        </div>
                                    </div>
                                </section>
                            </div>
                            <div class="tab-pane" id="hotelReviews" role="tabpanel">
                                <section>
                                    <h3 class="fw-md">Guest reviews</h3>
                                    <hr class="mb-4">
                                    <div class="hotel-checklist hotel-card">
                                        <form method="post" action="{{ route('booking-room') }}" enctype="multipart/form-data" >
                                        @csrf
                                        <input type="hidden" name="room_id" value="{{ $room->id }}" />
                                        <input type="hidden" name="hotel_id" value="{{ $hotelId }}" />
                                            <div class="form-group">
                                          <label>Name</label>
                                            <input type="text" class="form-control" name="name" id="name"  />
                                            
                                            </div>
                                           
                                            
                                            <div class="form-group">
                                          <label>Email (optional)</label>
                                            <input type="email" class="form-control" name="email" id="email" value="<?php if(!empty($profile)) echo $profile->email;  ?>" />
                                            </div>
                                            <div class="form-group">
                                          <label>Comment</label>
                                            <textarea class="form-control" name="comment"></textarea>
                                            </div>
                                        
                                            
                                       
  
  
  
  
  
                                        <input type="submit" id="btnsubmit" class="mbtn" style="cursor: pointer;" name="btnsubmit" value="Submit" />
                                        </form> 
                                    
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

