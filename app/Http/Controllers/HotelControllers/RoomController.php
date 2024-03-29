<?php

namespace App\Http\Controllers\HotelControllers;

use App\Http\Controllers\Controller;
use App\Models\Room;
use App\Models\RoomFacility;
use App\Models\RoomImages;
use App\Traits\ImageHandleTrait;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Auth;
use Storage;
use Illuminate\Support\Facades\File; 
use DB;
class RoomController extends Controller
{

    use ImageHandleTrait;

    /*Function For both Create and update*/
    public function create(Request $request)
    {

        if(Auth::check() && Auth::user()->user_type == 3)
        {
            $params = $request->all();

            $room = new Room();
            $room->name = $params['room_name'];
            $room->room_capacity = $params['room_capacity'];
            $room->room_type   = $params['room_type'];
            $room->room_price  = $params['room_price'];
            $room->hotel_id    = hotelid(Auth::user()->id);
            $room->description = $params['description'];
            $room->status      = 1;

            /*if(isset($params['thumbnail']) && !empty($params['thumbnail']))
            {
                $thumbnailImage = $params['thumbnail'];
                $imageName = time() . '-' . $thumbnailImage->getClientOriginalName();

                $this->storeImage($thumbnailImage, $imageName, 'room-thumbnail');
                $room->thumbnail   = $imageName;
            }*/

            if($room->save())
            {
                $roomId = $room->id;

                // deal with Family => Siblings
                if(!empty($params['facility_name']))
                {
                    foreach ($params['facility_name'] as $facility)
                    {
                        if(!empty($facility))
                        {
                            $facilityObj = new RoomFacility();
                            $facilityObj->facility_name    = $facility;
                            /*$facilityObj->facility_charges = $sibling['facility_charges'];*/
                            $facilityObj->room_id  = $roomId;
                            $facilityObj->hotel_id = hotelid(Auth::user()->id);
                            $facilityObj->save();
                        }
                    }
                }


                // add images
                $roomImages = $request->file('room_images');

                foreach ($roomImages as $image)
                {
                    $roomImage = new RoomImages();

                    // $imageName = time() . '-' . $image->getClientOriginalName();
                    $imageName = time() . '-' . $image->getClientOriginalName();
                    $image->move(public_path('uploads/hotel/room_images/'),$imageName);
                    // using custom StorageTrait function
                    // $this->storeImage($image, $imageName, 'room_images');

                    $roomImage->hotel_id = hotelid(Auth::user()->id);
                    $roomImage->room_id = $roomId;
                    $roomImage->image = $imageName;
                    $roomImage->save();
                }

                return back()->with('Message', 'Successfully you saved room');
            }
            else{
                return back()->with('ErrorMessage', 'Sorry! Something went wrong not saved');
            }

        }
        else
        {
            return redirect('login');
        }
    }

    /*Function to show Single Room Detail */
    public function singleRoomDetail()
    {
        return view('pages.roomDetail');
    }
    ///function delete room
   function delete(Request $request)
   {
    extract($request->all());
    
    $Room = new Room;
    $rm = $Room::find($id);
    $data = array();
    if($rm->delete())
    {
        if($this->delete_room_images($id))
        {
           if($this->delete_room_facilties($id))
           {
              $data['status'] = 200;
              $data['message'] = 'successfully Deleted';
           }
           else
           {
            $data['status'] = 204;
            $data['message'] = 'unable to Delete room Facility';
           }
        }
        else
        {
            $data['status'] = 200;
            $data['message'] = 'unable to room Images';
        }
    }
    else
    {
        $data['status'] = 200;
        $data['message'] = 'unable to Delete Room';
    }
     return response()->json($data);
   }
   function delete_room_images($id)
   {
    $RoomImages = new RoomImages;
    $images = $RoomImages::where('room_id',$id)->get();
    $cimages = array();
    foreach($images as $img)
    {
        $cimages[]= public_path().'/uploads/hotel/room_images/'.$img->image;
    }
    if(File::delete($cimages))
    {
       if($RoomImages::where('room_id',$id)->delete())
       {
          return true;
       }
       else
       {
           return false;
       }
    }
    else
    {
        return false;
    }

   }
   function delete_room_facilties($id)
   {
    $RoomFacility = new RoomFacility;
    if($RoomFacility::where('room_id',$id)->delete())
    {
        return true;
    }   
    else
    {
        return false;
    }  

   }
   

    //end of delete room

    //function change room status
   function changestatus($id,$status)
   {
    
    $rm = new Room;
    $data['status'] = $status;
    if($rm::where('id',$id)->update($data))
    {
        return back()->with('Message', 'Successfully Change Room Status.');
    }
    else
    {
        return back()->with('Message', 'unable to change room status.');
    }

   }

    //end
    function delete_room_image(Request $request)
    {
        $arr = array();
        extract($request->all());
        $RoomImages = new RoomImages;
        $images = $RoomImages::where('id',$id)->get()->first();
    
        $cimages= public_path().'/uploads/hotel/room_images/'.$images->image;
        
        if(File::delete($cimages))
        {
           if($RoomImages::where('id',$id)->delete())
           {
              $arr['message'] = 'success removed Image';
              $arr['status'] = 200;
           }
           else
           {
            $arr['message'] = 'unable to delete image from database';
            $arr['status'] = 200;
           }
        }
        else
        {
            $arr['message'] = 'unable to unlink image';
            $arr['status'] = 200;
        }
          return response()->json($arr);
    }

    function update_room(Request $request)
    {
      ///update room
      
         extract($request->all());
         $id = $room_id;
   $room = Room::find($id);
   if(!empty($room))
   {
        $room->name = $room_name;
        $room->room_capacity = $room_capacity;
        $room->room_type = $room_type;
        $room->room_price = $room_price;
        $room->description = $description;
        if($room->save())
        {
            if(!empty($facility_name))
            {
                $facilityObj = new RoomFacility();
                $facilityObj::where('room_id',$id)->delete();
                foreach ($facility_name as $facility)
                {
                    $facilities[] = array(
                        'facility_name'=>$facility,
                        'room_id'=>$id,
                        'hotel_id'=>hotelid(Auth::user()->id)
                    );
                    
                }
                DB::table('room_facilities')->insert($facilities); 
            }
            $roomImages = $request->file('room_images');
            if(!empty($roomImage))
            {
                foreach ($roomImages as $image)
                {
                    $roomImage = new RoomImages();
    
                    // $imageName = time() . '-' . $image->getClientOriginalName();
                    $imageName = time() . '-' . $image->getClientOriginalName();
                    $image->move(public_path('uploads/hotel/room_images/'),$imageName);
                    // using custom StorageTrait function
                    // $this->storeImage($image, $imageName, 'room_images');
    
                    $roomImage->hotel_id = hotelid(Auth::user()->id);
                    $roomImage->room_id = $id;
                    $roomImage->image = $imageName;
                    $roomImage->save();
                }
            }
            
            return back()->with('Message', 'Successfully Update your room');
        }
        else
        {
            return back()->with('ErrorMessage', 'Sorry! Something went wrong not saved');            
        }
   }
      //end of update room
    }
}
