<?php

namespace App\Http\Controllers\HotelControllers;
use App\Traits\ImageHandleTrait;
use App\Http\Controllers\Controller;
use Illuminate\Http\Request;
use App\Models\Room;
use Auth;

class HotelController extends Controller
{
    public function index()
    {
        $data = [];
        return view('pages.hotels', ['data' => $data]);
    }

    public function hotelRooms($hotelId)
    {
       
        $roomsObj = new Room();
        $rooms = $roomsObj->getAllActiveRoomsOfHotel($hotelId);    
        // dd($rooms);          
        return view('pages.hotelRooms',compact('rooms'));
    }
    function roomsDetails($id)
    {
        $roomsObj = new Room();
        $hotelId = hotelid(Auth::user()->id);
        $room = $roomsObj->getActiveRoomsOfHotel($id);
        $allrooms = $roomsObj->getAllActiveRoomsOfHotel($hotelId);   
        return view('pages.roomDetail',compact('room','allrooms','hotelId'));   
    }
}
