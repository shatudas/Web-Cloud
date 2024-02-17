<?php

namespace App\Http\Controllers\Backend\setting;

use App\Http\Controllers\Controller;
use Illuminate\Http\Request;
use App\model\About;
use Auth;

class AboutController extends Controller
{
 //----auth------//
  public function __construct()
  {
   $this->middleware('auth');
  }

  //----Add------//
  public function add(){
  $data['editData']=About::first();
   return view('backend.setting.about.about-page',$data);
  }
    
  //----Update------//
  public function update(Request $request,$id)
  {

   $this->validate($request,[
   'title'          =>'required',
   'discriptsion'   =>'required'
   ]);

   $data =About::find($id);
   $data->id           = 1;
	  $data->title        = $request->title;
	  $data->discriptsion = $request->discriptsion;
	  $data->updated_by   = Auth::user()->id;
	    
	  if($request->file('image')){
    $file = $request->file('image');
    @unlink(public_path('upload/about_image/'.$data->image));
    $filename = 'IMG_'.date('YmdHis').'.'.$file->getClientOriginalExtension();
    $file->move(public_path('upload/about_image/'),$filename);
    $data['image'] = $filename;
   }

   $data->save();
   return redirect()->route('about.add')->with('success','Data Update Successfully');
  }

}
