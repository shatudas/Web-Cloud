 @extends('backend.layouts.master')
@section('content')

 <!-- Content  page -->
 <div class="content-wrapper">
  
  <div class="content-header">
   <div class="container-fluid">
    <div class="row mb-2">
     <div class="col-sm-6">
      <h1 class="m-0"> Service Commitment </h1>
     </div><!-- /.col -->
     <div class="col-sm-6">
      <ol class="breadcrumb float-sm-right">
       <li class="breadcrumb-item"><a href="{{ route('home') }}"> Home </a></li>
       <li class="breadcrumb-item active"> Service Commitment </li>
      </ol>
     </div>
    </div>
   </div>
  </div>

  <!-- Main content -->
  <section class="content">
   <div class="container-fluid mt-5">
    
      <div class="row justify-content-center">
       <div class="col-10">
        <div class="card">

         <div class="card-header">
          <h3> Add Service Commitment
           <a href="{{ route('service-committed.view') }}" class=" btn btn-primary btn-sm float-right"><i class="fa fa-list"></i> Commitment List </a>
          </h3>
         </div>

         <div class="card-body">
          <form method="POST" action="{{ route('service-committed.store') }}" enctype="multipart/form-data" id="myForm">
          @csrf

           <div class="form-row">

            <div class="form-group col-md-12">
             <label for="name"> Title <span style="color:red;">*</span></label>
             <input type="text" name="name" class="form-control" placeholder="Enter Service Commitment">
             <font style="color:red">{{ ($errors->has('name'))?($errors->first('name')):'' }}</font>
            </div>

            <div class="form-group col-md-12">
             <label for="description"> Discriptsion <span style="color:red;">*</span></label>
             <textarea id="summernote" name="description" class="form-control" rows="5"></textarea>
             <font style="color:red">{{ ($errors->has('description'))?($errors->first('description')):'' }}</font>
            </div>

            <div class="form-group col-md-6">
             <label for="image"> Image </label>
             <input type="file" name="image" class="form-control" id="image">
             <font style="color:red">{{ ($errors->has('image'))?($errors->first('image')):'' }}</font>
            </div>

        
            <div class="form-group col-md-6">
             <label for="status"> Status <span style="color:red;">*</span> </label>
             <select name="status" class="form-control">
              <option value=""> Select Role </option>
              <option value="0"> Publish </option>
              <option value="1"> Draft </option>
             </select>
             <font style="color:red">{{ ($errors->has('status'))?($errors->first('status')):'' }}</font>
            </div>

           <div class="form-group col-md-6">
             <img id="showImage" src="{{ url('upload/No-image.jpg') }}" style="width:120px; height:120px; border:1px solid #ccc;">
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

      discriptsion: {
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