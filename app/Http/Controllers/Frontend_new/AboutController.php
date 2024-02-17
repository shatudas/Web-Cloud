<?php

namespace App\Http\Controllers\Frontend_new;

use App\Http\Controllers\Controller;
use Illuminate\Http\Request;
use App\model\About;
use App\model\genarelSetting;
use App\model\vision;
use App\model\mision;



class AboutController extends Controller
{
  public function about_page(){
   $data['about'] = About::first();
   $data['settingdata'] = genarelSetting::first();
   $data['visions'] = vision::first();
   $data['misions'] = mision::first();
  return view ('frontend.page.about',$data);
 }
}
