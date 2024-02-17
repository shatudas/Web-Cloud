<?php

namespace App\Http\Controllers\Frontend_new;

use App\Http\Controllers\Controller;
use Illuminate\Http\Request;
use App\model\FAQ;

class FAQController extends Controller
{
 
  public function faq_page(){
   $data['faq']= FAQ::where('status','0')->orderBy('id','asc')->get();
   return view ('frontend.page.FAQ',$data);
  }

}
