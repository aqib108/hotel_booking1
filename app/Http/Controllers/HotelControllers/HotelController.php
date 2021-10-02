<?php

namespace App\Http\Controllers\HotelControllers;
use App\Traits\ImageHandleTrait;
use App\Http\Controllers\Controller;
use Illuminate\Http\Request;
use App\Models\Room;
use Auth;
use DB;
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
        $hotelId = getspecficedata($id,'hotel_id','id','rooms');
     
        $room = $roomsObj->getActiveRoomsOfHotel($id);
        $allrooms = $roomsObj->getAllActiveRoomsOfHotel($hotelId); 
        $reviews = DB::table('reviews as re')
                   ->join('users as us','us.id','re.user_id')
                   ->where(['room_id'=>$id,'hotel_id'=>$hotelId])
                   ->orderBy('date_time','DESC')
                   ->get(['re.*','us.name as user_name','us.image']);
              //    dd($reviews);
        return view('pages.roomDetail',compact('room','allrooms','hotelId','reviews'));   
    }
}
