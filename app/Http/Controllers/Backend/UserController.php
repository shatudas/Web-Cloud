<?php

namespace App\Http\Controllers\Backend;

use App\Http\Controllers\Controller;
use Illuminate\Http\Request;
use App\User;
use Auth;

class UserController extends Controller
{
 
 //-----auth------//
 public function __construct()
 {
  $this->middleware('auth');
 }
  
 //----view------//
 public function view()
 {
  $data['allData'] = user::all();
  return view('backend.user.view-user',$data);
 }

 //-----add-------//
 public function add()
  {
   return view('backend.user.add-user');
  }

 //------store-------//
 public function store(Request $request)
 {
  $this->validate($request,[
  'user_type'  =>'required',
  'name'       =>'required',
  'email'      =>'required',
  'password'   =>'required',
  'status'     =>'required',
  ]);

  $is_admin = '1';
  $data = new User();
  $data->is_admin  =$is_admin;
  $data->user_type =$request->user_type;
  $data->name      =$request->name;
  $data->email     =$request->email;
  $data->password  =bcrypt($request->password);
  $data->status    =$request->status;

  $data->save();
  return redirect()->route('user.view')->with('success','Data Insert Successfully');
 
 }

 //------inactive------//
 public function inacative($id)
 {
  User::find($id)->where('id',$id)->update(['status'=>1]);
  return redirect()->back();
 }

 //----------active------//
 public function active($id)
 {
  User::find($id)->where('id',$id)->update(['status'=>0]);
  return redirect()->back();
 }

 //------edit-----//
 public function edit($id)
 {
  $editData=user::find($id);
  return view('backend.user.edit-user',compact('editData'));
 }


 //------update------//
 public function update(Request $Request,$id)
 {
  $this->validate($Request,[
  'name'=>'required',
 ]);
     
  $is_admin='1';
  $data= user::find($id);
  $data->is_admin  =$is_admin;
  $data->user_type =$Request->user_type;
  $data->name      =$Request->name;
  $data->email     =$Request->email;
  $data->password  =bcrypt($Request->password);
  $data->status    =$Request->status;
  $data->save();
  return redirect()->route('user.view')->with('success','Data Updated Successfully');
 }

 //-----delete------//
 public function delete($id)
 {
  $user = user::find($id);
  if(file_exists('public/upload/user_images' .$user->image) AND !empty($user->image))
   {
    @unlink('public/upload/user_images' .$user->image);
   }
  $user->delete();
  return redirect()->route('user.view')->with('success','Data Deleted Successfully');
 } 

}