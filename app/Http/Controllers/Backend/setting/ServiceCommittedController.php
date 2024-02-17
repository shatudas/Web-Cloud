<?php

namespace App\Http\Controllers\Backend\setting;

use App\Http\Controllers\Controller;
use Illuminate\Http\Request;
use App\model\service_committed;
use Auth;

class ServiceCommittedController extends Controller
{
 
 //----auth------//
  public function __construct()
  {
   $this->middleware('auth');
  }


  //-----view------//
	 public function view()
	 {
	  $data['alldata'] = service_committed::all();
	  return view('backend.setting.service_committed.view_service_committed',$data); 
	 }

			//----add------//
		 public function add(){
		  return view('backend.setting.service_committed.add_service_committed');
		 }


		 //------store-------//
		 public function store(Request $request)
		 {
		  $this->validate($request,[
		  'name'          =>'required',
		  'description'   =>'required',
		  'status'        =>'required'
		  ]);

		  $data = new service_committed();
		  $data->name           = $request->name;
		  $data->description    = $request->description;
		  $data->status         = $request->status;
		  $data->created_by     = Auth::user()->id;


		  if($request->file('image'))
		   {
		    $file=$request->file('image');
		    $filename = 'IMG_'.date('YmdHis').'.'.$file->getClientOriginalExtension();
		    $file->move(public_path('upload/Commitment'),$filename);
		    $data['image']=$filename;
		   }
		   $data->save();
		   return redirect()->route('service-committed.view')->with('success','Data Upload Successfully');
		  }

			  //------edit------//
		  public function edit($id)
		  {
		   $editdata=service_committed::find($id);
		   return view('backend.setting.service_committed.edit_service_committed',compact('editdata'));
		  }


	   //-----update------//
	  public function update(Request $request,$id)
	  {
	  	
	  	$this->validate($request,[
		  'name'          =>'required',
		  'description'   =>'required',
		  'status'        =>'required'
		  ]);

	   $data = service_committed::find($id);
	   $data->name           = $request->name;
		  $data->description    = $request->description;
		  $data->status         = $request->status;
	   $data->updated_by     = Auth::user()->id;

	   if($request->file('image'))
	   {
	    $file=$request->file('image');
	    @unlink(public_path('upload/Commitment/'.$data->image));
	    $filename = 'IMG_'.date('YmdHis').'.'.$file->getClientOriginalExtension();
	    $file->move(public_path('upload/Commitment'),$filename);
	    $data['image']=$filename;
	   }

	   $data->save();
	   return redirect()->route('service-committed.view')->with('success','Date Update Successfully');
	  }


	  //------inactive-------//
  public function inacative($id)
  {
   service_committed::find($id)->where('id',$id)->update(['status'=>1]);
   return redirect()->back();
  }
   
  //------active------//
  public function active($id)
  {
   service_committed::find($id)->where('id',$id)->update(['status'=>0]);
   return redirect()->back();
  }


  //------update------//
  public function delete($id)
  {
  $data=service_committed::find($id);
	 if(file_exists('upload/Commitment/'.$data->image) AND !empty($data->image)){
	 unlink('upload/Commitment/'.$data->image);
	 }
   $data->delete();
   return redirect()->route('service-committed.view')->with('error','Data Deleted Successfully');
  }





}
