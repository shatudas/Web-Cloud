@extends('frontend.layouts.index')
@section('home_page')

 <div class="main">

  <!--page header section start-->
  <section class="ptb-120 gradient-bg">
   <div class="container">
    <div class="row justify-content-center">
     <div class="col-12 col-md-7 col-lg-8">
      <div class="hero-content-wrap text-white text-center position-relative">
       <h1 class="text-white mt-5"> FAQ </h1>             
      </div>
     </div>
    </div>
   </div>
  </section>

  <!--page header section end-->
  <section id="faq" class="ptb-100 ">
   <div class="container">
    <div class="row justify-content-center">
     <div class="col-md-9 col-lg-8">
      <div class="section-heading text-center mb-5">
       <h2>Frequently Asked Queries</h2>
      </div>
     </div>
    </div>

    
    
    <div class="row align-items-center">
     <div class="col-md-12 col-lg-12">
      <div id="accordion" class="accordion faq-wrap">

       @if(isset($faq))
        @foreach($faq as $key => $faqdata)

        <div class="card mb-3">
         <a class="card-header " data-toggle="collapse" href="#collapse{{$key}}" aria-expanded="false">
          <h6 class="mb-0 d-inline-block">{{ $faqdata->question }}</h6>
         </a>
         <div id="collapse{{$key}}" class="collapse" data-parent="#accordion" style="">
          <div class="card-body white-bg">
           <p>{!! $faqdata->answer !!}</p>
          </div>
         </div>
        </div>


        @endforeach
        @endif

                            
      </div>
     </div>
    </div>
   </div>
  </section>

 </div>


@endsection
