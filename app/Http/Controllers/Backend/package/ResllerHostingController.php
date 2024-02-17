<?php

namespace App\Http\Controllers\Backend\package;

use App\Http\Controllers\Controller;
use Illuminate\Http\Request;
use App\model\resellerHost;
use Auth;


class ResllerHostingController extends Controller
{

	 //----auth------//
	 public function __construct()
	 {
	  $this->middleware('auth');
	 }

	   //-----view------//
		public function view()
		{
		 $data['alldata'] = resellerHost::all();
		 return view('backend.package.releller_host.view_releller_host',$data); 
		}


		//-----add------// 
	 public function add()
	  {
	   return view('backend.package.releller_host.add_releller_host'); 
	  }

	 //-----store------// 
  public function store(Request $request){
   
	 $this->validate($request,[
		'country'      =>'required',
		'name'         =>'required',
		'cpanel'       =>'required',
		'bandwidth'    =>'required',
		'storage'      =>'required',
		'ip'           =>'required',
		'license'      =>'required',
		'litespeed'    =>'required',
		'backup'       =>'required',
		'whm_panel'    =>'required',
		'softaculous'  =>'required',
		'imunify'      =>'required',
		'cloud_license'=>'required',
		'price'        =>'required',
		'url'          =>'required',
		'status'       =>'required'
	 ]);

		$data = new resellerHost();
		$data->country        = $request->country;
		$data->name           = $request->name;
		$data->cpanel         = $request->cpanel;
		$data->bandwidth      = $request->bandwidth;
		$data->storage        = $request->storage;
		$data->ip             = $request->ip;
		$data->license        = $request->license;
		$data->litespeed      = $request->license;
		$data->backup         = $request->backup;
		$data->whm_panel      = $request->whm_panel;
		$data->softaculous    = $request->softaculous;
		$data->imunify        = $request->imunify;
		$data->cloud_license  = $request->cloud_license;
		$data->price          = $request->price;
		$data->url            = $request->url;
		$data->status         = $request->status;
		$data->created_by     = Auth::user()->id;

		$data->save();

		return redirect()->route('resller_host.view')->with('success','Data Upload Successfully');
 }


 //-----edit------// 
 public function edit($id)
	{
	 $data['editdata']=resellerHost::find($id);
	 return view('backend.package.releller_host.edit_releller_host',$data);
	}



	//-----update------//  
 public function update(Request $request,$id)
 {
   $this->validate($request,[
		'country'      =>'required',
		'name'         =>'required',
		'cpanel'       =>'required',
		'bandwidth'    =>'required',
		'storage'      =>'required',
		'ip'           =>'required',
		'license'      =>'required',
		'litespeed'    =>'required',
		'backup'       =>'required',
		'whm_panel'    =>'required',
		'softaculous'  =>'required',
		'imunify'      =>'required',
		'cloud_license'=>'required',
		'price'        =>'required',
		'url'          =>'required',
		'status'       =>'required'
	 ]);

  $data = resellerHost::find($id);
  $data->country        = $request->country;
		$data->name           = $request->name;
		$data->cpanel         = $request->cpanel;
		$data->bandwidth      = $request->bandwidth;
		$data->storage        = $request->storage;
		$data->ip             = $request->ip;
		$data->license        = $request->license;
		$data->litespeed      = $request->license;
		$data->backup         = $request->backup;
		$data->whm_panel      = $request->whm_panel;
		$data->softaculous    = $request->softaculous;
		$data->imunify        = $request->imunify;
		$data->cloud_license  = $request->cloud_license;
		$data->price          = $request->price;
		$data->url            = $request->url;
		$data->status         = $request->status;
  $data->updated_by = Auth::user()->id;

  $data->save();
  return redirect()->route('resller_host.view')->with('success','data Update Successfully');
 }

 //------inactive-------//
	public function inacative($id)
	{
		resellerHost::find($id)->where('id',$id)->update(['status'=>1]);
		return redirect()->back();
	}
		   
	//------active------//
	public function active($id)
	{
		resellerHost::find($id)->where('id',$id)->update(['status'=>0]);
		return redirect()->back();
	}


 //------delete------//
 public function delete($id)
	{
	 $data=resellerHost::find($id);
	 $data->delete();
	  return redirect()->route('resller_host.view')->with('error','Data Deleted Successfully');
	}

}
