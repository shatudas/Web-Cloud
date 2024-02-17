@extends('backend.layouts.master')
 @section('content')

 <!-- Content  page -->
 <div class="content-wrapper">
  
  <div class="content-header">
   <div class="container-fluid">
    <div class="row mb-2">
     <div class="col-sm-6">
      <h3 class="m-0"> Home Cover </h3>
     </div>
     <div class="col-sm-6">
      <ol class="breadcrumb float-sm-right">
       <li class="breadcrumb-item"><a href="{{ route('home') }}"> Home </a></li>
       <li class="breadcrumb-item active"> Home Cover </li>
      </ol>
     </div>
    </div>
   </div>
  </div>

  <section class="content">
   <div class="container-fluid">
    <div class="row justify-content-center ">
     <div class="col-8" >
      <div class="card">
          
       <div class="card-header">
        <h4> Home Cover </h4>
       </div>

       <div class="card-body">
        <form method="POST" action="{{ route('homecover.update',$editdata->id) }}" enctype="multipart/form-data" id="myForm">
        @csrf


        <div class="form-row">

         <div class="form-group col-md-12">
          <label for="notification"> Notification </label>
          <input type="text" name="notification" value="{{ $editdata->notification }}" class="form-control" placeholder="Offer Notification....">
         </div>

         <div class="form-group col-md-12">
          <label for="title"> Title </label>
          <input type="text" name="title" value="{{ $editdata->title }}" class="form-control" placeholder="Cover Title....">
         </div>

         <div class="form-group col-md-12">
          <label for="sub_title"> Sub Title </label>
          <textarea class="form-control" rows="2" name="sub_title" placeholder="Title Detalis....">{!! $editdata->sub_title !!}</textarea>
         </div>

         <div class="form-group col-md-5">
          <label for="image"> Cover Image </label>
          <input type="file" name="image" id="image">
          <font style="color:red">{{ ($errors->has('image'))?($errors->first('image')):'' }}</font>
         </div>
         <div class="form-group col-md-7" align="right">
          <img id="showImage" src="{{ !empty($editdata->image)?url('upload/Image/Home_Cover/'.$editdata->image):url('upload/No-image.jpg') }}" style="width:220px; height:190px; margin-top:30px; border:1px solid #f3f3f3;" >
         </div>

        </div>
 
        <div class="form-group col-md-12">
         <button type="submit" class="btn btn-primary">Submit</button>
        </div>

        </form>
       </div>
 
      </div>
     </div> 
    </div>
   </div>
  </section>
  
 </div>
 
 @endsection