<?php

namespace App\Http\Controllers\Admin;
use App\Http\Traits\Deletedata;
use App\Http\Controllers\Controller;
use Illuminate\Http\Request;
use App\Models\Websetting;
use Config;
use App\Models\SocialLinks;
use App\Models\User;
use App\Models\Hotel;
use App\Models\Booking;
use DB;
use App\Jobs\EmailMarketing;
class AdminController extends Controller
{
    //
    use Deletedata;
    // protected $USER_TYPE = 3;
    public function index()
    {
       
        $title = 'Hotel Booking Admin';
        return view('admin.index',compact('title'));
    }
    public function hotels()
    {
        ///echo Config::get('constants.user_type.HOTEL');
        ///exit;
        $title = 'Register Hotel';
        $data = User::where('user_type', Config::get('constants.user_type.HOTEL'))->get();
        return view('admin.hotel',compact('title','data'));

    }
    public function users()
    {
        //   echo Config::get('constants.user_type.USER');
        //   exit;
        $title = 'Register Users';
        $data = User::where('user_type', Config::get('constants.user_type.USER'))->get();
        
     //   dd($data);
        ///return view('admin.hotel',compact('title','data'));
        return view('admin.users',compact('title','data'));

    }
    public function webset()
    {
        $webset = Websetting::get()->first();
        $socaildata = SocialLinks::get()->first();
        // dd($data);
        $title = 'Website Setting';
        $data = array();
        return view('admin.web_setting',compact('title','webset','socaildata'));

    }
    function hotel_profile($id)
    {
       $profile = Hotel::where('user_id',$id)->get()[0];
       $title = 'Hotel Profile';
       $data = array();
       return view('admin.hotel_profile',compact('title','profile','data'));
     ///   echo $id;
    }
    function changestatus($id,$table,$status)
{
  /// dd($status);
   $result = $this->changeuserstatus($id,$table,$status);
   if($result)
   {
return redirect()->back();
   }
   else
   {
    return redirect()->back();
   }
}
function smsmarketing()
{
    $title = 'SMS Marketing';
    $webset = array();
        
        $data = Hotel::all();
       
        return view('admin.sms_marketing',compact('title','data','webset'));
}
///email marketing
function emailmarketing()
{
    $title = 'Email Marketing';
    $webset = array();
        
        $data = Hotel::all();
       
        return view('admin.email_marketing',compact('title','data','webset'));
}

///end of email marketing
///send marketing email
function sendemailmarketing(Request $request)
{
    extract($request->all());
    $details['email'] =  $emails;
    $details['subject'] = $subject;
    $details['message'] = $message;
    

    dispatch(new App\Jobs\EmailMarketing($details));
    return back()->with('Message', 'Successfully Posted Emails');

}


//end of


///admin booking
function booking()
{
    $title = 'Booking Order';
    $data = DB::table('bookings as bk')
    ->join('rooms as ro','ro.id','bk.room_id')
    ->join('hotels as ho','ho.id','bk.hotel_id')
    ->get(['bk.*','ro.name as room_title','ro.room_type','ro.room_price','ho.name as hotel_name']);
    return view('admin.booking',compact('title','data'));
}

//end of booking
///function cities
function cities()
{
    $title = 'Hotel Cities';
    $data = DB::table('cities')->get();
  //  dd($data);
    return view('admin.cities',compact('title','data'));
}
//end of cities
///function delete booking
function deletebooking($id)
{
    $book = Booking::find($id);
    if($book)
    {
        $book->delete();
        return back();
    }
}

//end of booking


}
