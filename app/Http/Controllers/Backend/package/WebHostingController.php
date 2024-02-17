<?php

namespace App\Http\Controllers\Backend\package;

use App\Http\Controllers\Controller;
use Illuminate\Http\Request;
use App\model\WebHosting;
use Auth;

class WebHostingController extends Controller
{
  
  //----auth------//
	 public function __construct()
	 {
	  $this->middleware('auth');
	 }


	 //-----view------//
		public function view()
		{
		 $data['alldata'] = WebHosting::all();
		 return view('backend.package.WebHost.view_webHost',$data); 
		}
  

  //-----add------// 
	 public function add()
	  {
	   return view('backend.package.WebHost.add_webHost'); 
	  }

		//-----store------// 
	 public function store(Request $request){
	   
		 $this->validate($request,[
			'country'      =>'required',
			'name'         =>'required',
			'bandwidth'    =>'required',
			'addom_domain' =>'required',
			'subdomain'    =>'required',
			'mail'         =>'required',
			'sql'          =>'required',
			'data_taffic'  =>'required',
			'os'           =>'required',
			'backup'       =>'required',
			'price'        =>'required',
			'url'          =>'required',
			'status'       =>'required'
		 ]);


			$data = new WebHosting();
			$data->country      = $request->country;
			$data->name         = $request->name;
			$data->storage      = $request->storage;
			$data->bandwidth    = $request->bandwidth;
			$data->addom_domain = $request->addom_domain;
			$data->subdomain    = $request->subdomain;
			$data->mail         = $request->mail;
			$data->sql          = $request->sql;
			$data->data_taffic  = $request->data_taffic;
			$data->os           = $request->os;
			$data->backup       = $request->backup;
			$data->price        = $request->price;
			$data->url          = $request->url;
			$data->status       = $request->status;
			$data->created_by   = Auth::user()->id;

			// dd($data);

			$data->save();
			return redirect()->route('web_hosting.view')->with('success','Data Upload Successfully');
	 }


	//-----edit------// 
 public function edit($id)
	{
	 $data['editdata']=WebHosting::find($id);
	 return view('backend.package.WebHost.edit_webHost',$data);
	}



	//-----update------//  
 public function update(Request $request,$id)
 {
  $this->validate($request,[
		 'country'      =>'required',
			'name'         =>'required',
			'bandwidth'    =>'required',
			'addom_domain' =>'required',
			'subdomain'    =>'required',
			'mail'         =>'required',
			'sql'          =>'required',
			'data_taffic'  =>'required',
			'os'           =>'required',
			'backup'       =>'required',
			'price'        =>'required',
			'url'          =>'required',
			'status'       =>'required'
	 ]);

  $data = WebHosting::find($id);
  $data->country       = $request->country;
			$data->name         = $request->name;
			$data->storage      = $request->storage;
			$data->bandwidth    = $request->bandwidth;
			$data->addom_domain = $request->addom_domain;
			$data->subdomain    = $request->subdomain;
			$data->mail         = $request->mail;
			$data->sql          = $request->sql;
			$data->data_taffic  = $request->data_taffic;
			$data->os           = $request->os;
			$data->backup       = $request->backup;
			$data->price        = $request->price;
			$data->url          = $request->url;
			$data->status       = $request->status;
   $data->updated_by    = Auth::user()->id;

  $data->save();
  return redirect()->route('web_hosting.view')->with('success','data Update Successfully');
 }


 //------inactive-------//
	public function inacative($id)
	{
		WebHosting::find($id)->where('id',$id)->update(['status'=>1]);
		return redirect()->back();
	}
		   
	//------active------//
	public function active($id)
	{
		WebHosting::find($id)->where('id',$id)->update(['status'=>0]);
		return redirect()->back();
	}


 //------delete------//
 public function delete($id)
	{
	 $data=WebHosting::find($id);
	 $data->delete();
	  return redirect()->route('web_hosting.view')->with('error','Data Deleted Successfully');
	}





}
