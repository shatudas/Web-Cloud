<?php

namespace App\Http\Controllers\Frontend_new;

use App\Http\Controllers\Controller;
use Illuminate\Http\Request;
use App\model\resellerHost;



class ResllerHostingController extends Controller
{
  public function resller_hosting(Request $request)
  {
  	$data['all_data']= resellerHost::where('status',0)->where('country',$request->country)->limit('4')->get();
    return view ('frontend.hosting.resller_hosting.resller_hosting',$data);
  }
}
