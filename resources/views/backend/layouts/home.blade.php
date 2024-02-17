@extends('backend.layouts.master')
@section('content')

@php
 // $vardata=App\User::count();
 // $service=App\model\servicesmanage::count();
 // $Package=App\model\PackageManage::count();
 // $massage=App\model\ContactMassage::count();
 
@endphp

 <div class="content-wrapper">

  <div class="content-header">
   <div class="container-fluid">
    <div class="row mb-2">
     <div class="col-sm-6">
      <h1 class="m-0">Dashboard</h1>
     </div>
     <div class="col-sm-6">
      <ol class="breadcrumb float-sm-right">
       <li class="breadcrumb-item"><a href="#">Home</a></li>
       <li class="breadcrumb-item active">Dashboard</li>
      </ol>
     </div>
    </div>
   </div>
  </div>

  <section class="content">
   <div class="container-fluid">
        
   <div class="row">

    {{-- <div class="col-lg-3 col-6">
     <div class="small-box bg-info">
      <div class="inner">
       <h3>{{($vardata)}}</h3>
       <p> Active User </p>
      </div>
      <div class="icon">
       <i class="fa fa-user text-white"></i>
      </div>
      <a href="{{route('user.view')}}" class="small-box-footer">More info <i class="fas fa-arrow-circle-right"></i></a>
     </div>
    </div>

    <div class="col-lg-3 col-6">
     <div class="small-box bg-success">
      <div class="inner">
       <h3>{{($service)}}</h3>
       <p> Services </p>
      </div>
      <div class="icon">
       <i class="fa fa-compass text-white"></i>
      </div>
      <a href="{{route('services.manege.view')}}" class="small-box-footer">More info <i class="fas fa-arrow-circle-right"></i></a>
     </div>
    </div>

    <div class="col-lg-3 col-6">
     <div class="small-box bg-purple">
      <div class="inner">
       <h3>{{($Package)}}</h3>
       <p> Package </p>
      </div>
      <div class="icon">
       <i class="fa fa-gift text-white"></i>
      </div>
      <a href="{{route('package.manege.view')}}" class="small-box-footer">More info <i class="fas fa-arrow-circle-right"></i></a>
     </div>
    </div>

    <div class="col-lg-3 col-6">
     <div class="small-box bg-warning">
      <div class="inner">
       <h3>{{($massage)}}</h3>
       <p> Client Massage </p>
      </div>
      <div class="icon">
       <i class="fas fa-comment-alt text-white"></i>
      </div> 
      <a href="{{route('user.contact.view')}}" class="small-box-footer">More info <i class="fas fa-arrow-circle-right"></i></a>
     </div>
    </div>
 --}}


    



   </div>
        
   </div>
  </section>
 </div>
 
 @endsection