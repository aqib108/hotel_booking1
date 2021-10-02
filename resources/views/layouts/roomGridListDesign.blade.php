<div class="product bg-white js-grid-item">
    <div class="product__special bg-primary text-white bg-style">special price
    </div><a class="product__img-top d-block" href="{{ route('roomsDetails',$room->id) }}"><img class="img-fluid" src="{{  asset('uploads/hotel/room_images/'.$room->images[0]->image) }}" alt="#"/></a>
    <div class="product__body">
        <h4 class="product__title"><a href="{{ route('roomsDetails',$room->id) }}"> {{ $room->name }}</a></h4>
        <div class="product__rating mb-2 display-none">
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
            <li class="mr-3">
                <span>{{ hotelAddress($room->hotel_id) }}</span>
                <!--<i class="bullet"></i>-->
                <a class="display-none" href="#modalMap" data-toggle="modal" data-title="Al Moggar Garden Beach Club">
                    Show on map
                </a>
            </li>
            <li class="d-inline-flex align-items-center display-none"><i class="icon icon-thumbs-up mr-1"></i><span>8/10</span></li>
        </ul>
        <hr/>
        <ul class="product__price d-flex justify-content-between align-items-center">
            <li class="mr-2"><span> Price per night from</span></li>
            <li><span class="cost">Rs. {{ $room->room_price }}</span>
            </li>
        </ul>
        <hr/>
        <div class="product__desc">
            <p>{{$room->description}} </p><a class="product__link-more" href="{{ route('roomsDetails',$room->id) }}">Read more</a>
        </div>
    </div>
    <hr class="d-none d-sm-block"/>
    <div class="product__footer">
        <ul class="product__price d-flex justify-content-between align-items-center">
            <li class="mr-2"><span>Price per night from</span></li>
            <li><span class="cost">Rs. {{$room->price}}</span>
            </li>
        </ul><a class="product__btn-book btn btn-secondary btn--round bg-style" href="{{ route('roomsDetails',$room->id) }}">book now</a>
    </div>
</div>