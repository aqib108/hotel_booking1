<div class="sidebar__content js-sticky-top">
    <div class="sidebar__finder card bg-primary text-white">
        <h4 class="m-0 mb-lg-4">Search for hotels</h4>
        <form class="collapse show d-lg-block mt-3" id="hotelFinder" action="#" method="POST" data-toggle="validator">
            <div class="row">
                <div class="col-12 form-group">
                    <label class="label">Place or name of the hotel / city</label><span class="form-select">
                          <select class="form-control select2 js-form-select" id="hotelName" name="hotel_name">
                            <option value="Resort Spa Hotel">Resort Spa Hotel</option>
                            <option value="Black Pearl">Black Pearl</option>
                            <option value="Marsol">Marsol</option>
                            <option value="Macronissos Village Bungalows">Macronissos Village Bungalows</option>
                            <option value="Iberotel Aquamarine Resort">Iberotel Aquamarine Resort</option>
                          </select></span>
                </div>
                <div class="col-12">
                    <div class="row">
                        <div class="col-12 col-sm-6 col-lg-12 form-group">
                            <label class="label-text" for="hotelInDate">Check fas in date</label>
                            <div class="input-group-append"><i class="fa fa-calendar-alt"></i>
                                <input class="form-control js-input-date " id="hotelInDate" type="text" name="hotel_date_in" required="required"/>
                            </div>
                        </div>
                        <div class="col-12 col-sm-6 col-lg-12 form-group">
                            <label class="label-text" for="hotelOutDate">Check out date</label>
                            <div class="input-group-append"><i class="icon icon-calendar"></i>
                                <input class="form-control js-input-date " id="hotelOutDate" type="text" name="hotel_date_out" required="required"/>
                            </div>
                        </div>
                    </div>
                </div>
                <div class="col-12">
                    <label class="label">13 Nights</label>
                    <div class="row">
                        <div class="col-12 col-sm-6 form-group col-lg-12"><span class="form-select">
                              <select class="form-control select2 js-form-select" id="hotelAdults" name="hotel_adults">
                                <option value="1 Adult">1 Adult</option>
                                <option value="2 Adults">2 Adults</option>
                                <option value="3 Adults">3 Adults</option>
                                <option value="4 Adults">4 Adults</option>
                                <option value="5 Adults">5 Adults</option>
                              </select></span>
                        </div>
                        <div class="col-12 col-sm-6 form-group col-lg-6"><span class="form-select">
                              <select class="form-control select2 js-form-select" id="hotelChild" name="hotel__childs">
                                <option value="1 Child">1 Child</option>
                                <option value="2 Childs">2 Childs</option>
                                <option value="3 Childs">3 Childs</option>
                                <option value="4 Childs">4 Childs</option>
                                <option value="5 Childs">5 Childs</option>
                              </select></span>
                        </div>
                        <div class="col-12 col-sm-6 form-group col-lg-6"><span class="form-select">
                              <select class="form-control select2 js-form-select" id="hotelRoom" name="hotel_rooms">
                                <option value="1 Room">1 Room</option>
                                <option value="2 Rooms">2 Rooms</option>
                                <option value="3 Rooms">3 Rooms</option>
                                <option value="4 Rooms">4 Rooms</option>
                                <option value="5 Rooms">5 Rooms</option>
                              </select></span>
                        </div>
                        <div class="col-12 col-sm-6 col-lg-12 form-group"><span class="form-select">
                              <select class="form-control select2 js-form-select" id="hotelDeparture" name="hotel_departure">
                                <option value="Resort Spa Hotel">Resort Spa Hotel</option>
                                <option value="Black Pearl">Black Pearl</option>
                                <option value="Marsol">Marsol</option>
                                <option value="Macronissos Village Bungalows">Macronissos Village Bungalows</option>
                                <option value="Iberotel Aquamarine Resort">Iberotel Aquamarine Resort</option>
                              </select></span>
                        </div>
                    </div>
                </div>
            </div>
            <button class="btn btn-secondary btn--round mx-auto mt-2 w-100" type="submit">search
            </button>
        </form>
    </div>
    <button class="btn-toggle btn btn-primary-light border-0 w-100 py-3 d-lg-none" data-target="#hotelFinder" data-toggle="collapse" aria-expanded="true" type="button"><span class="icon-bar"></span></button>
    <div class="card d-none d-lg-flex display-none">
        <p class="fw-bold"><span class="count">9 803</span>
            guests liked this hotel
        </p>
        <ul class="guests-room">
            <li class="guests-room__item">
                <div class="guests-room__desc">&quot;Very clean, nice, stylish. From the metro 10 min walk Similar hotels usually cost many times more expensive. Huge bed, towels, everything you need. Cleaning once a day. The breakfast is excellent, the coffee is prepared by the barista - the first time I meet this at the hotel. &quot;</div>
                <div class="guests-room__bottom d-flex align-items-center">
                    <div class="guests-room__avatar d-flex align-items-center pointer"><a class="media-object d-block rounded-circle" href="hotel-reviews.html"><img class="img-fluid rounded-circle" src="{{ asset('images/avatar-1.jpg') }}" alt="#"/></a></div>
                    <div class="guests-room__right">
                        <h5 class="mb-1">Roman</h5>
                        <div class="d-flex align-items-center"><img class="mr-2" src="{{ asset('images/ru.png') }}" alt="#"/>
                            <div class="country fz-xs">Russia</div>
                        </div>
                    </div>
                </div>
            </li>
            <li class="guests-room__item">
                <div class="guests-room__desc">&quot;A wonderful hotel with spacious rooms and a good bathroom. Polite staff. Good breakfast. &quot;</div>
                <div class="guests-room__bottom d-flex align-items-center">
                    <div class="guests-room__avatar d-flex align-items-center pointer"><a class="media-object d-block rounded-circle" href="hotel-reviews.html"><img class="img-fluid rounded-circle" src="img/avatar-2.jpg" alt="#"/></a></div>
                    <div class="guests-room__right">
                        <h5 class="mb-1">Jessica</h5>
                        <div class="d-flex align-items-center"><img class="mr-2" src="{{ asset('images/en.png') }}" alt="#"/>
                            <div class="country fz-xs">USA</div>
                        </div>
                    </div>
                </div>
            </li>
            <li class="guests-room__item">
                <div class="guests-room__desc">Good, great hotel. Excellent beds. Good sound insulation. The metro is 25 minutes on foot. Free parking. We liked!</div>
                <div class="guests-room__bottom d-flex align-items-center">
                    <div class="guests-room__avatar d-flex align-items-center pointer"><a class="media-object d-block rounded-circle" href="hotel-reviews.html"><img class="img-fluid rounded-circle" src="img/avatar-3.jpg" alt="#"/></a></div>
                    <div class="guests-room__right">
                        <h5 class="mb-1">Chris</h5>
                        <div class="d-flex align-items-center"><img class="mr-2" src="{{ asset('images/au.png') }}" alt="#"/>
                            <div class="country fz-xs">Australia</div>
                        </div>
                    </div>
                </div>
            </li>
            <li class="guests-room__item">
                <div class="guests-room__desc">&quot;Free parking. Convenient arrivals by car from the airport. Approximately 1 km yellow subway line, which goes without a transfer to the Duomo. Large room. The hotel security speaks English. Excellent breakfast. A giant bed. &quot;</div>
                <div class="guests-room__bottom d-flex align-items-center">
                    <div class="guests-room__avatar d-flex align-items-center pointer"><a class="media-object d-block rounded-circle" href="hotel-reviews.html"><img class="img-fluid rounded-circle" src="img/avatar-4.jpg" alt="#"/></a></div>
                    <div class="guests-room__right">
                        <h5 class="mb-1">Maddalena</h5>
                        <div class="d-flex align-items-center"><img class="mr-2" src="{{ asset('images/it.png') }}" alt="#"/>
                            <div class="country fz-xs">Italy</div>
                        </div>
                    </div>
                </div>
            </li>
            <li class="guests-room__item">
                <div class="guests-room__desc">&quot;Very clean, nice, stylish. From the metro 10 min walk Similar hotels usually cost many times more expensive. Huge bed, towels, everything you need. Cleaning once a day. The breakfast is excellent, the coffee is prepared by the barista - the first time I meet this at the hotel. &quot;</div>
                <div class="guests-room__bottom d-flex align-items-center">
                    <div class="guests-room__avatar d-flex align-items-center pointer"><a class="media-object d-block rounded-circle" href="hotel-reviews.html"><img class="img-fluid rounded-circle" src="img/avatar-1.jpg" alt="#"/></a></div>
                    <div class="guests-room__right">
                        <h5 class="mb-1">Roman</h5>
                        <div class="d-flex align-items-center"><img class="mr-2" src="{{ asset('images/ru.png') }}" alt="#"/>
                            <div class="country fz-xs">Russia</div>
                        </div>
                    </div>
                </div>
            </li>
            <li class="guests-room__item">
                <div class="guests-room__desc">&quot;A wonderful hotel with spacious rooms and a good bathroom. Polite staff. Good breakfast. &quot;</div>
                <div class="guests-room__bottom d-flex align-items-center">
                    <div class="guests-room__avatar d-flex align-items-center pointer"><a class="media-object d-block rounded-circle" href="hotel-reviews.html"><img class="img-fluid rounded-circle" src="img/avatar-2.jpg" alt="#"/></a></div>
                    <div class="guests-room__right">
                        <h5 class="mb-1">Jessica</h5>
                        <div class="d-flex align-items-center"><img class="mr-2" src="{{ asset('images/en.png') }}" alt="#"/>
                            <div class="country fz-xs">USA</div>
                        </div>
                    </div>
                </div>
            </li>
            <li class="guests-room__item">
                <div class="guests-room__desc">Good, great hotel. Excellent beds. Good sound insulation. The metro is 25 minutes on foot. Free parking. We liked!</div>
                <div class="guests-room__bottom d-flex align-items-center">
                    <div class="guests-room__avatar d-flex align-items-center pointer"><a class="media-object d-block rounded-circle" href="hotel-reviews.html"><img class="img-fluid rounded-circle" src="img/avatar-3.jpg" alt="#"/></a></div>
                    <div class="guests-room__right">
                        <h5 class="mb-1">Chris</h5>
                        <div class="d-flex align-items-center"><img class="mr-2" src="{{ asset('images/au.png') }}" alt="#"/>
                            <div class="country fz-xs">Australia</div>
                        </div>
                    </div>
                </div>
            </li>
            <li class="guests-room__item">
                <div class="guests-room__desc">&quot;Free parking. Convenient arrivals by car from the airport. Approximately 1 km yellow subway line, which goes without a transfer to the Duomo. Large room. The hotel security speaks English. Excellent breakfast. A giant bed. &quot;</div>
                <div class="guests-room__bottom d-flex align-items-center">
                    <div class="guests-room__avatar d-flex align-items-center pointer"><a class="media-object d-block rounded-circle" href="hotel-reviews.html"><img class="img-fluid rounded-circle" src="img/avatar-4.jpg" alt="#"/></a></div>
                    <div class="guests-room__right">
                        <h5 class="mb-1">Maddalena</h5>
                        <div class="d-flex align-items-center"><img class="mr-2" src="{{ asset('images/it.png') }}" alt="#"/>
                            <div class="country fz-xs">Italy</div>
                        </div>
                    </div>
                </div>
            </li>
        </ul>
    </div>
</div>