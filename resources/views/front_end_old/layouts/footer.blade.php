<!-- ----- Footer ---- -->
<footer id="footer">
 
 <div class="footer-top">
  <div class="container">
   <div class="row">

    <div class="col-lg-3 col-md-6 footer-contact">
     <h3>Contuct</h3>
     <p> {{ $setting->address }}<br>
      <strong>Phone: </strong>
      <a href="tel:{{ $setting->phone }}" style="color:#FFF;"><i class="fa fa-phone" style="color:#FFF;"></i> {{ $setting->phone }} </a><br>
      <strong>Email: </strong> 
      <a href="mailto:{{ $setting->email }}" style="color:#FFF;"><i class="fa fa-envelope-open" style="color:#FFF;"></i> {{ $setting->email }} </a><br>
     </p>
    </div>
    <div class="col-lg-3 col-md-6 footer-links">
     <h4>Quick Links</h4>
     <ul>
      <li><i class="bx bx-chevron-right"></i> <a href="#">FAQ</a></li>
      <li><i class="bx bx-chevron-right"></i> <a href="{{ route('contact') }}">Contact</a></li>
      <li><i class="bx bx-chevron-right"></i> <a href="{{ route('about_page') }}">About us</a></li>
      <li><i class="bx bx-chevron-right"></i> <a href="{{ route('why_choose') }}">Why Choose Us</a></li>
      <li><i class="bx bx-chevron-right"></i> <a href="#">Terms of service</a></li>
     </ul>
    </div>
    <div class="col-lg-3 col-md-6 10 footer-links">
     <h4>Our Services</h4>
     <ul>
      <li><i class="bx bx-chevron-right"></i> <a href="{{ route('domain_price') }}">Domain</a></li>
      <li><i class="bx bx-chevron-right"></i> <a href="#">Register Domain</a></li>
      <li><i class="bx bx-chevron-right"></i> <a href="#">Transfer Domain</a></li>
      <li><i class="bx bx-chevron-right"></i> <a href="{{ route('shared_hosting') }}">Shared Hosting</a></li>
      <li><i class="bx bx-chevron-right"></i> <a href="{{ route('reseller_hosting') }}">Reseller Hosting</a></li>
     </ul>
    </div>
    <div class="col-lg-3 col-md-6 10 footer-links">
     <h4>Our Services</h4>
     <ul>
      <li><i class="bx bx-chevron-right"></i> <a href="{{ route('mail') }}">WEB Mail</a></li>
      <li><i class="bx bx-chevron-right"></i> <a href="{{ route('sms') }}">Bulk SMS</a></li>
      <li><i class="bx bx-chevron-right"></i> <a href="{{ route('web_development') }}">Website Development</a></li>
     </ul>
    </div>

   </div>
  </div>
 </div>

 <div class="container">
   <div class="row">
     <div class="col-lg-12">
       <img src="{{ asset('frontend/image/sslcommerz-foo.png') }}" class="img-fluid">
     </div>
   </div>
 </div>
  
 <!-----Copyright ----->
 <div class="container footer-bottom clearfix">
  <div class="copyright">
   <center> &copy {{ Date('Y') }} Copyright <strong> <span><a href="https://incomcloud.com">InCom Cloud</a> </span> </strong>. All Rights Reserved </center>
  </div>
 </div>

</footer>
<!-- End Footer -->