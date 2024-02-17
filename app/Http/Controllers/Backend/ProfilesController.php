<?php

namespace App\Http\Controllers\Backend;

use App\Http\Controllers\Controller;
use Illuminate\Http\Request;
use Auth;
use App\user;

class ProfilesController extends Controller
{
 
 //----auth-------//
 public function __construct()
 {
  $this->middleware('auth');
 }
  
 //-----view------//
 public function view()
 {
  $id = Auth::user()->id;
  $user = user::find($id);
  return view('backend.user.view-profiles',compact('user'));
 }

 //----edit-----//
 public function edit()
  {
   $id = Auth::user()->id;
   $editData=user::find($id);
   return view('backend.user.edit-profiles',compact('editData'));
  }
   
 //-----update-----//
 public function update(Request $Request)
  {
   $this->validate($Request,[
   'name'=>'required', 
   ]);
     
   $data= user::find(Auth::user()->id);
   $data->name    = $Request->name;
   $data->email   = $Request->email;
   $data->mobile  = $Request->mobile;
   $data->address = $Request->address;
   $data->gender  = $Request->gender;

   if($Request->file('image'))
   {
    $file = $Request->file('image');
    @unlink(public_path('upload/user_images/'.$data->image));
    $filename = 'IMG_'.date('YmdHis').'.'.$file->getClientOriginalExtension();
    $file->move(public_path('upload/user_images/'),$filename);
    $data['image'] = $filename;
    }
    $data->save();
    return redirect()->route('profiles.view')->with('success','Profile Updated Successfully');
   }

   //------password view------//
   public function passwordview()
   {
    return view('backend.user.edit-password');
   }

   //------password update-----//
   public function passwordupdate(Request $request)
   {
    if(Auth::attempt(['id'=>Auth::user()->id,'password'=>$request->current_password]))
     {
      $user=user::find(Auth::user()->id);
      $user->password=bcrypt($request->new_password);
      $user->save();
      return redirect()->route('profiles.view')->with('success','password changed Successfully');
     }
     else
     {
      return redirect()->back()->with('error','Sorry! your current password dost not match');
     }
   }

}