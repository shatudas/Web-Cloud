@extends('front_end.layouts.index')
@section('home_page')

 <!-- ======= Hero Section ======= -->
 <section id="host" class="d-flex align-items-center" >
  <div class="container">
   <div class="row" >

    <div class="col-lg-6 d-flex flex-column justify-content-center pt-4 pt-lg-0 order-2 order-lg-1" data-aos="fade-up" data-aos-delay="200" >
     <h1> {{ $zimbramail->title }} </h1>
    </div>
    <div class="col-lg-6 order-1 order-lg-2 host-img d-none d-md-inline-block text-black" data-aos="zoom-in" data-aos-delay="200">
     <img src="{{ !empty($zimbramail->image)?url('upload/Cover_image/'.$zimbramail->image):url('frontend/image/cover_image/webmailcover.png') }}" class="img-fluid animated" alt="">
    </div>

   </div>
  </div>
 </section>
 <!-- ======= Hero Section ======= -->


 <!-- =======  package ======= -->
 <section  class="section-bg" style="padding-top:0px;">
  <div class="container mt-5 pt-0" data-aos="fade-up">
    
   <div class="section-title mb-4 pb-5" >
    <h1 class="serviceshrad" >Choose Zimbra mail</h1>
   </div>

   <div class="row">
    @foreach($PackageManage as $zimra)
     <div class="col-xl-3 col-md-4 col-sm-6 host-package1  d-flex align-items-stretch" data-aos="zoom-in" data-aos-delay="100">
       <div class="icon-box w-100 p-0 m-0">
        
        <div class=" host-package-head">
          <div class="w-100 py-2 name-body">
           <h3 class="text-justify package-name"><center><b> {{ $zimra->name }} </b></center></h3>
         </div>
         <div class="w-100 title_body">
          <h4 class="text-justify package-price">
            <center>
              <strong> ৳ </strong>
              <span> {{ $zimra->price }} </span>
              <small> / {{ $zimra->duration }} * </small>
            </center>
          </h4>
          <div class="mt-4 host-package-btn" align="center">
           <a href="{{ $zimra->url }}" class="btn btn-primary" title="Get Started">Get Started</a>
          </div>
        </div>
        </div>
         
        <div class="mt-3 host-package-body" align="left">
         <center><span class="title">Top Features</span></center>
         <ul class="icon-list-items p-2" style="list-style:none;">

          @php
          $feature = json_decode($zimra->fetures);
          @endphp

          @foreach($feature as $features)
          <li class="icon-list-item">
           <span class="icon-list-text"> {{ $features }} </span>
          </li>
          @endforeach

         </ul>
        </div>
       </div>
     </div>
    @endforeach
   </div>
  </div>
 </section>
 <!-- =======End package ======= -->

 <!-- =======Services Benefit ======= -->
  @if($PackageFeture->count() > 0)
  <section id="SMS_benefits" style="padding-top:0px;">
    <div class="container">

    <div class="section-title mb-0 py-5">
     <h1  class="domain_head"> Why choose InCom Clouds Zimbra Mail </h1>
    </div>
    
      <div class="row">

       @foreach($PackageFeture as $feture)
       <div class="col-xl-3 SMS_benefits col-md-6 col-sm-12 d-flex align-items-stretch" data-aos="zoom-out" data-aos-delay="100">
        <div class="icon-box w-100">
         <div class="row">
          <div class="col-12 pt-2" align="center">
           <img src="{{ url('upload/Package_Feature/'.$feture->image) }}" class="img-fluid center">
          </div>
          <div class="col-12">
           <h3> {{ $feture->title }} </h3>
           <span class="text-justify"> {{ $feture->detalis }} </span>
          </div>
         </div>
        </div>
       </div>
       @endforeach

      </div>

     </div>
    </div>
  </section>
  @endif
 <!-- ======= Feture Services  ======= -->

 
 <!-- ======= Package Services  ======= -->
 @if($PackageService->count() > 0)
 <section id="web_benefits" style="padding-top:0px;">
  <div class="container">
   <div class="row">

    @foreach($PackageService as $service)
    <div class="col-xl-6 web_benefits col-md-6 col-sm-12 d-flex align-items-stretch" data-aos="zoom-out" data-aos-delay="100">
     <div class="icon-box w-100">
      <div class="row">
       <div class="col-2 pt-3" align="center">
        <img src="{{ url('upload/Package_Service/'.$service->image) }}" class="img-fluid center" style="width:90%; height:auto;">
       </div>
       <div class="col-10">
        <h3> {{ $service->title }} </h3>
        <span class="text-justify">{{ $service->detalis }}  </span>
       </div>
      </div>
     </div>
    </div>
    @endforeach

   </div>
  </div>
 </section>
 @endif
 <!-- ======= End Package Services ======= -->


  <style type="text/css">
   #web_benefits{
    background-color:#FFFFF8;
   }
   .web_benefits{
    margin-top:20px;
   }
   .web_benefits .icon-box{
    background-color:none;
   }
   .web_benefits .icon-box img{
    padding:5px;
   }
   .web_benefits .icon-box  h3{
    font-family: "SF Pro Display","SF Pro Icons","Helvetica Neue","Helvetica","Arial",sans-serif;
    padding-top:20px;
    font-size:20px;
    color:#6D6E70;
    font-weight:600;
   } 
   .web_benefits .icon-box span{
    color:#6d6e70; 
    font-family: GB Museo Sans,Arial,Helvetica,sans-serif;
    font-size: 12;
    font-weight: 300;
    line-height: 1.5;
    text-rendering: optimizeLegibility;
   }
  </style>

@endsection