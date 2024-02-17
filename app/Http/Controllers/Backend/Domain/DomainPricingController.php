<?php

namespace App\Http\Controllers\Backend\Domain;

use App\Http\Controllers\Controller;
use Illuminate\Http\Request;
use App\model\DomainCategory;
use App\model\DomainPricing;
use Auth;
use image;

class DomainPricingController extends Controller
{
 
  //----auth------//
	 public function __construct()
	 {
	  $this->middleware('auth');
	 }

	 //-----view------//
	 public function view()
	 {
	  $data['alldata'] = DomainPricing::all();
	  return view('backend.domain.domainPricing.view-domain-pricing',$data); 
	 }
  
  //----auth------//
  public function add()
   {
    $data['pakage'] = DomainCategory::where('status','0')->get();
    return view('backend.domain.domainPricing.add-domain-pricing',$data); 
   }

  //----store------//
  public function store(Request $request)
  {   
	  $this->validate($request,[
		 'category_id'       =>'required',
		 'price'             =>'required',
		 'transferprice'     =>'required',
		 'renewalprice'      =>'required',
	  ]);

		 $data=new DomainPricing();
		 $data->category_id        = $request->category_id;
		 $data->price              = $request->price;
		 $data->transferprice      = $request->transferprice;
		 $data->renewalprice       = $request->renewalprice;
		 $data->created_by         = Auth::user()->id;

			$data->save();
			return redirect()->route('domain.pricing.view')->with('success','Data Upload Successfully');
  }

  //------edit------//
  public function edit($id)
	  {
	   $data['alldata'] = DomainCategory::where('status','0')->get();
	   $data['editdata'] = DomainPricing::find($id);
	   return view('backend.domain.domainPricing.edit-domain-pricing',$data);
	  }

  //------update-------//
  public function update(Request $request,$id)
   {
    $this->validate($request,[
			 'category_id'       =>'required',
			 'price'             =>'required',
			 'transferprice'     =>'required',
			 'renewalprice'      =>'required',
			 
		  ]);

    $data =DomainPricing::find($id);
    $data->category_id        = $request->category_id;
			 $data->price              = $request->price;
			 $data->transferprice      = $request->transferprice;
			 $data->renewalprice       = $request->renewalprice;
    $data->updated_by         = Auth::user()->id;

    $data->save();
    return redirect()->route('domain.pricing.view')->with('success','data Update Successfully');
   }

      
  //------delete-------//
		public function delete($id)
	  {
	   $data = DomainPricing::find($id); 
		  $data->delete();
		  return redirect()->route('domain.pricing.view')->with('error','Data Deleted Successfully');
	  }

}
