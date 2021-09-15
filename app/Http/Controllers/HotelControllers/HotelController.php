<?php

namespace App\Http\Controllers\HotelControllers;
use App\Traits\ImageHandleTrait;
use App\Http\Controllers\Controller;
use Illuminate\Http\Request;

class HotelController extends Controller
{
    public function index()
    {
        $data = [];
        return view('pages.hotels', ['data' => $data]);
    }

    public function hotelRooms()
    {

        return view('pages.hotelRooms');
    }
}
