@extends('layouts.app')

@section('mainContent')
<?php
if(!empty($data['profile'][0]) && isset($data['profile'][0]) )
{// dd($data);
    $profile = $data['profile'][0];
}
else
{
  $profile = array();
}

// print_r($profile);
// echo $profile->name;
                                ?>
 <style>
 .nav-link.active{
     background-color: #003580 !important;
 }
 </style>                              
    <div class="page-content">
        <div class="container">
            <div class="row">

                {{--<aside class="sidebar col-lg-3">
                    <!-- Room Detail Sidebar Start -->
                @include('layouts.roomDetailSidebar')
                <!-- Room Detail Sidebar End -->
                </aside>--}}

                <div class="col-lg-12" id="barba-wrapper">
                    <div class="barba-container">
                        <nav class="hotel-nav">
                            <ul class="hotel-nav__menu nav nav-tabs" role="tablist">
                            <li class="nav-item d-flex col-12 col-sm p-0"><a class="nav-link active" data-toggle="tab" href="#hdash" role="tab" aria-controls="hdash" aria-selected="false"><span>Dashboard</span></a>
                                </li>
                                <li class="nav-item d-flex col-12 col-sm p-0"><a class="nav-link" data-toggle="tab" href="#hotel" role="tab" aria-controls="hotel" aria-selected="false"><span>Hotel Rooms</span></a>
                                </li>
                                <li class="nav-item d-flex col-12 col-sm p-0"><a class="nav-link" data-toggle="tab" href="#hotelServices" role="tab" aria-controls="hotelServices" aria-selected="true"><span>Booking</span></a>
                                </li>
                                <li class="nav-item d-flex col-12 col-sm p-0"><a class="nav-link" data-toggle="tab" href="#hotelProfile" role="tab" aria-controls="hotelProfile" aria-selected="true"><span>Hotel Profile</span></a>
                                </li>
                                <li class="nav-item d-flex col-12 col-sm p-0"><a class="nav-link" data-toggle="tab" href="#hotelReviews" role="tab" aria-controls="hotelReviews" aria-selected="true"><span>Reviews</span></a>
                                </li>
                            </ul>
                        </nav>
                        <div class="tab-content">

<!--hotel dashboard-->
<div class="tab-pane active show" id="hdash" role="tabpanel">
                                <section>
                                    <h3 class="fw-md">Dashboard
                                    
                                    
                                    </h3>
                                    @if (!empty($profile))
                                    @if($profile->status==0)
                <div class="ps-container mt-10">
                    <div class="alert alert-success alert-dismissable custom-success-box fs-15" style="font-size: 16px">
                        <a href="#" class="close mr-20" data-dismiss="alert" aria-label="close" style="font-size: 30px;">&times;</a>
                        <strong> Your Profile Is Under Verification Please Waiting for Admin Response <b>Thank You !</b> </strong>
                    </div>
                </div>
                @endif
                @if($profile->status==-1)
                <div class="ps-container mt-10">
                    <div class="alert alert-success alert-dismissable custom-success-box fs-15" style="font-size: 16px">
                        <a href="#" class="close mr-20" data-dismiss="alert" aria-label="close" style="font-size: 30px;">&times;</a>
                        <strong> Your Profile Is Banned Contact With Adminstrator <b>Thank You !</b> </strong>
                    </div>
                </div>
                @endif
            @endif
                                    <hr class="mb-4">
                                    
                                    <div class="hotel-card">
                                        <h5>Most popular facilities</h5>
                                        <div class="container">
        <div class="row">
            <div class="col-lg-3 col-sm-6">
                <div class="card-box bg-primary">
                    <div class="inner p-2">
                        <h3> 13436 </h3>
                        <p> Student Strength </p>
                    </div>
                    <div class="icon p-2">
                        <i class="fa fa-graduation-cap" aria-hidden="true"></i>
                    </div>
                    <a href="#" class="card-box-footer text-white">View More <i class="fa fa-arrow-circle-right"></i></a>
                </div>
            </div>

            <div class="col-lg-3 col-sm-6">
                <div class="card-box bg-success">
                    <div class="inner p-2">
                        <h3> ₹185358 </h3>
                        <p> Today’s Collection </p>
                    </div>
                    <div class="icon p-2 text-white">
                        <i class="fa fa-money" aria-hidden="true"></i>
                    </div>
                    <a href="#" class="card-box-footer text-white">View More <i class="fa fa-arrow-circle-right"></i></a>
                </div>
            </div>
            <div class="col-lg-3 col-sm-6">
                <div class="card-box bg-warning">
                    <div class="inner p-2">
                        <h3> 5464 </h3>
                        <p> New Admissions </p>
                    </div>
                    <div class="icon p-2">
                        <i class="fa fa-user-plus" aria-hidden="true"></i>
                    </div>
                    <a href="#" class="card-box-footer text-white">View More <i class="fa fa-arrow-circle-right"></i></a>
                </div>
            </div>
            <div class="col-lg-3 col-sm-6">
                <div class="card-box bg-danger">
                    <div class="inner p-2">
                        <h3> 723 </h3>
                        <p> Faculty Strength </p>
                    </div>
                    <div class="icon p-2 text-white">
                        <i class="fa fa-users"></i>
                    </div>
                    <a href="#" class="card-box-footer text-white">View More <i class="fa fa-arrow-circle-right"></i></a>
                </div>
            </div>
        </div>
    </div>    
                                      
                                    </div>
                                    <div class="hotel-card">
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

<!--end of dashbord-->
                            <div class="tab-pane show" id="hotel" role="tabpanel">

                                <section>
                                    <h3 class="fw-md mb-1">Add New Room</h3>

                                    <form action="{{ route('create-room') }}" method="post" enctype="multipart/form-data">
                                        @csrf

                                        <div class="row">
                                            <div class="col-12 col-sm-6 col-lg-3 form-group">
                                                <label class="label-text ml-3" for="hotelInDate">Room Name</label>
                                                <input class="form-control" id="room_name" type="text" name="room_name" required="required" placeholder="Room Name" />
                                            </div>

                                            <div class="col-12 col-sm-6 col-lg-3 form-group">
                                                <label class="label-text ml-3" for="room_capacity">Room Capacity</label>
                                                <input class="form-control" id="room_capacity" type="text" name="room_capacity" required="required"  placeholder="Room Capacity"/>
                                            </div>


                                            <div class="col-12 col-sm-6 col-lg-3 form-group">
                                                <label class="label-text ml-3" for="room_type">Room Type</label>
                                                <input class="form-control" id="room_type" type="text" name="room_type" required="required"  placeholder="Room Type" />
                                            </div>

                                            <div class="col-12 col-sm-6 col-lg-3 form-group">
                                                <label class="label-text ml-3" for="room_price">Room Price</label>
                                                <input class="form-control" id="room_price" type="text" name="room_price" required="required"  placeholder="Room Price" />
                                            </div>


                                            <div class="col-12 form-group">
                                                <label class="label-text ml-3" for="description">Description</label>
                                                {{--<input class="form-control" id="description" type="text" name="description" required="required"/>--}}
                                                <textarea name="description" id="description" cols="30" rows="10" class="form-control" placeholder="Type Room Description...">

                                                </textarea>
                                            </div>

                                            <div class="col-12 col-sm-6 col-lg-3 form-group">
                                                <label for="" class="ml-5px">Select Images </label>
                                                <input type="file" id="fileupload" name="room_images[]" class="btn btn-primary form-control" multiple required accept="image/*">
                                            </div>

                                            <div class="col-12" id="dvPreview">

                                            </div>


                                        </div>


                                            <div class="col-12">
                                                <h4>Add Room Facilities (Optional)</h4>
                                            </div>
                                            <hr class="mb-4">
                                    <div class="hotel-card">
                                        <h5>Most popular facilities</h5>
                                        <?php $facilities = array
