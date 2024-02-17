<?php

namespace App\Http\Controllers\Backend\FAQ;

use App\Http\Controllers\Controller;
use Illuminate\Http\Request;
use App\model\FAQ;
use Auth;


class FAQController extends Controller
{
     //----auth------//
 public function __construct()
 {
  $this->middleware('auth');
 }


 public function view()
 {
  $data['alldata'] = FAQ::all();
  return view('backend.FAQ.view_FAQ',$data); 
 }

  public function add()
   {
    return view('backend.FAQ.add_FAQ',); 
   }


 //------store-------//
 public function store(Request $request)
 {

  $this->validate($request,[
  'question'    =>'required',
  'answer'      =>'required',
  'status'      =>'required'
  ]);

  $data=new FAQ();
  $data->question     = $request->question;
  $data->answer       = $request->answer;
  $data->status       = $request->status;
  $data->created_by   = Auth::user()->id;

  $data->save();
  return redirect()->route('FAQ.view')->with('success','Data Upload Successfully');

  }

   //------edit------//
  public function edit($id)
		 {
		  $data['editdata'] = FAQ::find($id);
		  return view('backend.FAQ.edit_FAQ',$data);
		 }



	 public function update(Request $request,$id)
   {
    $this->validate($request,[
	  'question'    =>'required',
	  'answer'      =>'required',
	  'status'      =>'required'
	  ]);

    $data =FAQ::find($id);
    $data->question     = $request->question;
    $data->answer       = $request->answer;
    $data->status       = $request->status;
    $data->updated_by         = Auth::user()->id;

    $data->save();
    return redirect()->route('FAQ.view')->with('success','data Update Successfully');
   }


    //------inactive-------//
  public function inacative($id)
  {
   FAQ::find($id)->where('id',$id)->update(['status'=>1]);
   return redirect()->back();
  }
   
  //------active------//
  public function active($id)
  {
   FAQ::find($id)->where('id',$id)->update(['status'=>0]);
   return redirect()->back();
  }

 //------detete------//
  public function delete($id)
	  {
	   $data = FAQ::find($id); 
		  $data->delete();
		  return redirect()->route('FAQ.view')->with('error','Data Deleted Successfully');
	  }
   










}
