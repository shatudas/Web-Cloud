@extends('front_end.layouts.index')
@section('home_page')

 <!------hero section-------->
 <section id="hero" class="d-flex align-items-center"  style="background-image:url({{ !empty($homeCover->image)?url('upload/cover/'.$homeCover->image):url('frontend/image/homeCover/cover.png') }});">
   <div class="container home_cover">
    <div class="row justify-content-center" id="domainsection">

     <div class="col-md-12" align="center">
      <div class="mx-5" >
       <h3 align="center" class="text-white "> Best Cloud Service Provider of Bangladesh </h3>
       <span class="text-white " >Growing an online business can be challenging. Acquiring customers, providing support, and maintaining servers take time and resources. At inCom Cloud, we are helping our customer by providing fully managed hosting products</span>
      </div>
      <div class="mt-4 buttom">
       <a href="{{ route('contact') }}" class="btn btn-lg">Talk to an Expart</a>
      </div>
     </div>

   </div>
  </div>
 </section>


 <!--------domain search------->
 <form action="https://portal.incomcloud.com/cart.php?a=add&domain=register" method="post">
  <div class="container domain_search">
   <div class="row justify-content-center">
    
    <div class="col-10 mt-3 pt-4">
     <h1> Find Your Dream <span>Domain Name</span> </h1>
    </div>

    <div class="col-10 mb-2 mt-2">
     <div class="input-group">
      <input type="text" name="query" size="20" class="form-control input" placeholder="domain.com">
      <div class="input-group-append">
       <button class="btn btn-outline-secondary" type="submit"> <i class="fa fa-search"> Search </i> </button>
      </div>
     </div>
    </div>

    <div class="col-10 domein_name" align="center">
     <ul>
      @foreach($domain as $domains)
       <li>
        <span>{{ $domains->name }}</span>               
       </li>
      @endforeach
     </ul>
    </div>

   </div>                                        
  </div>
 </form>   



 <main id="main">

  <!-------- Services Section -------->
  <section id="services p-0 mt-0" style="background-color:#FFFFF2;">
   <div class="container-fluid mt-3 pt-0" data-aos="fade-up">

    <div class="section-title mb-0 p-3">
     <h1 class="serviceshrad"> Explore Our <span>Top Notch Services</span> </h1>
    </div>

    <div class="row justify-content-center">
     <div class="col-lg-11">
      <div class="row">

       @foreach($services as $service)
        <div class="col-xl-3 col-md-4 col-sm-6 services d-flex" data-aos="zoom-in" data-aos-delay="100">
         <div class="icon-box w-100">
          <div class="mt-2 card-body" align="Center">

           <img src="{{ asset('frontend/image/services') }}/services.jpg" class="img-fluid">


           <h4 align="Center" class="py-1">{{ $service['servicetype']['name'] }} </h4>
           <span>{{ $service->history }}</span>
          </div>
          <div class="serviceBtn" align="center">
           <a href="{{ $service->url }}" class="btn btn-primary">Get Started</a>
          </div>
         </div>
        </div>
       @endforeach

      </div>
     </div>
    </div>

   </div>
  </section>


  <!-----home cover----- -->
  <section class="section-bg" style="padding-top:0px; background-color:#FFF;">
   <div class="container cover_host" data-aos="fade-up">
    <div class="row">
     <div class="col-md-7 left_side order-2 order-lg-1 px-5">
      <h2>
       {{ $cover->title }}
      </h2>
      <p class="mr-5" style="font-size:16px; line-height:30px;"> {!! $cover->discriptsion !!} </p>
     </div>
     <div class="col-md-5 right_side order-1 order-lg-2 align-items-stretch">
      <div class="cover-image" align="center">
       <img src="{{ !empty($cover->image)?url('upload/homeCover_image/'.$cover->image):url('frontend/image/homeCover/cover.png') }}" class="img-fluid center animated">
      </div>
     </div>
    </div>
   </div>
  </section>

  
  <!------Services Benefit ------->
  <section id="benefits">
   <div class="container">
    <div class="row">

     <div class="col-xl-4 benefits col-md-6 col-sm-6 d-flex align-items-stretch" data-aos="zoom-out" data-aos-delay="100">
      <div class="icon-box w-100">
       <h3 align="center">Easy management</h3>
       <span class="text-justify">The CPanel is user-friendly and can be utilized by individuals with minimal knowledge.</span>
      </div>
     </div>

     <div class="col-xl-4 benefits col-md-6 col-sm-6 d-flex align-items-stretch" data-aos="zoom-out" data-aos-delay="100">
      <div class="icon-box w-100">
       <h3 align="center">Terminal Entry</h3>
       <span class="text-justify">It provides access to an in-browser terminal program for direct command-line access.</span>
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

  <!------hosting package------->
  <section  class="section-bg" style="padding-top:0px;" style="background-color:#FFFFF8;">
   <div class="container pt-0" data-aos="fade-up" >
       
    <div class="section-title py-5" >
     <h1 class="serviceshrad">Choose the bast Web Host <span>that matches your needs.</span></h1>
     <h4>Top Selling Web Host</h4>
    </div>

    <div class="row">
     @foreach($PackageManage as $Package)  

      <div class="col-xl-3 col-md-4 col-sm-6  host-package1  d-flex align-items-stretch" data-aos="zoom-in" data-aos-delay="100">
       <div class="icon-box w-100 p-0 m-0">
          
        <div class=" host-package-head">
         <div class="w-100 py-2 name-body">
          <h3 class="text-justify package-name"><center><b> {{ $Package->name }} </b></center></h3>
         </div>
         <div class="w-100 title_body">
          <h4 class="text-justify package-price">
           <center>
            <strong> ৳ </strong>
            <span> {{ $Package->price }} </span>
            <small> / {{ $Package->duration }} * </small>
           </center>
          </h4>
          <div class="mt-4 host-package-btn" align="center">
           <a href="{{ $Package->url }}" class="btn btn-primary" title="Get Started">Get Started</a>
          </div>
         </div>
        </div>
           
        <div class="mt-3 host-package-body" align="left">
         <center><span class="title">Top Features</span></center>
         <ul class="icon-list-items p-2" style="list-style:none;">
          @php
           $feature = json_decode($Package->fetures);
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

  <!------- Why choose ------->
  <section class="choose_us">

   <div class="section-title py-2" >
    <h1 class="serviceshrad">Why choose <span>us?</span></h1>
    <h4>InCom Cloud has the features and service you expect!</h4>
   </div>

   <div class="container-fluid">
    <div class="row justify-content-center">
     <div class="col-11">
      <div class="row">

         <div class="col-xl-3 col-md-4 col-sm-6 d-flex align-items-stretch choose" data-aos="zoom-out" data-aos-delay="100">
          <div class="icon-box w-100">
           <img src="{{ asset('frontend/image/chose_us') }}/SSD.png">
           <h4>High Speed SSD</h4>
           <span class="text-justify">We utilize top-notch server with enterprise SSD, which reflects in the high level of service we give.</span>
          </div>
         </div>

         <div class="col-xl-3 col-md-4 col-sm-6 d-flex align-items-stretch choose" data-aos="zoom-out" data-aos-delay="100">
          <div class="icon-box w-100">
           <img src="{{ asset('frontend/image/chose_us') }}/Server.png">
           <h4>LiteSpeed Web Server</h4>
           <span class="text-justify">Our Linux shared Web Hosting blended with LiteSpeed web server with multiple PHP version for better Speed.</span>
          </div>
         </div>

         <div class="col-xl-3  col-md-4 col-sm-6 d-flex align-items-stretch choose" data-aos="zoom-out" data-aos-delay="100">
          <div class="icon-box w-100">
           <img src="{{ asset('frontend/image/chose_us') }}/HTTP.png">
           <h4>Quic-HTTP/3</h4>
           <span class="text-justify">HTTP/3 with Quic decreases latency and speeds up website delivery.</span>
          </div>
         </div>

         <div class="col-xl-3  col-md-4 col-sm-6 d-flex align-items-stretch choose" data-aos="zoom-out" data-aos-delay="100">
          <div class="icon-box w-100">
           <img src="{{ asset('frontend/image/chose_us') }}/Server.png">
           <h4>99.9% Uptime</h4>
           <span class="text-justify">Every month, we promise to guarantee more than 99.9 percent uptime.</span>
          </div>
         </div>

         <div class="col-xl-3  col-md-4 col-sm-6 d-flex align-items-stretch choose" data-aos="zoom-out" data-aos-delay="100">
          <div class="icon-box w-100">
           <img src="{{ asset('frontend/image/chose_us') }}/SSL.png">
           <h4>SSL Certificate</h4>
           <span class="text-justify">SSL certificates that are simple to install and can keep safe your websites.</span>
          </div>
         </div>

         <div class="col-xl-3  col-md-4 col-sm-6 d-flex align-items-stretch choose" data-aos="zoom-out" data-aos-delay="100">
          <div class="icon-box w-100">
           <img src="{{ asset('frontend/image/chose_us') }}/Refund.png">
           <h4>Refund Guarantee</h4>
           <span class="text-justify">We provide a 30-day money-back guarantee, so you may try our service risk-free.</span>
          </div>
         </div>

         <div class="col-xl-3  col-md-4 col-sm-6 d-flex align-items-stretch choose" data-aos="zoom-out" data-aos-delay="100">
          <div class="icon-box w-100">
           <img src="{{ asset('frontend/image/chose_us') }}/Secure.png">
           <h4>Secure as a rock</h4>
           <span class="text-justify">Protect your website from ongoing attacks. Custom web appfirewall rules are used.</span>
          </div>
         </div>

         <div class="col-xl-3  col-md-4 col-sm-6 d-flex align-items-stretch choose" data-aos="zoom-out" data-aos-delay="100">
          <div class="icon-box w-100">
           <img src="{{ asset('frontend/image/chose_us') }}/Support.png">
           <h4>24/7 Epic Support</h4>
           <span class="text-justify">Get 24x7 access to our skilled support staff as part of your hosting subscription.</span>
          </div>
         </div>

      </div>
     </div>
    </div>
   </div>
  </section>


  <!------- home cover  ------->
  <section class="section-bg" style="padding-top:0px; background-color:#FFF;">
   <div class="container cover_host" data-aos="fade-up">
    <div class="row">

     <div class="col-md-6 right_side order-1 order-lg-1">
      <div class="cover-image p-3" align="center">
       <img src="{{ asset('frontend/image') }}/operating.png" class="img-fluid center animated">
      </div>
     </div>
      
     <div class="col-md-6 left_side order-2 order-lg-2 px-5">
      <h3><b>Easy To Install Applications</b></h3>
      <p class="mr-5" style="font-size:16px; line-height:30px;">We are offering easy-to-install applications using InCom Cloud, a user-friendly installer that simplifies the installation and setup of a wide range of web applications. With InCom Cloud, customers can quickly and easily install and manage applications without any technical expertise. This saves time and effort, allowing our customers to focus on building and managing their website or application. Overall, InCom Cloud helps us to deliver a hassle-free experience for our customers and provides a powerful tool to enhance their website's functionality.</p>
     </div>

    </div>
   </div>
  </section>


  <!--------Partner--------->
  <section class="bg-white">
   <div class="section-title">    
    <div class="container">
     <h1 class="serviceshrad pb-3" align="left">Our Respected <span>Partner</span></h1>
    </div>

    <div class="container">
     <div class="owl-carousel owl-theme clients" id="clients">
      <div class="item">
       <img src="{{ asset('frontend') }}/carousel/brands/CPanel_logo.png" alt="BTCL">
      </div>
      <div class="item">
       <img src="{{ asset('frontend') }}/carousel/brands/bd_hub.png" alt="BD Hub">
      </div>
      <div class="item">
       <img src="{{ asset('frontend') }}/carousel/brands/cisco.png" alt="Cisco">
      </div>
      <div class="item">
       <img src="{{ asset('frontend') }}/carousel/brands/juniper.png" alt="Juniper">
      </div>
      <div class="item">
       <img src="{{ asset('frontend') }}/carousel/brands/btcl.png" alt="Grameen Phone">
      </div>
      <div class="item">
       <img src="{{ asset('frontend') }}/carousel/brands/huawei.png" alt="Grameen Phone">
      </div>
      <div class="item">
       <img src="{{ asset('frontend') }}/carousel/brands/Sophos.png" alt="Grameen Phone">
      </div>
     </div>
    </div>
   
   </div>
  </section>


  <!---------support---------->
  <section id="support">
   <div class="container p-3">
    <div class="row">

     <div class="col-xl-7 col-lg-7  col-md-7 col-sm-12 order-2 order-lg-1 d-flex support align-items-center">
      <div class="icon-box" align="center">
       <h3 class="text-white">24/7 Support</h3>
       <h4 class="text-justify text-white">Let us help you choose the right Services for your needs.</h4>
       <a href="tel:{{ $settingdata->phone }}" class="btn btn-lg" >Call: {{ $settingdata->phone }}</a><br>
       <a href="mailto:{{ $settingdata->email }}" class="btn2 btn-lg">Mail: {{ $settingdata->email }}</a><br>
       <h5 class="text-white"> Request a <a href="tel:{{ $settingdata->phone }}">Call Back</a> or <a href="https://www.facebook.com/incomitbd" target="_blank">Chat Now</a></h5>
      </div>
     </div>

     <div class="col-xl-5 col-lg-5  col-md-5 col-sm-12 pt-3 order-1 order-lg-2" align="center">
      <img src="{{ asset('frontend/image') }}/Service 24_7-pana.png" class="img-fluid center">
     </div>

    </div>
   </div>
  </section>

 </main>
<!-- End main -->

@endsection