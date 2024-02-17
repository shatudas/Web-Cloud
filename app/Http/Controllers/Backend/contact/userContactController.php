<?php

namespace App\Http\Controllers\Backend\contact;

use App\Http\Controllers\Controller;
use Illuminate\Http\Request;
use App\model\ContactMassage;
use Auth;

class userContactController extends Controller
{
  
  //----auth------//
 public function __construct()
 {
  $this->middleware('auth');
 }

 //-----view------//
 public function view()
  {
   $data['alldata'] = ContactMassage::all();
   return view('backend.contact.Usercontact.user-contact',$data); 
  }



  //------update------//
  public function delete($id)
  {
   $slider=ContactMassage::find($id);
   $slider->delete();
   return redirect()->route('user.contact.view')->with('successs','Data Deleted Successfully');
  }


  public function getClientMessage(Request $request)
  {
    $data = ContactMassage::find($request->id);
    return response()->json($data);
  }

}
