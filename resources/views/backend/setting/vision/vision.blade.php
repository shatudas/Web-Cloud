@extends('backend.layouts.master')
@section('content')

 <!-- Content  page -->
 <div class="content-wrapper">
  
  <div class="content-header">
   <div class="container-fluid">
    <div class="row mb-2">
     <div class="col-sm-6">
      <h1 class="m-0"> Manage Vision </h1>
     </div>
     <div class="col-sm-6">
      <ol class="breadcrumb float-sm-right">
       <li class="breadcrumb-item"><a href="{{ route('home') }}"> Home </a></li>
       <li class="breadcrumb-item active"> Vision </li>
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
          <h3> Vision </h3>
         </div>
         <div class="card-body">
          <form method="POST" action="{{ route('vision.update',$editData->id) }}" enctype="multipart/form-data" id="myForm">
          @csrf

           <div class="form-row">

            <div class="form-group col-md-12">
             <label for="title"> Mision </label>
             <textarea id="summernote" name="discriptsion" class="form-control" rows="5">{!! $editData->discriptsion !!}</textarea>
             <font style="color:red">{{ ($errors->has('discriptsion'))?($errors->first('discriptsion')):'' }}</font>
            </div>

            <div class="form-group col-md-6">
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

      discriptsion: {
       required: true,
      },
      },

      messages:{

       discriptsion:{
        required: "Please Enter Discriptsion",
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