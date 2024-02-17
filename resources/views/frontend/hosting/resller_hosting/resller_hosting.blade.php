@extends('frontend.layouts.index')
@section('home_page')

	<div class="main">

	<!--hero section start-->
  <section class="gradient-bg">
   <div class="container">
    <div class="row align-items-center justify-content-between">

     <div class="col-md-7 col-lg-6">
      <div class="hero-content-wrap text-white">
       <h2 class="text-white">Your Exclusive Reseller Hosting, Fully Supervised by Professionals</h2><br>
       <p class="lead">Effortless & Budget-friendly Web Hosting, Comprehensive Hosting Solutions for Thriving Personal and Business Websites.</p>
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


  <section class="compare-pricing-section ptb-100" id="pack-reseller">
   <div class="container">
    
    <div class="row justify-content-center">
     <div class="col-md-9 col-lg-8">
      <div class="section-heading text-center mb-5">
       <h2>Reseller Hosting</h2>
      </div>
     </div>
    </div>

    <!-- server location section start -->
    <div class="row justify-content-center pb-5">

     <div class="col-md-6 col-lg-3 mt-4 text-center">
      <a href="{{ route('resller_hosting',['country' => 0]) }}">
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
      <a href="{{ route('resller_hosting',['country' => 1]) }}">
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
      <a href="{{ route('resller_hosting',['country' => 2]) }}">
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

    <div class="col-12">
     <div class="switch-wrap text-center mb-5">
      <label class="form-switch">
       <span class="beforeinput text-success"> Monthly </span>
       <input type="checkbox" id="js-contcheckbox">
       <span class="switch-icon gray-light-bg"></span>
       <span class="afterinput"> Yearly </span>
      </label>
     </div>
    </div>

    @if(count($all_data) > 0)   

     <div class="row">
      <div class="col-md-12 col-lg-12">
       <div class="table-responsive">
        <table class="table w-100 table-hover table-bordered comparision-table text-center">

         <thead class="comparision-table-head">
          <tr class="active">
           <th>
            <p class="mb-0"><strong>Plan</strong></p>
           </th>
           @foreach($all_data as $data)
           <th>
            <strong class="h5 mb-0">{{ $data->name }}</strong>
           </th>
           @endforeach
          </tr>
         </thead>
          

         <tbody class="comparision-table-body">
          
          <tr>
           <td>
            <p class="mb-0 comparision-price-title text-left">
            <strong>Price</strong></p>
           </td>
           @foreach($all_data as $data)
           <td class="py-2">
            <h4 class="mb-0 comparision-price monthly-price"> ${{ $data->price }} <span>/month</span></h4>

            @php
             $val =$data->price;
             $valu =$val*12;
            @endphp

            <h4 class="mb-0 comparision-price yearly-price"> ${{ $valu }} <span>/year</span></h4>
            <a href="{{ $data->url }}" target="_blank" class="btn btn-brand-01 btn-xs mt-2"> Get Started </a>
           </td>
           @endforeach
          </tr>
          
          <tr>
           <td> <p class="text-left">Number of Cpanel</p> </td>
           @foreach($all_data as $data)
            <td>{{ $data->cpanel }}</td>
           @endforeach
          </tr>
         
          <tr>
           <td><p class="text-left">Bandwidth</p></td>
            @foreach($all_data as $data)
            <td>{{ $data->bandwidth }} GB</td>
           @endforeach
          </tr>
          
          <tr>
           <td><p class="text-left">Nvme SSD Storage</p></td>
           @foreach($all_data as $data)
            <td>{{ $data->storage }} GB</td>
           @endforeach
          </tr>

          <tr>
           <td><p class="text-left"> Dedicated IP </p></td>
           @foreach($all_data as $data)
            @if($data->ip=='0')
             <td><span class="ti-close text-danger"></span></td>
            @else
             <td>{{ $data->ip }}</td>
            @endif
           @endforeach
          </tr>

          <tr>
           <td><p class="text-left">WHMCS License Users</p></td>
           @foreach($all_data as $data)
            @if($data->license=='1')
            <td><span class="ti-check color-primary"></span></td>
            @else
             <td><span class="ti-close text-danger"></span></td>
            @endif
           @endforeach
          </tr>

          <tr>
           <td><p class="text-left">LiteSpeed Server</p></td>
           @foreach($all_data as $data)
            @if($data->litespeed=='1')
            <td><span class="ti-check color-primary"></span></td>
            @else
             <td><span class="ti-close text-danger"></span></td>
            @endif
           @endforeach
          </tr>

          <tr>
           <td><p class="text-left">WHM/cPanel</p></td>
           @foreach($all_data as $data)
            @if($data->whm_panel=='1')
            <td><span class="ti-check color-primary"></span></td>
            @else
             <td><span class="ti-close text-danger"></span></td>
            @endif
           @endforeach
          </tr>

          <tr>
           <td><p class="text-left">Automated Daily/Weekly Backups</p></td>
           @foreach($all_data as $data)
            @if($data->backup=='1')
            <td><span class="ti-check color-primary"></span></td>
            @else
             <td><span class="ti-close text-danger"></span></td>
            @endif
           @endforeach
          </tr>

          <tr>
           <td><p class="text-left">Softaculous Auto script installer</p></td>
           @foreach($all_data as $data)
            @if($data->softaculous=='1')
            <td><span class="ti-check color-primary"></span></td>
            @else
             <td><span class="ti-close text-danger"></span></td>
            @endif
           @endforeach
          </tr>

          <tr>
           <td><p class="text-left">Imunify 360</p></td>
           @foreach($all_data as $data)
            @if($data->imunify=='1')
            <td><span class="ti-check color-primary"></span></td>
            @else
             <td><span class="ti-close text-danger"></span></td>
            @endif
           @endforeach
          </tr>

          <tr>
           <td><p class="text-left">Cloud Linux </p></td>
           @foreach($all_data as $data)
            @if($data->cloud_license=='1')
            <td><span class="ti-check color-primary"></span></td>
            @else
             <td><span class="ti-close text-danger"></span></td>
            @endif
           @endforeach
          </tr>
         
         </tbody>

        </table>
       </div>
      </div>
     </div>

    @endif

   </div>
  </section>


  <section class="feature-section ptb-50 gray-light-bg">
   <div class="container">

    <div class="row justify-content-center">
     <div class="col-md-9 col-lg-8">
      <div class="section-heading text-center py-5">
       <h2>Reseller Hosting Features Tailored Just for You</h2>
      </div>
     </div>
    </div>
                
    <div class="row">
     <div class="col-md-12 col-lg-12">
      <div class="table-responsive">
       <table class="table w-100 table-hover table-bordered comparision-table text-center">
        
        <thead class="comparision-table-head"></thead>
        
        <tbody class="comparision-table-body">

         <tr class="text-left">
          <td>
           <p >
            <span class="ti-check color-primary"></span> DDoSProtection
           </p>
          </td>
          <td>
           <span class="ti-check color-primary">
           </span> CageFS Hack Protection
          </td>
          <td>
           <span class="ti-check color-primary"></span> LitesSpeed Web Server
          </td>
          <td>
           <span class="ti-check color-primary"></span> Latest cPanel
          </td>
          <td>
           <span class="ti-check color-primary"></span> Softaculous Script Installer
          </td>
         </tr>

         <tr class="text-left">
          <td>
            <p>
            <span class="ti-check color-primary"></span> Malware & Exploit Scanning</p>
            </td>
          <td>
           <span class="ti-check color-primary"></span> Unlimited Sub Domains
          </td>
          <td>
           <span class="ti-check color-primary"></span> Unlimited Domains
          </td>
          <td>
           <span class="ti-check color-primary"></span> Unlimited Databases
          </td>
          <td>
           <span class="ti-check color-primary"></span> Unlimited FTP Accounts
          </td>
         </tr>
         
         <tr class="text-left">
          <td>
           <p class="text-left "><span class="ti-check color-primary"></span> Auto Responders</p>
          </td>
          <td>
           <span class="ti-check color-primary"></span> Spam Protection
          </td>
          <td>
           <span class="ti-check color-primary"></span> SSH Access Available
          </td>
          <td>
           <span class="ti-check color-primary"></span> FREE Let’s Encrypt SSL
          </td>
          <td>
           <span class="ti-check color-primary"></span> FREE cPanel Migration
          </td>
         </tr>
         
         <tr class="text-left">
          <td>
           <p>
            <span class="ti-check color-primary"></span> Unlimited E-Mail Accounts
           </p>
          </td>
          <td>
           <span class="ti-check color-primary"></span> Daily Weekly Backup
          </td>
          <td>
           <span class="ti-check color-primary"></span> Curl / GD2 / ImageMagick
          </td>
          <td>
           <span class="ti-check color-primary"></span> PHP Selector (5.4 – 7.x)
          </td>
          <td>
           <span class="ti-check color-primary"></span> Python Version Selector
          </td>
         </tr>
         
         <tr class="text-left">
          <td>
           <p>
            <span class="ti-check color-primary"></span> Mariadb  10.x/phpMyAdmin
           </p>
          </td>
          <td>
           <span class="ti-check color-primary"></span> Node.js Version Selector
          </td>
          <td>
           <span class="ti-check color-primary"></span> Zend Guard Loader
          </td>
          <td>
           <span class="ti-check color-primary"></span> Awstats & Webalizer
          </td>
          <td>
           <span class="ti-check color-primary"></span> ionCube PHP Loader
          </td>
         </tr>

        </tbody>
       </table>
      </div>
     </div>
    </div>

   </div>
  </section>

  <!--promo section start-->
  <section class="promo-section  ptb-100 gray-light-bg mb-5">
   <div class="container-custom">
    
    <div class="row justify-content-center">
     <div class="col-md-10 col-lg-7">
      <div class="section-heading text-center py-4">
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


  <!--call to action start-->
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


	</div>




@endsection