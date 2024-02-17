
@extends('front_end.layouts.index')
@section('home_page')

 <!---===== Cover ====--->
 <section class="section-bg about-us" style="padding-top:0px; background-color: #FFFFF6;">
  <div class="container-xxl py-5 mt-5 px-5 wow fadeInUp" data-wow-delay="0.1s">
   <div class="row">

    <div  class="col-md-5 pt-5 mt-5 imageDiv">
     <img src="{{ !empty($about->image)?url('upload/about_image/'.$about->image):url('frontend/image/about/AboutUs.png') }}" class="img-fluid">
    </div>      
    <div class="col-md-7 p-5 aboutBody">
     <h2 class="py-5">{{ $about->title }}</h2>
     {!! $about->discriptsion !!}
    </div>
   </div>
  </div>
 </section>
 <!---===== Cover ===--->

 <!---==== contact body ====--->
 <section id="web-package pt-0 mt-5" style="background-color:#FFFFF8;">
  <div class="container-fluid mt-5 pt-0" data-aos="fade-up" >

   <div class="section-title">
    <h3 class="text-black">Enjoy the best in benefits.</h3>
   </div>

   <div class="row">

    <div class="col-xl-4 col-md-4 col-sm-6 web-package d-flex align-items-stretch" data-aos="zoom-in" data-aos-delay="100">
     <div class="p-4 w-100">
      <div class="mt-2 web-package-head">
       <h3 class="text-justify"><center>All-in-one dashboard</center></h3>
       <p>Everything you need to build a stunning website from one easy-to-access location.</p>
      </div>
     </div>
    </div>

    <div class="col-xl-4 col-md-4 col-sm-6 web-package mb-3 d-flex align-items-stretch" data-aos="zoom-in" data-aos-delay="100">
     <div class="p-2 w-100">
      <div class="mt-4 web-package-head">
       <h3 class="text-justify"><center>Fast, reliable performance</center></h3>
       <p>Give your website the speed and reliability your blog or business visitors expect.</p>
      </div>
     </div>
    </div>

    <div class="col-xl-4 col-md-4 col-sm-6 web-package mb-3 d-flex align-items-stretch" data-aos="zoom-in" data-aos-delay="100">
     <div class="p-4 w-100">
      <div class="mt-2 web-package-head">
       <h3 class="text-justify"><center>Best themes and plugins</center></h3>
       <p>Choose from a variety of themes and plugins to boost your website’s style and function.</p>
      </div>
     </div>
    </div>

   </div>
  </div>
 </section>
 <!---==== End contact body ====--->

@endsection