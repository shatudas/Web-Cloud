@php
$setting =App\model\genarelSetting::first();
@endphp

<!DOCTYPE html>
<html lang="en">


<meta http-equiv="content-type" content/>
<head>
 <meta charset="utf-8">
 <meta name="" content="">
 <meta http-equiv="" content="ie=edge">
 <meta name="" content=""/>

 <!--favicon icon-->
 <link rel="icon" href="{{ (!empty($setting->favicon))?url('upload/GenarelSetting/'.$setting->favicon):url('frontend/image/setting/HostingFavicon.png') }}" type="image/png" sizes="16x16">

 <title> Home || {{ $setting->title }} </title>

  <meta charset="utf-8">
  <meta name="description"content="Cloud computing is a technology model that involves the delivery of computing services over the internet. Instead of owning and managing physical hardware and software infrastructure, users can access and utilize computing resources as a service provided by a third-party provider. These resources include processing power, storage, databases, networking, software, and more.">

  <meta name="keywords"content="shared hosting, domain registration, VPS hosting, dedicated servers, email hosting, affordable hosting, reliable hosting, secure hosting, fast hosting, managed hosting, cloud hosting, web hosting services, cheap domain names, virtual private servers, business hosting, reseller hosting, WordPress hosting, e-commerce hosting, Linux hosting, Windows hosting">
    
  <link rel="stylesheet" href="{{ asset('frontend') }}/assets/css/main.css">
  <link rel="stylesheet" href="{{ asset('frontend') }}/assets/css/custom.css">
  <link rel="stylesheet" href="{{ asset('frontend') }}/assets/css/responsive.css">
 </head>
	<body>

	<!--preloader start-->
 <div id="preloader">
  <div class="preloader-wrap">
   <h4  style="color:#FA2B32;">{{ $setting->name }}</h4>
   <div class="preloader">
    <i>.</i>
    <i>.</i>
    <i>.</i>
   </div>
  </div>
 </div>
 <!--preloader end-->


  @include('frontend.layouts.header')

  @yield('home_page')

  @include('frontend.layouts.footer')




	 <!--build:js-->
	 <script src="{{ asset('frontend') }}/assets/js/vendors/jquery-3.5.1.min.js"></script>
	 <script src="{{ asset('frontend') }}/assets/js/vendors/jquery.easing.min.js"></script>
	 <script src="{{ asset('frontend') }}/assets/js/vendors/jquery.waypoints.min.js"></script>
	 <script src="{{ asset('frontend') }}/assets/js/vendors/jquery.rcounterup.js"></script>
	 <script src="{{ asset('frontend') }}/assets/js/vendors/popper.min.js"></script>
	 <script src="{{ asset('frontend') }}/assets/js/vendors/bootstrap.min.js"></script>
	 <script src="{{ asset('frontend') }}/assets/js/vendors/bootstrap-slider.min.js"></script>
	 <script src="{{ asset('frontend') }}/assets/js/vendors/owl.carousel.min.js"></script>
	 <script src="{{ asset('frontend') }}/assets/js/vendors/countdown.min.js"></script>
	 <script src="{{ asset('frontend') }}/assets/js/vendors/magnific-popup.min.js"></script>
	 <script src="{{ asset('frontend') }}/assets/js/vendors/validator.min.js"></script>
	 <script src="{{ asset('frontend') }}/assets/js/vendors/hs.megamenu.js"></script>
	 <script src="{{ asset('frontend') }}/assets/js/app.js"></script>
	 <!--endbuild-->

 </body>
</html>