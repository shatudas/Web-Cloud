@extends('frontend.layouts.index')
@section('home_page')

 <div class="main">


  <!--hero section start-->
  <section class="ptb-100 overflow-hidden custom-hero-area">
   <div class="container">
    <div class="row align-items-center justify-content-lg-between justify-content-md-center justify-content-sm-center">
     
     <div class="col-md-12 col-lg-6">
      <div class="hero-slider-content text-white py-5">
       <div class="headline mb-4">
        <p class="mb-0">
        	<i class="fas fa-bell rounded-circle mr-2"></i>
        	<span class="font-weight-bold">{{ $home_cover->notification }}</span> 
        </p>
       </div>
       <h1 class="text-white">{{ $home_cover->title }}</h1>
       <p class="lead">{!! $home_cover->sub_title !!}</p>
       <div class="row">
        <div class="action-btns mt-4 mr-4">
         <a href="#" class="btn btn-brand-03 btn-md">Get Started </a>
        </div>
        <div class="action-btns mt-4">
         <a href="https://www.facebook.com/incomitbd" target="_blank" class="btn btn-brand-69 btn-md">Live Chat</a>
        </div>
       </div>
      </div>
     </div>
     
     <div class="col-md-6 col-sm-12 col-lg-6">
      <div class="img-wrap">
       <img src="{{ !empty($home_cover->image)?url('upload/Image/Home_Cover/'.$home_cover->image):url('assets/image/Cloud_hosting_cuate.png') }}" alt="hosting" class="img-fluid">
      </div>
     </div>

    </div>     
   </div>  
  </section>
  <!--hero section end-->


  <!--domain search promo start-->
  <section class="position-relative zindex-2">
   <div class="container">
    <div class="row justify-content-center">
     <div class="col-md-9 col-lg-8 col-12">

      <div class="domain-search-wrap border gray-light-bg">
       <h4 class="text-center">SEARCH YOUR DOMAIN NOW!</h4>
        <form action="#" method="post" class="domain-search-form my-4">
         <input type="text" name="query" size="30" class="form-control"placeholder="domain.com"/>
         <div class="select-group">                       
          <button type="submit" class="btn btn-search">
           <i class="fas fa-search pr-1"></i>Search
          </button>
         </div>
        </form>
        <div class="domain-list-wrap text-center">
         <ul class="list-inline domain-search-list">
          
          @foreach($domain as $domain_daata)
          <li class="list-inline-item bg-white border rounded">
          	<a href="#">
          	 <img src="{{url('upload/domain/'.$domain_daata->image)}}" alt="com" width="70" class="img-fluid">
            <span>$ {{ $domain_daata['Domainprice']['price'] }}</span>
           </a>
          </li>
          @endforeach()
         
         </ul>
        </div>
      </div>

     </div>
    </div>
   </div>
  </section>
       

  <!--pricing section start-->
  <section class="pricing-section ptb-100" id="homeGo">
   <div class="container">
    
    <div class="row justify-content-center">
     <div class="col-md-9 col-lg-8">
      <div class="section-heading text-center mb-4">
       <h2>Flexible & Dynamic Pricing Model.</h2>
       <p>High-quality hosting at a budget-friendly price. Find the optimal package tailored to your preferences.</p>
      </div>
     </div>
    </div>

    <div class="row align-items-center justify-content-md-center justify-content-center">

     @foreach($service as $ser_value)

     @if($ser_value->name ==0)    

     <div class="col-lg-3 col-md-6 col-sm-8">
      <div class="text-center bg-white single-pricing-pack-2 mt-4 rounded border">
       <div class="pricing-icon custom-icon-color">
        <img src="{{ url('upload/Service/'.$ser_value->image) }}" width="60" alt="hosing">
       </div>
       <h4 class="package-title">Web Hosting</h4><br>
       <div class="pricing-price pt-4">
        <small>Starting at</small>
        <div class="h2 my-2">$ {{ $ser_value->price }}<span class="price-cycle h4">/mo</span></div>
       </div>
       <a href="{{ route('shared_hosting',['country' => 0]) }}" class="btn btn-brand-01">Get Started</a>
      </div>
     </div>

      @elseif($ser_value->name ==1)   

     <div class="col-lg-3 col-md-6 col-sm-8">
      <div class="text-center bg-white single-pricing-pack-2 mt-4 rounded border">
       <div class="pricing-icon custom-icon-color">
        <img src="{{ url('upload/Service/'.$ser_value->image) }}" width="60" alt="hosing">
       </div>
       <h4 class="package-title">Reseller Hosting</h4><br>
        <div class="pricing-price pt-4">
         <small>Starting at</small>
         <div class="h2 my-2">${{ $ser_value->price }}<span class="price-cycle h4">/mo</span></div>
        </div>
       <a href="{{ route('resller_hosting',['country' => 0]) }}" class="btn btn-brand-01">Get Started</a>
      </div>
     </div>

      @elseif($ser_value->name ==2) 

     <div class="col-lg-3 col-md-6 col-sm-8">
      <div class="popular-price text-center bg-white single-pricing-pack-2 mt-4 rounded border">
       <div class="pricing-icon">
        <img src="{{ url('upload/Service/'.$ser_value->image) }}" width="60" alt="hosing">
       </div>
       <h4 class="package-title">Virtual Private Server</h4>
       <div class="pricing-price pt-4">
        <small>Starting at</small>
        <div class="h2 my-2">$ {{ $ser_value->price }} <span class="price-cycle h4">/mo</span></div>
       </div>
       <a href="{{ route('vps_hosting',['country' => 0]) }}" class="btn btn-brand-01">Get Started</a>
      </div>
     </div>

      @elseif($ser_value->name ==3) 

      <div class="col-lg-3 col-md-6 col-sm-8">
       <div class="text-center bg-white single-pricing-pack-2 mt-4 rounded border">
        <div class="pricing-icon">
         <img src="{{ url('upload/Service/'.$ser_value->image) }}" width="60" alt="hosing">
        </div>
        <h4 class="package-title">Dedicated Server</h4><br>
         <div class="pricing-price pt-4">
         <small>Starting at</small>
         <div class="h2 my-2">${{ $ser_value->price }}<span class="price-cycle h4">/mo</span></div>
         </div>
        <a href="{{ route('dedicated_server_hosting',['country' => 0]) }}" class="btn btn-brand-01">Get Started</a>
       </div>
      </div>

      @endif

     @endforeach
                    
    </div>
   </div>
  </section>
  <!--pricing section end-->


  <!--promo section start-->
  <section class="promo-section gray-light-bg">
   <div class="container-custom">
    
    <div class="row justify-content-center">
     <div class="col-md-10 col-lg-7">
      <div class="section-heading text-center">
       <h2>Why We Are Special</h2>
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


  <div class="container-custom pt-100">

   <div class="section-heading text-center">
    <h2>Web Cloud Customer Rating On Trust Review Sites</h2>  
   </div>

   <div class="row pb-5">
    
    <div class="col-md-6 col-lg-2 mt-4 text-center">
     <a href="#" target="_blank">
      <div class="features-box">
       <div class="features-box-icon">
        <span class="partner-logo">
         <img src="{{ asset('frontend') }}/assets/img/review-logo/trust%20pilot%20logo.png" alt="">
        </span>
       </div>
       <p>⭐⭐⭐⭐⭐</p>
      </div>
     </a>
    </div>

    <div class="col-md-6 col-lg-2 mt-4 text-center">
     <a href="#" target="_blank">
      <div class="features-box">
       <div class="features-box-icon">
        <span class="partner-logo">
         <img src="{{ asset('frontend') }}/assets/img/review-logo/host%20advice%20logo.png" alt="">
        </span>
       </div>
       <p>⭐⭐⭐⭐⭐</p>
      </div>
     </a>
    </div>

    <div class="col-md-6 col-lg-2 mt-4 text-center">
     <a href="" target="_blank">
      <div class="features-box">
       <div class="features-box-icon">
        <span class="partner-logo">
         <img src="{{ asset('frontend') }}/assets/img/review-logo/google%20logo.png" alt="">
        </span>
       </div>
       <p>⭐⭐⭐⭐⭐</p>
      </div>
     </a>
    </div>

    <div class="col-md-6 col-lg-2 mt-4 text-center">
     <a href="" target="_blank">
      <div class="features-box">
       <div class="features-box-icon">
        <span class="partner-logo">
         <img src="{{ asset('frontend') }}/assets/img/review-logo/serchen%20logo.png" alt="">
        </span>
       </div>
       <p>⭐⭐⭐⭐⭐</p>
      </div>
     </a>
    </div>

	   <div class="col-md-6 col-lg-2 mt-4 text-center">
	    <a href="#" target="_blank">
	     <div class="features-box">
	      <div class="features-box-icon">
	       <span class="partner-logo">
	        <img src="{{ asset('frontend') }}/assets/img/review-logo/whtop%20logo.png" alt="">
	       </span>
	      </div>
	      <p>⭐⭐⭐⭐⭐</p>
	     </div>
	    </a>
	   </div>

	   <div class="col-md-6 col-lg-2 mt-4 text-center">
	    <a href="#">
	     <div class="features-box">
	      <div class="features-box-icon">
	       <span class="partner-logo">
	        <img src="{{ asset('frontend') }}/assets/img/review-logo/website%20planet%20logo.png" alt="">
	       </span>
	      </div>
	      <p>⭐⭐⭐⭐⭐</p>
	     </div>
	    </a>
	   </div>
   </div>
  </div>


  <!--features section start-->
  <div class="feature-section">
   <div class="container">
    <div class="row align-items-center justify-content-between">

     @foreach($committment as $key => $value)
     @if($key % 2 == 0)
     
     <div class="col-md-7 col-lg-6">
      <div class="feature-content-wrap">
       <h2>{{ $value->name }}</h2>
       <p>{!! $value->description !!}</p>
      </div>
     </div>

     <div class="col-md-5 col-lg-6">
      <div class="feature-img-wrap text-center">
       <img src="{{ url('upload/Commitment/'.$value->image) }}" class="img-fluid" alt="server room">
      </div>
     </div>

     @else

     <div class="row align-items-center justify-content-between">
      <div class="col-md-5 col-lg-6">
       <div class="feature-img-wrap text-center">
        <img src="{{ url('upload/Commitment/'.$value->image) }}" class="img-fluid" alt="server room">
       </div>
      </div>

      <div class="col-md-7 col-lg-6">
       <div class="feature-content-wrap">
        <h2>{{ $value->name }}</h2>
        <p>{!! $value->description !!}</p>
       </div>
      </div>
     </div>

     @endif

     @endforeach
    
    </div>         
   </div>
  </div>


  <!--call to action start-->
  <section class="ptb-60 home-support-area">
   <div class="container">
    <div class="row align-items-center justify-content-between">

     <div class="col-12 col-lg-6">
      <div class="cta-content-wrap text-white">
       <h2 class="text-white">24/7 Support Services</h2>
       <p>Our continuous 24/7 support services ensure that our customers receive prompt assistance regardless of the time or place. Our unwavering commitment to round-the-clock support means that customers can rely on us to address any challenges they may face, ensuring their peace of mind and satisfaction.</p>
      </div>

      <div class="support-action d-inline-flex flex-wrap">
	      <a href="mailto:{{ $setting->email }}" class="mr-3">
	      	<i class="fas fa-comment mr-1 custom-icon-color-2"></i>
	       <span>{{ $setting->email }}</span>
	      </a>
	      <a href="tel:{{ $setting->phone }}" class="mb-0">
	      	<i class="fas fa-phone-alt mr-1 custom-icon-color-2"></i>
	      	<span>{{ $setting->phone }}</span>
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


  <!--network map section start-->
  <section class="network-map-section ptb-100 gray-light-bg">
   <div class="container">
    
    <div class="row justify-content-center">
     <div class="col-md-9 col-lg-8">
      <div class="section-heading text-center mb-5">
       <h2>Our Data centers Location</h2>
      
      </div>
     </div>
    </div>

    <div class="row">
     <div class="col-md-12">
      <div class="network-map-wrap">
       <ul class="custom-map-location">
       
        <li style="top: 40%; left: 69%;">
         <span data-toggle="tooltip" data-placement="top" title="India"></span>
        </li>
        <li style="top: 50%; left: 72%;">
         <span data-toggle="tooltip" data-placement="top" title="Bangladesh"></span>
        </li>
        <li style="top: 65%; left: 77%;">
         <span data-toggle="tooltip" data-placement="top" title="Singpore"></span>
        </li>
       </ul>
       <img src="{{ asset('frontend') }}/assets/img/map-dark.svg" alt="location map">
      </div>
     </div>
    </div>
   </div>
  </section>

 </div>
        
  
@endsection
       

  

   