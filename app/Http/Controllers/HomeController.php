<?php

namespace App\Http\Controllers;
use App\Models\Hotel;
use Illuminate\Http\Request;

class HomeController extends Controller
{
    public function index()
    {
        $data = [];
        $hotels = Hotel::where('status',1)->get();
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


}
