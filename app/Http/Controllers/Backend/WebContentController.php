<?php

namespace App\Http\Controllers\Backend;

use App\Http\Controllers\Controller;
use Illuminate\Http\Request;
use App\model\Webcontent;
use Auth;

class WebContentController extends Controller
{
 
 //----auth------//
 public function __construct()
 {
  $this->middleware('auth');
 }

 //-----view------//
 public function view()
 {
  $data['alldata'] = Webcontent::all();
  return view('backend.package.web_content.view_web',$data); 
 }


 public function add()
	{
	 return view('backend.package.web_content.add_web');
	}


	//------store------//
 public function store(Request $request)
  {
   $this->validate($request,[
   'title'        =>'required',
   'discriptsion' =>'required',
   'status'       =>'required',
   'image'        =>'required'
   ]);

   $data=new Webcontent();
   $data->title        = $request->title;
   $data->discriptsion = $request->discriptsion;
   $data->status       = $request->status;
   $data->created_by   = Auth::user()->id;
   if($request->file('image'))
   {
    $file=$request->file('image');
    $filename = 'IMG_'.date('YmdHis').'.'.$file->getClientOriginalExtension();
    $file->move(public_path('upload/web_image'),$filename);
    $data['image']=$filename;
   }
   $data->save();
   return redirect()->route('web_content.view')->with('success','Data Upload Successfully');
  }

 //------edit------//
 public function edit($id)
 {
  $editData=Webcontent::find($id);
  return view('backend.package.web_content.edit_web',compact('editData'));
 }

 //-----update-----//
 public function update(Request $request,$id)
 {
 	$this->validate($request,[
   'title'        =>'required',
   'discriptsion' =>'required',
   'status'       =>'required',
   'image'        =>'required'
   ]);

  $data =Webcontent::find($id);
   $data->title        = $request->title;
   $data->discriptsion = $request->discriptsion;
   $data->status       = $request->status;
  $data->updated_by    = Auth::user()->id;
    
  if($request->file('image')){
   $file = $request->file('image');
   @unlink(public_path('upload/web_image/'.$data->image));
   $filename = 'IMG_'.date('YmdHis').'.'.$file->getClientOriginalExtension();
   $file->move(public_path('upload/web_image/'),$filename);
   $data['image'] = $filename;
  }

  $data->save();
  return redirect()->route('web_content.view')->with('success','data Update Successfully');
 }

 //------update------//
 public function delete($id)
 {
  $data=Webcontent::find($id);
  if(file_exists('upload/web_image/'.$data->image) AND !empty($data->image)){
  unlink('upload/web_image/'.$data->image);
  }
  $data->delete();
  return redirect()->route('web_content.view')->with('error','Data Deleted Successfully');
 }

 //------inactive-------//
 public function inacative($id)
 {
  Webcontent::find($id)->where('id',$id)->update(['status'=>1]);
  return redirect()->back();
 }
   
 //------active------//
 public function active($id)
 {
  Webcontent::find($id)->where('id',$id)->update(['status'=>0]);
  return redirect()->back();
 }



}
