<?php

namespace App\Http\Controllers\Backend\service;

use App\Http\Controllers\Controller;
use Illuminate\Http\Request;
use App\model\Service;
use Auth;

class servicesController extends Controller
{

	//----auth------//
 public function __construct()
 {
  $this->middleware('auth');
 }

 //-----view------//
 public function view()
  {
   $data['alldata'] = Service::all();
   return view('backend.service.view-service',$data); 
  }

 //------add------//
	public function add()
	 {
	  return view('backend.service.add-service');
	 }
 
 //------add------//
	public function store(Request $request)
  {
	  $this->validate($request,[
  'name'    =>'required|unique:services,name',
  'price'   =>'required',
  'status'  =>'required'
  ]);

	  $data = new Service();
	  $data->name       = $request->name;
	  $data->price      = $request->price;
	  $data->status     = $request->status;
	  $data->created_by = Auth::user()->id;

	  if($request->file('image'))
	   {
	    $file=$request->file('image');
	    $filename = 'IMG_'.date('YmdHis').'.'.$file->getClientOriginalExtension();
	    $file->move(public_path('upload/Service'),$filename);
	    $data['image']=$filename;
	   }
	   $data->save();

   return redirect()->route('service.view')->with('success','Service Type Successfully');
 }


 //------edit------//
 public function edit($id)
  {
   $editdata=Service::find($id);
   return view('backend.service.edit-service',compact('editdata'));
  }


 //-----update-----//
 public function update(Request $request,$id)
 {
 	
 	$this->validate($request,[
  'name'    =>'required|name|unique:users,services',
  'price'   =>'required',
  'status'  =>'required'
  ]);

  $data = Service::find($id);
  $data->name       = $request->name;
  $data->price      = $request->price;
  $data->status     = $request->status;
  $data->updated_by = Auth::user()->id;

  $data->save();
  return redirect()->route('service.view')->with('success','Service Update Successfully');
 }

 

 //------inactive-------//
 public function inacative($id)
 {
  Service::find($id)->where('id',$id)->update(['status'=>1]);
  return redirect()->back();
 }
   
 //------active------//
  public function active($id)
  {
   Service::find($id)->where('id',$id)->update(['status'=>0]);
   return redirect()->back();
  }

 //------update------//
 public function delete($id)
  {
	  $data=Service::find($id);
		 if(file_exists('upload/Service/'.$data->image) AND !empty($data->image)){
		 unlink('upload/Service/'.$data->image);
		 }
	  $data->delete();
	  return redirect()->route('service.view')->with('error','Service Deleted Successfully');
 }

   
}
