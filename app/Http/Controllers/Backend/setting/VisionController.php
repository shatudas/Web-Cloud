<?php

namespace App\Http\Controllers\Backend\setting;

use App\Http\Controllers\Controller;
use Illuminate\Http\Request;
use App\model\vision;
use Auth;


class VisionController extends Controller
{
  
  //----auth------//
  public function __construct()
  {
   $this->middleware('auth');
  }

  //----Add------//
  public function add(){
  $data['editData']=vision::first();
   return view('backend.setting.vision.vision',$data);
  }
    
  //----Update------//
  public function update(Request $request,$id)
  {

   $this->validate($request,[
   'discriptsion'   =>'required'
   ]);

   $data =vision::find($id);
   $data->id           = 1;
   $data->discriptsion = $request->discriptsion;
   $data->updated_by   = Auth::user()->id;
	    
   $data->save();
   return redirect()->route('vision.add')->with('success','Data Update Successfully');
  }
}
