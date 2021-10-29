<?php

namespace App\Http\Controllers;

use App\Models\Room;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Auth;
use App\Models\Hotel;
use DB;
class DashboardController extends Controller
{
    public function dashboard(Request $request)
    {
        // dd('hlo');
        if(Auth::check())
        {
            $data = [];
            
            if(Auth::user()->user_type == 3)
            {
                $hotelId = hotelId(Auth::user()->id);

                $roomsObj = new Room();

                if($hotelId!=0)
                {
                    $rooms = $roomsObj->getAllRoomsOfHotel($hotelId);

                    $booking = DB::table('bookings as bk')
                              ->join('rooms as ro','ro.id','bk.room_id')
                              ->where('bk.hotel_id',$hotelId)
                              ->get(['bk.*','ro.name as room_title','ro.room_type','ro.room_price']);
                    $reviews = DB::table('reviews as re')
                              ->join('users as us','us.id','re.user_id')
                              ->where(['hotel_id'=>$hotelId])
                              ->orderBy('date_time','DESC')
                              ->get(['re.*','us.name as user_name','us.image']);
            
                }
                else
                {
                    $reviews = array();
                    $rooms = array();
                    $booking = array();
                }
               
                $data['booking'] = $booking;
                $data['rooms'] = $rooms;
                $data['reviews'] = $reviews;
                $data['profile'] = Hotel::where('user_id',Auth::user()->id)->get();
                //  dd($rooms->facilities);
                return view('pages.dashboard', ['data' => $data]);
            }
            else
            {

                $booking = DB::table('bookings as bk')
                ->join('rooms as ro','ro.id','bk.room_id')
                ->where('bk.user_id',Auth::user()->id)
                ->get(['bk.*','ro.name as room_title','ro.room_type','ro.room_price']);
                return view('pages.userDashboard',compact('booking'));
            }

        }
        else
        {
            return redirect('login');
        }
    }
}
