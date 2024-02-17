
 <!-- -- Header-- -->
 <header id="header" class="fixed-top pt-1 pb-1">
  <div class="container d-flex align-items-center">
   
   <!------logo------->
   <a href="{{ asset('/') }}" class="logo me-auto">
   	@if($setting->logo == !Null)
   	 <img src="{{ (!empty($setting->logo))?url('upload/GenarelSetting/'.$setting->logo):'' }}" alt="" class="img-fluid"/>
    @else
     <h2> {{ $setting->name }} </h2>
    @endif
   </a>

   <!--navbar-->
	  <nav id="navbar" class="navbar">
	     
		  <ul>
		   <li><a class="scrollto" href="{{ route('/') }}">Home</a></li>
		   <li class="dropdown"><a href="#"><span>Domain</span> <i class="bi bi-chevron-down"></i></a>
		    <ul>
		     <li><a href="{{ route('domain_price') }}">Domain Price</a></li>
		     <li><a href="#">Register Domain</a></li>
		     <li><a href="#">Transfer Domain</a></li>
		    </ul>
		   </li>
		   <li><a class="scrollto" href="{{ route('mail') }}">Mail</a></li>
		   <li><a class="scrollto" href="{{ route('VPS') }}">VPS</a></li>
		   <li class="dropdown"><a href="#"><span>Hosting</span> <i class="bi bi-chevron-down"></i></a>
			   <ul>
			    <li><a href="{{ route('shared_hosting') }}">Shared Hosting</a></li>
			    <li><a href="{{ route('reseller_hosting') }}">Reseller Hosting</a></li>
			   </ul>
		   </li>
		   <li><a class="scrollto" href="{{ route('sms') }}">SMS</a></li>
		   <li class="dropdown"><a href="#"><span>Services</span> <i class="bi bi-chevron-down"></i></a>
			   <ul>
			    <li><a href="{{ route('zimbraMail') }}">Zimbra Mail</a></li>
			    <li><a href="{{ route('ofice365') }}">Offece 365</a></li>
			    <li><a href="{{ route('web_development') }}">Website Development</a></li>

			   </ul>
		   </li>
		   <li><a class="scrollto" href="{{ route('contact') }}">Contact</a></li>
		  </ul>
	   <i class="bi bi-list mobile-nav-toggle"></i>
	  </nav>
	  
  </div>
 </header>
 <!-- End Header -->