<?php

namespace App\Http\Controllers\FrontEnd;

use App\Http\Controllers\Controller;
use Illuminate\Http\Request;
use App\model\service_committed;
use App\model\genarelSetting;
use App\model\servicesmanage;
use App\model\PackageManage;
use App\model\DomainCategory;
use App\model\Cover;
use App\model\Service;
class homeController extends Controller
{
 
 //------home------//
 public function homemethod()
  {

   $data['setting'] =genarelSetting::first();
   $data['home_cover']= Cover::first();
   $data['domain']= DomainCategory::where('status','0')->orderBy('id','asc')->limit('4')->get();
   $data['committment']= service_committed::where('status','0')->orderBy('id','asc')->limit('4')->get();
   $data['service']= Service::where('status','0')->get();

 	 return view ('frontend.layouts.home',$data);
  }


 //  public function webCategory($data){
 //   if (isset($data)){
 //    $page_data = $data;
 //    return view ('frontend.services.webCategory',compact('page_data'));
 //   }
 //   else{
 //    return redirect()->back();
 //  }
 // }

 // public function websinglepage($data){
 //   if (isset($data)){
 //    $page_data = $data;
 //    return view ('frontend.services.webSinglePage',compact('page_data'));
 //   }
 //   else{
 //    return redirect()->back();
 //  }



 // }







 


}
