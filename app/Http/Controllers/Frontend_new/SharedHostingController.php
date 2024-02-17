<?php

namespace App\Http\Controllers\Frontend_new;

use App\Http\Controllers\Controller;
use Illuminate\Http\Request;
use App\model\WebHosting;

class SharedHostingController extends Controller
{
	
  public function shared_hosting(Request $request)
  {
			 $data['all_data']= WebHosting::where('status',0)->where('country',$request->country)->get();
			 return view ('frontend.hosting.shared_hosting.shared_hosting',$data);
			}
}

