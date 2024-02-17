<?php

namespace App\Http\Controllers\Frontend_new;

use App\Http\Controllers\Controller;
use Illuminate\Http\Request;
use App\model\Dedicated_host;


class DedicatedServerController extends Controller
{  
 public function dedicated_server_hosting(Request $request)
  {

	 $data['all_data']= Dedicated_host::where('status',0)->where('country',$request->country)->get();
	 return view ('frontend.hosting.dedicated_hosting.dedicated_hosting',$data);
  
 }
}

