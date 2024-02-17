@php

 $setting=App\model\genarelSetting::first();

@endphp

<!DOCTYPE html>
<html lang="en">

 <head>
  <meta charset="utf-8">
  <meta content="width=device-width, initial-scale=1.0" name="viewport">

  <title> {{ $setting->title }}</title>
  <!----mate  tag------>
  <meta content="" name="description">
  <meta content="" name="keywords">

  <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/4.7.0/css/font-awesome.min.css">

  <!-- Favicons -->
  <link href="{{ (!empty($setting->favicon))?url('upload/GenarelSetting/'.$setting->favicon):url('frontend/image/setting/HostingFavicon.png') }}" rel="icon">
  <!-- Google Fonts -->
  <link href="https://fonts.googleapis.com/css?family=Open+Sans:300,300i,400,400i,600,600i,700,700i|Jost:300,300i,400,400i,500,500i,600,600i,700,700i|Poppins:300,300i,400,400i,500,500i,600,600i,700,700i" rel="stylesheet">
  <!-- Vendor CSS Files -->
  <link href="{{ asset('frontend') }}/assets/vendor/aos/aos.css" rel="stylesheet">
  <link href="{{ asset('frontend') }}/assets/vendor/bootstrap/css/bootstrap.min.css" rel="stylesheet">
  <link href="{{ asset('frontend') }}/assets/vendor/bootstrap-icons/bootstrap-icons.css" rel="stylesheet">
  <link href="{{ asset('frontend') }}/assets/vendor/boxicons/css/boxicons.min.css" rel="stylesheet">
  <link href="{{ asset('frontend') }}/assets/vendor/glightbox/css/glightbox.min.css" rel="stylesheet">
  <link href="{{ asset('frontend') }}/assets/vendor/remixicon/remixicon.css" rel="stylesheet">
  <link href="{{ asset('frontend') }}/assets/vendor/swiper/swiper-bundle.min.css" rel="stylesheet">
  <!-- Template Main CSS File -->
  <link href="{{ asset('frontend') }}/assets/css/style.css" rel="stylesheet">

  

  <script type="text/javascript" src="https://cdnjs.cloudflare.com/ajax/libs/notify/0.4.2/notify.min.js"></script>

  <script type="text/javascript" src="https://cdnjs.cloudflare.com/ajax/libs/notify/0.4.2/notify.min.js"></script>


  <link rel="stylesheet" type="text/css" href="{{ asset('frontend') }}/carousel/owl.carousel.css">

 <style type="text/css">
  .notify-corner
  {
    z-index:10000;
  }
 </style>

 </head>

 <body style="background-color:#FFFFF2;">

  @include('front_end.layouts.header')

  @yield('home_page')

  @include('front_end.layouts.footer')

  <!-----page loader------>
  <div id="preloader"></div>
  
  <!--back To top Button----->
  <a href="#" class="back-to-top d-flex align-items-center justify-content-center">
   <i class="bi bi-arrow-up-short"></i>
  </a>

   @if(session()->has('success'))
    <script type="text/javascript">
      $(function(){
        $.notify("{{session()->get('success')}}",{globalPosition:'top right',className:'sucess'});
      })
    </script>
   @endif

   @if(session()->has('error'))
    <script type="text/javascript">
      $(function(){
        $.notify("{{session()->get('error')}}",{globalPosition:'top right',className:'error'});
      })
    </script>
   @endif


  <!-- Vendor JS Files -->
  <script src="{{ asset('frontend') }}/assets/vendor/aos/aos.js"></script>
  <script src="{{ asset('frontend') }}/assets/vendor/bootstrap/js/bootstrap.bundle.min.js"></script>
  <script src="{{ asset('frontend') }}/assets/vendor/glightbox/js/glightbox.min.js"></script>
  <script src="{{ asset('frontend') }}/assets/vendor/isotope-layout/isotope.pkgd.min.js"></script>
  <script src="{{ asset('frontend') }}/assets/vendor/swiper/swiper-bundle.min.js"></script>
  <script src="{{ asset('frontend') }}/assets/vendor/waypoints/noframework.waypoints.js"></script>
  <script src="{{ asset('frontend') }}/assets/vendor/php-email-form/validate.js"></script>
  <script src="{{ asset('frontend') }}/assets/js/owl.carousel.js"></script>
  <!-- Template Main JS File -->
  <script src="{{ asset('frontend') }}/assets/js/main.js"></script>


  <script src="{{ asset('frontend') }}/carousel/jquery.min.js"></script>
  <script src="{{ asset('frontend') }}/carousel/owl.carousel.js"></script>
  <script src="{{ asset('frontend') }}/carousel/main.js"></script>

 </body>
</html>


