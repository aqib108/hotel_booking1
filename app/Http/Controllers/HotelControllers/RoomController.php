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
use Illuminate\Http\File;
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
            $room->hotel_id    = Auth::user()->id;
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
                if(!empty($params['facilities']))
                {
                    foreach ($params['facilities'] as $facility)
                    {
                        if(!empty($facility['facility_name']))
                        {
                            $facilityObj = new RoomFacility();
                            $facilityObj->facility_name    = $facility['facility_name'];
                            /*$facilityObj->facility_charges = $sibling['facility_charges'];*/
                            $facilityObj->room_id  = $roomId;
                            $facilityObj->hotel_id = Auth::user()->id;
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

                    $roomImage->hotel_id = Auth::user()->id;
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
}
