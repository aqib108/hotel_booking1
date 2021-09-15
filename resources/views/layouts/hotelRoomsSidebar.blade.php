<aside class="sidebar col-lg-3 order-1 order-lg-0">
    <div class="sidebar__content js-sticky-top">
        <div class="sidebar-filter modal card fade" id="sidebarFilter" tabindex="-1" role="dialog">
            <button class="btn-toggle btn btn-light" type="button" data-dismiss="modal"><span class="icon-bar"></span></button>
            <div class="modal-header bg-white">
                <h4 class="modal-title">Refine search result</h4>
            </div>
            <div class="modal-dialog">
                <div class="modal-content">
                    <div class="modal-body">
                        <ul class="sidebar-filter__list">
                            <li class="sidebar-filter__item">
                                <h5 class="sidebar-filter__title"><a class="sidebar-filter__toggle d-flex justify-content-between align-items-center" href="#price" data-toggle="collapse" role="button"><span>Price (per night)</span><i class="fa fa-angle-down"></i></a></h5>
                                <div class="collapse show" id="price">
                                    <div class="sidebar-filter__content">
                                        <label class="custom-control custom-checkbox">
                                            <input class="custom-control-input" type="checkbox"/><span class="custom-control-label pointer">50 - 99 €</span>
                                        </label>
                                        <label class="custom-control custom-checkbox">
                                            <input class="custom-control-input" type="checkbox"/><span class="custom-control-label pointer">100 - 149 €</span>
                                        </label>
                                        <label class="custom-control custom-checkbox">
                                            <input class="custom-control-input" type="checkbox"/><span class="custom-control-label pointer">150 - 199 €</span>
                                        </label>
                                        <label class="custom-control custom-checkbox">
                                            <input class="custom-control-input" type="checkbox"/><span class="custom-control-label pointer">200 € +</span>
                                        </label>
                                    </div>
                                </div>
                            </li>
                            <li class="sidebar-filter__item">
                                <h5 class="sidebar-filter__title"><a class="sidebar-filter__toggle d-flex justify-content-between align-items-center" href="#accommodation" data-toggle="collapse" role="button"><span>Accommodation type</span><i class="fa fa-angle-down"></i></a></h5>
                                <div class="collapse show" id="accommodation">
                                    <div class="sidebar-filter__content">
                                        <label class="custom-control custom-checkbox">
                                            <input class="custom-control-input" type="checkbox"/><span class="custom-control-label pointer">Hotel</span>
                                        </label>
                                        <label class="custom-control custom-checkbox">
                                            <input class="custom-control-input" type="checkbox"/><span class="custom-control-label pointer">Hostel</span>
                                        </label>
                                        <label class="custom-control custom-checkbox">
                                            <input class="custom-control-input" type="checkbox"/><span class="custom-control-label pointer">Pension</span>
                                        </label>
                                        <label class="custom-control custom-checkbox">
                                            <input class="custom-control-input" type="checkbox"/><span class="custom-control-label pointer">Apartment</span>
                                        </label>
                                        <label class="custom-control custom-checkbox">
                                            <input class="custom-control-input" type="checkbox"/><span class="custom-control-label pointer">Apart Hotel</span>
                                        </label>
                                        <label class="custom-control custom-checkbox">
                                            <input class="custom-control-input" type="checkbox"/><span class="custom-control-label pointer">All inclusive resort</span>
                                        </label>
                                    </div>
                                </div>
                            </li>
                            <li class="sidebar-filter__item">
                                <h5 class="sidebar-filter__title"><a class="sidebar-filter__toggle d-flex justify-content-between align-items-center" href="#HotelAttrs" data-toggle="collapse" role="button"><span>Hotel facilites</span><i class="fa fa-angle-down"></i></a></h5>
                                <div class="collapse show" id="HotelAttrs">
                                    <div class="sidebar-filter__content">
                                        <label class="custom-control custom-checkbox">
                                            <input class="custom-control-input" type="checkbox"/><span class="custom-control-label pointer">Wi-Fi</span>
                                        </label>
                                        <label class="custom-control custom-checkbox">
                                            <input class="custom-control-input" type="checkbox"/><span class="custom-control-label pointer">Parking</span>
                                        </label>
                                        <label class="custom-control custom-checkbox">
                                            <input class="custom-control-input" type="checkbox"/><span class="custom-control-label pointer">Airport Shuttle</span>
                                        </label>
                                        <label class="custom-control custom-checkbox">
                                            <input class="custom-control-input" type="checkbox"/><span class="custom-control-label pointer">Air condition</span>
                                        </label>
                                        <label class="custom-control custom-checkbox">
                                            <input class="custom-control-input" type="checkbox"/><span class="custom-control-label pointer">Family rooms</span>
                                        </label>
                                        <label class="custom-control custom-checkbox">
                                            <input class="custom-control-input" type="checkbox"/><span class="custom-control-label pointer">Restaurant</span>
                                        </label>
                                        <label class="custom-control custom-checkbox">
                                            <input class="custom-control-input" type="checkbox"/><span class="custom-control-label pointer">Meeting / Banquet Facilities</span>
                                        </label>
                                        <label class="custom-control custom-checkbox">
                                            <input class="custom-control-input" type="checkbox"/><span class="custom-control-label pointer">Pets allowed</span>
                                        </label>
                                        <label class="custom-control custom-checkbox">
                                            <input class="custom-control-input" type="checkbox"/><span class="custom-control-label pointer">Lift</span>
                                        </label>
                                        <label class="custom-control custom-checkbox">
                                            <input class="custom-control-input" type="checkbox"/><span class="custom-control-label pointer">Swimming pool</span>
                                        </label>
                                    </div>
                                </div>
                            </li>
                            <li class="sidebar-filter__item display-none">
                                <h5 class="sidebar-filter__title"><a class="sidebar-filter__toggle d-flex justify-content-between align-items-center" href="#" data-toggle="collapse" role="button"><span>Star rating</span><i class="fa fa-angle-down"></i></a></h5>
                                <div class="collapse show d-block" id="starRating">
                                    <div class="sidebar-filter__content">
                                        <div class="sidebar-filter__stars rating d-flex justify-content-between align-items-center">
                                            <select class="js-rating-filter" data-current-rating="3 of more">
                                                <option value="1">1</option>
                                                <option value="2">2</option>
                                                <option value="3">3</option>
                                                <option value="4">4</option>
                                                <option value="5">5</option>
                                            </select>
                                            <div class="amount ml-3"><span class="val"></span></div>
                                        </div>
                                    </div>
                                </div>
                            </li>
                            <li class="sidebar-filter__item display-none">
                                <h5 class="sidebar-filter__title"><a class="sidebar-filter__toggle d-flex justify-content-between align-items-center" href="#" data-toggle="collapse" role="button"><span>User rating</span><i class="fa fa-angle-down"></i></a></h5>
                                <div class="collapse show d-block" id="userRating">
                                    <div class="sidebar-filter__content">
                                        <div class="sidebar-filter__rating">
                                            <div class="mb-2" id="userRatingChange"></div>
                                            <div class="d-flex justify-content-between"><span class="amount" id="userRatingMin"></span><span class="amount" id="userRatingMax">10</span></div>
                                        </div>
                                    </div>
                                </div>
                            </li>
                            <li class="sidebar-filter__item">
                                <h5 class="sidebar-filter__title"><a class="sidebar-filter__toggle d-flex justify-content-between align-items-center" href="#roomAttrs" data-toggle="collapse" role="button"><span>Rooms facilites</span><i class="fa fa-angle-down"></i></a></h5>
                                <div class="collapse show" id="roomAttrs">
                                    <div class="sidebar-filter__content">
                                        <label class="custom-control custom-checkbox">
                                            <input class="custom-control-input" type="checkbox"/><span class="custom-control-label pointer">Wi-Fi</span>
                                        </label>
                                        <label class="custom-control custom-checkbox">
                                            <input class="custom-control-input" type="checkbox"/><span class="custom-control-label pointer">Room safe</span>
                                        </label>
                                        <label class="custom-control custom-checkbox">
                                            <input class="custom-control-input" type="checkbox"/><span class="custom-control-label pointer">Desck</span>
                                        </label>
                                        <label class="custom-control custom-checkbox">
                                            <input class="custom-control-input" type="checkbox"/><span class="custom-control-label pointer">Pay TV</span>
                                        </label>
                                        <label class="custom-control custom-checkbox">
                                            <input class="custom-control-input" type="checkbox"/><span class="custom-control-label pointer">Mini bar</span>
                                        </label>
                                        <label class="custom-control custom-checkbox">
                                            <input class="custom-control-input" type="checkbox"/><span class="custom-control-label pointer">Air condition</span>
                                        </label>
                                        <label class="custom-control custom-checkbox">
                                            <input class="custom-control-input" type="checkbox"/><span class="custom-control-label pointer">Bathroom</span>
                                        </label>
                                    </div>
                                </div>
                            </li>
                            <li class="sidebar-filter__item">
                                <h5 class="sidebar-filter__title"><a class="sidebar-filter__toggle d-flex justify-content-between align-items-center" href="#mealBoard" data-toggle="collapse" role="button"><span>Meal Board</span><i class="fa fa-angle-down"></i></a></h5>
                                <div class="collapse show" id="mealBoard">
                                    <div class="sidebar-filter__content">
                                        <label class="custom-control custom-checkbox">
                                            <input class="custom-control-input" type="checkbox"/><span class="custom-control-label pointer">No meal</span>
                                        </label>
                                        <label class="custom-control custom-checkbox">
                                            <input class="custom-control-input" type="checkbox"/><span class="custom-control-label pointer">Bed &amp; Breackfast</span>
                                        </label>
                                        <label class="custom-control custom-checkbox">
                                            <input class="custom-control-input" type="checkbox"/><span class="custom-control-label pointer">Half board</span>
                                        </label>
                                        <label class="custom-control custom-checkbox">
                                            <input class="custom-control-input" type="checkbox"/><span class="custom-control-label pointer">Full board</span>
                                        </label>
                                        <label class="custom-control custom-checkbox">
                                            <input class="custom-control-input" type="checkbox"/><span class="custom-control-label pointer">All-inclusive</span>
                                        </label>
                                    </div>
                                </div>
                            </li>
                            <li class="sidebar-filter__item">
                                <h5 class="sidebar-filter__title"><a class="sidebar-filter__toggle d-flex justify-content-between align-items-center" href="#accessibility" data-toggle="collapse" role="button"><span>Accessibility option</span><i class="fa fa-angle-down"></i></a></h5>
                                <div class="collapse show" id="accessibility">
                                    <div class="sidebar-filter__content">
                                        <label class="custom-control custom-checkbox">
                                            <input class="custom-control-input" type="checkbox"/><span class="custom-control-label pointer">No meal</span>
                                        </label>
                                        <label class="custom-control custom-checkbox">
                                            <input class="custom-control-input" type="checkbox"/><span class="custom-control-label pointer">Bed &amp; Breackfast</span>
                                        </label>
                                        <label class="custom-control custom-checkbox">
                                            <input class="custom-control-input" type="checkbox"/><span class="custom-control-label pointer">Half board</span>
                                        </label>
                                        <label class="custom-control custom-checkbox">
                                            <input class="custom-control-input" type="checkbox"/><span class="custom-control-label pointer">Full board</span>
                                        </label>
                                        <label class="custom-control custom-checkbox">
                                            <input class="custom-control-input" type="checkbox"/><span class="custom-control-label pointer">All-inclusive</span>
                                        </label>
                                    </div>
                                </div>
                            </li>
                            <li class="sidebar-filter__item">
                                <h5 class="sidebar-filter__title"><a class="sidebar-filter__toggle d-flex justify-content-between align-items-center" href="#location" data-toggle="collapse" role="button"><span>Location area</span><i class="fa fa-angle-down"></i></a></h5>
                                <div class="collapse show" id="location">
                                    <div class="sidebar-filter__content">
                                        <label class="custom-control custom-checkbox">
                                            <input class="custom-control-input" type="checkbox"/><span class="custom-control-label pointer">University of Denver</span>
                                        </label>
                                        <label class="custom-control custom-checkbox">
                                            <input class="custom-control-input" type="checkbox"/><span class="custom-control-label pointer">Denver Zoo</span>
                                        </label>
                                        <label class="custom-control custom-checkbox">
                                            <input class="custom-control-input" type="checkbox"/><span class="custom-control-label pointer">Denver Art Museum</span>
                                        </label>
                                        <label class="custom-control custom-checkbox">
                                            <input class="custom-control-input" type="checkbox"/><span class="custom-control-label pointer">Denver Museum of Nature and Science</span>
                                        </label>
                                        <label class="custom-control custom-checkbox">
                                            <input class="custom-control-input" type="checkbox"/><span class="custom-control-label pointer">Red Rocks Amphitheater</span>
                                        </label>
                                        <label class="custom-control custom-checkbox">
                                            <input class="custom-control-input" type="checkbox"/><span class="custom-control-label pointer">Pepsi Center</span>
                                        </label>
                                        <label class="custom-control custom-checkbox">
                                            <input class="custom-control-input" type="checkbox"/><span class="custom-control-label pointer">Coors Field</span>
                                        </label>
                                        <label class="custom-control custom-checkbox">
                                            <input class="custom-control-input" type="checkbox"/><span class="custom-control-label pointer">Dick's Sporting Goods Park</span>
                                        </label>
                                        <label class="custom-control custom-checkbox">
                                            <input class="custom-control-input" type="checkbox"/><span class="custom-control-label pointer">Coors Brewery</span>
                                        </label>
                                        <label class="custom-control custom-checkbox">
                                            <input class="custom-control-input" type="checkbox"/><span class="custom-control-label pointer">United States Mint</span>
                                        </label>
                                        <div class="collapse">
                                            <label class="custom-control custom-checkbox">
                                                <input class="custom-control-input" type="checkbox"/><span class="custom-control-label pointer">Sports Authority Field at Mile High</span>
                                            </label>
                                            <label class="custom-control custom-checkbox">
                                                <input class="custom-control-input" type="checkbox"/><span class="custom-control-label pointer">Elitch Gardens Theme Park</span>
                                            </label>
                                            <label class="custom-control custom-checkbox">
                                                <input class="custom-control-input" type="checkbox"/><span class="custom-control-label pointer">Molly Brown House Museum</span>
                                            </label>
                                            <label class="custom-control custom-checkbox">
                                                <input class="custom-control-input" type="checkbox"/><span class="custom-control-label pointer">Colorado State Capitol Building</span>
                                            </label>
                                            <label class="custom-control custom-checkbox">
                                                <input class="custom-control-input" type="checkbox"/><span class="custom-control-label pointer">Denver's Downtown Aquarium</span>
                                            </label>
                                            <label class="custom-control custom-checkbox">
                                                <input class="custom-control-input" type="checkbox"/><span class="custom-control-label pointer">Denver Botanic Gardens</span>
                                            </label>
                                            <label class="custom-control custom-checkbox">
                                                <input class="custom-control-input" type="checkbox"/><span class="custom-control-label pointer">Denver Public Library</span>
                                            </label>
                                            <label class="custom-control custom-checkbox">
                                                <input class="custom-control-input" type="checkbox"/><span class="custom-control-label pointer">Union Station</span>
                                            </label>
                                            <label class="custom-control custom-checkbox">
                                                <input class="custom-control-input" type="checkbox"/><span class="custom-control-label pointer">University of Colorado-Denver</span>
                                            </label>
                                            <label class="custom-control custom-checkbox">
                                                <input class="custom-control-input" type="checkbox"/><span class="custom-control-label pointer">Paramount Theater</span>
                                            </label>
                                        </div><a class="d-block js-show-more mt-2" href="#">Show more</a>
                                    </div>
                                </div>
                            </li>
                        </ul>
                    </div>
                </div>
            </div>
        </div>
    </div>
</aside>