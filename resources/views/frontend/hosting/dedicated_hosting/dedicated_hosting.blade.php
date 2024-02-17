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
      <a href="{{ route('dedicated_server_hosting',['country' => 0]) }}">
      <div class="features-box-active p-2">
       <div class="features-box-icon mb-2">
        <span class="flag">
         <h6> <img src="{{ asset('frontend') }}/assets/img/bangladesh.png" alt=""> Server BD</h6>
        </span>
       </div>
      </div>
      </a>
     </div>

     <div class="col-md-6 col-lg-3 mt-4 text-center">
      <a href="{{ route('dedicated_server_hosting',['country' => 1]) }}">
      <div class="features-box-active p-2">
       <div class="features-box-icon mb-2">
        <span class="flag">
         <h6> <img src="{{ asset('frontend') }}/assets/img/india.jpg" alt=""> Server India</h6>
        </span>
       </div>
      </div>
      </a>
     </div>

     <div class="col-md-6 col-lg-3 mt-4 text-center">
      <a href="{{ route('dedicated_server_hosting',['country' => 2]) }}">
      <div class="features-box-active p-2">
       <div class="features-box-icon mb-2">
        <span class="flag">
         <h6> <img src="{{ asset('frontend') }}/assets/img/singapore.png" alt=""> Server SG</h6>
        </span>
       </div>
      </div>
      </a>
     </div>



    </div>
   <!-- server location section end -->

   @if(count($all_data) > 0)

    <div class="row align-items-center justify-content-md-center justify-content-center">
     <div class="col-12">
      <div class="price-packages-horizontal">
       <div class="price-package-body">
                                
        <a href="#" class="single-price-package price-packages-pack">
         <div class="package_header">
          <div class="package_name">
           <h3 class="h5 mb-0">CPU</h3>
          </div>
          <div class="package_icon">
           <i class=""></i>
          </div>
         </div>
         
         <div class="package_body package_body-horizontal">
          <ul class="package_list">
           <li class="list-item">
            <span class="list-item-name">Core</span>
           </li>
           <li class="list-item">
            <span class="list-item-name">Storage</span>                                  
           </li>
           <li class="list-item">
            <span class="list-item-name">Ram</span>
           </li>
           <li class="list-item">
            <span class="list-item-name">Bandwidth</span>
           </li>
          </ul>
         </div>
         
         <div class="package_footer">
          <div class="package-price">
           <h5 class="price-value mb-0">Price</h5>
          </div>
         </div>
        </a>

        @foreach($all_data as $data)

        <a href="{{ $data->url }}" class="single-price-package price-packages-pack">
         <div class="package_header">
          <div class="package_name">
           <h3 class="h5 mb-0">{{ $data->cpu }}</h3>
          </div>
         </div>
         <div class="package_body package_body-horizontal">
          <ul class="package_list">
           <li class="list-item">
            <span class="list-item-name">{{ $data->core }}</span>
           </li>
           <li class="list-item">
            <span class="list-item-name">{{ $data->storage }}</span>
           </li>
           <li class="list-item">
            <span class="list-item-name">{{ $data->ram }}</span>
           </li>
           <li class="list-item">
            <span class="list-item-name">{{ $data->bandwidth }}</span>
           </li>
          </ul>
         </div>

         <div class="package_footer">
          <div class="package-price">
           <h5 class="price-value mb-0">${{ $data->price }}<span class="price-tax">/mo</span></h5>
           <p></p>
          </div>
          <div class="package-actions mt-2">
           <span class="btn btn-brand-02 btn-sm btn-block">Buy Now</span>
          </div>
         </div>
        </a>

        @endforeach

      
      </div>
     </div>
     </div>
    </div>

   @endif



   </div>
  </section>
  <!--pricing section end-->

  <section class="ptb-60 home-support-area">
   <div class="container">
    <div class="row align-items-center justify-content-between">

     <div class="col-12 col-lg-6">
      <div class="cta-content-wrap text-white">
       <h2 class="text-white">24/7 Support Services</h2>
       <p>Our 24/7 support services are always available to provide timely assistance to our customers, no matter the time or location. With our round-the-clock support, customerscan trust that we are always there to help them with any issues they may encounter.</p>
      </div>

      <div class="support-action d-inline-flex flex-wrap">
       <a href="mailto:support@incomcloud.com" class="mr-3">
        <i class="fas fa-comment mr-1 custom-icon-color-2"></i>
        <span>incomcloud.com</span>
       </a>
       <a href="tel:+88 09611403403" class="mb-0">
        <i class="fas fa-phone-alt mr-1 custom-icon-color-2"></i>
        <span>+88 09611403403</span>
       </a>
      </div>
    
     </div>

     <div class="col-md-6 col-lg-4 d-none d-lg-block">
      <div class="cta-img-wrap text-center">
       <img src="{{ asset('frontend') }}/assets/img/Service%2024_7-pana.png" width="250" class="img-fluid" alt="server room">
      </div>
     </div>
               
    </div>
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
         <h5>Secured by the best</h5>
         <p class="mb-0">Secured by the best technology This suggests that a particular system or setup is protected using top-notch technological solutions for security.</p>
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
	        <h5>Free SSL Certificate</h5>
	        <p class="mb-0"> issued by reputable Certificate Authorities (CAs) to guarantee their authenticity securing your website or online services </p>
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
	        <h5>24/7 Support</h5>
	         <p class="mb-0">Provide 24/7 support to ensure their customers can get timely assistance with any issues, questions, or concerns.</p>
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
	        <h5>Money back guarantee</h5>
	        <p class="mb-0">We couldn't satisfy you with our service. That's Sad! But don't worry, we provide an easy money-back guarantee.
	        </p>
	       </div>
	      </div>
	     </div>
	    </div>

    </div>

    <div class="row justify-content-md-center justify-content-sm-center">
     
     <div class="col-md-6 col-lg-3">
      <div class="card single-promo-card single-promo-hover mt-2">
       <div class="card-body">
        <div class="feature-icon">
         <img src="{{ asset('frontend') }}/assets/img/gmh%20icon/uptime.png" alt="">
        </div>
        <div class=" pb-3">
         <h5>99.99% uptime</h5>
         <p class="mb-0">Our finest servers are always ready to serve you with full capacity. So you are always online without any hastle!</p>
        </div>
       </div>
      </div>
     </div>

     <div class="col-md-6 col-lg-3">
      <div class="card single-promo-card single-promo-hover mt-2">
       <div class="card-body">
        <div class="feature-icon">
         <img src="{{ asset('frontend') }}/assets/img/gmh%20icon/bandwidth.png" alt="">
        </div>
        <div class="pt-2 pb-3">
         <h5>Premium Bandwidth</h5>
         <p class="mb-0">To ensure dependable, steady, and optimal performance, we leverage top-tier bandwidth.</p>
        </div>
       </div>
      </div>
     </div>

     <div class="col-md-6 col-lg-3">
      <div class="card single-promo-card single-promo-hover mt-2">
       <div class="card-body">
        <div class="feature-icon">
         <img src="{{ asset('frontend') }}/assets/img/gmh%20icon/ddos.png" alt="">
        </div>
        <div class=" pb-3">
         <h5>DDoS protected</h5>
         <p class="mb-0">Our servers are protected from any kind of unwanted traffic. So Don't worry about cyber attacks, we got you covered!</p>
        </div>
       </div>
      </div>
     </div>

     <div class="col-md-6 col-lg-3">
      <div class="card single-promo-card single-promo-hover mt-2">
       <div class="card-body">
        <div class="feature-icon">
         <img src="{{ asset('frontend') }}/assets/img/gmh%20icon/relax.png" alt="">
        </div>
        <div class=" pb-3">
         <h5>Cheap and hassle free</h5>
         <p class="mb-0">"intuitive platform": user-centric platform, straightforward interface, easy-to-use system.</p>
        </div>
       </div>
      </div>
     </div>
    
    </div>

   </div>
  </section>




	</div>




@endsection