@extends('backend.layouts.master')
@section('content')

 <!-- Content  page -->
 <div class="content-wrapper">
  
  <div class="content-header">
   <div class="container-fluid">
    <div class="row mb-2">
     <div class="col-sm-6">
      <h1 class="m-0"> VPS Services </h1>
     </div>
     <div class="col-sm-6">
      <ol class="breadcrumb float-sm-right">
       <li class="breadcrumb-item"><a href="{{ route('home') }}"> Home </a></li>
       <li class="breadcrumb-item active"> VPS Services </li>
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
          <h3> Edit VPS Services
           <a href="{{ route('VPS.view') }}" class=" btn btn-primary btn-sm float-right"><i class="fa fa-list"></i> Service Type List </a>
          </h3>
         </div>

         <div class="card-body">
          <form method="POST" action="{{ route('VPS.update',$editdata->id) }}" enctype="multipart/form-data" id="myForm">
          @csrf

           <div class="form-row">

            <div class="form-group col-md-6">
             <label for="country"> Country <span style="color:red;">*</span> </label>
             <select name="country" class="form-control">
              <option value=""> Select Country </option>
              <option value="0" {{ $editdata->country=="0"?"selected":"" }}> Bangladesh </option>
              <option value="1" {{ $editdata->country=="1"?"selected":"" }}> India </option>
              <option value="2" {{ $editdata->country=="2"?"selected":"" }}> Singapore </option>
             </select>
             <font style="color:red">{{ ($errors->has('country'))?($errors->first('country')):'' }}</font>
            </div>
               
            <div class="form-group col-md-6">
             <label for="cpu"> CPU <span style="color:red;">*</span> </label>
             <input type="text" name="cpu" class="form-control" value="{{ $editdata->cpu }}" placeholder="Enter CPU Range">
             <font style="color:red">{{ ($errors->has('cpu'))?($errors->first('cpu')):'' }}</font>
            </div>

            <div class="form-group col-md-6">
             <label for="ram"> RAM <span style="color:red;">*</span> </label>
             <input type="text" name="ram" class="form-control" value="{{ $editdata->ram }}" placeholder="Enter RAM Range">
             <font style="color:red">{{ ($errors->has('ram'))?($errors->first('ram')):'' }}</font>
            </div>

            <div class="form-group col-md-6">
             <label for="speed"> Clock Speed <span style="color:red;">*</span> </label>
             <input type="text" name="speed" class="form-control" value="{{ $editdata->speed }}" placeholder="Clock Speed">
             <font style="color:red">{{ ($errors->has('speed'))?($errors->first('speed')):'' }}</font>
            </div>

            <div class="form-group col-md-6">
             <label for="storage"> Storage <span style="color:red;">*</span> </label>
             <input type="text" name="storage" class="form-control" value="{{ $editdata->storage }}" placeholder="Enter Storage">
             <font style="color:red">{{ ($errors->has('storage'))?($errors->first('storage')):'' }}</font>
            </div>

             <div class="form-group col-md-6">
             <label for="bandwidth"> Bandwidth <span style="color:red;">*</span> </label>
             <input type="text" name="bandwidth" class="form-control" value="{{ $editdata->bandwidth }}" placeholder="Enter Bandwidth">
             <font style="color:red">{{ ($errors->has('bandwidth'))?($errors->first('bandwidth')):'' }}</font>
            </div>

            <div class="form-group col-md-6">
             <label for="price"> Price <span style="color:red;">*</span> </label>
             <input type="text" name="price" class="form-control" value="{{ $editdata->price }}" placeholder="Enter package Price">
             <font style="color:red">{{ ($errors->has('price'))?($errors->first('price')):'' }}</font>
            </div>

            <div class="form-group col-md-6">
             <label for="url"> Package URL <span style="color:red;">*</span> </label>
             <input type="text" name="url" class="form-control" value="{{ $editdata->url }}" placeholder="Enter Bandwidth">
             <font style="color:red">{{ ($errors->has('url'))?($errors->first('url')):'' }}</font>
            </div>


            <div class="form-group col-md-6">
             <label for="status"> Status <span style="color:red;">*</span> </label>
             <select name="status" class="form-control">
              <option value=""> Select Role </option>
              <option value="0" {{ $editdata->status=="0"?"selected":"" }}> Publish </option>
              <option value="1" {{ $editdata->status=="0"?"selected":"" }}> Draft </option>
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
      country: {
      required: true,
      },
      cpu: {
      required: true,
      },
      ram: {
      required: true,
      },
      cpu: {
      required: true,
      },
      speed: {
      required: true,
      },
      storage: {
      required: true,
      },
      price: {
      required: true,
      },
      bandwidth: {
      required: true,
      },
      url: {
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