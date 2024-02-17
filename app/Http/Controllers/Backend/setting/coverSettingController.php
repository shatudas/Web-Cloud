<?php

namespace App\Http\Controllers\Backend\setting;

use App\Http\Controllers\Controller;
use Illuminate\Http\Request;
use App\model\ServicesType;
use App\model\CoverSetting;
use Auth;


class coverSettingController extends Controller
{
    //----auth------//
 public function __construct()
 {
  $this->middleware('auth');
 }

	//-----view------//
 public function view()
 {
  $data['alldata'] = CoverSetting::all();
  return view('backend.setting.webCoverSetting.view-cover',$data); 
 }
  
 //------add------//
	public function add()
	 {
	  // $data['type'] = ServicesType::all();
	  return view('backend.setting.webCoverSetting.add-cover');
	 }

 //------store------//
 	public function store(Request $request)
  {

   $this->validate($request,[
   'cover_id' =>'required',
   'status'   =>'required',
   'image'    =>'required'
   ]);

   $data=new CoverSetting();
   $data->cover_id   = $request->cover_id;
   $data->title      = $request->title;
   $data->status     = $request->status;
   $data->created_by = Auth::user()->id;

   if($request->file('image'))
    {
     $file=$request->file('image');
     $filename = 'IMG_'.date('YmdHis').'.'.$file->getClientOriginalExtension();
     $file->move(public_path('upload/Cover_image'),$filename);
     $data['image']=$filename;
    }

   $data->save();
   return redirect()->route('cover.setting.view')->with('success','Cover Upload Successfully');
  }

  //------edit------//
  public function edit($id)
  {
   $data['editData']=CoverSetting::find($id);
   $data['type'] = ServicesType::all();
   return view('backend.setting.webCoverSetting.edit-cover',$data);
  }


  //------update------//
  public function delete($id)
   {
    $cover=CoverSetting::find($id);
    if(file_exists('upload/Cover_image/'.$cover->image) AND !empty($cover->image)){
    unlink('upload/Cover_image/'.$cover->image);
   }
    $cover->delete();
    return redirect()->route('cover.setting.view')->with('error','Data Deleted Successfully');
   }

	 //------inactive-------//
	 public function inacative($id)
	  {
	   CoverSetting::find($id)->where('id',$id)->update(['status'=>1]);
	   return redirect()->back();
	  }
	   
	 //------active------//
	 public function active($id)
	  {
	   CoverSetting::find($id)->where('id',$id)->update(['status'=>0]);
	   return redirect()->back();
	  }

  //-----update-----//
  public function update(Request $request,$id)
   {
    $this->validate($request,[
    'cover_id' =>'required',
    'status'   =>'required',
    ]);

    $data =CoverSetting::find($id);

    $data->cover_id   = $request->cover_id;
	   $data->title      = $request->title;
	   $data->status     = $request->status;
    $data->updated_by = Auth::user()->id;

    if($request->file('image'))
     {
      $file=$request->file('image');
      @unlink(public_path('upload/Cover_image/'.$data->image));
      $filename = 'IMG_'.date('YmdHis').'.'.$file->getClientOriginalExtension();
      $file->move(public_path('upload/Cover_image'),$filename);
      $data['image']=$filename;
     }
  
    $data->save();
    return redirect()->route('cover.setting.view')->with('success','Cover Update Successfully');
  }

}
