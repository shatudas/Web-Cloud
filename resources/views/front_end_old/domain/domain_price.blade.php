@extends('front_end.layouts.index')
@section('home_page')

 <!-- ======= Hero Section ======= -->
 <section id="host" class="d-flex align-items-center">
  <div class="container">
   <div class="row">
    
    <div class="col-lg-6 d-flex flex-column justify-content-center pt-4 pt-lg-0 order-2 order-lg-1" data-aos="fade-up" data-aos-delay="200">
     <h1> {{ $domainCover->title }} </h1>
    </div>
    <div class="col-lg-6 order-1 order-lg-2 host-img" data-aos="zoom-in" data-aos-delay="200">
     <img src="{{ !empty($domainCover->image)?url('upload/Cover_image/'.$domainCover->image):url('frontend/image/cover_image/domain_pricing.png') }}" class="img-fluid animated" alt="">
    </div>

   </div>
  </div>
 </section>
 <!-- ======= Hero Section ======= -->


 <!-- ======= hositng package ======= -->
 <section id="host-package pt-0 mt-2">
   <div class="container mt-5 pt-0 domainbady" data-aos="fade-up" style="background-color:#fff; box-shadow: 0px 0px 2px 0px rgba(199,177,177,0.75); -webkit-box-shadow: 0px 0px 2px 0px rgba(199,177,177,0.75); -moz-box-shadow: 0px 0px 2px 0px rgba(199,177,177,0.75);">

    <div class="section-title mb-0 py-5">
     <h1> Our Domain Pricing </h1>
    </div>

    <div class="row">
     <div class="col-lg-12"  > 

       <table class="table table-striped">
        <thead>
         <tr>
           <th>TLD</th>
           <th>category</th>
           <th>New Price</th>
           <th>Transfer</th>
           <th>Renewal</th>
           <th>Grace Price</th>
         </tr>
        </thead>

        <tbody class="tablebody">

         @foreach($domain as $domains)
         <tr>
          <td class="TLD"><b>{{ $domains->name }}</b></td>
          <td>{{ $domains['DomainCategory']['name'] }}</td>
          <td>৳ {{ $domains->price }} BDT <br><small> {{ $domains->price_duration }} Year </small></td>
          <td>৳ {{ $domains->transferprice }} BDT <br><small> {{ $domains->transfer_duration }} Year </small></td>
          <td>৳ {{ $domains->renewalprice }} BDT <br><small> {{ $domains->renewal_duration }} Year </small></td>
          <td> {{ $domains->graceprice }} Days <br><small> (৳ {{ $domains->grace_duration }} BDT) </small></td>
         </tr>
         @endforeach

        </tbody>
       </table>
      
     </div>
    </div>

   </div>
 </section>
 <!-- End hositng Section -->

@endsection