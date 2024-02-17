<?php

namespace App\Http\Controllers\Backend;

use App\Http\Controllers\Controller;
use Illuminate\Http\Request;
use App\model\PackageType;
use Auth;

class PackagetypeController extends Controller
{ 

 //-----auth------//
	public function __construct()
 {
  $this->middleware('auth');
 }

 //-----view------//
 public function view()
  {
   $data['alldata'] = PackageType::all();
   return view('backend.package.packagtype.view-package-type',$data); 
  }

 //-----add------//
 public function add()
	{
	 return view('backend.package.packagtype.add-package-type');
	}

 //-----store------//
	public function store(Request $request)
 {
  $this->validate($request,[
  'name'        =>'required',
  'status'      =>'required'
  ]);

  $data=new PackageType();
  $data->name              = $request->name;
  $data->status           = $request->status;
  $data->created_by       = Auth::user()->id;
  $data->save();
  return redirect()->route('package.type.view')->with('success','Data Upload Successfully');
  }

 //------edit------//
 public function edit($id)
 {
  $editdata = PackageType::find($id);
  return view('backend.package.packagtype.edit-package-type',compact('editdata'));
 }


 public function update(Request $request,$id)
  {
   $data = PackageType::find($id);
   $data->name       = $request->name;
   $data->status     = $request->status;
   $data->updated_by = Auth::user()->id;

   $data->save();

   return redirect()->route('package.type.view')->with('success','Date Update Successfully');
  }


 //------inactive-------//
 public function inacative($id)
 {
  PackageType::find($id)->where('id',$id)->update(['status'=>1]);
  return redirect()->back();
 }
   
 //------active------//
 public function active($id)
 {
  PackageType::find($id)->where('id',$id)->update(['status'=>0]);
  return redirect()->back();
 }
   
 //------update------//
 public function delete($id)
  {
  $slider=PackageType::find($id);
  $slider->delete();
  return redirect()->route('package.type.view')->with('error','Data Deleted Successfully');
 }

}
