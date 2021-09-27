<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\Booking;
use Auth;
class BookingController extends Controller
{
    //
    protected $model;
    public function __construct(Booking $model)
    {
        $this->model = $model;
    }
    function Room_Booking(Request $request)
    {
          if(!Auth::check())
          {
           return  redirect('login');
          }
        
          extract($request->all());
          $validated = $request->validate([
            'name' => 'required',
            'phone' => 'required',
            'email' => 'required',
            'from_date' => 'required',
            'to_date' => 'required',
            'address' => 'required',
             ]);
         $data = array();
         $data['user_id'] = Auth::user()->id;
         $data['room_id'] = $room_id;
         $data['hotel_id'] = $hotel_id;
         $data['name'] = $name;
         $data['phone'] = $phone;
         $data['cnic'] = $cnic;
         $data['address'] = $address;
         $data['from_date'] = $from_date;
         $data['to_date'] = $to_date;
         $data['booking_date'] = date('y-m-d');
         if($this->model->insert($data))
         {
            return back()->with('Message', 'Successfully Send Your Booking Request Waiting Confirmatiom');
        }
        else
        {
            return back()->with('ErrorMessage', 'Sorry! Something went wrong not saved');            
        }
         


    }
}