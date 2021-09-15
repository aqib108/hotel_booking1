<div class="card card-hotel w-100 mb-2">
    <div class="card-hotel__img">
        <img class="img-cover" src="<?php echo '/uploads/hotel_profile/'.$hotel->thumbnail; ?>" alt="#"/>
    </div>
    <div class="card-price"><span class="mr-1">from</span><span class="count text-secondary"> Rs. {{ $hotel->Price_range }}</span></div>
    <div class="card-hotel__bottom">
        <h4 class="h4 mb-1">{{$hotel->name}} </h4>
        <div class="card-hotel__local d-flex align-items-center"><i class="fas fa-map-marker-alt text-secondary mr-1"></i>
            <ul class="d-inline-flex flex-wrap">
                <li class="mr-4">{{ $hotel->city }}</li>
                <li class="amout">1234
                    Hotels
                </li>
            </ul>
        </div>
    </div>
    <div class="card-hover">
        <h3 class="h3 text-uppercase">{{$hotel->name}}</h3>
        <a class="btn btn-light btn--round card-hover__view" href="/hotel-rooms">VIEW</a>
    </div>
</div>