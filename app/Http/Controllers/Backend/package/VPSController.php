<?php

namespace App\Http\Controllers\Backend\package;

use App\Http\Controllers\Controller;
use Illuminate\Http\Request;
use App\model\VPS;
use Auth;

class VPSController extends Controller
{
 
 //----auth------//
 public function __construct()
 {
  $this->middleware('auth');
 }

	//-----view------//
	public function view()
	{
	 $data['alldata'] = VPS::all();
	 return view('backend.package.VPS.view-VPS',$data); 
	}

 //-----add------// 
 public function add()
  {
   return view('backend.package.VPS.add-VPS'); 
  }
 
 //-----store------// 
 public function store(Request $request){
   
	 $this->validate($request,[
		'country'    =>'required',
		'cpu'        =>'required',
		'ram'        =>'required',
		'speed'      =>'required',
		'storage'    =>'required',
		'bandwidth'  =>'required',
		'price'      =>'required',
		'url'        =>'required',
		'status'     =>'required'
	 ]);

		$data = new VPS();
		$data->country    = $request->country;
		$data->cpu        = $request->cpu;
		$data->ram        = $request->ram;
		$data->speed      = $request->speed;
		$data->storage    = $request->storage;
		$data->bandwidth  = $request->bandwidth;
		$data->price      = $request->price;
		$data->url        = $request->url;
		$data->status     = $request->status;
		$data->created_by = Auth::user()->id;

		// dd($data);

		$data->save();
		return redirect()->route('VPS.view')->with('success','Data Upload Successfully');
 }

 //-----edit------// 
 public function edit($id)
	{
	 $data['editdata']=VPS::find($id);
	 return view('backend.package.VPS.edit-VPS',$data);
	}

 //-----update------//  
 public function update(Request $request,$id)
 {
  $this->validate($request,[
		'country'    =>'required',
		'cpu'        =>'required',
		'ram'        =>'required',
		'speed'      =>'required',
		'storage'    =>'required',
		'price'      =>'required',
		'bandwidth'  =>'required',
		'url'        =>'required',
		'status'     =>'required'
	 ]);

  $data = VPS::find($id);
  $data->country    = $request->country;
		$data->cpu        = $request->cpu;
		$data->ram        = $request->ram;
		$data->speed      = $request->speed;
		$data->storage    = $request->storage;
		$data->bandwidth  = $request->bandwidth;
		$data->price      = $request->price;
		$data->url        = $request->url;
		$data->status     = $request->status;
  $data->updated_by = Auth::user()->id;

  $data->save();
  return redirect()->route('VPS.view')->with('success','data Update Successfully');
 }

 //------inactive-------//
	public function inacative($id)
	{
		VPS::find($id)->where('id',$id)->update(['status'=>1]);
		return redirect()->back();
	}
		   
	//------active------//
	public function active($id)
	{
		VPS::find($id)->where('id',$id)->update(['status'=>0]);
		return redirect()->back();
	}


 //------delete------//
 public function delete($id)
	{
	 $data=VPS::find($id);
	 $data->delete();
	  return redirect()->route('VPS.view')->with('error','Data Deleted Successfully');
	}
}
