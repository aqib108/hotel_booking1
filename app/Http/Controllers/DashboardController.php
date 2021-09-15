<?php

namespace App\Http\Controllers;

use App\Models\Room;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Auth;
use App\Models\Hotel;
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
                $hotelId = Auth::user()->id;

                $roomsObj = new Room();
                $rooms = $roomsObj->getAllRoomsOfHotel($hotelId);
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
