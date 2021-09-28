<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\Booking;
use App\Models\Review;
use Auth;

class ReviewController extends Controller
{
    protected $model;
    public function __construct(Review $model)
    {
        $this->model = $model;
    }
    function create_review(Request $request)
    {
         extract($request->all());
         if(!Auth::check())
          {
           return  redirect('login');
          }
        
         $data['name'] = $name;
         $data['email'] = $email;
         $data['comment'] = $comment;
         $data['user_id'] = Auth::user()->id;
         $data['room_id'] = $room_id;
         $data['hotel_id'] = $hotel_id;
         $data['date_time'] = date('y-m-d h:i:s');
         if($this->model->insert($data))
        {
            return back()->with('Message', 'Your Valueable Review is Submited');
        }
        else
        {
            return back()->with('ErrorMessage', 'Sorry! Something went wrong not saved'); 
        }
    }
}
