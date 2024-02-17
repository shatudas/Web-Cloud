
@extends('front_end.layouts.index')
@section('home_page')

 <section class="section-bg" style="padding-top:0px;">
  <div class="container choose pt-5 py-5 mt-5 px-5" data-aos="fade-up">
   <div class="row">
    <div class="col-md-7 left_side">
     <h2 class="text-black">
      <b >Why Choose <br> {{ $choose->title }} </b>
     </h2>
     {!! $choose->discriptsion !!}
    </div>
    <div class="col-md-5 right_side">
     <div class="cover-image p-5"  style="">
      <img src="{{ !empty($choose->image)?url('upload/choose_image/'.$choose->image):url('frontend/image/chose_us/cover_Why_Choose.png') }}" class="img-fluid center animated">
     </div>
    </div>
   </div>
  </div>
 </section>


 <!-- =======Services Benefit ======= -->
 <section id="benefits" class="py-5" style="padding-top:0px;">
   <div class="container py-5">
    <div class="row">

      <div class="col-xl-4 benefits col-md-6 col-sm-6 d-flex align-items-stretch" data-aos="zoom-out" data-aos-delay="100">
       <div class="icon-box w-100">
        <h3 align="center"> 24x7x365 Support </h3>
        <span class="text-justify">Our experienced support team is ready to assist you 24/7/365. We provide prompt responses and expert solutions for all your needs. Get help anytime with our dedicated support team.</span>
       </div>
      </div>
      <div class="col-xl-4 benefits col-md-6 col-sm-6 d-flex align-items-stretch" data-aos="zoom-out" data-aos-delay="100">
       <div class="icon-box w-100">
        <h3 align="center">99.9% Up-Time Guarantee</h3>
        <span class="text-justify">We guarantee 99.9% uptime for all of our services, so you can rely on our hosting to keep your website running smoothly and reliably</span>
       </div>
      </div>
      <div class="col-xl-4 benefits col-md-6 col-sm-6 d-flex align-items-stretch" data-aos="zoom-out" data-aos-delay="100">
       <div class="icon-box w-100">
        <h3 align="center">One-Click Deploy</h3>
        <span class="text-justify">With our one click installer tool, you can create any type of website: blog, forum, E-commerce etc.</span>
       </div>
      </div>

    </div>
   </div>
 </section>
 <!-- =======End Services Benefit ======= -->

 
@endsection