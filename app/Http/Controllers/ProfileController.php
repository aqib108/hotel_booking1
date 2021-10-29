<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\Room;
use App\Models\User;
use Illuminate\Support\Facades\Auth;
use App\Models\Hotel;
use Illuminate\Support\Facades\Hash;
use DB;
class ProfileController extends Controller
{
    //
    protected $model;
    public function __construct(User $model)
    {
      $this->model = $model;
      $this->middleware('auth');
    }
    function updateimage(Request $request)
    {
  //      dd($request->all());
        $file = $request->file('file');
        $imageName = time() . '-' . $file->getClientOriginalName();
        $file->move(public_path('images/uploads/users/'),$imageName);  
        User::where('id',Auth::user()->id)->update(['image'=>$imageName]);
        $arr['status'] = 200;

        $arr['message'] = 'Successfully Updated';
        $arr['image_src'] = 'images/uploads/users/'.$imageName;
        return response()->json($arr);
    }
    function updatedata(Request $request)
    {
          
           $request->validate([
           'name'=>'required',
           'phone'=>'required',
           'address'=>'required',
          ]);
          extract($request->all());
          $data = array(
            'name'=>$name,
            'phone'=>$phone,
            'address'=>$address
          );

         $result = User::where('id',Auth::user()->id)->update($data);
         if($result)
         {
          
          return back()->with('Message','Successfully Update Your profile');
         }
         else
         {
          return back()->with('ErrorMessage','Issue in Update Profile');
         }

        }
        function updatepassword(Request $request)
    {
          
           $request->validate([
           
           'password'=>'required|same:confirmed|min:8',
           
          ]);
          extract($request->all());
          $data = array(
            'password'=> Hash::make($password),
      
          );

         $result = User::where('id',Auth::user()->id)->update($data);
         if($result)
         {
          
          return back()->with('Message','Successfully Update Your Password');
         }
         else
         {
          return back()->with('ErrorMessage','Issue in Update Password');
         }

        }
}
