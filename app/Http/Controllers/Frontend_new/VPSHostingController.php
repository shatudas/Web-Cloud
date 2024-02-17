<?php

namespace App\Http\Controllers\Frontend_new;

use App\Http\Controllers\Controller;
use Illuminate\Http\Request;
use App\model\VPS;
class VPSHostingController extends Controller
{
 public function vps_hosting(Request $request)
  {
   $data['all_data']= VPS::where('status',0)->where('country',$request->country)->get();
   return view ('frontend.hosting.VPS_hosting.VPS_hosting',$data);

  }
    
}
