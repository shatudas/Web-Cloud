 
 <!-- header section start -->
 <div id="header-top-bar" class="top-bar top-bar-bg pb-1">
  <div class="container">
   <div class="row align-items-center justify-content-center">
    
    <div class="col-md-6 col-lg-5 d-none d-lg-block d-md-block">
     <ul class="list-unstyled list-inline topbar-nav topbar-nav-left">
      <li class="list-inline-item top-bar-icon-color">
      	<i class="far fa-phone mr-1"></i> Support: <a href="{{ $setting->phone }}"> {{ $setting->phone }}</a>
      </li>
      <li class="list-inline-item top-bar-icon-color">
      	<i class="far fa-envelope mr-1"></i> Mail: <a href="{{ $setting->email }}"> {{ $setting->email }} </a>
      </li>
     </ul>
    </div>
                
    <div class="col-md-6 col-lg-7">
     <ul class="list-unstyled list-inline topbar-nav topbar-nav-right text-lg-right">
      <li class="list-inline-item"><a href="#"> About </a></li>
      <li class="list-inline-item"><a href="#"> Blog </a></li>
     </ul>
    </div>

   </div>
  </div>
 </div>

 <!--header section start-->
 <header id="header" class="header-main">
  <div id="logoAndNav" class="main-header-menu-wrap header-color fixed-top">
   <div class="container">

    <nav class="js-mega-menu navbar navbar-expand-md header-nav">
     <a class="navbar-brand pt-0" href="{{ Route('/') }}">
     	<!-- <img src="assets/img/pre-gmh-logo.png" alt="logo" class="img-fluid"/> -->
     	<h2> Web <span style="color:#FA2B32;"> Cloud </span></h2>
     </a>
                    
      <!--responsive toggle button start-->
      <button class="navbar-toggler btn" type="button" data-toggle="collapse" data-target="#navBar"aria-controls="navBar" aria-expanded="false" aria-label="Toggle navigation">
       <span id="hamburgerTrigger">
        <span class="ti-menu"></span>
       </span>
      </button>
                   
      <!--main menu start-->
      <div id="navBar" class="collapse navbar-collapse">
       <ul class="navbar-nav ml-auto main-navbar-nav">


        <li class="nav-item custom-nav-item">
         <a class="nav-link custom-nav-link" href="{{ Route('/') }}">Home</a>
        </li>    
                        
	       <li class="nav-item hs-has-mega-menu custom-nav-item position-relative" data-position="center">
	        <a id="domainMegaMenu" class="nav-link custom-nav-link main-link-toggle" href="" aria-haspopup="true" aria-expanded="false">Domain</a>
	         
	         <!-- Demos - Mega Menu -->
	         <div class="hs-mega-menu main-sub-menu" style="width: 330px" aria-labelledby="domainMegaMenu">
	          <div class="row no-gutters">

	           <div class="col-md-12 col-sm-12">
	            <div class="menu-item-wrap p-3">
	     
	             <div class="title-with-icon-item">
	              <a class="title-with-icon-link" target="_blank" href="#">
	               <div class="d-flex align-items-center pb-1">
	                <i class="fas fa-globe mr-2 color-primary"></i>
	                <span class="u-header__promo-title">Domain Registration</span>
	               </div>
	              </a>
	             </div>
	           
	             <div class="title-with-icon-item">
	              <a class="title-with-icon-link" target="_blank" href="#">
	               <div class="d-flex align-items-center pb-1">
	                <i class="fas fa-exchange-alt mr-2 color-accent"></i>
	                <span class="u-header__promo-title">Domain Transfer</span>
	               </div>
	              </a>
	             </div>
	   
	             <div class="title-with-icon-item">
	              <a class="title-with-icon-link" href="#">
	               <div class="d-flex align-items-center pb-1">
	                <i class="fas fa-copyright mr-2 instagram-color"></i>
	                <span class="u-header__promo-title">Domain Reseller</span>
	               </div>
	              </a>
	             </div>
	                                                
	            </div>
	           </div>

	          </div>
	         </div>
	       </li>
                          
	       <li class="nav-item custom-nav-item">
	        <a class="nav-link custom-nav-link" href="{{ route('shared_hosting',['country' => 0]) }}">Web Hosting</a>
	       </li>           
      
		      <li class="nav-item hs-has-mega-menu custom-nav-item position-relative" data-position="center">
		       <a id="aboutMegaMenu" class="nav-link custom-nav-link main-link-toggle" href="#" aria-haspopup="true" aria-expanded="false">VPS</a>

		       <div class="hs-mega-menu main-sub-menu" style="width: 330px" aria-labelledby="domainMegaMenu">
	          <div class="row no-gutters">

	           <div class="col-md-12 col-sm-12">
	            <div class="menu-item-wrap p-3">
	     
	           
	             <div class="title-with-icon-item">
	              <a class="title-with-icon-link" href="{{ route('vps_hosting',['country' => 0]) }}">
	               <div class="d-flex align-items-center pb-1">
	                <i class="fab fa-linux mr-2 color-primary" ></i>
	                <span class="u-header__promo-title"> KVM Linux VPS</span>
	               </div>
	              </a>
	             </div>
	   
	             <div class="title-with-icon-item">
	              <a class="title-with-icon-link" href="#">
	               <div class="d-flex align-items-center pb-1">
	                <i class="fab fa-windows mr-2 instagram-color"></i>
	                <span class="u-header__promo-title"> VPS Reseller</span>
	               </div>
	              </a>
	             </div>
	                                                
	            </div>
	           </div>

	          </div>
	         </div>
		      </li>
		                          
			     <li class="nav-item custom-nav-item">
			      <a class="nav-link custom-nav-link" href="{{ route('dedicated_server_hosting',['country' => 0]) }}">Servers</a>
			     </li>          

			     <li class="nav-item custom-nav-item">
			      <a class="nav-link custom-nav-link" href="{{ route('resller_hosting',['country' => 0]) }}">Reseller</a>
			     </li>
                            
						  <li class="nav-item custom-nav-item">
						   <a class="nav-link custom-nav-link" href="{{ route('contact') }}">Contact</a>
						  </li>          
                           
        <li class="nav-item header-nav-last-item d-flex align-items-center">
         <a class="btn btn-brand-03 animated-btn" href="#" >
          <span class="fa fa-user pr-2"></span> Client Area
         </a>
        </li>

       </ul>
      </div>

    </nav>
   </div>
  </div>
 </header>
 <!--header section end-->