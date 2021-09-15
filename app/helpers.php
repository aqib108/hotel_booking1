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
?>