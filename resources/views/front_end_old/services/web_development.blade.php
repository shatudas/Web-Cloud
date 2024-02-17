@extends('front_end.layouts.index')
@section('home_page')


 <!-- ======= Hero Section ======= -->
 <section class="d-flex align-items-center m-0" >
  <div class="container">
   <div class="row">

    <div class="col-lg-6 d-flex flex-column justify-content-center" data-aos="fade-up" data-aos-delay="200" >
     <h1  align="center" class="p-5 mt-5"> <b>{{ $web->title }}</b> </h1>
    </div>
    <div class="col-lg-6 order-1 order-lg-2 host-img" data-aos="zoom-in" data-aos-delay="200">
     <img src="{{ !empty($VPS->image)?url('upload/Cover_image/'.$VPS->image):url('frontend/image/cover_image/Web-Developer-skill.png') }}" class="img-fluid animated" alt="">
    </div>

   </div>
  </div>
 </section>
 <!-- ======= Hero Section ======= -->


 <!--======Web Content-======---->
 <section class="d-flex align-items-center m-0 bg-light" >
  <div class="container">
   <div class="row" >

    @foreach($Webcontent as $key => $value)
    @if($key % 2 == 0)

    <div class="col-lg-6 " data-aos="zoom-in" data-aos-delay="200">
     <img src="{{ url('upload/web_image/'.$value->image) }}" class="img-fluid animated" alt="">
    </div>

    <div class="col-lg-6  d-flex flex-column justify-content-center" data-aos="fade-up" data-aos-delay="200" >
     <h2  align="center" class="p-3" ><b>{{ $value->title }}</b></h2>
     <p>{{ $value->discriptsion }}</p>
    </div>

    @else

     <div class="col-lg-6 d-flex flex-column justify-content-center " data-aos="fade-up" data-aos-delay="200" >
      <h2  align="center" class="p-3" > <b>{{ $value->title }}</b> </h2>
      <p>{{ $value->discriptsion }}</p>
     </div>

     <div class="col-lg-6 " data-aos="zoom-in" data-aos-delay="200">
       <img src="{{ url('upload/web_image/'.$value->image) }}" class="img-fluid animated" alt="">
     </div>
    @endif

    @endforeach

   </div>
  </div>
 </section>
 <!--======End Web Content-======---->


 <!----======Support-======---->
 <section id="support">
  <div class="container">
   <div class="row">
    <div class="col-xl-1 col-lg-1"></div>

    <div class="col-xl-10 col-lg-10  col-md-12 col-sm-12 d-flex support" data-aos="zoom-out" data-aos-delay="100" >
     <div class="icon-box py-5 w-100 bg-black" align="center">
      <h3 align="center" class="text-white pb-2">24/7 Support</h3>
      <h4 class="text-justify text-white px-3">Let us help you choose the right Services for your needs.</h4>
      <a href="tel:{{ $settingdata->phone }}" class="btn btn-lg">Call: {{ $settingdata->phone }}</a><br><br>
      <a href="mailto:{{ $settingdata->email }}" class="btn2 btn-lg">Mail: {{ $settingdata->email }}</a><br><br>
      <h5 class="text-white"> Request a <a href="tel:{{ $settingdata->phone }}">Call Back</a> or <a href="https://www.facebook.com/incomitbd" target="_blank">Chat Now</a></h5>
     </div>
    </div>

   </div>
  </div>
 </section>
 <!--======End Support-======---->

 
@endsection