@extends('frontend.layouts.index')
@section('home_page')

 <div class="main">

  <!--page header section start-->
  <section class="ptb-120 gradient-bg">
   <div class="container">
    <div class="row justify-content-center">
     <div class="col-12 col-md-7 col-lg-8">
      <div class="hero-content-wrap text-white text-center position-relative">
       <h1 class="text-white mt-5">Contact Us</h1>             
      </div>
     </div>
    </div>
   </div>
  </section>
  <!--page header section end-->

  <!--our contact promo start-->
  <section class="pt-100 ">
   <div class="container">
    <div class="row justify-content-md-center justify-content-sm-center">
    
     <div class="col-md-6 col-lg-4">
      <div class="card single-promo-card text-center p-3 my-3">
       <div class="card-body">
        <div class="pb-2">
         <span class="fas fa-envelope icon-size-lg " style="color:#FA2B32;"></span>
        </div>
        <div class="pt-2 pb-3">
         <h5>Mail Us</h5>
          @php
           $datas = json_decode($contact->email);
          @endphp
          @foreach($datas as $values)
           <p class="mb-0">{{ $values }}</p>
          @endforeach
        </div>
       </div>
      </div>
     </div>
                    
     <div class="col-md-6 col-lg-4">
      <div class="card single-promo-card text-center p-3 my-3">
       <div class="card-body">
        <div class="pb-2">
         <span class="fas fa-headset icon-size-lg " style="color:#FA2B32;"></span>
        </div>
        <div class="pt-2 pb-3">
         <h5>24/7 Live Cell</h5>
         @php
           $datas = json_decode($contact->phone);
          @endphp
          @foreach($datas as $values)
           <p class="mb-0">{{ $values }}</p>
          @endforeach
        </div>
       </div>
      </div>
     </div>

     <div class="col-md-6 col-lg-4">
      <div class="card single-promo-card text-center p-3 my-3">
       <div class="card-body">
        <div class="pb-2">
         <span class="fas fa-map-marker-alt icon-size-lg " style="color:#FA2B32;"></span>
        </div>
        <div class="pt-2 pb-3">
         <h5>Visit Us</h5>
         <p class="mb-0">{{ $contact->address }}</p>
        </div>
       </div>
      </div>
     </div>
    
    </div>
   </div>
  </section>
  <!--our contact promo end-->

  <!--our contact section start-->
  <section class="contact-us-section ptb-100" id="contact">
   <div class="container">
    <div class="row">
     <div class="col-12 pb-3 message-box d-none">
      <div class="alert alert-danger"></div>
     </div>
                    
     <div class="col-md-8 col-lg-9">
      <div class="contact-us-form-wrap shadow-lg gray-light-bg position-relative">

       <form  method="post" action="{{route('contact.store') }}" class="contact-us-form">
       	@csrf
       
        <div class="form-row">
       
        <div class="col-md-9 col-12">
         <h2 class="pb-3">Send Us a Message</h2>
        </div>

        <div class="col-md-9 col-12">
         <div class="form-group"> 
          <input type="text" class="form-control" name="name" placeholder="Enter name" required="required">
          <font style="color:red">{{ ($errors->has('name'))?($errors->first('name')):'' }}</font>
         </div>
        </div>

        <div class="col-md-9 col-12">
         <div class="form-group">
          <input type="email" class="form-control" name="email" placeholder="Enter email" required="required">
          <font style="color:red">{{ ($errors->has('email'))?($errors->first('email')):'' }}</font>
         </div>
        </div>

        <div class="col-md-9 col-12">
         <div class="form-group">
          <input type="text" class="form-control" name="subject" placeholder="Enter subject " required="required">
          <font style="color:red">{{ ($errors->has('subject'))?($errors->first('subject')):'' }}</font>
         </div>
        </div>

        <div class="col-md-9 col-12">
         <div class="form-group">
          <textarea name="message" class="form-control" rows="5" cols="25" placeholder="Message"></textarea>
          <font style="color:red">{{ ($errors->has('message'))?($errors->first('message')):'' }}</font>
         </div>
        </div>

        <div class="col-sm-12 mt-3">
         <button type="submit" class="btn btn-brand-01" >
          Send Message
         </button>
        </div>
       </div>
      </form>
                   
      <div class="contact-us-content text-white shadow-lg  mt-5 mt-md-0 mt-lg-0" style="background: linear-gradient(-30deg,#7B3F51, #E30E18) !important;">
       <h5 class="text-white" align="center">In search of a brilliant business concept?</h5>
        <p class="px-4 pt-3">Feel free to visit us whenever you like; we strive to respond to all inquiries within one business day.</p>
         <ul class="contact-info-list mt-3">
          <li class="d-flex py-3">
          <div class="contact-icon mr-3">
           <span class="fas fa-location-arrow color-accent"></span>
          </div>
          <div class="contact-text">
           <h6 class="mb-1 text-white font-weight-normal">Company Location</h6>
           <small>{{ $contact->address }}</small>
          </div>
         </li>
         <li class="d-flex py-3">
          <div class="contact-icon mr-3">
           <span class="fas fa-envelope color-accent"></span>
          </div>
          <div class="contact-text">
           <h6 class="mb-1 text-white font-weight-normal">Email Address</h6>
           @php
            $datas = json_decode($contact->email);
           @endphp
           @foreach($datas as $values)
            <p class="mb-0">{{ $values }}</p>
           @endforeach
           
          </div>
         </li>
        </ul>
         
       </div>
      </div>
     </div>

    </div>
   </div>
  </section>
  <!--our contact section end-->

        
  <div class="google-map">
   <iframe src="{!! $contact->locationURL !!}" height="450" style="border:0;" allowfullscreen=""></iframe>
  </div>
 
 </div>

@endsection
