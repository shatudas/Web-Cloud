<?php

namespace App\Http\Controllers\Backend\contact;

use App\Http\Controllers\Controller;
use Illuminate\Http\Request;
use App\model\contact;
use Auth;

class contactController extends Controller
{
   //----auth------//
 public function __construct()
 {
  $this->middleware('auth');
 }

 //----add------//
 public function add(){
  $data['editdata']= contact::first();
  return view('backend.contact.contact.contact-page',$data);
 }


 //----update------//
 public function update(Request $request,$id)
 {

  $this->validate($request,[
  'address'     =>'required',
  'locationURL' =>'required'
  ]);

   $data = contact::find($id);
   $data->id          = 1;
   $data->address     = $request->address;
   $data->locationURL = $request->locationURL;
   $data->email       = json_encode($request->email);
   $data->phone       = json_encode($request->phone);
    $data->cell       = json_encode($request->cell);
   $data->updated_by  = Auth::user()->id;  




   $data->save();
   return redirect()->route('contact.add')->with('success','Data Update Successfully');
  }

}
