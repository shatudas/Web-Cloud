@extends('frontend.layouts.index')
@section('home_page')

	<div class="main">

		<!--hero section start-->
  <section class="gradient-bg">
   <div class="container">
    <div class="row align-items-center justify-content-between">

     <div class="col-md-7 col-lg-6">
      <div class="hero-content-wrap text-white">
       <h2 class="text-white mb-3"> Experience Shared Hosting: Speedy, Protected, and User-Friendly </h2>
       <p class="lead"> Effortless and Cost-Effective Hosting Services: Your Path to Successful Personal and Business Websites. </p>
      <a href="{{ route('contact') }}" class="btn btn-brand-69 btn-lg"> Start Now </a>
      </div>
     </div>

     <div class="col-md-5 col-lg-6">
      <div class="img-wrap hero-img mt-5 pt-5" align="center">
       <img src="{{ asset('frontend') }}/assets/img/Server-amico%20(1).png" alt="vps image" class="img-fluid">
      </div>
     </div>
    
    </div>
   </div>
  </section>

 @if(count($all_data) > 0)   
  <section id="pricing" class="pricing-section ptb-100 ">
   <div class="container">

    <div class="row justify-content-center" id="pack-hosting">
     <div class="col-md-9 col-lg-8">
      <div class="section-heading text-center mb-4">
       <h2>Choose Your Web Hosting</h2>
      </div>
     </div>
    </div>

    <!-- server location section start -->
    <div class="row justify-content-center pb-5">

     <div class="col-md-6 col-lg-3 mt-4 text-center">
      <a href="{{ route('shared_hosting',['country' => 0]) }}">
      <div class="features-box-active p-2">
       <div class="features-box-icon mb-2">
        <span class="flag">
         <h6> <img src="{{ asset('frontend') }}/assets/img/bangladesh.png" alt=""> Web Hosting BD</h6>
        </span>
       </div>
      </div>
      </a>
     </div>

     <div class="col-md-6 col-lg-3 mt-4 text-center">
      <a href="{{ route('shared_hosting',['country' => 1]) }}">
      <div class="features-box-active p-2">
       <div class="features-box-icon mb-2">
        <span class="flag">
         <h6> <img src="{{ asset('frontend') }}/assets/img/india.jpg" alt=""> Web Hosting India</h6>
        </span>
       </div>
      </div>
      </a>
     </div>

     <div class="col-md-6 col-lg-3 mt-4 text-center">
      <a href="{{ route('shared_hosting',['country' => 2]) }}">
      <div class="features-box-active p-2">
       <div class="features-box-icon mb-2">
        <span class="flag">
         <h6> <img src="{{ asset('frontend') }}/assets/img/singapore.png" alt=""> Web Hosting SG</h6>
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
	      <span class="beforeinput text-success"> Monthly</span>
	      <input type="checkbox" id="js-contcheckbox">
	      <span class="switch-icon gray-light-bg"></span>
	      <span class="afterinput"> Yearly</span>
	     </label>
	    </div>
	   </div>

 	  <div class="row align-items-center justify-content-md-center justify-content-center">

      @foreach($all_data as $data)
 	    
 	    <div class="col-lg-4 col-md-6 col-sm-8">
 	     <div class="popular-price bg-white pricing-new-wrapper mt-2 p-5 shadow-sm border">
 	      <h2 align="center" class="mb-3">{{ $data->name }}</h2>
 	      
        <div class="pricing-info" align="center" >
         @php
          $val  = $data->price;
          $val2 = $val*12;
         @endphp
 	       <div class="h2 mb-0 monthly-price" style="color: #FA2B32;"> $ {{ $data->price }} <span> /Month </span></div>
 	       <div class="h2 mb-0 yearly-price" style="color: #FA2B32;"> $ {{ $val2 }} <span> /Year </span></div>
 	      </div>

 	      <div class="pricing-content">
 	       
         <ul class="list-unstyled pricing-feature-list-2 mt-4">
 	       
          <li>
 	        	<i class="far fa-hdd mr-2"></i>
 	         <p><strong> {{ $data->storage }} GB </strong> SSD Storage </p>
 	        </li>

 	        <li>
           <i class="far fa-router mr-2"></i>
 	         <p><strong>{{ $data->bandwidth }} GB </strong> Bandwidth</p>
 	        </li>

 	        <li>
           <i class="far fa-browser mr-2"></i>
 	         <p><strong> {{ $data->addom_domain }}</strong> Addom Domain</p>
 	        </li>

          <li>
           <i class="far fa-browser mr-2"></i>
           <p><strong> {{ $data->subdomain }}</strong> Sub Domain</p>
          </li>

 	        <li>
 	        	<i class="far fa-mail-bulk mr-2"></i>
 	         <p><strong> {{ $data->mail }}</strong> Mail Accounts</p>
 	        </li>

          <li>
           <i class="far fa-database mr-2"></i>
           <p><strong>{{ $data->sql }}</strong> MySQL</p>
          </li>

          <li>
           <i class="far fa-database mr-2"></i>
           <p><strong>{{ $data->data_taffic }}</strong> Data traffic</p>
          </li>

          <li>
           <i class="far fa-desktop mr-2"></i>
           <p><strong>{{ $data->os }}</strong> Operating System</p>
          </li>

          <li>
           <i class="far fa-hdd-o mr-2"></i>
           <p><strong>{{ $data->backup }}</strong> backUp</p>
          </li>

 	       </ul>
 	       <a href="{{ $data->url }}" target="_blank" class="btn btn-outline-brand-01 btn-block" target="_blank">Get Now</a>

 	      </div>
 	     </div>
 	    </div>

      @endforeach
 	  </div>

   </div>
  </section>
 @endif


  <div class="container hosting-feature pt-3 mb-3">
   <div class="row text-center">
    <div class="col-2">
     <img src="{{ asset('frontend') }}/assets/img/gmh%20icon/bandwidth.png" alt="">
     <h5 class="text-white">Lite Speed</h5>
    </div>
    <div class="col-2">
     <img src="{{ asset('frontend') }}/assets/img/gmh%20icon/ssl.png" alt="">
     <h5 class="text-white">Free SSL</h5>
    </div>
    <div class="col-2">
     <img src="{{ asset('frontend') }}/assets/img/gmh%20icon/uptime.png" alt="">
     <h5 class="text-white">99.9% Uptime</h5>
    </div>
    <div class="col-2">
     <img src="{{ asset('frontend') }}/assets/img/gmh%20icon/relax.png" alt="">
     <h5 class="text-white">Easy to use</h5>
    </div>
    <div class="col-2">
     <img src="{{ asset('frontend') }}/assets/img/gmh%20icon/secured.png" alt="">
     <h5 class="text-white">Secure</h5>
    </div>
    <div class="col-2">
     <img src="{{ asset('frontend') }}/assets/img/gmh%20icon/support.png" alt="">
     <h5 class="text-white">Support</h5>
    </div>
   </div>
  </div>


  <section class="feature-section ptb-50 gray-light-bg">
   <div class="container">

    <div class="row justify-content-center">
     <div class="col-md-9 col-lg-8">
      <div class="section-heading text-center py-5">
       <h2>Web Hosting Features Tailored Just for You</h2>
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
            <span class="ti-check color-primary">
            </span> DDoSProtection
           </p>
          </td>
          <td>
           <span class="ti-check color-primary">
           </span> CageFS Hack Protection
          </td>
          <td>
           <span class="ti-check color-primary"></span> Webmail access
          </td>
          <td>
           <span class="ti-check color-primary"></span> Latest cPanel
          </td>
          <td>
           <span class="ti-check color-primary"></span> Unlimited E-mail addresses 
          </td>
         </tr>

         <tr class="text-left">
          <td>
            <p>
            <span class="ti-check color-primary"></span> Database Backups</p>
            </td>
          <td>
           <span class="ti-check color-primary"></span>  Sub Domains
          </td>
          <td>
           <span class="ti-check color-primary"></span> Addom Domains
          </td>
          <td>
           <span class="ti-check color-primary"></span>  Databases
          </td>
          <td>
           <span class="ti-check color-primary"></span> mail Accounts
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
         


        </tbody>
       </table>
      </div>
     </div>
    </div>

   </div>
  </section>


 {{--  <section class="compare-pricing-section pt-100 pt-50 gray-light-bg">
   <div class="container">
                
    <div class="row justify-content-center">
     <div class="col-md-9 col-lg-8"></div>
    </div>

    <div class="row">
     <div class="col-md-12 col-lg-12">
      <div class="table-responsive">
       <table class="table w-100 table-hover table-bordered comparision-table text-center">
        <thead class="comparision-table-head">
         <tr>
          <th><strong class="h5 mb-0">Item</strong></th>
          <th><strong class="h5 mb-0">Personal</strong></th>
          <th><strong class="h5 mb-0">bacis</strong></th>
          <th><strong class="h5 mb-0">Advanced</strong></th>
         </tr>
        </thead>
        
        <tbody class="comparision-table-body">

         <tr>
          <td><p class="text-left font-weight-bold">CPU Cores </p></td>
          <td>1 Core</td>
          <td>1 Core</td>
          <td>2 Core</td>
         </tr>
         <tr>
          <td><p class="text-left font-weight-bold">RAM</p></td>
          <td>2 GB</td>
          <td>4 GB</td>
          <td>4 GB + 2GB </td>
         </tr>
         <tr>
          <td><p class="text-left font-weight-bold">Disk I/O </p> </td>
          <td>10 Mbps I/O</td>
          <td>10 Mbps I/O</td>
          <td>10 Mbps I/O</td>
         </tr>
         <tr>
          <td><p class="text-left font-weight-bold">Concurrent Connections </p></td>
          <td>20 EP</td>
          <td>20 EP</td>
          <td>20 EP</td>
         </tr>
        </tbody>

       </table>
      </div>
     </div>
    </div>

   </div>
  </section>
  <section class="pricing-section ptb-100" id="specification">
   <div class="container">
    <div class="row">
     <div class="col-12">
      
      <div class="compare-pricing-table table-responsive-md">
       <table class="table table-bordered bg-soft">
        
        <thead class="bg-soft">
         <tr class="gray-light-bg">
          <th colspan="1" class="t-hide"></th>
          <th class="bg-white custom-red border-bottom-0 h6">Personal</th>
          <th class="bg-white custom-red border-bottom-0 h6">bacis</th>
          <th class="bg-white custom-red border-bottom-0 h6"> Advanced</th>
         </tr>

         <tr class="gray-light-bg">
          <th class="t-hide select-header">
           <h4 class="mb-0 text-left">
            Choose your package
           </h4>
          </th>
          <th>
           <div class="h2 font-weight-bold">$18.00 <span class="small-text">/year</span></div>          
          </th>
          <th>
           <div class="h2 font-weight-bold">$24.00 <span class="small-text">/year</span></div>
          </th>
          <th>
           <div class="h2 font-weight-bold">$30.00 <span class="small-text">/year</span></div>                   
          </th>
         </tr>
        </thead>
        <tbody class="compare-content-body">
          <tr>
           <td class="text-left compare-title">Webspace <small>Full SSD</small></td>
           <td>1 GB</td>
           <td>5 GB</td>
           <td>10 GB</td>
          </tr>
          <tr>
           <td class="text-left compare-title"> Number of websites on 1 package</td>
           <td> Max. 2 </td>
           <td>Max. 5 </td>
           <td>
            <small> <i class="far fa-infinity"></i></small>
            Unlimited
           </td>
          </tr>
           
          <tr>
           <td class="text-left compare-title">Number of subdomains</td>
           <td><small> <i class=""></i></small>Max 10 </td>
           <td><small> <i class="far fa-infinity"></i></small>  Unlimited</td>
           <td><small> <i class="far fa-infinity"></i></small> Unlimited
           </td>
          </tr>

          <tr>
           <td class="text-left compare-title">Data traffic</td>
           <td><small> <i class=""></i></small>15 GB</td>
           <td><small> <i class=""></i></small>60 GB</td>
           <td><small> <i class=""></i></small>100 GB </td>
          </tr>
          
          <tr>
           <td class="text-left compare-title">Operating System</td>
           <td><small> <i class="fab fa-linux"></i></small> Linux </td>
           <td><small> <i class="fab fa-linux"></i></small>Linux </td>
           <td><small> <i class="fab fa-linux"></i></small>Linux</td>
          </tr>
                                
          <tr>
           <td class="text-left compare-title">HTTPS protection</td>
           <td><span class="text-success"> <i class="fad fa-check-circle"></i></span></td>
           <td><span class="text-success"> <i class="fad fa-check-circle"></i></span></td>
           <td><span class="text-success"> <i class="fad fa-check-circle"></i></span></td>
          </tr>
                                
          <tr>
           <td class="text-left compare-title">Adapted to any CMS</td>
           <td><span class="text-success"> <i class="fad fa-check-circle"></i></span></td>
           <td><span class="text-success"> <i class="fad fa-check-circle"></i></span></td>
           <td><span class="text-success"> <i class="fad fa-check-circle"></i></span></td>
          </tr>
          
          <tr class="bg-white">
           <td colspan="5" class="text-left compare-header">Hosting services makes your life easier</td>
          </tr>
                                
          <tr>
           <td class="text-left compare-title">Free domain (on yearly pack)</td>
           <td><span class="text-success"> <i class="fad fa-check-circle"></i></span></td>
           <td><span class="text-success"> <i class="fad fa-check-circle"></i></span></td>
           <td><span class="text-success"> <i class="fad fa-check-circle"></i></span></td>
          </tr>
                           
          <tr>
           <td class="text-left compare-title">24/7 support</td>
           <td><span class="text-success"> <i class="fad fa-check-circle"></i></span> </td>
           <td><span class="text-success"> <i class="fad fa-check-circle"></i></span> </td>
           <td><span class="text-success"> <i class="fad fa-check-circle"></i></span> </td>
          </tr>
                                
          <tr>
           <td class="text-left compare-title">Uptime monitoring</td>
           <td><span class="text-success"> <i class="fad fa-check-circle"></i></span></td>
           <td><span class="text-success"> <i class="fad fa-check-circle"></i></span></td>
           <td><span class="text-success"> <i class="fad fa-check-circle"></i></span></td>
          </tr>

          <tr class="bg-white">
           <td colspan="5" class="text-left compare-header">Protection of your website</td>
          </tr>
                                
          <tr>
           <td class="text-left compare-title">Automatic backups</td>
           <td><span class="text-success"> <i class="fad fa-check-circle"></i></span> Weekly</td>
           <td><span class="text-success"> <i class="fad fa-check-circle"></i></span> Weekly</td>
           <td> <span class="text-success"> <i class="fad fa-check-circle"></i></span>  Weekly </td>
          </tr>
          
          <tr>
           <td class="text-left compare-title">Saving backups</td>
           <td><span class="text-success"> <i class="fad fa-check-circle"></i></span> 30 Days</td>
           <td><span class="text-success"> <i class="fad fa-check-circle"></i></span> 30 Days</td>
           <td><span class="text-success"> <i class="fad fa-check-circle"></i></span> 30 Days </td>
          </tr>

          <tr>
           <td class="text-left compare-title">Malware scanner</td>
           <td><span class="text-success"> <i class="fad fa-check-circle"></i></span></td>
           <td><span class="text-success"> <i class="fad fa-check-circle"></i></span></td>
           <td><span class="text-success"> <i class="fad fa-check-circle"></i></span></td>
          </tr>
          
          <tr>
           <td class="text-left compare-title">Automatic security updates</td>
           <td><span class="text-success"> <i class="fad fa-check-circle"></i></span></td>
           <td><span class="text-success"> <i class="fad fa-check-circle"></i></span></td>
           <td><span class="text-success"> <i class="fad fa-check-circle"></i></span></td>
          </tr>
          <tr>
           <td class="text-left compare-title">Firewalls</td>
           <td><span class="text-success"> <i class="fad fa-check-circle"></i></span></td>
           <td><span class="text-success"> <i class="fad fa-check-circle"></i></span></td>
           <td><span class="text-success"> <i class="fad fa-check-circle"></i></span></td>
          </tr>
          <tr>
           <td class="text-left compare-title">DDos protection</td>
           <td><span class="text-success"> <i class="fad fa-check-circle"></i></span></td>
           <td><span class="text-success"> <i class="fad fa-check-circle"></i></span></td>
           <td><span class="text-success"> <i class="fad fa-check-circle"></i></span></td>
          </tr>

          <tr>
           <td class="text-left compare-title">Database Backups</td>
           <td>Every day</td>
           <td>Every day</td>
           <td>Every day</td>
          </tr>

          <tr class="bg-white">
           <td colspan="5" class="text-left compare-header">Free mailboxes with each package</td>
          </tr>

          <tr>
           <td class="text-left compare-title">E-mail addresses</td>
           <td><small> <i class="fab fa-linux"></i></small> Unlimited </td>
           <td><small> <i class="fab fa-linux"></i></small> Unlimited </td>
           <td><small> <i class="fab fa-linux"></i></small> Unlimited </td>
          </tr>

          <tr>
           <td class="text-left compare-title">Webmail access</td>
           <td><span class="text-success"> <i class="fad fa-check-circle"></i></span></td>
           <td> <span class="text-success"> <i class="fad fa-check-circle"></i></span></td>
           <td><span class="text-success"> <i class="fad fa-check-circle"></i></span></td>
          </tr>
          
          <tr class="bg-white">
           <td colspan="5" class="text-left compare-header">Free extra services with each package</td>
          </tr>
          
          <tr>
           <td class="text-left compare-title">Money-back guarantee</td>
           <td><span class="text-success"> <i class="fad fa-check-circle"></i></span></td>
           <td><span class="text-success"> <i class="fad fa-check-circle"></i></span></td>
           <td> <span class="text-success"> <i class="fad fa-check-circle"></i></span> </td>
          </tr>

        </tbody>
       </table>
      </div>
     </div>
    </div>
   </div>
  </section> --}}
        

  <section class="promo-section gray-light-bg py-5">
   <div class="container-custom">
    
    <div class="row justify-content-center">
     <div class="col-md-10 col-lg-7">
      <div class="section-heading text-center">
       <h2 class="pb-5">Why We Are Special</h2>
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