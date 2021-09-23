<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Room extends Model
{
    use HasFactory;

    /***
     * RELATION WITH FaciIiTY
     */
    public function facilities()
    {
        return $this->hasMany(RoomFacility::class);
    }

    /***
     * RELATION WITH Room Images
     */
    public function images()
    {
        return $this->hasMany(RoomImages::class);
    }

    public function getAllRoomsOfHotel($hotelId)
    {
        $rooms =  Room::where('hotel_id', $hotelId)->orderByDesc('created_at')->with('facilities', 'images')->paginate(2);
        return $rooms;
    }
    public function getAllActiveRoomsOfHotel($hotelId)
    {
        $rooms =  Room::where(['hotel_id'=>$hotelId,'status'=>1])->orderByDesc('created_at')->with('facilities', 'images')->paginate(2);
        return $rooms;
    }
    function getActiveRoomsOfHotel($roomid)
    {
        $rooms =  Room::where(['id'=>$roomid])->with('facilities', 'images')->get()[0];
        return $rooms;
    }
}
