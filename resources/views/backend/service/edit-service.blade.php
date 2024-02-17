@extends('backend.layouts.master')
@section('content')

 <!-- Content  page -->
 <div class="content-wrapper">
  
  <div class="content-header">
   <div class="container-fluid">
    <div class="row mb-2">
     <div class="col-sm-6">
      <h1 class="m-0"> Manage Services</h1>
     </div><!-- /.col -->
     <div class="col-sm-6">
      <ol class="breadcrumb float-sm-right">
       <li class="breadcrumb-item"><a href="{{ route('home') }}"> Home </a></li>
       <li class="breadcrumb-item active"> Manage Services </li>
      </ol>
     </div>
    </div>
   </div>
  </div>

  <!-- Main content -->
  <section class="content">
   <div class="container-fluid mt-5">
    
      <div class="row justify-content-center">
       <div class="col-8">
        <div class="card">

         <div class="card-header">
          <h3> Add Manage Services
           <a href="{{ route('service.view') }}" class=" btn btn-primary btn-sm float-right"><i class="fa fa-list"></i> Service Type List </a>
          </h3>
         </div>
         <div class="card-body">
          <form method="POST" action="{{ route('service.update',$editdata->id) }}" enctype="multipart/form-data" id="myForm">
          @csrf

           <div class="form-row">

            <div class="form-group col-md-6">
             <label for="name">Services Name <span style="color:red;">*</span> </label>
             <select name="name" class="form-control">
              <option value=""> Select Service </option>
              <option value="0" {{ $editdata->status=="0"?"selected":"" }}> Web Hosting </option>
              <option value="1" {{ $editdata->status=="1"?"selected":"" }}> Reseller Hosting </option>
              <option value="2" {{ $editdata->status=="2"?"selected":"" }}> VPN </option>
              <option value="3" {{ $editdata->status=="3"?"selected":"" }}> Dedicated Server </option>
             </select>
             <font style="color:red">{{ ($errors->has('name'))?($errors->first('name')):'' }}</font>
            </div>
               
            <div class="form-group col-md-6">
             <label for="price"> Package Minimum Price <span style="color:red;">*</span> </label>
             <input type="number" name="price" class="form-control" value="{{ $editdata->price }}" placeholder="Service Price">
             <font style="color:red">{{ ($errors->has('price'))?($errors->first('price')):'' }}</font>
            </div>

             <div class="form-group col-md-6">
             <label for="image"> Image <span style="color:red;">*</span></label>
             <input type="file" name="image" class="form-control" id="image">
             <font style="color:red">{{ ($errors->has('image'))?($errors->first('image')):'' }}</font>
            </div>

            <div class="form-group col-md-6">
             <label for="status"> Status <span style="color:red;">*</span> </label>
             <select name="status" class="form-control">
              <option value=""> Select Role </option>
              <option value="0" {{ $editdata->status=="0"?"selected":"" }}> Publish </option>
              <option value="1" {{ $editdata->status=="1"?"selected":"" }}> Draft </option>
             </select>
             <font style="color:red">{{ ($errors->has('status'))?($errors->first('status')):'' }}</font>
    
            </div>

            <div class="form-group col-md-6">
             <img id="showImage" src="{{ !empty($editdata->image)?url('upload/Service/'.$editdata->image):url('upload/No-image.jpg') }}" style="width:150px; height:130px; border:1px solid #ccc;">

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

      name: {
      required: true,
      },
      price: {
      required: true,
      },
      status: {
       required: true,
      },

      },

      messages:{

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