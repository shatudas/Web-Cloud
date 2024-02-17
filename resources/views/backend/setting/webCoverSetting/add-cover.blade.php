@extends('backend.layouts.master')
@section('content')

 <!-- Content  page -->
 <div class="content-wrapper">
  
  <div class="content-header">
   <div class="container-fluid">
    <div class="row mb-2">
     <div class="col-sm-6">
      <h1 class="m-0"> Manage Cover Setting </h1>
     </div><!-- /.col -->
     <div class="col-sm-6">
      <ol class="breadcrumb float-sm-right">
       <li class="breadcrumb-item"><a href="{{ route('home') }}"> Home </a></li>
       <li class="breadcrumb-item active"> Slider Cover Setting </li>
      </ol>
     </div>
    </div>
   </div>
  </div>

  <!-- Main content -->
  <section class="content">
   <div class="container-fluid">
    
    <div class="row justify-content-center">
     <div class="col-8">
      <div class="card">

       <div class="card-header">
        <h3> Add Cover Setting 
         <a href="{{ route('cover.setting.view') }}" class=" btn btn-primary btn-sm float-right"><i class="fa fa-list">
         </i> Cover Setting List </a>
        </h3>
       </div>

       <div class="card-body">
        <form method="POST" action="{{ route('cover.setting.store') }}" enctype="multipart/form-data" id="myForm">
        @csrf

        <div class="form-row">
               
         <div class="form-group col-md-12">
          <label for="cover_id">Select Type <span style="color:red;">*</span> </label>
          <select class="form-control" name="cover_id">
           
           <option value="">Select Type </option>
           <option value="mail"> Mail </option>
           <option value="VPS"> VPS </option>
           <option value="domain_pricing"> Domain Pricing </option>
           <option value="shared_hosting"> Shared Hosting </option>
           <option value="reseller_hosting"> Reseller Hosting </option>
           <option value="sms"> SMS </option>
           <option value="zimbramail">Zimbra Mail</option>
           <option value="office"> Office </option>
           <option value="contact"> Contact </option>
           <option value="web"> Web Development </option>

          </select>
          <font style="color:red">{{ ($errors->has('cover_id'))?($errors->first('cover_id')):'' }}</font>
         </div>

         <div class="form-group col-md-12">
          <label for="title"> Title </label>
          <input type="text" name="title" class="form-control">
         </div>

         <div class="form-group col-md-12">
          <label for="status"> Status <span style="color:red;">*</span> </label>
          <select name="status" class="form-control">
           <option value=""> Select Role </option>
           <option value="0"> Publish </option>
           <option value="1"> Draft </option>
          </select>
          <font style="color:red">{{ ($errors->has('status'))?($errors->first('status')):'' }}</font>
         </div>
           
         <div class="form-group col-md-6" >
          <label for="image"> Image <span style="color:red;">*</span></label>
          <input type="file" name="image" class="form-control" id="image">
          <font style="color:red">{{ ($errors->has('image'))?($errors->first('image')):'' }}</font>
         </div>

         <div class="form-group col-md-6" align="center" style="float:right;">
          <img id="showImage" src="{{ url('upload/No-image.jpg') }}" style="width:90%; height:130px; border:1px solid #ccc; margin-top:30px;">
         </div>

         <div class="form-group col-md-12">
          <input type="submit" value="Upload"  class="btn btn-primary">
         </div>

        </div>
        </form>
       </div>

      </div>
     </div>
    </div>
     
   </div>
  </section>
  
 </div>

  <script>
   $(function () {
    $('#myForm').validate({
     rules: {
      cover_id: {
      required: true,
      },

      status: {
       required: true,
      },

      image: {
       required: true,
      },
      },

      messages:{
       cover_id: {
        required: "Please Type Select",
       },
       status:{
        required: "Please select status",
        },
        image: {
        required: "Please file upload",
        },
      },
       errorElement: 'span',
       errorPlacement: function (error, element) {
         error.addClass('invalid-feedback');
         element.closest('.form-group').append(error);
       },
       highlight: function (element, errorClass, validClass) {
         $(element).addClass('is-invalid');
       },
       unhighlight: function (element, errorClass, validClass) {
         $(element).removeClass('is-invalid');
       }
     });
   });
  </script>


  @endsection