
@extends('front_end.layouts.index')
@section('home_page')

 <!-- ======= Hero Section ======= -->
 <section id="host" class="d-flex align-items-center">
  <div class="container">
   <div class="row">
    <div class="col-lg-6 d-flex flex-column justify-content-center pt-4 pt-lg-0 order-2 order-lg-1" data-aos="fade-up" data-aos-delay="200">
     <h1>{{ $contactcover->title }}</h1>
    </div>
    <div class="col-lg-6 order-1 order-lg-2 host-img d-none d-md-inline-block text-black" data-aos="zoom-in" data-aos-delay="200">
     <img src="{{ !empty($contactcover->image)?url('upload/Cover_image/'.$contactcover->image):url('frontend/image/cover_image/contact_Cover.png') }}" class="img-fluid animated p-5" alt="">
    </div>
   </div>
  </div>
 </section>
 <!-- ======= Hero Section ======= -->

 <!-- Contact From section -->
  <div class="container-xxl py-3 px-0 wow fadeInUp" data-wow-delay="0.1s">
   <div class="row g-0">
    <!------contact from----->    
    <div  class="col-md-3"></div>

    <div class="col-md-6 col-12 mt-5">
     <div class="p-3 wow fadeInUp bg-white contactform m-2" data-wow-delay="0.2s" align="center" >
      <h3 class="section-title" >Contact Us</h3>
      <form method="POST" action="{{ route('contact.store') }}" id="myForm">
       @csrf
       <div class="row g-3">
        <div class="col-md-6">
         <div class="form-floating">
          <input type="text" name="name" class="form-control border-re-0" placeholder="Your Name" >
          <font style="color:red">{{ ($errors->has('name'))?($errors->first('name')):'' }}</font>
          <label for="name">Your Name</label>
         </div>
        </div>                     
        <div class="col-md-6">
         <div class="form-floating date" data-target-input="nearest">
          <input type="text" name="phone" class="form-control" placeholder="Phone Number">
          <font style="color:red">{{ ($errors->has('phone'))?($errors->first('phone')):'' }}</font>
          <label for="datetime">Phone Number</label>

         </div>
        </div>
        <div class="col-md-12">
         <div class="form-floating">
          <input type="email" name="email" class="form-control" placeholder="Your Email">
          <font style="color:red">{{ ($errors->has('email'))?($errors->first('email')):'' }}</font>
          <label for="subject">Email</label>
         </div>
        </div>
        <div class="col-md-12">
         <div class="form-floating">
          <input type="text" name="subject" class="form-control" placeholder="Your Subject">
          <font style="color:red">{{ ($errors->has('subject'))?($errors->first('subject')):'' }}</font>
          <label for="subject">Subject</label>
         </div>
        </div>
        <div class="col-12">
         <div class="form-floating">
          <textarea class="form-control" name="message" placeholder="message" style="height: 100px; border-radius:0px;" ></textarea>
          <font style="color:red">{{ ($errors->has('message'))?($errors->first('message')):'' }}</font>
          <label for="message">Message</label>
         </div>
        </div>  
        <div class="col-12">
         <button type="submit" class="btn btn-primary w-100 py-3" >SUBMIT</button>
        </div>
       </div>
      </form>
     </div>
    </div>
   </div>
  </div>


  <!---- Contact  -->
  <div class="container-xxl pt-3 pb-5">
   <div class="container">      
    <div class="row g-4">

      <div class="col-md-4" >
       <div class="contact_body py-4 ">
        <div class="row">
         <div class="col-md-12">
          <h5 class="section-title p-0">Email</h5>
         
          @php
           $email = json_decode($contact->email);
          @endphp

          @foreach($email as $emails)
           <p><a href="mailto:{{ $emails }}"><i class="fa fa-envelope-open"></i> {{ $emails }}</a> </p>
          @endforeach
         </div>

          @php
           $phone = json_decode($contact->phone);
          @endphp

         <div class="col-md-12">
          <h5 class="section-title p-0">Phone</h5>
          @foreach($phone as $phones)
           <p><a href="tel:{{ $phones }}"><i class="fa fa-phone"></i> {{ $phones }}</a></p>
          @endforeach
         </div>

         <div class="col-md-12">
          <h5 class="section-title p-0">Cell</h5>
          
          @php
           $cell = json_decode($contact->cell);
          @endphp

          @foreach($cell as $cells)
           <p><a href="tel:{{ $cells }}"><i class="fa fa-phone"></i> {{ $cells }} </a></p>
          @endforeach
          
         </div>
        </div>
       </div>
      </div>

      <div class="col-md-1"></div>

      <div class="col-md-7">
       <div class="contactMap">
        <iframe src="{{ $contact->locationURL }}"></iframe>
       </div>
      </div>
   
    </div>
   </div>
  </div>
 <!-- Contact End -->

@endsection