@extends('frontend.layouts.index')
@section('home_page')

	<div class="main">

		<!--hero section start-->
  <section class="gradient-bg">
   <div class="container">
    <div class="row align-items-center justify-content-between">

     <div class="col-md-7 col-lg-6">
      <div class="hero-content-wrap text-white">
       <h1 class="text-white">Experience Shared Hosting: Speedy, Protected, and User-Friendly</h1>
       <p class="lead">Simplified and Cost-effective Web Hosting Solutions for Both Personal and Business Websites.</p>
      <a href="#" class="btn btn-brand-69 btn-lg">Get Start Now</a>
      </div>
     </div>

     <div class="col-md-5 col-lg-6">
      <div class="img-wrap hero-img mt-5 pt-5">
       <img src="{{ asset('frontend') }}/assets/img/Server-amico%20(1).png" alt="vps image" class="img-fluid">
      </div>
     </div>
    
    </div>
   </div>
  </section>


  <!--pricing section start-->
  <section id="pricing" class="pricing-section ptb-40 ">
   <div class="container">

    <div class="row justify-content-center" id="pack-hosting">
     <div class="col-md-9 col-lg-8">
      <div class="section-heading text-center mb-4">
       <h2>Choose Your Dedicated Server Plan</h2>
      </div>
     </div>
    </div>

    <!-- server location section start -->
    <div class="row justify-content-center pb-5">

     <div class="col-md-6 col-lg-3 mt-4 text-center">
      <a href="{{ route('vps_hosting',['country' => 0]) }}">
      <div class="features-box-active p-2">
       <div class="features-box-icon mb-2">
        <span class="flag">
         <h6> <img src="{{ asset('frontend') }}/assets/img/bangladesh.png" alt=""> VPS BD</h6>
        </span>
       </div>
      </div>
      </a>
     </div>

     <div class="col-md-6 col-lg-3 mt-4 text-center">
      <a href="{{ route('vps_hosting',['country' => 1]) }}">
      <div class="features-box-active p-2">
       <div class="features-box-icon mb-2">
        <span class="flag">
         <h6> <img src="{{ asset('frontend') }}/assets/img/india.jpg" alt=""> VPS India</h6>
        </span>
       </div>
      </div>
      </a>
     </div>

     <div class="col-md-6 col-lg-3 mt-4 text-center">
      <a href="{{ route('vps_hosting',['country' => 2]) }}">
      <div class="features-box-active p-2">
       <div class="features-box-icon mb-2">
        <span class="flag">
         <h6> <img src="{{ asset('frontend') }}/assets/img/singapore.png" alt=""> VPS SG</h6>
        </span>
       </div>
      </div>
      </a>
     </div>

    </div>
   <!-- server location section end -->


    @if(count($all_data) > 0)

     <div class="row">
      <div class="col-lg-12 col-md-12 col-sm-12 col-xs-12">
       <table class="table vps-hosting-pricing-table">
        
        <thead class="bg-red text-white">
         <tr>
          <th>VCPU</th>
          <th>Ram</th>
          <th>Clock speed</th>
          <th>Storage</th>
          <th>Bandwidth</th>
          <th colspan="2">Price</th>
         </tr>
        </thead>

        <tbody>
         @foreach($all_data as $data)

          <tr class="vps-pricing-row gray-light-bg">
           <td data-value="VCPU">{{ $data->cpu }} vCPU</td>
           <td data-value="Ram">{{ $data->ram }} 2GB</td>
           <td data-value="CPU Power">
            <span>{{ $data->speed }}GHz<span class="cpu-core">{{ $data->cpu }} core</span></span>
           </td>
           <td data-value="Storage">{{ $data->storage }} GB</td>
           <td data-value="Bandwidth">{{ $data->bandwidth }}GB</td>
           <td data-value="Price">
            <p class="mb-0">
             <span class="rate">${{ $data->price }}<span>/month</span></span>
            </p>
           </td>
           <td>
            <a href="{{ $data->url }}" target="_blank" class="btn btn-brand-01 btn-xs">Order Now</a>
           </td>
          </tr>
       
         @endforeach
        </tbody>

       </table>
      </div>
     </div>

    @endif

   </div>
  </section>


  <!--promo section start-->
  <section class="promo-section gray-light-bg mb-5">
   <div class="container-custom">
    
    <div class="row justify-content-center">
     <div class="col-md-10 col-lg-7">
      <div class="section-heading text-center">
       <h2 class="py-5">Why We Are Special</h2>
      </div>
     </div>
    </div>

    <div class="row justify-content-md-center justify-content-sm-center">
     
     <div class="col-md-6 col-lg-3">
      <div class="card single-promo-card single-promo-hover mt-2">
       <div class="card-body">
        <div class="feature-icon">
         <img src="{{ asset('frontend') }}/assets/img/gmh%20icon/secured.png" alt="">
        </div>
        <div class="pb-3">
         <h5>Root Access</h5>
         <p class="mb-0">Our Cloud SSD VPS Hosting packages allow complete control, thanks to On Demand granted access to the root user of the Operating System!</p>
        </div>
       </div>
      </div>
     </div>
    
	    <div class="col-md-6 col-lg-3">
	     <div class="card single-promo-card single-promo-hover mt-2">
	      <div class="card-body">
	       <div class="feature-icon">
	        <img src="{{ asset('frontend') }}/assets/img/gmh%20icon/ssl.png" alt="">
	       </div>
	       <div class="pb-3">
	        <h5>Easy Controls</h5>
	        <p class="mb-0"> We want to make it simple to manage the server, so we provide CyberPanel, cPanel, Webuzo, DirectAdmin and Plesk control panels as per your preference. </p>
	       </div>
	      </div>
	     </div>
	    </div>

	    <div class="col-md-6 col-lg-3">
	     <div class="card single-promo-card single-promo-hover mt-2">
	       <div class="card-body">
	        <div class="feature-icon">
	         <img src="{{ asset('frontend') }}/assets/img/gmh%20icon/support.png" alt="">
	        </div>
	        <div class=" pb-3">
	        <h5>99.9% Uptime</h5>
	         <p class="mb-0">Cloud-powered VPS Hosting for optimal uptime and no hardware failures! SSD powered Storage for fastest read/write times!</p>
	        </div>
	       </div>
	     </div>
	    </div>

	    <div class="col-md-6 col-lg-3">
	     <div class="card single-promo-card single-promo-hover mt-2">
	      <div class="card-body">
	       <div class="feature-icon">
	        <img src="{{ asset('frontend') }}/assets/img/gmh%20icon/money%20back.png" alt="">
	       </div>
	       <div class=" pb-3">
	        <h5>24/7 Support</h5>
	        <p class="mb-0">24 hours, 7 days a week or 365 days a year, doesn't matter, our expert support team will be always there for you.
	        </p>
	       </div>
	      </div>
	     </div>
	    </div>

    </div>



   </div>
  </section>


	</div>




@endsection