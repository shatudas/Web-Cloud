@extends('frontend.layouts.index')
@section('home_page')


<div class="main">
  
  <!--page header section start-->
  <section class="ptb-120 gradient-bg">
   <div class="container">
    <div class="row justify-content-center">
     <div class="col-md-7 col-lg-8">
      <div class="hero-content-wrap text-white text-center position-relative">
       <h1 class="text-white pt-md-5">About Us</h1>
      </div>
     </div>
    </div>
   </div>
  </section>
  <!--page header section end-->


  <!--privacy policy start-->
 <section class="privacy-policy ptb-100">
  <div class="container">
   <div class="row">
    <div class="col-md-12 col-lg-12">
    	<div class="row">

    		<div class="col-lg-6 col-sm-12">
    			<div class="section-heading">
        <h3>About Us</h3>
       </div>
       <div class="pt-5">
        <h4 class="pb-4">{{ $about->title }}</h4>
        <p style="text-align: justify;">{!! $about->discriptsion !!}</p>
       </div>
    	 </div>

    		<div class="col-lg-6 col-sm-12" align="center">
    			<img src="{{ !empty($about->image)?url('upload/about_image/'.$about->image):url(' asset(frontend//assets/image/about.png)') }}" alt="about-us" class="img-fluid" style="justify-content:center;  align-items: center;">
    		</div>

    	</div>
    </div>
   </div>
  </div>
 </section>


 <section class="pricing-section ptb-50" id="homeGo">
   <div class="container">
    
    <div class="row justify-content-center">
     <div class="col-md-9 col-lg-8">
      <div class="section-heading text-center mb-4">
       <h2>InComCloud Services</h2>
      </div>
     </div>
    </div>

    <div class="row align-items-center justify-content-md-center justify-content-center">
                    
     <div class="col-lg-3 col-md-6 col-sm-8">
      <div class="text-center bg-white single-pricing-pack-2 mt-4 rounded border">
       <div class="pricing-icon custom-icon-color">
        <img src="{{ asset('frontend') }}/assets/image/web_hosting.png" width="60" alt="hosing">
       </div>
       <h4 class="package-title">Web Hosting</h4><br>
       <div class="pricing-price pt-4">
        <small>Starting at</small>
        <div class="h2 my-2">$3.00 <span class="price-cycle h4">/mo</span></div>
       </div>
       <a href="{{ route('shared_hosting','usa') }}" class="btn btn-brand-01">Get Started</a>
  
      </div>
     </div>

     <div class="col-lg-3 col-md-6 col-sm-8">
      <div class="text-center bg-white single-pricing-pack-2 mt-4 rounded border">
       <div class="pricing-icon custom-icon-color">
        <img src="{{ asset('frontend') }}/assets/image/resller_web.png" width="60" alt="hosing">
       </div>
       <h4 class="package-title">Reseller Hosting</h4><br>
        <div class="pricing-price pt-4">
         <small>Starting at</small>
         <div class="h2 my-2">$11.00 <span class="price-cycle h4">/mo</span></div>
        </div>
       <a href="{{ route('resller_hosting','usa') }}" class="btn btn-brand-01">Get Started</a>
      </div>
     </div>

     <div class="col-lg-3 col-md-6 col-sm-8">
      <div class="popular-price text-center bg-white single-pricing-pack-2 mt-4 rounded border">
       <div class="pricing-icon">
        <img src="{{ asset('frontend') }}/assets/image/vps.png" width="60" alt="hosing">
       </div>
       <h4 class="package-title">Virtual Private Server</h4>
       <div class="pricing-price pt-4">
        <small>Starting at</small>
        <div class="h2 my-2">$9.00 <span class="price-cycle h4">/mo</span></div>
       </div>
       <a href="{{ route('vps_hosting','usa') }}" class="btn btn-brand-01">Get Started</a>
      </div>
     </div>

     <div class="col-lg-3 col-md-6 col-sm-8">
      <div class="text-center bg-white single-pricing-pack-2 mt-4 rounded border">
       <div class="pricing-icon">
        <img src="{{ asset('frontend') }}/assets/image/dadicated_server.png" width="60" alt="hosing">
       </div>
       <h4 class="package-title">Dedicated Server</h4><br>
        <div class="pricing-price pt-4">
        <small>Starting at</small>
        <div class="h2 my-2">$120.00<span class="price-cycle h4">/mo</span></div>
        </div>
       <a href="{{ route('dedicated_server_hosting','usa') }}" class="btn btn-brand-01">Get Started</a>
      </div>
     </div>
                    
    </div>
   </div>
 </section>


 <section class=" ptb-100 gray-light-bg mt-3">
  <div class="container-custom">
   <div class="row justify-content-center">
    <div class="col-md-6 col-lg-6">
     <div class="section-heading text-center">
      <h2 class="pb-3">InCom Cloud Vision</h2>
      <p class="text-justify px-4">{!! $visions->discriptsion !!}</p>
     </div>
    </div>
    <div class="col-md-6 col-lg-6">
     <div class="section-heading text-center">
      <h2 class="pb-3">InCom Cloud Mision</h2>
      <p  class="text-justify px-4">{!! $misions->discriptsion !!}.</p>
     </div>
    </div>
   </div>
  </div>
 </section>


@endsection