<?php

namespace App\Http\Controllers\Admin;

use App\Http\Controllers\Controller;
use Illuminate\Http\Request;
use App\Models\Websetting;
use App\Models\SocialLinks;
class Setting extends Controller
{
    //

    function save_web_setting(Request $request)
    {
        // dd($request->all());
        $request->validate([
            'email' => 'required',
            'title' => 'required',
            'phone' => 'required',
            'address' => 'required',
        ]);
        extract($request->all());
        $wb = new Websetting;
        $data = array();
        if(!empty($web_id))
        {
            $wb->exists = true;
            $wb->id = $web_id;
        }
        $wb->title = $request->title;
        $wb->email = $request->email;
        $wb->phone = $request->phone;
        $wb->address = $request->address;
        if(!empty($web_id))
        {
            
            if($request->hasfile('logo'))
            {
              
                   $file=$request->file('logo');
                   $filename = time().rand(1,100).'.'.$file->extension();
                   $file->move(public_path('uploads/logo'),$filename);  
                   $wb->logo = $filename;
            }
             else
            {
                  //$filename=NULL;
  
            }
        }
        else
        {
            if($request->hasfile('logo'))
            {
              
                   $file=$request->file('logo');
                   $filename = time().rand(1,100).'.'.$file->extension();
                   $file->move(public_path('uploads/logo'),$filename);  
           
            }
             else
            {
                  $filename=NULL;
  
            } 
            $wb->logo = $filename;
        }
        
     
        if($wb->save())
        {
         $message='successfully saved';
        // $data['status'] = 200;
        }
        else
        {
            $message='Error in saved data';
          //  $data['status'] = 204;
        }
        
        $data['message'] = $message;
        
        return redirect()->back()->with($data);
    }

    //function save links
    function save_socail_setting(Request $request)
    {
        // dd($request->all());
        extract($request->all());
        $wb = new SocialLinks;
        $data = array();
        if(!empty($socail_id))
        {
            $wb->exists = true;
            $wb->id = $socail_id;
        }
        $wb->facebook = $facebook;
        $wb->whatsapp = $whatsapp;
        $wb->instagram = $instagram;
        $wb->youtube = $youtube;
        $wb->twitter = $twitter;
        
        
        
     
        if($wb->save())
        {
         $message='successfully saved';
        // $data['status'] = 200;
        }
        else
        {
            $message='Error in saved data';
          //  $data['status'] = 204;
        }
        
        $data['message'] = $message;
        
        return redirect()->back()->with($data);
    }


    //end of save social links
    function success($message)
    {
     $data['status'] = 200;
     $data['message'] = $message;
     
     return response()->json($data);
    }
    function errror($message)
    {
     $data['status'] = 204;
     $data['message'] = $message;
     return response()->json($data);
    }
}
