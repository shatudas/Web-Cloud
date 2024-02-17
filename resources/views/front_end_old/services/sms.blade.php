@extends('front_end.layouts.index')
@section('home_page')

  <!-- ======= Hero Section ======= -->
  <section id="host" class="d-flex align-items-center" >
   <div class="container-fluid">
    <div class="row" >

     <div class="col-lg-6 d-flex flex-column justify-content-center pt-4 pt-lg-0 order-2 order-lg-1" data-aos="fade-up" data-aos-delay="200" >
      <h1>{{ $SMS->title }}</h1>
     </div>
     <div class="col-lg-6 order-1 order-lg-2 host-img d-none d-md-inline-block text-black" data-aos="zoom-in" data-aos-delay="200">
      <img src="{{ !empty($VPS->image)?url('upload/Cover_image/'.$VPS->image):url('frontend/image/cover_image/bulk_sms_cover.png') }}" class="img-fluid animated" alt="">
     </div>

    </div>
   </div>
  </section>
  <!-- ======= Hero Section ======= -->


  <!-- ======= hositng package ======= -->
  @if($PackageMasking->count() > 0)
  <section  class="section-bg" style="padding-top:0px;">
   <div class="container mt-5 pt-0" data-aos="fade-up">

    <div class="section-title mb-0 py-5">
     <h1 class="domain_head"> Masking SMS Packages </h1>
     <p align="center" >Choose the right solution for your business. If you have any confusion to select packages, contact us. We will happy to help!
     </p>
    </div>

    <div class="row">


      @foreach($PackageMasking as $sms)  

      <div class="col-xl-3 col-md-4 col-sm-6 host-package1  d-flex align-items-stretch" data-aos="zoom-in" data-aos-delay="100">
       <div class="icon-box w-100 p-0 m-0">
        
        <div class=" host-package-head">
          <div class="w-100 py-2 name-body">
           <h3 class="text-justify package-name"><center><b> {{ $sms->name }} </b></center></h3>
         </div>
         <div class="w-100 title_body">
          <h4 class="text-justify package-price">
            <center>
              <strong> ৳ </strong>
              <span> {{ $sms->price }} </span>
              <small> / {{ $sms->duration }} * </small>
            </center>
          </h4>
          <div class="mt-4 host-package-btn" align="center">
           <a href="{{ $sms->url }}" class="btn btn-primary" title="Get Started">Get Started</a>
          </div>
        </div>
        </div>
         
        <div class="mt-3 host-package-body" align="left">
         <center><span class="title">Top Features</span></center>
         <ul class="icon-list-items p-2" style="list-style:none;">

          @php
          $feature = json_decode($sms->fetures);
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
  @endif
  <!-- =======End hositng package ======= -->


  <!-- ======= hositng package ======= -->
  @if($PackageNonMasking->count() > 0)
  <section  class="section-bg" style="padding-top:0px;">
   <div class="container" data-aos="fade-up">

    <div class="section-title mb-0 py-5">
     <h1 class="domain_head">  Non Masking SMS Packages  </h1>
     <p align="center" >Choose the right solution for your business. If you have any confusion to select packages, contact us. We will happy to help!
     </p>
    </div>
     
    <div class="row">
     @foreach($PackageNonMasking as $sms)
     <div class="col-xl-3 col-md-4 col-sm-6 host-package1  d-flex align-items-stretch" data-aos="zoom-in" data-aos-delay="100">
       <div class="icon-box w-100 p-0 m-0">
        
        <div class=" host-package-head">
          <div class="w-100 py-2 name-body">
           <h3 class="text-justify package-name"><center><b> {{ $sms->name }} </b></center></h3>
         </div>
         <div class="w-100 title_body">
          <h4 class="text-justify package-price">
            <center>
              <strong> ৳ </strong>
              <span> {{ $sms->price }} </span>
              <small> / {{ $sms->duration }} * </small>
            </center>
          </h4>
          <div class="mt-4 host-package-btn" align="center">
           <a href="{{ $sms->url }}" class="btn btn-primary" title="Get Started">Get Started</a>
          </div>
        </div>
        </div>
         
        <div class="mt-3 host-package-body" align="left">
         <center><span class="title">Top Features</span></center>
         <ul class="icon-list-items p-2" style="list-style:none;">

          @php
          $feature = json_decode($sms->fetures);
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
  @endif
  <!-- =======End hositng package ======= -->


  <!-- ===== Feture Benefit ======= -->
  @if($PackageFetureMasking->count() > 0)
  <section id="SMS_benefits" style="padding-top:0px;">
   <div class="container">

    <div class="section-title mb-0 py-5">
     <h1  class="serviceshrad"> Explore even more benefits of Microsoft 365  </h1>
    </div>
     
    <div class="row">
     @foreach($PackageFetureMasking as $feture)
     <div class="col-xl-4 SMS_benefits col-md-6 col-sm-12 d-flex align-items-stretch" data-aos="zoom-out" data-aos-delay="100">
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
  </section>
  @endif


 <!-- ======= Services  ======= -->
 @if($PackageServiceNonMasking->count() > 0)
 <section id="web_benefits" style="padding-top:0px;">
  
  <div class="section-title mb-0 py-5" data-aos="zoom-out" data-aos-delay="100">
    <h1  class="domain_head"> Essential Seivice </h1>
   </div>

   <div class="container">
    <div class="row">
     @foreach($PackageServiceNonMasking as $service)
     <div class="col-xl-6 web_benefits col-md-6 col-sm-12 d-flex align-items-stretch" data-aos="zoom-out" data-aos-delay="100">
      <div class="icon-box w-100">
       <div class="row">
        <div class="col-3 pt-3" align="center">
         <img src="{{ url('upload/Package_Service/'.$service->image) }}" class="img-fluid center" style="width:90%; height:auto;">
        </div>
        <div class="col-9">
         <h3> {{ $service->title }} </h3>
         <span class="text-justify"> {{ $service->detalis }} </span>
        </div>
       </div>
      </div>
     </div>
     @endforeach
    </div>
   </div>
 </section>
 @endif



@endsection