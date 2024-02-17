<?php

namespace App\Http\Controllers\Backend\package;

use App\Http\Controllers\Controller;
use Illuminate\Http\Request;
use App\model\Dedicated_host;
use Auth;


class DedicatedHostingController extends Controller
{

 //----auth------//
 public function __construct()
 {
  $this->middleware('auth');
 }

 //-----view------//
	public function view()
	{
	 $data['alldata'] = Dedicated_host::all();
	 return view('backend.package.dedicated_host.view_dedicated_host',$data); 
	}


	//-----add------// 
 public function add()
  {
   return view('backend.package.dedicated_host.add_dedicated_host'); 
  }


  //-----store------// 
	 public function store(Request $request){
	   
		 $this->validate($request,[
			'country'     =>'required',
			'cpu'         =>'required',
			'core'        =>'required',
			'storage'     =>'required',
			'ram'         =>'required',
			'bandwidth'   =>'required',
			'price'       =>'required',
			'url'         =>'required',
			'status'      =>'required'
		 ]);

			$data = new Dedicated_host();
			$data->country    = $request->country;
			$data->cpu        = $request->cpu;
			$data->core       = $request->core;
			$data->storage    = $request->storage;
			$data->ram        = $request->ram;
			$data->bandwidth  = $request->bandwidth;
			$data->price      = $request->price;
			$data->url        = $request->url;
			$data->status     = $request->status;
			$data->created_by = Auth::user()->id;

			$data->save();
			return redirect()->route('dedicated_hosting.view')->with('success','Data Upload Successfully');
	 }


	  //-----edit------// 
		 public function edit($id)
			{
			 $data['editdata']=Dedicated_host::find($id);
			 return view('backend.package.dedicated_host.edit_dedicated_hosting',$data);
			}


  //-----update------//  
	 public function update(Request $request,$id)
	 {
	   $this->validate($request,[
				'country'     =>'required',
				'cpu'         =>'required',
				'core'        =>'required',
				'storage'     =>'required',
				'ram'         =>'required',
				'bandwidth'   =>'required',
				'price'       =>'required',
				'url'         =>'required',
				'status'      =>'required'
			 ]);

   $data = Dedicated_host::find($id);
   $data->country    = $request->country;
			$data->cpu        = $request->cpu;
			$data->core       = $request->core;
			$data->storage    = $request->storage;
			$data->ram        = $request->ram;
			$data->bandwidth  = $request->bandwidth;
			$data->price      = $request->price;
			$data->url        = $request->url;
			$data->status     = $request->status;
  $data->updated_by = Auth::user()->id;

	  $data->save();
	  return redirect()->route('dedicated_hosting.view')->with('success','data Update Successfully');
	 }


	 public function inacative($id)
			{
				Dedicated_host::find($id)->where('id',$id)->update(['status'=>1]);
				return redirect()->back();
			}
				   
		//------active------//
		public function active($id)
			{
				Dedicated_host::find($id)->where('id',$id)->update(['status'=>0]);
				return redirect()->back();
			}

		//------delete------//
	 public function delete($id)
		{
		 $data=Dedicated_host::find($id);
		 $data->delete();
		  return redirect()->route('dedicated_hosting.view')->with('error','Data Deleted Successfully');
		}









}
