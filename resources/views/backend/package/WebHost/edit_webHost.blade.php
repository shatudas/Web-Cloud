@extends('backend.layouts.master')
@section('content')

 <!-- Content  page -->
 <div class="content-wrapper">
  
  <div class="content-header">
   <div class="container-fluid">
    <div class="row mb-2">
     <div class="col-sm-6">
      <h1 class="m-0"> Web Host Hosting </h1>
     </div><!-- /.col -->
     <div class="col-sm-6">
      <ol class="breadcrumb float-sm-right">
       <li class="breadcrumb-item"><a href="{{ route('home') }}"> Home </a></li>
       <li class="breadcrumb-item active"> Web Host Hosting </li>
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
          <h3> Web Host Hosting
           <a href="{{ route('web_hosting.view') }}" class=" btn btn-primary btn-sm float-right"><i class="fa fa-list"></i> Service Type List </a>
          </h3>
         </div>

         <div class="card-body">
          <form method="POST" action="{{ route('web_hosting.update',$editdata->id) }}" enctype="multipart/form-data" id="myForm">
          @csrf

           <div class="form-row">

            <div class="form-group col-md-6">
             <label for="country"> Select Country <span style="color:red;">*</span> </label>
             <select name="country" class="form-control">
              <option value=""> Select Country </option>
              <option value="0" {{ $editdata->country=="0"?"selected":"" }}> Bangladesh </option>
              <option value="1"  {{ $editdata->country=="1"?"selected":"" }}> India </option>
              <option value="2" {{ $editdata->country=="2"?"selected":"" }}> Singapore </option>
             </select>
             <font style="color:red">{{ ($errors->has('country'))?($errors->first('country')):'' }}</font>
            </div>
               
            <div class="form-group col-md-6">
             <label for="name"> Name <span style="color:red;">*</span> </label>
             <input type="text" name="name" class="form-control" value="{{ $editdata->name }}" placeholder="Enter Package Name">
             <font style="color:red">{{ ($errors->has('name'))?($errors->first('name')):'' }}</font>
            </div>

            <div class="form-group col-md-6">
             <label for="storage"> Storage <span style="color:red;">*</span> </label>
             <input type="number" name="storage" class="form-control" value="{{ $editdata->storage}}" placeholder="Enter Storage " min="0">
             <font style="color:red">{{ ($errors->has('storage'))?($errors->first('storage')):'' }}</font>
            </div>

            <div class="form-group col-md-6">
             <label for="bandwidth"> Bandwidth <span style="color:red;">*</span> </label>
             <input type="number" name="bandwidth" class="form-control" value="{{ $editdata->bandwidth }}" placeholder="Enter Bandwidth" min="0">
             <font style="color:red">{{ ($errors->has('bandwidth'))?($errors->first('bandwidth')):'' }}</font>
            </div>

            <div class="form-group col-md-6">
             <label for="addom_domain"> Addom Domain <span style="color:red;">*</span> </label>
             <input type="number" name="addom_domain" class="form-control" value="{{ $editdata->addom_domain }}"  placeholder="Enter Sub Domain" min="0">
             <font style="color:red">{{ ($errors->has('addom_domain'))?($errors->first('addom_domain')):'' }}</font>
            </div>

            <div class="form-group col-md-6">
             <label for="subdomain"> Sub Domain <span style="color:red;">*</span> </label>
             <input type="number" name="subdomain" class="form-control" value="{{ $editdata->subdomain }}" placeholder="Enter Sub Domain" min="0">
             <font style="color:red">{{ ($errors->has('subdomain'))?($errors->first('subdomain')):'' }}</font>
            </div>

            <div class="form-group col-md-6">
             <label for="mail"> Mail <span style="color:red;">*</span> </label>
             <input type="number" name="mail" class="form-control" value="{{ $editdata->mail }}" placeholder="Enter Mail Account" min="0">
             <font style="color:red">{{ ($errors->has('mail'))?($errors->first('mail')):'' }}</font>
            </div>

            <div class="form-group col-md-6">
             <label for="sql">SQL <span style="color:red;">*</span> </label>
             <input type="number" name="sql" class="form-control" value="{{ $editdata->sql }}" placeholder="Enter SQL" min="0"> 
             <font style="color:red">{{ ($errors->has('sql'))?($errors->first('sql')):'' }}</font>
            </div>

            <div class="form-group col-md-6">
             <label for="data_taffic">Data Taffic <span style="color:red;">*</span> </label>
             <input type="number" name="data_taffic" class="form-control" value="{{ $editdata->data_taffic }}" placeholder="Data Taffic..." min="0"> 
             <font style="color:red">{{ ($errors->has('data_taffic'))?($errors->first('data_taffic')):'' }}</font>
            </div>

            <div class="form-group col-md-6">
             <label for="os">Oparating System <span style="color:red;">*</span> </label>
             <input type="text" name="os" class="form-control" value="{{ $editdata->os }}" placeholder="Oparating System...">
             <font style="color:red">{{ ($errors->has('os'))?($errors->first('os')):'' }}</font>
            </div>

            <div class="form-group col-md-6">
             <label for="backup">backup System <span style="color:red;">*</span> </label>
             <input type="text" name="backup" class="form-control" value="{{ $editdata->backup }}"  placeholder="Backup System...">
             <font style="color:red">{{ ($errors->has('backup'))?($errors->first('backup')):'' }}</font>
            </div>

            <div class="form-group col-md-6">
             <label for="price"> Price <span style="color:red;">*</span> </label>
             <input type="number" name="price" class="form-control" value="{{ $editdata->price }}" placeholder="Enter package Price" min="0">
             <font style="color:red">{{ ($errors->has('price'))?($errors->first('price')):'' }}</font>
            </div>

            <div class="form-group col-md-6">
             <label for="url"> Package URL <span style="color:red;">*</span> </label>
             <input type="text" name="url" class="form-control" value="{{ $editdata->url }}" placeholder="Enter Package URL">
             <font style="color:red">{{ ($errors->has('url'))?($errors->first('url')):'' }}</font>
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
      name: {
      required: true,
      },
      storage: {
      required: true,
      },
      bandwidth: {
      required: true,
      },
      addom_domain: {
      required: true,
      },
      subdomain: {
      required: true,
      },
      mail: {
      required: true,
      },
      sql: {
      required: true,
      },
      data_taffic: {
      required: true,
      },
      os: {
      required: true,
      },
      backup: {
      required: true,
      },
      price: {
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