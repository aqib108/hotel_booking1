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
                    
                }
                else
                {
                    $rooms = array();
                    $booking = array();
                }
               
                $data['booking'] = $booking;
                $data['rooms'] = $rooms;
                $data['profile'] = Hotel::where('user_id',Auth::user()->id)->get();
                //  dd($rooms->facilities);
                return view('pages.dashboard', ['data' => $data]);
            }
            else
            {


                return view('pages.userDashboard', ['data' => $data]);
            }

        }
        else
        {
            return redirect('login');
        }
    }
}
