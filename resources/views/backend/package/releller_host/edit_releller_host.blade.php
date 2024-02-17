@extends('backend.layouts.master')
@section('content')

 <!-- Content  page -->
 <div class="content-wrapper">
  
  <div class="content-header">
   <div class="container-fluid">
    <div class="row mb-2">
     <div class="col-sm-6">
      <h1 class="m-0"> VPS Reseller Hosting </h1>
     </div><!-- /.col -->
     <div class="col-sm-6">
      <ol class="breadcrumb float-sm-right">
       <li class="breadcrumb-item"><a href="{{ route('home') }}"> Home </a></li>
       <li class="breadcrumb-item active"> VPS Reseller Hosting </li>
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
          <h3> Edit Reseller Hosting
           <a href="{{ route('resller_host.view') }}" class=" btn btn-primary btn-sm float-right"><i class="fa fa-list"></i> Service Type List </a>
          </h3>
         </div>

         <div class="card-body">
          <form method="POST" action="{{ route('resller_host.update',$editdata->id) }}" enctype="multipart/form-data" id="myForm">
         {{--    {{ route('dedicated_hosting.update',$editdata->id) }} --}}
          @csrf

           <div class="form-row">

            <div class="form-group col-md-6">
             <label for="country"> Select Country <span style="color:red;">*</span> </label>
             <select name="country" class="form-control">
              <option value=""> Select Country </option>
              <option value="0" {{ $editdata->country=="0"?"selected":"" }} > Bangladesh </option>
              <option value="1" {{ $editdata->country=="1"?"selected":"" }}> India </option>
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
             <label for="cpanel"> CPanel <span style="color:red;">*</span> </label>
             <input type="number" name="cpanel" class="form-control" value="{{ $editdata->cpanel }}" placeholder="Enter Number of Cpanel ">
             <font style="color:red">{{ ($errors->has('cpanel'))?($errors->first('cpanel')):'' }}</font>
            </div>

            <div class="form-group col-md-6">
             <label for="bandwidth"> Bandwidth <span style="color:red;">*</span> </label>
             <input type="number" name="bandwidth" class="form-control" value="{{ $editdata->bandwidth }}" placeholder="Enter Bandwidth">
             <font style="color:red">{{ ($errors->has('bandwidth'))?($errors->first('bandwidth')):'' }}</font>
            </div>

            <div class="form-group col-md-6">
             <label for="storage"> Storage <span style="color:red;">*</span> </label>
             <input type="number" name="storage" class="form-control" value="{{ $editdata->storage }}" placeholder="Enter Storage">
             <font style="color:red">{{ ($errors->has('storage'))?($errors->first('storage')):'' }}</font>
            </div>

            <div class="form-group col-md-6">
             <label for="ip"> Dedicated IP <span style="color:red;">*</span> </label>
             <input type="number" name="ip" value="{{ $editdata->ip }}" class="form-control" placeholder="Enter Dedicated IP">
             <font style="color:red">{{ ($errors->has('ip'))?($errors->first('ip')):'' }}</font>
            </div>

            <div class="form-group col-md-6">
             <label for="license"> WHMCS License Users <span style="color:red;">*</span> </label>
             <select name="license" class="form-control">
              <option value=""> Select </option>
              <option value="1" {{ $editdata->license=="1"?"selected":"" }}> Yes </option>
              <option value="0" {{ $editdata->license=="0"?"selected":"" }}> No </option>
             </select>
             <font style="color:red">{{ ($errors->has('license'))?($errors->first('license')):'' }}</font>
            </div>

            <div class="form-group col-md-6">
             <label for="litespeed"> LiteSpeed Server <span style="color:red;">*</span> </label>
             <select name="litespeed" class="form-control">
              <option value=""> Select </option>
              <option value="1" {{ $editdata->litespeed=="1"?"selected":"" }}> Yes </option>
              <option value="0" {{ $editdata->litespeed=="0"?"selected":"" }}> No </option>
             </select>
             <font style="color:red">{{ ($errors->has('litespeed'))?($errors->first('litespeed')):'' }}</font>
            </div>

            <div class="form-group col-md-6">
             <label for="whm_panel"> WHM/cPanel <span style="color:red;">*</span> </label>
             <select name="whm_panel" class="form-control">
              <option value=""> Select </option>
              <option value="1" {{ $editdata->whm_panel=="1"?"selected":"" }}> Yes </option>
              <option value="0" {{ $editdata->whm_panel=="0"?"selected":"" }}> No </option>
             </select>
             <font style="color:red">{{ ($errors->has('whm_panel'))?($errors->first('whm_panel')):'' }}</font>
            </div>

            <div class="form-group col-md-6">
             <label for="backup"> Backup<span style="color:red;">*</span> </label>
             <select name="backup" class="form-control">
              <option value=""> Select </option>
              <option value="1" {{ $editdata->backup=="1"?"selected":"" }}> Yes </option>
              <option value="0" {{ $editdata->backup=="0"?"selected":"" }}> No </option>
             </select>
             <font style="color:red">{{ ($errors->has('backup'))?($errors->first('backup')):'' }}</font>
            </div>

            <div class="form-group col-md-6">
             <label for="softaculous"> Softaculous Auto script installer <span style="color:red;">*</span> </label>
             <select name="softaculous" class="form-control">
              <option value=""> Select </option>
              <option value="1" {{ $editdata->softaculous=="1"?"selected":"" }}> Yes </option>
              <option value="0" {{ $editdata->softaculous=="0"?"selected":"" }}> No </option>
             </select>
             <font style="color:red">{{ ($errors->has('softaculous'))?($errors->first('softaculous')):'' }}</font>
            </div>

            <div class="form-group col-md-6">
             <label for="imunify"> Imunify 360<span style="color:red;">*</span> </label>
             <select name="imunify" class="form-control">
              <option value=""> Select </option>
              <option value="1" {{ $editdata->imunify=="1"?"selected":"" }}> Yes </option>
              <option value="0" {{ $editdata->imunify=="0"?"selected":"" }}> No </option>
             </select>
             <font style="color:red">{{ ($errors->has('imunify'))?($errors->first('imunify')):'' }}</font>
            </div>

            <div class="form-group col-md-6">
             <label for="cloud_license"> Cloud Linux<span style="color:red;">*</span> </label>
             <select name="cloud_license" class="form-control">
              <option value=""> Select </option>
              <option value="1" {{ $editdata->cloud_license=="1"?"selected":"" }}> Yes </option>
              <option value="0" {{ $editdata->cloud_license=="0"?"selected":"" }}> No </option>
             </select>
             <font style="color:red">{{ ($errors->has('cloud_license'))?($errors->first('cloud_license')):'' }}</font>
            </div>

            <div class="form-group col-md-6">
             <label for="price"> Price <span style="color:red;">*</span> </label>
             <input type="text" name="price" class="form-control" value="{{ $editdata->price }}" placeholder="Enter package Price">
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
      cpanel: {
      required: true,
      },
      bandwidth: {
      required: true,
      },
      storage: {
      required: true,
      },
      ip: {
      required: true,
      },
      license: {
      required: true,
      },
      litespeed: {
      required: true,
      },
      backup: {
      required: true,
      },
      whm_panel: {
      required: true,
      },
      softaculous: {
      required: true,
      },
      imunify: {
      required: true,
      },
      cloud_license: {
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