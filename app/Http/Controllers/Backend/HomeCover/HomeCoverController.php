<?php

namespace App\Http\Controllers\Backend\HomeCover;

use App\Http\Controllers\Controller;
use Illuminate\Http\Request;
use App\model\Cover;
use Auth;

class HomeCoverController extends Controller
{
 
	 //______auth_____//
	 public function __construct()
	 {
	  $this->middleware('auth');
	 }

  //_______Add______//
  public function add(){
  $data['editdata']=Cover::first();
   return view('backend.homeCover.home_cover',$data);
  }

  //_______update_____//
  public function update(Request $request,$id)
  {
   $data = Cover::find($id);
   $data->id             = 1;
   $data->notification   = $request->notification;
   $data->title          = $request->title;
   $data->sub_title      = $request->sub_title;
   $data->updated_by     = Auth::user()->id;  

    if($request->file('image')){
    $file = $request->file('image');
    @unlink(public_path('upload/Image/Home_Cover/'.$data->image));
    $filename = 'IMG_'.date('YmdHis').'.'.$file->getClientOriginalExtension();
    $file->move(public_path('upload/Image/Home_Cover/'),$filename);
    $data['image'] = $filename;
   }

   $data->save();
   return redirect()->route('homecover.add')->with('success','Data Update Successfully');
  }
}
