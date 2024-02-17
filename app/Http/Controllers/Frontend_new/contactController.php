<?php

namespace App\Http\Controllers\Frontend_new;

use App\Http\Controllers\Controller;
use Illuminate\Http\Request;
use App\model\ContactMassage;
use App\model\genarelSetting;
use App\model\contact;
use App\model\CoverSetting;



class contactController extends Controller
{
    public function contact(){

    
    $data['contact']=contact::first();
    $data['contactcover']=CoverSetting::where('cover_id','contact')->first();
    return view ('frontend.page.contact',$data);
  }

  public function store(Request $request){

  	
  	$this->validate($request,[
   'name'    =>'required',
   'email'   =>'required',
   'subject' =>'required',
   'message' =>'required'
   ]);

    $data=new ContactMassage();
    $data->name    = $request->name;
    $data->email   = $request->email;
    $data->subject = $request->subject;
    $data->message = $request->message;


    $data->save();
    return redirect()->route('contact')->with('success','Data Insert Successfully');
   


  } 
}
