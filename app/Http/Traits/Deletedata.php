<?php

namespace App\Http\Traits;
//use App\Models\Student;
use Illuminate\Support\Facades\DB;
trait Deletedata {
//     public function deletefun($id,$tablename) {
//    //     dd($tablename);
//  if(DB::table($tablename)->where('id',$id)->delete())
//  {
// return 1;
//  }
//  else
//  {
// return 0;
//  }
        
//     }
///function change status
public function changeuserstatus($id,$tablename,$status) {
   // dd($id);
if(DB::table($tablename)->where('id',$id)->update(['status'=>$status]))
{
return 1;
}
else
{
return 0;
}
       
   }


//end of change status

  }