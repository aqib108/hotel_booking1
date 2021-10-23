<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\Room;
use App\Models\User;
use Illuminate\Support\Facades\Auth;
use App\Models\Hotel;
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
}
