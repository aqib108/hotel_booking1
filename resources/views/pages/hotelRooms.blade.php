@extends('layouts.app')


@section('mainContent')

    <div class="page-content">
        <div class="container">
            <div class="row">

                <!-- Hotel Rooms Sidebar Start -->
                @include('layouts.hotelRoomsSidebar')
                <!-- Hotel Rooms Sidebar End -->

                <div class="col-lg-9 category-content">
                    <nav class="sortbar navbar shadow-sm d-flex align-items-stretch">
                        <div class="sortbar__title d-flex align-items-stretch">
                            <button class="navbar-brand d-flex align-items-center pointer js-toggle-sidebar" data-target="#sidebarFilter" data-toggle="modal" type="button"><i class="d-lg-none icon icon-filter"></i><span class="ml-2 d-none d-lg-inline">Sort by:</span></button>
                        </div>
                        <div class="sortbar__sort js-sorting d-flex align-items-stretch">
                            <a class="nav-link " href="#">Popularity</a>
                            <a class="nav-link" href="#">Price</a>
                            <a class="nav-link display-none" href="#">Stars</a>
                            <a class="nav-link display-none" href="#">Rating</a>
                            <a class="nav-link d-flex d-md-none align-items-center" href="#"><span class="mr-2">Sort by</span><i class="icon icon-sort-duble"></i></a></div>
                        <div class="sortbar__grid d-flex align-items-stretch ml-md-auto"><a class="nav-link active js-toggle-grid" href="#" data-grid="grid" data-cols="col-12 col-sm-6 col-xl-4 d-flex"><i class="fas fa-th-large"></i></a><a class="nav-link js-toggle-grid" href="#" data-grid="list" data-cols="col-12 d-flex"><i class="fas fa-th-list"></i></a></div>
                    </nav>
                    <div class="category-content__items row pad-lg-20">

                        @for($i=0; $i<6; $i++)
                        <div class="col-12 col-sm-6 col-xl-4 d-flex">
                            @include('layouts.roomGridListDesign')
                        </div>
                        @endfor


                        <div class="col-12 banner-list">
                            <div class="swiper-container h-100 js-banner-slider" style="background-image: url({{ asset('images/banner-bg-air.jpg') }});" data-jarallax="{}" data-speed="0.5">
                                <div class="swiper-wrapper">
                                    <div class="swiper-slide d-flex"><a class="product-banner btn-link d-flex w-100 py-3 py-sm-0" href="hotel.html">
                                            <div class="row align-items-center text-center">
                                                <div class="col-12 col-sm-6 col-xl-7 mb-3 mb-sm-0"><img class="img-fluid" src="{{ asset('images/air-banner-big.png') }}" alt="#"/>
                                                </div>
                                                <div class="col-12 col-sm-6 col-xl-5 py-sm-5">
                                                    <h4 class="h4 text-uppercase mb-3 text-white">
                                                        FROM
                                                        <strong>JANUARY 1-8 DISCOUNT</strong><br/>ON THE FLIGHT -30%
                                                    </h4>
                                                    <div class="btn btn-secondary btn--round px-4">more info</div>
                                                </div>
                                            </div></a>
                                    </div>
                                </div>
                            </div>
                        </div>
                        <div class="col-12 banner-grid display-none">
                            <div class="swiper-container h-100 js-banner-slider" style="background-image: url(img/banner-bg-air.jpg);" data-jarallax="{}" data-speed="0.5">
                                <div class="swiper-wrapper">
                                    <div class="swiper-slide d-flex"><a class="product-banner btn-link d-flex w-100 py-3 py-sm-0" href="#">
                                            <div class="row align-items-center text-center">
                                                <div class="col-12 col-sm-4 pl-sm-5"><img class="img-fluid" src="{{ asset('images/air-banner-small.png') }}" alt="#"/>
                                                </div>
                                                <div class="col-12 col-sm-5 py-3 py-xl-2">
                                                    <h4 class="h4 mb-0 text-white">1 mile = 10 cents<br/>Accumulate miles and fly for free!</h4>
                                                </div>
                                                <div class="col-12 col-sm-3 d-flex justify-content-center justify-content-sm-start">
                                                    <div class="btn btn-secondary btn--round px-4">more info</div>
                                                </div>
                                            </div></a>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>

                    <nav class="pagination-nav" aria-label="Page navigation example">
                        <ul class="pagination">
                            <li class="page-item"><a class="page-link" href="#"><i class="fab fa-angle-double-left"></i></a></li>
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
            </div>
        </div>
        <button class="btn btn-primary btn-nav btn-nav--up js-scroll-up" type="button"><i class="fa fa-angle-up"></i></button>
    </div>
@endsection