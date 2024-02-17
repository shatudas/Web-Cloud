<?php

namespace App\Http\Controllers\Backend;

use App\Http\Controllers\Controller;
use Illuminate\Http\Request;
use App\model\PackageType;
use App\model\PackageFeture;
use Auth;
use image;

class PackageFeatureController extends Controller
{

 //----auth------//
 public function __construct()
 {
  $this->middleware('auth');
 }

	//-----view------//
 public function view()
  {
   $data['alldata'] = PackageFeture::all();
   return view('backend.package.packageFeature.view-package-feature',$data); 
  }
  
 //-----Add------//
 public function add()
  {
   $data['pakage']=PackageType::where('status','0')->get();
   return view('backend.package.packageFeature.add-package-feature',$data); 
  }
  
 //-----store------//
 public function store(Request $request)
 {    
	 $this->validate($request,[
		'package_id'  =>'required',
		'title'       =>'required',
		'status'      =>'required',
		'image'       =>'required'
	 ]);

		$data=new PackageFeture();
		$data->package_id = $request->package_id;
		$data->title      = $request->title;
		$data->detalis    = $request->detalis;
		$data->status     = $request->status;
		$data->created_by = Auth::user()->id;

  if($request->file('image'))
			{
			 $file=$request->file('image');
			 $filename = 'IMG_'.date('YmdHis').'.'.$file->getClientOriginalExtension();
			 $file->move(public_path('upload/Package_Feature'),$filename);
			 $data['image']=$filename;
			}
			$data->save();
			return redirect()->route('package.feature.view')->with('success','Data Upload Successfully');
   }

  //-----edit------//
   public function edit($id)
	  {
	   $data['alldata'] = PackageType::where('status','0')->get();
	   $data['editdata']=PackageFeture::find($id);
	   return view('backend.package.packageFeature.edit-package-feature',$data);
	  }

  //-----update------//
   public function update(Request $request,$id)
   {
    $this->validate($request,[
			 'package_id'  =>'required',
			 'title'       =>'required',
			 'status'      =>'required'
		  ]);

    $data =PackageFeture::find($id);
    $data->package_id = $request->package_id;
			 $data->title      = $request->title;
			 $data->detalis    = $request->detalis;
			 $data->status     = $request->status;
    $data->updated_by = Auth::user()->id;

    if($request->file('image')){
     $file = $request->file('image');
     @unlink(public_path('upload/Package_Feature/'.$data->image));
     $filename = 'IMG_'.date('YmdHis').'.'.$file->getClientOriginalExtension();
     $file->move(public_path('upload/Package_Feature/'),$filename);
     $data['image'] = $filename;
    }

    $data->save();
    return redirect()->route('package.feature.view')->with('success','data Update Successfully');
   }

  //------inactive-------//
	 public function inacative($id)
		{
		 PackageFeture::find($id)->where('id',$id)->update(['status'=>1]);
		 return redirect()->back();
		}
		   
		//------active------//
	 public function active($id)
		{
		 PackageFeture::find($id)->where('id',$id)->update(['status'=>0]);
		 return redirect()->back();
		}

  //------delete------//
	 public function delete($id)
	 {
	  $data=PackageFeture::find($id);
	  if(file_exists('upload/Package_Feature/'.$data->image) AND !empty($data->image)){
	  unlink('upload/Package_Feature/'.$data->image);
	 }
		 $data->delete();
		 return redirect()->route('package.feature.view')->with('error','Data Deleted Successfully');
	 }

}
