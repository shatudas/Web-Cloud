@extends('backend.layouts.master')
@section('content')

 <!-- Content  page -->
 <div class="content-wrapper">
  
  <div class="content-header">
   <div class="container-fluid">
    <div class="row mb-2">
     <div class="col-sm-6">
      <h1 class="m-0"> Manage FAQ </h1>
     </div><!-- /.col -->
     <div class="col-sm-6">
      <ol class="breadcrumb float-sm-right">
       <li class="breadcrumb-item"><a href="{{ route('home') }}"> Home </a></li>
       <li class="breadcrumb-item active"> Domain FAQ </li>
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
          <h3> Add  FAQ
           <a href="{{ route('FAQ.view') }}" class=" btn btn-primary btn-sm float-right"><i class="fa fa-list"></i> FAQ List </a>
          </h3>
         </div>
         <div class="card-body">
          <form method="POST" action="{{ route('FAQ.update',$editdata->id) }}" enctype="multipart/form-data" id="myForm">
          @csrf

           <div class="form-row">
               
            <div class="form-group col-md-12">
             <label for="question"> Question <span style="color:red;">*</span> </label>
             <input type="text" name="question" class="form-control" value="{{ $editdata->question }}">
             <font style="color:red">{{ ($errors->has('question'))?($errors->first('question')):'' }}</font>
            </div>

            <div class="form-group col-md-12">
             <label for="answer"> answer <span style="color:red;">*</span></label>
             <textarea id="summernote" name="answer" class="form-control" rows="5">{!! $editdata->answer !!}</textarea>
             <font style="color:red">{{ ($errors->has('answer'))?($errors->first('answer')):'' }}</font>
            </div>
      

            <div class="form-group col-md-12">
             <label for="status"> Status <span style="color:red;">*</span> </label>
             <select name="status" class="form-control">
              <option value=""> Select Role </option>
              <option value="0" {{ $editdata->status=="0"?"selected":"" }}> Publish </option>
              <option value="1" {{ $editdata->status=="1"?"selected":"" }}> Draft </option>
             </select>
             <font style="color:red">{{ ($errors->has('status'))?($errors->first('status')):'' }}</font>
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
      question: {
      required: true,
      },
      answer: {
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