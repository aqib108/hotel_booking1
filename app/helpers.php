<?php
use Jenssegers\Mongodb\Eloquent\Model;
use Illuminate\Support\Facades\DB;

  function myfun()
  {
      return 'hello';
  }
function changeDateFormate($date,$date_format){
    return \Carbon\Carbon::createFromFormat('Y-m-d', $date)->format($date_format);    
}
function hotelid($id)
{
  $data = DB::table('hotels')->where('user_id',$id)->get()[0];
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