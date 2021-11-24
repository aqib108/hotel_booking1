<div class="card card-hotel w-100 mb-2">
    <div class="card-hotel__img">
    <?php 
    if(!empty($hotel->thumbnail))
    {
        $path = asset('uploads/hotel_profile/'.$hotel->thumbnail); 
      ///$path = 'uploads/hotel_profile/'.$hotel->thumbnail;
    }
    else
    {
        $path =  asset('images/hotels/default.jpg'); 
              
    }
    ?>
    <img class="img-cover" src="{{ $path }}" alt="#"/>
    </div>
    <?php 
    $price = explode(',',$hotel->Price_range);
    ?>
    <div class="card-price"><span class="mr-1">from</span><span class="count text-secondary"> Rs.<?php echo '('.$price[0].'-'.$price[1].')'; ?></span></div>
    <div class="card-hotel__bottom">
        <h4 class="h4 mb-1">{{$hotel->name}} </h4>
        <div class="card-hotel__local d-flex align-items-center"><i class="fas fa-map-marker-alt  mr-1" style="color: #19378A"></i>
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
        <a class="btn btn-light btn--round card-hover__view" href="{{ route('hotel-rooms',$hotel->id)}}">VIEW</a>
    </div>
</div>