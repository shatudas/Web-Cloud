<?php

namespace App\Http\Controllers\Backend;

use App\Http\Controllers\Controller;
use Illuminate\Http\Request;
use App\model\Cover;
use Auth;

class HomeCoverController extends Controller
{
 
 //----auth------//
 public function __construct()
 {
  $this->middleware('auth');
 }


 //----Add------//
  public function add(){
  $data['editdata']=Cover::first();
   return view('backend.homeCover.home_cover',$data);
  }


  //----update------//
 public function update(Request $request,$id)
 {
   $data = Cover::find($id);
   $data->id          = 1;
   $data->title       = json_encode($request->title);
   $data->updated_by  = Auth::user()->id;  

    if($request->file('image')){
    $file = $request->file('image');
    @unlink(public_path('upload/cover/'.$data->image));
    $filename = 'IMG_'.date('YmdHis').'.'.$file->getClientOriginalExtension();
    $file->move(public_path('upload/cover/'),$filename);
    $data['image'] = $filename;
   }

   $data->save();
   return redirect()->route('homecover.add')->with('success','Data Update Successfully');
  }



 
}
