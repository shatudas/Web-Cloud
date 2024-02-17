<?php

namespace App\Http\Controllers\Backend\setting;

use App\Http\Controllers\Controller;
use Illuminate\Http\Request;
use App\model\mision;
use Auth;


class MisionController extends Controller
{
  
  //----auth------//
  public function __construct()
  {
   $this->middleware('auth');
  }

  //----Add------//
  public function add(){
  $data['editData']=mision::first();
   return view('backend.setting.mision.mision',$data);
  }
    
  //----Update------//
  public function update(Request $request,$id)
  {

   $this->validate($request,[
   'discriptsion'   =>'required'
   ]);

   $data =mision::find($id);
   $data->id           = 1;
   $data->discriptsion = $request->discriptsion;
   $data->updated_by   = Auth::user()->id;
	    
   $data->save();
   return redirect()->route('mision.add')->with('success','Data Update Successfully');
  }



}
