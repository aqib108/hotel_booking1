<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class HotelController extends Controller
{
    public function index()
    {
        return view('pages.hotelRooms');
    }


    public function roomDetail($id)
    {
        
        return view('pages.roomDetail');
    }

}
