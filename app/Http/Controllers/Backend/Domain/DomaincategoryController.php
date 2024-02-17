<?php

namespace App\Http\Controllers\Backend\Domain;

use App\Http\Controllers\Controller;
use Illuminate\Http\Request;
use App\model\DomainCategory;
use Auth;
use image;

class DomaincategoryController extends Controller
{
 
 //----auth------//
 public function __construct()
 {
  $this->middleware('auth');
 }

 //-----view------//
 public function view()
 {
  $data['alldata'] = DomainCategory::all();
  return view('backend.domain.domainCategory.view-domain-category',$data); 
 }

 //-------add------//
 public function add()
	{
	 return view('backend.domain.domainCategory.add-domain-category');
	}

 //------store-------//
 public function store(Request $request)
 {
  $this->validate($request,[
  'name'        =>'required',
  'status'      =>'required'
  ]);

  $data=new DomainCategory();
  $data->name         = $request->name;
  $data->status       = $request->status;
  $data->created_by   = Auth::user()->id;

  if($request->file('image'))
   {
    $file=$request->file('image');
    $filename = 'IMG_'.date('YmdHis').'.'.$file->getClientOriginalExtension();
    $file->move(public_path('upload/domain'),$filename);
    $data['image']=$filename;
   }
   $data->save();
   return redirect()->route('domain.category.view')->with('success','Data Upload Successfully');
  }

  //------edit------//
  public function edit($id)
  {
   $editdata=DomainCategory::find($id);
   return view('backend.domain.domainCategory.edit-domain-category',compact('editdata'));
  }

  //-----update------//
  public function update(Request $request,$id)
  {
   $data = DomainCategory::find($id);
   $data->name       = $request->name;
   $data->status     = $request->status;
   $data->updated_by = Auth::user()->id;

   if($request->file('image'))
   {
    $file=$request->file('image');
    @unlink(public_path('upload/domain/'.$data->image));
    $filename = 'IMG_'.date('YmdHis').'.'.$file->getClientOriginalExtension();
    $file->move(public_path('upload/domain'),$filename);
    $data['image']=$filename;
   }

   $data->save();
   return redirect()->route('domain.category.view')->with('success','Date Update Successfully');
  }

  //------inactive-------//
  public function inacative($id)
  {
   DomainCategory::find($id)->where('id',$id)->update(['status'=>1]);
   return redirect()->back();
  }
   
  //------active------//
  public function active($id)
  {
   DomainCategory::find($id)->where('id',$id)->update(['status'=>0]);
   return redirect()->back();
  }
   
  //------update------//
  public function delete($id)
  {
  $slider=DomainCategory::find($id);
	 if(file_exists('upload/domain/'.$data->image) AND !empty($data->image)){
	 unlink('upload/domain/'.$data->image);
	 }
   $slider->delete();
   return redirect()->route('domain.category.view')->with('error','Data Deleted Successfully');
  }


  
   
}
