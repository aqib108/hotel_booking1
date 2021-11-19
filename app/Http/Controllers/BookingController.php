<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\Booking;
use Auth;
use App\Mail\PlaceBookingEmail;
use Mail;
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
         $data['status'] = 1;
         $data['booking_date'] = date('y-m-d');
         if($this->model->insert($data))
         {
            $this->SendBookingEmail($data);   
            return back()->with('Message', 'Successfully Send Your Booking Request Waiting Confirmatiom');
        }
        else
        {
            return back()->with('ErrorMessage', 'Sorry! Something went wrong not saved');            
        }
         


    }
    function SendBookingEmail($data)
    {
        $data1 = array(
            'subject' => 'Pakistan Booking Hotel Booking', 
            'hotel_Name'=>getspecficedata($data['hotel_id'],'name','id','hotels'),
            'room_type'=>getspecficedata($data['room_id'],'room_type','id','rooms'),
            'per_night'=>getspecficedata($data['room_id'],'room_price','id','rooms'),
            'from_date'=>$data['from_date'],
            'to_date'=>$data['to_date']
           );
        return  Mail::to(Auth::user()->email)->send(new PlaceBookingEmail($data1));
    }
    function change_status(Request $request)
    {
       extract($request->all());
       $bk = Booking::find($id);
       if($bk)
       {
           $bk->status = $status;
           if($bk->save())
           {
             $arr['status'] = 200;
             $arr['message'] = 'Successfully Update Booking Status';
           }
           else
           {
            $arr['status'] = 204;
            $arr['message'] = 'Something went to Wrong';
           }
       }
       return response()->json($arr);
    }
}
