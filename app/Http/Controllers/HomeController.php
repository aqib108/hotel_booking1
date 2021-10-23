<?php

namespace App\Http\Controllers;
use App\Models\Hotel;
use Illuminate\Http\Request;
use DB;
use Mail;
class HomeController extends Controller
{
    public function index()
    {
        $data = [];
        $users = Hotel::select("*", DB::raw("count(*) as cities"))
        ->groupBy('city')
        ->get();
        dd($users);
        //$hotels = Hotel::where('status',1)->groupBy('city')->get();
        // $hotels= DB::table('hotels')->where('status',1)->groupBy('city')->get();
        //  dd($hotels);
        //    dd('got');
        return view('pages.home',compact('hotels'));
    }
    function signup_page()
    {
        return view('pages.signup');
    }


    public function aboutUS()
    {
        $data = [];

        return view('pages.about', ['data' => $data]);
    }

    public function contactUs()
    {
        $data = [];

        return view('pages.contact', ['data' => $data]);
    }
    public function subscription(Request $request)
    {
        dd($request->all());
    }
    public function contact(Request $request)
    {
      //  dd($request->all());
        extract($request->all());
        ///dd($email);
        $data = array('email'=>$email,'name'=>$name,'message'=>$message);
        Mail::send('mail', $data, function($message) {

            $message->to('mehmood7455@gmail.com', 'Hotel Booking')->subject
               ('Contact Us');
            $message->from('aqibdev8@gmail.com','Hotel Booking');
         });
        // Mail::send(['text'=>'emails.contact_email'], $data, function($message) {
        //    $message->to('mehmood7455@gmail.com', 'Tutorials Point')->subject
        //       ('Contact Us');
        //    $message->from('aqibdev8@gmail.com','Hotel Booking');
        // });
        return back()->with('Message', 'Successfully Submit Your Request.');
    }
}