(
'Wi-Fi',
'24-hour front desk',
'Air conditioning',
'Food and beverage delivery to the room',
'Free parking',
'Non-smoking rooms',
'Pets Allowed',
'Special diet menus',
"Children's TV channels",
"Children's room",
'Breakfast in the room',
'Restaurant',
'Daily cleaning',
'Ironing Service',
'Dry Cleaning',
'Laundry',
'Luggage office'
) ?>
                                        <ul class="hotel-facilities d-flex flex-wrap flex-column flex-md-row mb-3">
                                        @foreach($facilities as $f)
                                            <li class="mr-2"><input type="checkbox" value="{{ $f }}" name="facility_name[]"  /><span  class="align-middle ml-2">{{$f}}</span><i class="bullet d-none d-md-inline-block"></i></li>
                                        @endforeach
                                        </ul>
                                        
                                    </div>
                                        <div class="col-12 append_facility_row_init display-none">

                                            <div class="row">
                                                <div class="col-10 col-md-5 form-group">
                                                    <label class="label-text ml-3" for="facility_name">Facility Name</label>
                                                    <input class="form-control" id="facility_name" type="text" name="facilities[0][facility_name]" required="required"  placeholder="Facility Name"/>
                                                </div>
                                                {{--<div class="col-12 col-md-5 form-group">
                                                    <label class="label-text ml-3" for="facility_charges">Facility Charges</label>
                                                    <input class="form-control" id="facility_charges" type="text" name="facilities[0][facility_charges]" required="required"/>
                                                </div>--}}
                                                <div class="col-2 col-md-1">
                                                    <label class="label-text ml-3" for="facility_name">&nbsp;</label>
                                                    <button type="button" class="btn btn-success btn-xs add-facility add-facilit-btn"><i class="fa fa-plus"></i></button>
                                                </div>
                                            </div>
                                        </div>

                                        <div class="col-12 text-right mt-40">
                                            <button class="btn btn-sm btn-info">Submit</button>
                                        </div>
                                    </form>

                                </section>

                                <section>
                                    <h3 class="fw-md mb-1 display-none">First Class Best Room</h3>
                                    <ul class="hotel-title mb-3 display-none">
                                        <li class="stars mb-2">
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
                                            <div class="media-object"><i class="icon icon-label mr-2 text-primary"></i></div>
                                            <div class="local"><span>Gulgasht Near Chase-up Multan, Pakistan</span>
                                                <!--<i class="bullet mx-2"></i>-->
                                                <a href="#modalMap" class="display-none" data-toggle="modal" data-title="Ravena Best Hotel">Show on map</a>
                                            </div>
                                        </li>
                                    </ul>

                                    @if(isset($data['rooms']) && !empty($data['rooms']))
                                        <div class="hotel-gallery display-none">
                                            <div class="hotel-gallery__carousel swiper-container js-hotel-carousel">
                                                <div class="swiper-wrapper">
                                                    @foreach($data['rooms'] as $room)
                                                        <div class="swiper-slide"><img class="img-fluid img-cover" src="{{ asset('uploads/hotel/room_images/'.$room->images[0]->image) }}" alt="#"/>
                                                        </div>
                                                    @endforeach

                                                    {{--<div class="swiper-slide"><img class="img-fluid img-cover" src="{{ asset('images/upload/2.jpg') }}" alt="#"/>
                                                            </div>
                                                            <div class="swiper-slide"><img class="img-fluid img-cover" src="{{ asset('images/upload/3.jpg') }}" alt="#"/>
                                                            </div>
                                                            <div class="swiper-slide"><img class="img-fluid img-cover" src="{{ asset('images/upload/4.jpg') }}" alt="#"/>
                                                            </div>
                                                            <div class="swiper-slide"><img class="img-fluid img-cover" src="{{ asset('images/upload/5.jpg') }}" alt="#"/>
                                                            </div>
                                                            <div class="swiper-slide"><img class="img-fluid img-cover" src="{{ asset('images/upload/6.jpg') }}" alt="#"/>
                                                            </div>
                                                            <div class="swiper-slide"><img class="img-fluid img-cover" src="{{ asset('images/upload/7.jpg') }}" alt="#"/>
                                                            </div>
                                                            <div class="swiper-slide"><img class="img-fluid img-cover" src="{{ asset('images/upload/8.jpg') }}" alt="#"/>
                                                            </div>
                                                            <div class="swiper-slide"><img class="img-fluid img-cover" src="{{ asset('images/upload/9.jpg') }}" alt="#"/>
                                                            </div>
                                                            <div class="swiper-slide"><img class="img-fluid img-cover" src="{{ asset('images/upload/10.jpg') }}" alt="#"/>
                                                            </div>--}}
                                                </div>
                                                <div class="hotel-gallery__controls"><a class="hotel-gallery__arrow shadow-sm js-prev" role="button"><i class="icon"><svg xmlns="http://www.w3.org/2000/svg" viewbox="0 0 44 44"><path d="M22.119 44.237C9.922 44.237 0 34.315 0 22.119S9.922.001 22.119.001s22.119 9.922 22.119 22.118-9.924 22.118-22.119 22.118zm0-42.736C10.75 1.501 1.5 10.75 1.5 22.119c0 11.368 9.25 20.618 20.619 20.618s20.619-9.25 20.619-20.618c0-11.369-9.25-20.618-20.619-20.618z"/><path d="M24.667 29.884a.74.74 0 0 1-.53-.22l-7.328-7.334a.752.752 0 0 1 0-1.061l7.328-7.333a.75.75 0 1 1 1.061 1.061L18.4 21.8l6.798 6.805a.752.752 0 0 1 0 1.061.75.75 0 0 1-.531.218z"/></svg></i></a><a class="hotel-gallery__arrow shadow-sm js-next" role="button"><i class="icon"><svg xmlns="http://www.w3.org/2000/svg" viewbox="0 0 44 44"><path d="M22.118 44.236C9.922 44.236 0 34.314 0 22.118S9.922 0 22.118 0s22.118 9.922 22.118 22.118-9.922 22.118-22.118 22.118zm0-42.736C10.75 1.5 1.5 10.749 1.5 22.118c0 11.368 9.25 20.618 20.618 20.618 11.37 0 20.618-9.25 20.618-20.618 0-11.369-9.248-20.618-20.618-20.618z"/><path d="M19.341 29.884a.75.75 0 0 1-.53-1.281l6.796-6.804-6.796-6.803a.75.75 0 1 1 1.061-1.061l7.325 7.333a.75.75 0 0 1 0 1.061l-7.325 7.333a.742.742 0 0 1-.531.222z"/></svg></i></a></div>
                                            </div>
                                            <div class="hotel-gallery__thumbs swiper-container js-hotel-carousel-thumbs">
                                                <div class="swiper-wrapper">
                                                    @foreach($data['rooms'] as $room)
                                                        <div class="swiper-slide">
                                                            <a class="hotel-gallery__thumb js-gallery-link" href="{{ asset('uploads/hotel/room_images/'.$room->images[0]->image) }}" data-description="{{ $room->name }}">
                                                                <img class="img-cover" src="{{ asset('uploads/hotel/room_images/'.$room->images[0]->image) }}" alt="#"/>
                                                            </a>
                                                        </div>
                                                    @endforeach


                                                    {{--<div class="swiper-slide"><a class="hotel-gallery__thumb js-gallery-link" href="{{ asset('images/upload/2.jpg') }}" data-description="A perfect place to snuggle up after a fun day in Asheville!"><img class="img-cover" src="{{ asset('images/upload/2.jpg') }}" alt="#"/></a></div>
                                                    <div class="swiper-slide"><a class="hotel-gallery__thumb js-gallery-link" href="{{ asset('images/upload/3.jpg') }}" data-description="A perfect place to snuggle up after a fun day in Asheville!"><img class="img-cover" src="{{ asset('images/upload/3.jpg') }}" alt="#"/></a></div>
                                                    <div class="swiper-slide"><a class="hotel-gallery__thumb js-gallery-link" href="{{ asset('images/upload/4.jpg') }}" data-description="Underfloor heating in the bathroom floor to keep your toes warm!"><img class="img-cover" src="{{ asset('images/upload/4.jpg') }}" alt="#"/></a></div>
                                                    <div class="swiper-slide"><a class="hotel-gallery__thumb js-gallery-link" href="{{ asset('images/upload/5.jpg') }}" data-description="Full kitchen with full size refrigerator and dining table"><img class="img-cover" src="{{ asset('images/upload/5.jpg') }}" alt="#"/></a></div>
                                                    <div class="swiper-slide"><a class="hotel-gallery__thumb js-gallery-link" href="{{ asset('images/upload/6.jpg') }}" data-description="The combination living room and kitchen includes a dining table."><img class="img-cover" src="{{ asset('images/upload/6.jpg') }}" alt="#"/></a></div>
                                                    <div class="swiper-slide"><a class="hotel-gallery__thumb js-gallery-link" href="{{ asset('images/upload/7.jpg') }}" data-description="You'll know you've arrived when you reach the driveway gate.">
                                                            <img class="img-cover" src="{{ asset('images/upload/7.jpg') }}" alt="#"/></a></div>
                                                    <div class="swiper-slide"><a class="hotel-gallery__thumb js-gallery-link" href="{{ asset('images/upload/8.jpg') }}" data-description="Stone walls and steps compliment the garden area behind the brick patio">
                                                            <img class="img-cover" src="{{ asset('images/upload/8.jpg') }}" alt="#"/></a></div>
                                                    <div class="swiper-slide"><a class="hotel-gallery__thumb js-gallery-link" href="{{ asset('images/upload/9.jpg') }}" data-description="Custom-tiled shower, big enough for two people!"><img class="img-cover" src="{{ asset('images/upload/9.jpg') }}" alt="#"/></a></div>
                                                    <div class="swiper-slide"><a class="hotel-gallery__thumb js-gallery-link" href="{{ asset('images/upload/10.jpg') }}" data-description="View of the backyard parking area as seen from the upstairs unit deck. There is one parking space per unit (one for upstairs, one for downstairs, and one for us in the tiny house in the back!)"><img class="img-cover" src="{{ asset('images/upload/10.jpg') }}" alt="#"/></a></div>--}}

                                                </div>
                                            </div>
                                        </div>
                                    @else

                                    @endif

                                    <hr>
                                    <div class="row">
                                        <div class="col-12 col-md-12 d-flex display-none">
                                            <div class="hotel__intro hotel-card w-100">
                                                <section class="pb-4">
                                                    <h5 class="d-flex align-items-center text-primary mb-3"><i class="icon icon-badge mr-2"></i>One of the best hotels in Milan by customer recall</h5>
                                                    <p>Hotel Ravena is located in a park of 8,000 square meters. meters. There is a restaurant and private parking. The hotel is located on the outskirts of Milan, 150 meters from Bruzzzo Train Station with direct connection to the city center.</p>
                                                    <p>The modern, 4-star Ravena Hotel offers spacious and elegant rooms with free Wi-Fi, air conditioning, a minibar and a flat-screen TV with international channels, as well as a spacious bathroom decorated with mosaic tiles.</p>
                                                    <p>The Ravena has a bar and several meeting rooms for up to 1000 people.</p>
                                                    <p>Hotel Ravena is located near the large Nord park, about 9 km from the historic center of Milan. The exhibition center "Ro Fiera Milano" can be reached in about 10 minutes. Comasina Metro Station is 700 meters away.</p>
                                                    <p>Here the best value for money in Milan! Compared with other options in this city, guests receive more for the same money.</p>
                                                </section>
                                                <section>
                                                    <h5>Popular services in the hotel</h5>
                                                    <ul class="hotel-facilities d-flex flex-wrap flex-column flex-md-row">
                                                        <li class="mr-2"><i class="align-middle icon text-secondary icon-wifi mr-2"></i><span class="align-middle mr-2">Wi-Fi</span><i class="bullet d-none d-md-inline-block"></i></li>
                                                        <li class="mr-2"><i class="align-middle icon text-secondary icon-24-hours mr-2"></i><span class="align-middle mr-2">24-hour front desk</span><i class="bullet d-none d-md-inline-block"></i></li>
                                                        <li class="mr-2"><i class="align-middle icon text-secondary icon-freezer mr-2"></i><span class="align-middle mr-2">Air conditioning</span><i class="bullet d-none d-md-inline-block"></i></li>
                                                        <li class="mr-2"><i class="align-middle icon text-secondary icon-food mr-2"></i><span class="align-middle mr-2">Food and beverage delivery to the room</span><i class="bullet d-none d-md-inline-block"></i></li>
                                                        <li class="mr-2"><i class="align-middle icon text-secondary icon-parking mr-2"></i><span class="align-middle mr-2">Free parking</span><i class="bullet d-none d-md-inline-block"></i></li>
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


                                    @if(isset($data['rooms']) && !empty($data['rooms']))
                                        <div class="hotel-card hotel-items">

                                            <div class="cart-header">
                                                <h4 class="card-title">Available rooms</h4>
                                                <hr>
                                            </div>
                                            <div class="row">
                                                <div class="col-12 col-md-12 order-1 order-md-0">

                                                    @foreach($data['rooms'] as $room)
                                                        <div id="room_{{ $room->id }}" class="hotel-package mb-4">
                                                            <div class="hotel-package__row row mb-4">
                                                                <div class="col-6 pr-md-1">
                                                                    <a class="hotel-package__img d-block" href="#">
                                                                        <img class="img-fluid" src="{{ asset('uploads/hotel/room_images/'.$room->images[0]->image) }}" alt="#"/>
                                                                    </a>
                                                                </div>
                                                                <div class="col-6">
                                                                    <h4 class="hotel-package__title d-inline-block">{{ $room->name }}</h4>
                                                                    <ul class="hotel-package__props">
                                                                    <li class="mb-2 price">
                                                                            <span class="title mr-2">Capcity:</span>
                                                                            <span class="d-inline-block display-none pointer point-fade sale" data-toggle="popover" data-content="And here's some amazing content. It's very engaging. Right?" data-trigger="hover" data-placement="bottom">
                                                                            <i class="hint" data-title="?"></i>
                                                                    </span><span class="cost fw-bold">{{ $room->room_capacity}} Persons </span>
                                                                        <li class="mb-2 price">
                                                                            <span class="title mr-2">Price for night:</span>
                                                                            <span class="d-inline-block display-none pointer point-fade sale" data-toggle="popover" data-content="And here's some amazing content. It's very engaging. Right?" data-trigger="hover" data-placement="bottom">
                                                                            <i class="hint" data-title="?"></i>
                                                                    </span><span class="cost fw-bold">Rs. {{ $room->room_price }} </span>
                                                                        </li>
                                                                        <li class="mb-2 prepayment"><span class="title mr-1">Room Type:</span><span class="fw-bold">{{ $room->room_type }}</span></li>
                                                                        <li class="mb-2 guests"><span class="title mr-1">Status :</span> @if($room->status==1) <span class="badge badge-success"> Active</span> @else <span class="badge badge-danger" > InActive </span> @endif </li>
                                                                    </ul>
                                                                    <button class="btn-more fw-bold text-primary pointer point-fade js-hotel-show-more" type="button">More info +</button>
                                                                </div>
                                                            </div>
                                                            <div class="collapse js-addition">
                                                                <div class="hotel-package__more">
                                                                    <!-- <p class="mb-2">The room has 1 single bed and 1 extra large double bed</p>
                                                                    <ul class="hotel-package__menu">
                                                                        <li class="d-flex align-items-center mb-2"><i class="mr-2 icon icon-coffee-cup text-primary"></i><span class="mt-1 fw-sm">Breakfast is included in the room rate.</span></li>
                                                                    </ul> -->
                                                                    <h5 class="mb-3 fw-bold">Room Facilities</h5>
                                                                    <ul class="hotel-package__options list-inline">
                                                                    @foreach($room->facilities as $f)
                                                                    <li><span>{{ $f->facility_name	 }}</span></li>
                                                                    @endforeach
                                                                      
                                                                     
                                                                    </ul>
                                                                    <h5 class="mb-3 fw-bold">Action</h5>
                                                                    <ul class="hotel-package__options list-inline" style="display: inline-flex;" >
                                                                    <li><span><button onclick="deleteroom({{$room->id}})" class="btn btn-xs btn-danger"><i class="fa fa-trash"></i></button></span></li>
                                                                    <li class="px-2"> @if($room->status==1) 
                                                                   <span><a href="{{route('room-status',[$room->id,0])}}" id="disable" class="btn btn-xs btn-danger">Disable</a> </span>
                                                                    @else
                                                                   <span><a href="{{route('room-status',[$room->id,1])}}" id="enble" class="btn btn-xs btn-danger">Enable</a></span>
                                                                    @endif
                                                                    </li>
                                                                    </ul>
                                                                </div>
                                                            </div>
                                                            <hr class="hr-bottom my-0">
                                                        </div>
                                                    @endforeach
                                                    <div>
                                                    {{ $data['rooms']->links() }}
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
                                    @else
                                        <div class="container">
                                            <div class="row">
                                                <div class="col-12 text-center">
                                                    <h4>No Rooms Available</h4>
                                                </div>
                                            </div>
                                        </div>
                                    @endif






                                </section>
                            </div>
                            <div class="tab-pane" id="hotelServices" role="tabpanel">
                                <section>
                                    <h3 class="fw-md">Facilities & Services</h3>
                                    <hr class="mb-4">
                                    <div class="hotel-card">
                                        <h5>Most popular facilities</h5>
                                        <ul class="hotel-facilities d-flex flex-wrap flex-column flex-md-row mb-3">
                                            <li class="mr-2"><i class="align-middle icon text-secondary icon-wifi mr-2"></i><span class="align-middle mr-2">Wi-Fi</span><i class="bullet d-none d-md-inline-block"></i></li>
                                            <li class="mr-2"><i class="align-middle icon text-secondary icon-24-hours mr-2"></i><span class="align-middle mr-2">24-hour front desk</span><i class="bullet d-none d-md-inline-block"></i></li>
                                            <li class="mr-2"><i class="align-middle icon text-secondary icon-freezer mr-2"></i><span class="align-middle mr-2">Air conditioning</span><i class="bullet d-none d-md-inline-block"></i></li>
                                            <li class="mr-2"><i class="align-middle icon text-secondary icon-food mr-2"></i><span class="align-middle mr-2">Food and beverage delivery to the room</span><i class="bullet d-none d-md-inline-block"></i></li>
                                            <li class="mr-2"><i class="align-middle icon text-secondary icon-parking mr-2"></i><span class="align-middle mr-2">Free parking</span><i class="bullet d-none d-md-inline-block"></i></li>
                                            <li class="mr-2"><i class="align-middle icon text-secondary icon-no-smoking mr-2"></i><span class="align-middle mr-2">Non-smoking rooms</span><i class="bullet d-none d-md-inline-block"></i></li>
                                            <li class="mr-2"><i class="align-middle icon text-secondary icon-pets mr-2"></i><span class="align-middle mr-2">Pets Allowed</span><i class="bullet d-none d-md-inline-block"></i></li>
                                        </ul>
                                        <div class="row">
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
                                    <div class="hotel-card">
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
                            <div class="tab-pane" id="hotelProfile" role="tabpanel">
                                <section>
                             
                                    <h3 class="fw-md">Profile</h3>
                                    <hr class="mb-4">
                                    <div class="hotel-checklist hotel-card">
                                        <form method="post" action="{{ route('save-details') }}" enctype="multipart/form-data" >
                                        @csrf
                                            <div class="form-group">
                                          <label>Hotel Title</label>
                                            <input type="text" class="form-control" name="name" id="name" value="<?php if(!empty($profile)) echo $profile->name;  ?>" />
                                            
                                            </div>
                                            <div class="form-group">
                                          <label>Hotel Contact No</label>
                                            <input type="text" class="form-control" name="phone" id="phone" value="<?php if(!empty($profile)) echo $profile->phone;  ?>" />
                                            </div>
                                            <div class="form-group">
                                          <label>Hotel Email</label>
                                            <input type="email" class="form-control" name="email" id="email" value="<?php if(!empty($profile)) echo $profile->email;  ?>" />
                                            </div>
                                            <div class="form-group">
                                <?php 
                                $range = array('500,5000','1000,10000','2000,20000','5000,30000','5000,40000','5000,50000');
                                ?>    
                                          <label>Hotel Price Range</label>
                                          <select name="Price_range" id="Price_range" required class="form-control" >
    @if(!empty($profile))
   @foreach($range as $ar)
   @if($ar==$profile->Price_range)
   <option selected value="{{$ar}}">{{ $ar }}</option>
   @else
   <option value="{{$ar}}">{{ $ar }}</option>
   @endif
 
    @endforeach
    @else
    <option value="" disabled selected>Select Range</option>
    @foreach($range as $ar)
   <option selected value="{{$ar}}">{{ $ar }}</option>
    @endforeach
    @endif
  </select>
                                            </div>
                                            <div class="form-group">
                                          <label>Hotel Address</label>
                                            <input type="text" class="form-control" name="address" id="address" value="<?php if(!empty($profile)) echo $profile->address;  ?>" />
                                            </div>
                                            <div class="form-group">
                                          <label>Hotel City</label>
                                      <input type="text" name="city" id="city" value="<?php if(!empty($profile)) echo $profile->city;  ?>" class="form-control" />
  </div>
  <div class="form-group">
  <label>Hotel Profile Image</label>
  <input type="file" class="form-control" name="file" id="file" />
  </div>
  <div class="form-group">
  @if(!empty($profile))
  <img src="uploads/hotel_profile/{{$profile->thumbnail}}" style="width: 236px;
    height: 114px;" />
  @endif

  </div>
  <div class="form-group">
  <label>Hotel Description</label>
  <textarea class="form-control" name="description" id="description"> 
  @if(!empty($profile))
  {{ $profile->description }}

  @endif</textarea>
  </div>
  <input type="hidden" name="profile_id" value="<?php if(!empty($profile)) echo $profile->id;  ?>" id="profile_id" />
                                        <input type="submit" id="btnsubmit" class="mbtn" style="cursor: pointer;" name="btnsubmit" value="Submit" />
                                        </form>
                                       
                                       
                                        
                                       
                                        
                                     
                                    </div>
                                </section>
                                <section class="hotel-popular">
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
                                    <div class="hotel-card hotel-review">
                                        <div class="row">
                                            <div class="hotel-review__total col-12 col-sm-4">
                                                <ul class="total d-flex mb-1">
                                                    <li class="total__item">8,2</li>
                                                    <li class="total__item">10</li>
                                                </ul>
                                                <p class="review">Based on  <span class="reviews">9803</span>
                                                    reviews
                                                </p>
                                                <hr>
                                                <p>Guest reviews are written by our customers after their stay at Hotel Ravena</p>
                                            </div>
                                            <div class="hotel-review__progress col-12 col-sm-8 js-point-progress">
                                                <div class="item pr-3">
                                                    <div class="mb-1">Comfort</div>
                                                    <div class="d-flex align-items-center">
                                                        <div class="progress progress--lg">
                                                            <div class="progress-bar bg-secondary" role="progressbar" style="width: 0%" aria-valuenow="82" aria-valuemin="0" aria-valuemax="100">
                                                            </div>
                                                        </div><span class="fw-bold">8.2</span>
                                                    </div>
                                                </div>
                                                <div class="item pr-3">
                                                    <div class="mb-1">Facilities</div>
                                                    <div class="d-flex align-items-center">
                                                        <div class="progress progress--lg">
                                                            <div class="progress-bar bg-secondary" role="progressbar" style="width: 0%" aria-valuenow="93" aria-valuemin="0" aria-valuemax="100">
                                                            </div>
                                                        </div><span class="fw-bold">9.3</span>
                                                    </div>
                                                </div>
                                                <div class="item pr-3">
                                                    <div class="mb-1">Staff</div>
                                                    <div class="d-flex align-items-center">
                                                        <div class="progress progress--lg">
                                                            <div class="progress-bar bg-secondary" role="progressbar" style="width: 0%" aria-valuenow="76" aria-valuemin="0" aria-valuemax="100">
                                                            </div>
                                                        </div><span class="fw-bold">7.6</span>
                                                    </div>
                                                </div>
                                                <div class="item pr-3">
                                                    <div class="mb-1">Food</div>
                                                    <div class="d-flex align-items-center">
                                                        <div class="progress progress--lg">
                                                            <div class="progress-bar bg-secondary" role="progressbar" style="width: 0%" aria-valuenow="85" aria-valuemin="0" aria-valuemax="100">
                                                            </div>
                                                        </div><span class="fw-bold">8.5</span>
                                                    </div>
                                                </div>
                                                <div class="item pr-3">
                                                    <div class="mb-1">Price-quality ratio</div>
                                                    <div class="d-flex align-items-center">
                                                        <div class="progress progress--lg">
                                                            <div class="progress-bar bg-secondary" role="progressbar" style="width: 0%" aria-valuenow="82" aria-valuemin="0" aria-valuemax="100">
                                                            </div>
                                                        </div><span class="fw-bold">8.2</span>
                                                    </div>
                                                </div>
                                            </div>
                                        </div>
                                    </div>
                                    <div class="hotel-card hotel-guests display-none ">
                                        <ul class="hotel-guests__list">
                                            <li class="comment">
                                                <div class="row flex-sm-nowrap">
                                                    <div class="comment__left col-12 col-sm-5 col-md-4 mb-4">
                                                        <div class="d-flex align-items-center w-100">
                                                            <div class="comment__avatar rounded-circle"><img class="img-fluid rounded-circle" src="img/avatar-2.jpg" alt="#"/>
                                                            </div>
                                                            <div class="comment__right">
                                                                <div class="comment__name mb-0">Jessica</div>
                                                                <ul class="d-flex align-items-center">
                                                                    <li class="comment__flag mr-2"><img src="img/en.png" alt="#"/>
                                                                    </li>
                                                                    <li class="comment__country fz-xs">USA</li>
                                                                </ul>
                                                                <ul class="comment__like d-flex align-items-baseline fz-xs">
                                                                    <li><i class="icon icon-like-up"></i><span>17</span></li>
                                                                    <li><i class="icon icon-like-down"></i><span>2</span></li>
                                                                </ul>
                                                            </div>
                                                        </div>
                                                    </div>
                                                    <div class="comment__content col-12 col-sm-7 col-md-8 ">
                                                        <div class="pr-3">
                                                            <div class="comment__meta mb-3">
                                                                <ul class="row justify-content-sm-between align-items-baseline">
                                                                    <li class="comment__level d-flex align-items-center mb-2">
                                                                        <div class="badge bg-primary">9.0</div>
                                                                        <h4 class="level m-0">Excellent</h4>
                                                                    </li>
                                                                    <li class="comment__date mb-2"><span>Review Date:</span>
                                                                        <time datetime="2017-07-18">July 18, 2017</time>
                                                                    </li>
                                                                </ul>
                                                            </div>
                                                            <div class="comment__desc">
                                                                <div class="d-flex">
                                                                    <div class="media-object"><i class="icon icon-plus-inside text-success"></i></div>
                                                                    <div class="content">
                                                                        <p>Excellent breakfast, freshly brewed coffee - specially prepared by the waiter at you. A good big hotel, beautiful design, clean, comfortable parking free at the bottom, spacious rooms.</p>
                                                                    </div>
                                                                </div>
                                                                <div class="d-flex">
                                                                    <div class="media-object"><i class="icon icon-minus-inside text-danger"></i></div>
                                                                    <div class="content">
                                                                        <p>Far from the center, there is no dressing gown or taprock, or shampoo.</p>
                                                                    </div>
                                                                </div>
                                                            </div>
                                                        </div>
                                                        <div class="comment__alert alert d-flex bg-primary-light">
                                                            <div class="media-object pr-3"><i class="icon icon-comments"></i></div>
                                                            <div class="alert__content">
                                                                <h4 class="mb-1">Ravena Hotel responded to this review</h4>
                                                                <p>Dear Jessica, thank you for taking the time to leave a feedback about your stay at the Raven Hotel. Glad you liked it. We will certainly take into account your comments to make arrivals at the hotel even more comfortable.</p>
                                                            </div>
                                                        </div>
                                                    </div>
                                                </div>
                                            </li>
                                            <li class="comment">
                                                <div class="row flex-sm-nowrap">
                                                    <div class="comment__left col-12 col-sm-5 col-md-4 mb-4">
                                                        <div class="d-flex align-items-center w-100">
                                                            <div class="comment__avatar rounded-circle"><img class="img-fluid rounded-circle" src="img/avatar-1.jpg" alt="#"/>
                                                            </div>
                                                            <div class="comment__right">
                                                                <div class="comment__name mb-0">Roman</div>
                                                                <ul class="d-flex align-items-center">
                                                                    <li class="comment__flag mr-2"><img src="img/ru.png" alt="#"/>
                                                                    </li>
                                                                    <li class="comment__country fz-xs">Russia</li>
                                                                </ul>
                                                                <ul class="comment__like d-flex align-items-baseline fz-xs">
                                                                    <li><i class="icon icon-like-up"></i><span>17</span></li>
                                                                    <li><i class="icon icon-like-down"></i><span>2</span></li>
                                                                </ul>
                                                            </div>
                                                        </div>
                                                    </div>
                                                    <div class="comment__content col-12 col-sm-7 col-md-8">
                                                        <div class="pr-3">
                                                            <div class="comment__meta mb-3">
                                                                <ul class="row justify-content-sm-between align-items-baseline">
                                                                    <li class="comment__level d-flex align-items-center mb-2">
                                                                        <div class="badge bg-primary">9.2</div>
                                                                        <h4 class="level m-0">Excellent</h4>
                                                                    </li>
                                                                    <li class="comment__date mb-2"><span>Review Date:</span>
                                                                        <time datetime="2017-05-15">May 15, 2017</time>
                                                                    </li>
                                                                </ul>
                                                            </div>
                                                            <div class="comment__desc">
                                                                <div class="d-flex">
                                                                    <div class="media-object"><i class="icon icon-plus-inside text-success"></i></div>
                                                                    <div class="content">
                                                                        <p>For breakfast buffet, a comfortable place for breakfast, with a large load, the staff does not have time to clean from the tables, but this will make you wait literally minutes 2. The rooms are nice, the staff is polite. And the price-quality really fit.</p>
                                                                    </div>
                                                                </div>
                                                                <div class="d-flex">
                                                                    <div class="media-object"><i class="icon icon-minus-inside text-danger"></i></div>
                                                                    <div class="content">
                                                                        <p>Cold in the rooms, when the heating was switched on, but the room was heated only in the middle of the night.</p>
                                                                    </div>
                                                                </div>
                                                            </div>
                                                        </div>
                                                    </div>
                                                </div>
                                            </li>
                                            <li class="comment">
                                                <div class="row flex-sm-nowrap">
                                                    <div class="comment__left col-12 col-sm-5 col-md-4 mb-4">
                                                        <div class="d-flex align-items-center w-100">
                                                            <div class="comment__avatar rounded-circle"><img class="img-fluid rounded-circle" src="img/avatar-face.jpg" alt="#"/>
                                                            </div>
                                                            <div class="comment__right">
                                                                <div class="comment__name mb-0">Andrew</div>
                                                                <ul class="d-flex align-items-center">
                                                                    <li class="comment__flag mr-2"><img src="img/au.png" alt="#"/>
                                                                    </li>
                                                                    <li class="comment__country fz-xs">Australia</li>
                                                                </ul>
                                                                <ul class="comment__like d-flex align-items-baseline fz-xs">
                                                                    <li><i class="icon icon-like-up"></i><span>5</span></li>
                                                                    <li><i class="icon icon-like-down"></i><span>0</span></li>
                                                                </ul>
                                                            </div>
                                                        </div>
                                                    </div>
                                                    <div class="comment__content col-12 col-sm-7 col-md-8">
                                                        <div class="pr-3">
                                                            <div class="comment__meta mb-3">
                                                                <ul class="row justify-content-sm-between align-items-baseline">
                                                                    <li class="comment__level d-flex align-items-center mb-2">
                                                                        <div class="badge bg-primary">7.3</div>
                                                                        <h4 class="level m-0">Good</h4>
                                                                    </li>
                                                                    <li class="comment__date mb-2"><span>Review Date:</span>
                                                                        <time datetime="2017-05-10">May 10, 2017</time>
                                                                    </li>
                                                                </ul>
                                                            </div>
                                                            <div class="comment__desc">
                                                                <div class="d-flex">
                                                                    <div class="media-object"><i class="icon icon-plus-inside text-success"></i></div>
                                                                    <div class="content">
                                                                        <p>The hotel is located far from the city center, but the metro is close, about 7 minutes on foot, is a yellow branch that will take you directly to Duomo Square. Very well equipped large room, which has everything for a comfortable stay.</p>
                                                                    </div>
                                                                </div>
                                                                <div class="d-flex">
                                                                    <div class="media-object"><i class="icon icon-minus-inside text-danger"></i></div>
                                                                    <div class="content">
                                                                        <p>At breakfast a lot of people, crush, however, the waiters were attentive and managed to somehow arrange all.</p>
                                                                    </div>
                                                                </div>
                                                            </div>
                                                        </div>
                                                    </div>
                                                </div>
                                            </li>
                                            <li class="comment">
                                                <div class="row flex-sm-nowrap">
                                                    <div class="comment__left col-12 col-sm-5 col-md-4 mb-4">
                                                        <div class="d-flex align-items-center w-100">
                                                            <div class="comment__avatar rounded-circle"><img class="img-fluid rounded-circle" src="img/avatar-3.jpg" alt="#"/>
                                                            </div>
                                                            <div class="comment__right">
                                                                <div class="comment__name mb-0">Chris</div>
                                                                <ul class="d-flex align-items-center">
                                                                    <li class="comment__flag mr-2"><img src="img/au.png" alt="#"/>
                                                                    </li>
                                                                    <li class="comment__country fz-xs">Australia</li>
                                                                </ul>
                                                                <ul class="comment__like d-flex align-items-baseline fz-xs">
                                                                    <li><i class="icon icon-like-up"></i><span>19</span></li>
                                                                    <li><i class="icon icon-like-down"></i><span>2</span></li>
                                                                </ul>
                                                            </div>
                                                        </div>
                                                    </div>
                                                    <div class="comment__content col-12 col-sm-7 col-md-8">
                                                        <div class="pr-3">
                                                            <div class="comment__meta mb-3">
                                                                <ul class="row justify-content-sm-between align-items-baseline">
                                                                    <li class="comment__level d-flex align-items-center mb-2">
                                                                        <div class="badge bg-primary">9.4</div>
                                                                        <h4 class="level m-0">Excellent</h4>
                                                                    </li>
                                                                    <li class="comment__date mb-2"><span>Review Date:</span>
                                                                        <time datetime="2017-05-10">May 10, 2017</time>
                                                                    </li>
                                                                </ul>
                                                            </div>
                                                            <div class="comment__desc">
                                                                <div class="d-flex">
                                                                    <div class="media-object"><i class="icon icon-plus-inside text-success"></i></div>
                                                                    <div class="content">
                                                                        <p>The hotel is located far from the city center, but the metro is close, about 7 minutes on foot, is a yellow branch that will take you directly to Duomo Square. Very well equipped large room, which has everything for a comfortable stay.</p>
                                                                    </div>
                                                                </div>
                                                                <div class="d-flex">
                                                                    <div class="media-object"><i class="icon icon-minus-inside text-danger"></i></div>
                                                                    <div class="content">
                                                                        <p>At breakfast a lot of people, crush, however, the waiters were attentive and managed to somehow arrange all.</p>
                                                                    </div>
                                                                </div>
                                                            </div>
                                                        </div>
                                                    </div>
                                                </div>
                                            </li>
                                            <li class="comment">
                                                <div class="row flex-sm-nowrap">
                                                    <div class="comment__left col-12 col-sm-5 col-md-4 mb-4">
                                                        <div class="d-flex align-items-center w-100">
                                                            <div class="comment__avatar rounded-circle"><img class="img-fluid rounded-circle" src="img/avatar-1.jpg" alt="#"/>
                                                            </div>
                                                            <div class="comment__right">
                                                                <div class="comment__name mb-0">Roman</div>
                                                                <ul class="d-flex align-items-center">
                                                                    <li class="comment__flag mr-2"><img src="img/ru.png" alt="#"/>
                                                                    </li>
                                                                    <li class="comment__country fz-xs">Russia</li>
                                                                </ul>
                                                                <ul class="comment__like d-flex align-items-baseline fz-xs">
                                                                    <li><i class="icon icon-like-up"></i><span>17</span></li>
                                                                    <li><i class="icon icon-like-down"></i><span>2</span></li>
                                                                </ul>
                                                            </div>
                                                        </div>
                                                    </div>
                                                    <div class="comment__content col-12 col-sm-7 col-md-8">
                                                        <div class="pr-3">
                                                            <div class="comment__meta mb-3">
                                                                <ul class="row justify-content-sm-between align-items-baseline">
                                                                    <li class="comment__level d-flex align-items-center mb-2">
                                                                        <div class="badge bg-primary">9.2</div>
                                                                        <h4 class="level m-0">Excellent</h4>
                                                                    </li>
                                                                    <li class="comment__date mb-2"><span>Review Date:</span>
                                                                        <time datetime="2017-05-05">May 05, 2017</time>
                                                                    </li>
                                                                </ul>
                                                            </div>
                                                            <div class="comment__desc">
                                                                <div class="d-flex">
                                                                    <div class="media-object"><i class="icon icon-plus-inside text-success"></i></div>
                                                                    <div class="content">
                                                                        <p>For breakfast buffet, a comfortable place for breakfast, with a large load, the staff does not have time to clean from the tables, but this will make you wait literally minutes 2. The rooms are nice, the staff is polite. And the price-quality really fit.</p>
                                                                    </div>
                                                                </div>
                                                                <div class="d-flex">
                                                                    <div class="media-object"><i class="icon icon-minus-inside text-danger"></i></div>
                                                                    <div class="content">
                                                                        <p>Cold in the rooms, when the heating was switched on, but the room was heated only in the middle of the night.</p>
                                                                    </div>
                                                                </div>
                                                            </div>
                                                        </div>
                                                    </div>
                                                </div>
                                            </li>
                                            <li class="comment">
                                                <div class="row flex-sm-nowrap">
                                                    <div class="comment__left col-12 col-sm-5 col-md-4 mb-4">
                                                        <div class="d-flex align-items-center w-100">
                                                            <div class="comment__avatar rounded-circle"><img class="img-fluid rounded-circle" src="img/avatar-3.jpg" alt="#"/>
                                                            </div>
                                                            <div class="comment__right">
                                                                <div class="comment__name mb-0">Chris</div>
                                                                <ul class="d-flex align-items-center">
                                                                    <li class="comment__flag mr-2"><img src="img/au.png" alt="#"/>
                                                                    </li>
                                                                    <li class="comment__country fz-xs">Australia</li>
                                                                </ul>
                                                                <ul class="comment__like d-flex align-items-baseline fz-xs">
                                                                    <li><i class="icon icon-like-up"></i><span>19</span></li>
                                                                    <li><i class="icon icon-like-down"></i><span>2</span></li>
                                                                </ul>
                                                            </div>
                                                        </div>
                                                    </div>
                                                    <div class="comment__content col-12 col-sm-7 col-md-8">
                                                        <div class="pr-3">
                                                            <div class="comment__meta mb-3">
                                                                <ul class="row justify-content-sm-between align-items-baseline">
                                                                    <li class="comment__level d-flex align-items-center mb-2">
                                                                        <div class="badge bg-primary">9.4</div>
                                                                        <h4 class="level m-0">Excellent</h4>
                                                                    </li>
                                                                    <li class="comment__date mb-2"><span>Review Date:</span>
                                                                        <time datetime="2017-05-05">May 05, 2017</time>
                                                                    </li>
                                                                </ul>
                                                            </div>
                                                            <div class="comment__desc">
                                                                <div class="d-flex">
                                                                    <div class="media-object"><i class="icon icon-plus-inside text-success"></i></div>
                                                                    <div class="content">
                                                                        <p>The hotel is located far from the city center, but the metro is close, about 7 minutes on foot, is a yellow branch that will take you directly to Duomo Square. Very well equipped large room, which has everything for a comfortable stay.</p>
                                                                    </div>
                                                                </div>
                                                                <div class="d-flex">
                                                                    <div class="media-object"><i class="icon icon-minus-inside text-danger"></i></div>
                                                                    <div class="content">
                                                                        <p>At breakfast a lot of people, crush, however, the waiters were attentive and managed to somehow arrange all.</p>
                                                                    </div>
                                                                </div>
                                                            </div>
                                                        </div>
                                                    </div>
                                                </div>
                                            </li>
                                            <li class="comment">
                                                <div class="row flex-sm-nowrap">
                                                    <div class="comment__left col-12 col-sm-5 col-md-4 mb-4">
                                                        <div class="d-flex align-items-center w-100">
                                                            <div class="comment__avatar rounded-circle"><img class="img-fluid rounded-circle" src="img/avatar-2.jpg" alt="#"/>
                                                            </div>
                                                            <div class="comment__right">
                                                                <div class="comment__name mb-0">Jessica</div>
                                                                <ul class="d-flex align-items-center">
                                                                    <li class="comment__flag mr-2"><img src="img/en.png" alt="#"/>
                                                                    </li>
                                                                    <li class="comment__country fz-xs">USA</li>
                                                                </ul>
                                                                <ul class="comment__like d-flex align-items-baseline fz-xs">
                                                                    <li><i class="icon icon-like-up"></i><span>17</span></li>
                                                                    <li><i class="icon icon-like-down"></i><span>2</span></li>
                                                                </ul>
                                                            </div>
                                                        </div>
                                                    </div>
                                                    <div class="comment__content col-12 col-sm-7 col-md-8">
                                                        <div class="pr-3">
                                                            <div class="comment__meta mb-3">
                                                                <ul class="row justify-content-sm-between align-items-baseline">
                                                                    <li class="comment__level d-flex align-items-center mb-2">
                                                                        <div class="badge bg-primary">9.0</div>
                                                                        <h4 class="level m-0">Excellent</h4>
                                                                    </li>
                                                                    <li class="comment__date mb-2"><span>Review Date:</span>
                                                                        <time datetime="2017-05-29">April 29, 2017</time>
                                                                    </li>
                                                                </ul>
                                                            </div>
                                                            <div class="comment__desc">
                                                                <div class="d-flex">
                                                                    <div class="media-object"><i class="icon icon-plus-inside text-success"></i></div>
                                                                    <div class="content">
                                                                        <p>Excellent breakfast, freshly brewed coffee - specially prepared by the waiter at you. A good big hotel, beautiful design, clean, comfortable parking free at the bottom, spacious rooms.</p>
                                                                    </div>
                                                                </div>
                                                                <div class="d-flex">
                                                                    <div class="media-object"><i class="icon icon-minus-inside text-danger"></i></div>
                                                                    <div class="content">
                                                                        <p>Far from the center, there is no dressing gown or taprock, or shampoo.</p>
                                                                    </div>
                                                                </div>
                                                            </div>
                                                        </div>
                                                    </div>
                                                </div>
                                            </li>
                                            <li class="comment">
                                                <div class="row flex-sm-nowrap">
                                                    <div class="comment__left col-12 col-sm-5 col-md-4 mb-4">
                                                        <div class="d-flex align-items-center w-100">
                                                            <div class="comment__avatar rounded-circle"><img class="img-fluid rounded-circle" src="img/avatar-4.jpg" alt="#"/>
                                                            </div>
                                                            <div class="comment__right">
                                                                <div class="comment__name mb-0">Maddalena</div>
                                                                <ul class="d-flex align-items-center">
                                                                    <li class="comment__flag mr-2"><img src="img/it.png" alt="#"/>
                                                                    </li>
                                                                    <li class="comment__country fz-xs">Italy</li>
                                                                </ul>
                                                                <ul class="comment__like d-flex align-items-baseline fz-xs">
                                                                    <li><i class="icon icon-like-up"></i><span>15</span></li>
                                                                    <li><i class="icon icon-like-down"></i><span>1</span></li>
                                                                </ul>
                                                            </div>
                                                        </div>
                                                    </div>
                                                    <div class="comment__content col-12 col-sm-7 col-md-8">
                                                        <div class="pr-3">
                                                            <div class="comment__meta mb-3">
                                                                <ul class="row justify-content-sm-between align-items-baseline">
                                                                    <li class="comment__level d-flex align-items-center mb-2">
                                                                        <div class="badge bg-primary">9.5</div>
                                                                        <h4 class="level m-0">Excellent</h4>
                                                                    </li>
                                                                    <li class="comment__date mb-2"><span>Review Date:</span>
                                                                        <time datetime="2017-05-25">April 25, 2017</time>
                                                                    </li>
                                                                </ul>
                                                            </div>
                                                            <div class="comment__desc">
                                                                <div class="d-flex">
                                                                    <div class="media-object"><i class="icon icon-plus-inside text-success"></i></div>
                                                                    <div class="content">
                                                                        <p>&quot;Very clean, nice, stylish. From the metro 10 min walk Similar hotels usually cost many times more expensive. Huge bed, towels, everything you need. Cleaning once a day. The breakfast is excellent, the coffee is prepared by the barista - the first time I meet this at the hotel.&quot;</p>
                                                                    </div>
                                                                </div>
                                                                <div class="d-flex">
                                                                    <div class="media-object"><i class="icon icon-minus-inside text-danger"></i></div>
                                                                    <div class="content">
                                                                        <p>Far from the center, there is no dressing gown or taprock, or shampoo.</p>
                                                                    </div>
                                                                </div>
                                                            </div>
                                                        </div>
                                                    </div>
                                                </div>
                                            </li>
                                        </ul>
                                        <nav class="pagination-nav" aria-label="Page navigation example">
                                            <ul class="pagination">
                                                <li class="page-item"><a class="page-link" href="#"><i class="fa fa-angle-double-left"></i></a></li>
                                                <li class="page-item"><a class="page-link" href="#">1</a>
                                                </li>
                                                <li class="page-item"><a class="page-link" href="#">2</a>
                                                </li>
                                                <li class="page-item align-self-end d-sm-none"><a class="dotted" href="#">......</a>
                                                </li>
                                                <li class="page-item d-none d-sm-block"><a class="page-link" href="#">4</a>
                                                </li>
                                                <li class="page-item d-none d-sm-block"><a class="page-link" href="#">5</a>
                                                </li>
                                                <li class="page-item d-none d-sm-block"><a class="page-link" href="#">6</a>
                                                </li>
                                                <li class="page-item"><a class="page-link" href="#">7</a>
                                                </li>
                                                <li class="page-item"><a class="page-link" href="#">8</a>
                                                </li>
                                                <li class="page-item"><a class="page-link" href="#"><i class="fa fa-angle-double-right"></i></a></li>
                                            </ul>
                                        </nav>
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
                if (typeof (FileReader) != "undefined") {
                    var dvPreview = $("#dvPreview");
                    dvPreview.html("");
                    var regex = /^([a-zA-Z0-9\s_\\.\-:])+(.jpg|.jpeg|.gif|.png|.bmp)$/;
                    $($(this)[0].files).each(function () {
                        var file = $(this);
                        if (regex.test(file[0].name.toLowerCase())) {
                            var reader = new FileReader();
                            reader.onload = function (e) {
                                var url = e.target.result;
                                var div = $("<div></div>");
                                div.attr("style", "height: 110px;width: 100px;margin-right: 10px; margin-bottom: 10px; background-image: url("+url+"); background-repeat: no-repeat; background-size: cover; background-position: center center; display: inline-block;");
                                div.attr("src", e.target.result);
                                div.attr("class", "img-thumbnail");
                                dvPreview.append(div);
                            }
                            reader.readAsDataURL(file[0]);
                        } else {
                            alert(file[0].name + " is not a valid image file.");
                            dvPreview.html("");
                            return false;
                        }
                    });
                } else {
                    alert("This browser does not support HTML5 FileReader.");
                }
            });
        });
        /***
         * END Of multiple images gallery
         * */

    </script>



    <script>
        $(document).ready(function() {
            var max_fields      = 10; //maximum input boxes allowed
            var wrapperFacility   	= $(".append_facility_row_init"); //Fields wrapper
            var add_button_facility  = $(".add-facility"); //Add button ID

            var x = 1; //initlal text box count
            $(add_button_facility).click(function(e){ //on add input button click

                e.preventDefault();
                if(x < max_fields){ //max input box allowed


                    var html = '<div class="row">';

                    html += '<div class="col-10 col-md-5 form-group">';
                    html += '<label class="label-text ml-3" for="facility_name">Facility Name</label>';

                    var facilityName = "facilities["+x+"][facility_name]";
                    var facilityform = "facilities["+x+"][facility_charges]";

                    html += '<input class="form-control" id="facility_name" type="text" name="'+facilityName+'" required="required" placeholder="Facility Name" />';
                    html += '</div>';

                    /*html += '<div class="col-12 col-sm-12 col-md-5 ">';
                    html += '<div class="form-group">';
                    html += '<label class="label-text ml-3" for="facility_charges">Facility Charges</label>';
                    html += '<input class="form-control" id="facility_charges" type="text" name="'+facilityform+'" required="required"/>';
                    html += '</div></div>';*/

                    html += '<div class="col-2 col-md-2 ">';
                    html += '<button type="button" class="btn btn-danger btn-sm remove_field mt-30 add-facilit-btn" ><i class="fa fa-times"></i></button>';
                    html += '</div></div>';


                    x++; //text box increment



                    $(wrapperFacility).append(html); //add inputs row box

                }
            });

            $(wrapperFacility).on("click",".remove_field", function(e){ //user click on remove text

                e.preventDefault();
                $(this).closest('.row').remove(); x--;
            });
        });

        //function delete room
   function deleteroom(id)
   {
    ///sweetalert
var formData = new FormData();
     formData.append('id',id);
    
swal({
  title: "Are you sure?",
  text: "Once deleted, you will not be able to recover this Room",
  icon: "warning",
  buttons: true,
  dangerMode: true,
})
.then((willDelete) => {
  if (willDelete) {
    ///start ajaxcode
    $.ajax({
      type: "POST",
      url: 'delete-room',
      headers: {'X-CSRF-TOKEN': $('meta[name="csrf-token"]').attr('content')},
      data: formData,
      cache: false,
      contentType: false,
      processData: false,
      dataType: 'JSON',
       beforeSend:function(){
            $('#btnloader').addClass('spinner-border spinner-border-sm');
       },
      success: function(data) {
      
        if(data.status==200)
        {
            swal({
  title: "Success!",
  text: "You Room Was Successfully Removed!",
  icon: "success",
  button: "Aww yiss!",
});
            $('#room_'+id).hide('slow');      
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
  
 /// return false;
   
   }
        //end of delete room
    </script>

@endsection