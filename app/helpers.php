<?php
use Jenssegers\Mongodb\Eloquent\Model;
use Illuminate\Support\Facades\DB;

//hote dashboard 
function gettotalbooking($hotel_id)
{
      return DB::table('bookings')->where('hotel_id',$hotel_id)->get()->count();
}
function gettodaybooking($hotel_id)
{
 // return date('Y-m-d');
  return DB::table('bookings')->where(['hotel_id'=>$hotel_id,'booking_date'=>date('Y-m-d')])->get()->count();
}
function totalActiveroom($hotel_id)
{
 // return date('Y-m-d');
  return DB::table('bookings')->where(['hotel_id'=>$hotel_id,'status'=>1])->get()->count();
}

//end of hotel dashboard

function getcities()
{
  return DB::table('cities')->get();
  
}
function hotelsincity($city)
{
  return  DB::table('hotels')->where('city',$city)->get()->count();
}
function setting()
{
    $setting = DB::table('websettings')->first();
    return $setting;
}
function socail_setting()
{
    $setting = DB::table('social_links')->first();
    return $setting;
}
  function myfun()
  {
      return 'hello';
  }
function changeDateFormate($date,$date_format){
    return \Carbon\Carbon::createFromFormat('Y-m-d', $date)->format($date_format);    
}
function hotelid($id)
{
  $data = DB::table('hotels')->where('user_id',$id)->get()->first();
    if($data)
    {
       return $data->id;
    }
    else
    {
      return 0;
    }
}
function hotelAddress($id)
{
  $data = DB::table('hotels')->where('id',$id)->get()[0];
    if($data)
    {
       return $data->address;
    }
    else
    {
      return 'Not Found';
    }
}
function checkhotelprofile($id)
{
  $c=0;
    $c = DB::table('hotels')->where('user_id',$id)->get()->count();
    if($c>0)
    {
       return true;
    }
    else
    {
     return false;
    }
}  
//end of supplier data
///get active class*/
function getActive($url)
{
    $lurl=request()->segment(1);
if($url==$lurl)
{
return 'active';
}

}
function getspecficedata($id,$gfeild_name,$sfeild_name,$table_name="")
{

    $query = DB::table($table_name)
    ->select('*')->where($sfeild_name,$id);
$data =  $query->get()->first();
if(!empty($data))
{
    return $data->$gfeild_name;
}
else{
    return '000';
      
}

}
?>