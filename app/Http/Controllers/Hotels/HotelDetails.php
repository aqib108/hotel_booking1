<?php

namespace App\Http\Controllers\Hotels;

use App\Http\Controllers\Controller;
use Illuminate\Http\Request;
use App\Models\Hotel;
use Illuminate\Support\Facades\Auth;
use Config;
class HotelDetails extends Controller
{
    //
   
    protected $model;
    public function __construct(Hotel $model)
    {
        $this->model = $model;
        $this->middleware('auth');
    }
    public function save(Request $request)
    {

    extract($request->all());
    if(empty($profile_id))
    {
        $validated = $request->validate([
            'name' => 'required|unique:hotels',
            'phone' => 'required|unique:hotels',
            'email' => 'required|unique:hotels',
            'city' => 'required',
            'address' => 'required',
            'Price_range' => 'required',
        ]);
    }
    else
    {
        $validated = $request->validate([
            'name' => 'required',
            'phone' => 'required',
            'email' => 'required',
            'city' => 'required',
            'address' => 'required',
            'Price_range' => 'required',
        ]);   
    }
    if(!empty($profile_id))
    {
        $this->model->exists = true;
        $this->model->id = $profile_id;
    }
    $this->model->name = $name;
    $this->model->Price_range = $Price_range;
    $this->model->description = $description;
    $this->model->address = $address;
    $this->model->phone = $phone;
    $this->model->status = 0;
    $this->model->user_id = Auth::user()->id;
    $this->model->email = $email;
    $this->model->city = $city;
    $image = $request->file('file');
    

    if($image)
    {
        $imageName = time() . '-' . $image->getClientOriginalName();
        $file->move(public_path('uploads/hotel_profile/'),$imageName);  
    }
    if(!empty($profile_id) && empty($image))
    {

    }
   elseif(!empty($profile_id) && !empty($image))
    {
  //     dd('come');  
     $this->model->thumbnail = $imageName;
    }
    else
    {
     $imageName = null;
    }
 
    if($this->model->save())
    {
        return back()->with('Message', 'Successfully you saved');
    }
    else
    {
        return back()->with('ErrorMessage', 'Error In Profile Saving');
    }
                    /*Storage::putFileAs('public/product_images', new File($image), $imageName);*/
                    // using custom StorageTrait function
                    

    }
}
