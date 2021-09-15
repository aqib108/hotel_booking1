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
        $data = User::where('user_type', Config::get('constants.user_type.HOTEL'))->get();
        return view('admin.sms_marketing',compact('title','data','webset'));
}

}
