@extends('backend.layouts.master')
@section('content')

 <!-- Content  page -->
 <div class="content-wrapper bg-white" >
  
  <div class="content-header">
   <div class="container-fluid">
    <div class="row mb-2">
     <div class="col-sm-6">
      <h1 class="m-0"> Manage Contact </h1>
     </div><!-- /.col -->
     <div class="col-sm-6">
      <ol class="breadcrumb float-sm-right">
       <li class="breadcrumb-item"><a href="{{ route('home') }}"> Home </a></li>
       <li class="breadcrumb-item active"> Contact </li>
      </ol>
     </div>
    </div>
   </div>
  </div>

 <section class="content">
  <div class="container-fluid">
   <div class="row justify-content-center ">
    <div class="col-8 bg-light" >
     <div class="card">
          
      <div class="card-header">
       <h3> Contact </h3>
      </div>

      <div class="card-body">
       <form method="POST" action="{{ route('contact.update',$editdata ->id) }}" enctype="multipart/form-data" id="myForm" >
        @csrf

        <div class="form-row">

         <div class="form-group col-md-12">
          <label for="name"> Address </label>
          <input type="text" name="address" class="form-control" placeholder="Enter Name" value="{{ $editdata->address }}" >
          <font style="color:red">{{ ($errors->has('address'))?($errors->first('address')):'' }}</font>
         </div>

         <div class="form-group col-md-6">
          <label for="name"> Location </label>
          <textarea name="locationURL" class="form-control" rows="6" placeholder=" Location URL">
            {!! $editdata->locationURL !!}
           </textarea>
          <font style="color:red">{{ ($errors->has('location'))?($errors->first('location')):'' }}</font>
         </div>

         <div class="form-group col-md-6" style="margin-top:30px;">
          <iframe src="{{ $editdata->locationURL }}"></iframe>
         </div>

        </div>

        <!-----email----->
         @php
          $datas = json_decode($editdata->email);
         @endphp

         @if( $datas != null)
          <label for="name"> Email </label><br>
          @foreach($datas as $edit)
          <div class="delete_whole_extra_add" id="delete_whole_extra_add">
           <div class="add_item">
            <div class="form-row">

             <div class="form-group col-md-10">
              
              <input type="text" name="email[]" value="{{ $edit }}" class="form-control" placeholder="Enter Amount..">
             </div>

             <div class="form-group col-md-2">
              <div class="form-row"  style="float:right;">
               <span class="btn btn-success addeventmore" >
                <i class="fa fa-plus-circle"></i>
               </span>
               <span class="btn btn-danger removeeventmore" style="margin-left:4px;">
                <i class="fa fa-minus-circle"></i>
               </span>
              </div>
             </div>

            </div>
           </div>
          </div>
          @endforeach
          @else
          <div class="delete_whole_extra_add" id="delete_whole_extra_add">
           <div class="add_item">
            <div class="form-row">

             <div class="form-group col-md-10">
              <label for="name"> Email </label>
              <input type="text" name="email[]" value="" class="form-control" placeholder="Enter Amount..">
             </div>

             <div class="form-group col-md-2">
              <div class="form-row"  style="float:right; margin-top:30px;">
               <span class="btn btn-success addeventmore" >
                <i class="fa fa-plus-circle"></i>
               </span>
               <span class="btn btn-danger removeeventmore" style="margin-left:4px;">
                <i class="fa fa-minus-circle"></i>
               </span>
              </div>
             </div>

            </div>
           </div>
          </div>
         @endif

        <!------Phone------>
         @php
          $datas = json_decode($editdata->phone);
         @endphp

         @if( $datas != null)
          <label for="name"> Phone </label><br>
          @foreach($datas as $edit)
          <div class="delete_whole_extra_add_one" id="delete_whole_extra_add_one">
           <div class="add_item_one">
            <div class="form-row">
             <div class="form-group col-md-10">
              <input type="text" name="phone[]" value="{{ $edit }}" class="form-control" placeholder="Enter Amount..">
             </div>
             <div class="form-group col-md-2">
              <div class="form-row"  style="float:right;">
               <span class="btn btn-success addeventmore_one" >
                <i class="fa fa-plus-circle"></i>
               </span>
               <span class="btn btn-danger removeeventmore_one" style="margin-left:4px;">
                <i class="fa fa-minus-circle"></i>
               </span>
              </div>
             </div>
            </div>
           </div>
          </div>
          @endforeach
          @else
          <div class="delete_whole_extra_add_one" id="delete_whole_extra_add_one">
           <div class="add_item_one">
            <div class="form-row">
             <div class="form-group col-md-10">
              <label for="name"> Phone </label><br>
              <input type="text" name="phone[]" value="" class="form-control" placeholder="Enter Amount..">
             </div>
             <div class="form-group col-md-2">
              <div class="form-row"  style="float:right; margin-top:30px;">
               <span class="btn btn-success addeventmore_one" >
                <i class="fa fa-plus-circle"></i>
               </span>
               <span class="btn btn-danger removeeventmore_one" style="margin-left:4px;">
                <i class="fa fa-minus-circle"></i>
               </span>
              </div>
             </div>
            </div>
           </div>
          </div>
         @endif


         <!------Phone------>
         @php
          $datas = json_decode($editdata->cell);
         @endphp

         @if( $datas != null)
          <label for="name"> Cell </label><br>
          @foreach($datas as $edit)
          <div class="delete_whole_extra_add_two" id="delete_whole_extra_add_two">
           <div class="add_item_two">
            <div class="form-row">
             <div class="form-group col-md-10">
              <input type="text" name="cell[]" value="{{ $edit }}" class="form-control" placeholder="Enter Amount..">
             </div>
             <div class="form-group col-md-2">
              <div class="form-row" style="float:right;">
               <span class="btn btn-success addeventmore_two" >
                <i class="fa fa-plus-circle"></i>
               </span>
               <span class="btn btn-danger removeeventmore_two" style="margin-left:4px;">
                <i class="fa fa-minus-circle"></i>
               </span>
              </div>
             </div>
            </div>
           </div>
          </div>
          @endforeach
          @else
          <div class="delete_whole_extra_add_two" id="delete_whole_extra_add_two">
           <div class="add_item_two">
            <div class="form-row">
             <div class="form-group col-md-10">
              <label for="name"> Cell </label>
              <input type="text" name="cell[]" value="" class="form-control" placeholder="Enter Amount..">
             </div>
             <div class="form-group col-md-2">
              <div class="form-row"  style="float:right; margin-top:30px;">
               <span class="btn btn-success addeventmore_two" >
                <i class="fa fa-plus-circle"></i>
               </span>
               <span class="btn btn-danger removeeventmore_two" style="margin-left:4px;">
                <i class="fa fa-minus-circle"></i>
               </span>
              </div>
             </div>
            </div>
           </div>
          </div>
         @endif

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



<!----array div ----->

 <div class="card-body" style="visibility:hidden; border:0px; box-shadow:none; background-color:none;">
  <div class="whole_extra_item_add" id="whole_extra_item_add">
   <div class="delete_whole_extra_add" id="delete_whole_extra_add"> 
    <div class="form-row">
     <div class="form-group col-md-10">
      <input type="text" name="email[]" class="form-control" placeholder="Package Feature">
     </div>
     <div class="form-group col-md-2" >
      <div class="form-row" style="float:right;">
       <span class="btn btn-success addeventmore">
        <i class="fa fa-plus-circle"></i>
       </span>
       <span class="btn btn-danger removeeventmore" style="margin-left:4px;">
        <i class="fa fa-minus-circle"></i>
       </span>
      </div>
     </div>    
    </div>
   </div>
  </div>
 </div>

 <div class="card-body" style="visibility:hidden; border:0px; box-shadow:none; background-color:none;">
  <div class="whole_extra_item_add_one" id="whole_extra_item_add_one">
   <div class="delete_whole_extra_add_one" id="delete_whole_extra_add_one">
    <div class="form-row">
     <div class="form-group col-md-10">
      <input type="text" name="phone[]" class="form-control" placeholder="Package Feature">
     </div>
     <div class="form-group col-md-2" >
      <div class="form-row" style="float:right;">
       <span class="btn btn-success addeventmore_one">
        <i class="fa fa-plus-circle"></i>
       </span>
       <span class="btn btn-danger removeeventmore_one" style="margin-left:4px;">
        <i class="fa fa-minus-circle"></i>
       </span>
      </div>
     </div>  
    </div>
   </div>
  </div>
 </div>

 <div class="card-body" style="visibility:hidden; border:0px; box-shadow:none; background-color:none;">
  <div class="whole_extra_item_add_two" id="whole_extra_item_add_two">
   <div class="delete_whole_extra_add_two" id="delete_whole_extra_add_two">   
    <div class="form-row">
     <div class="form-group col-md-10">
      <input type="text" name="cell[]" class="form-control" placeholder="Package Feature">
     </div>
     <div class="form-group col-md-2" >
      <div class="form-row" style="float:right;">
       <span class="btn btn-success addeventmore_two">
        <i class="fa fa-plus-circle"></i>
       </span>
       <span class="btn btn-danger removeeventmore_two" style="margin-left:4px;">
        <i class="fa fa-minus-circle"></i>
       </span>
      </div>
     </div>
    </div>
   </div>
  </div>
 </div>


  <!------multiple Function show------>
  <script>
   $(document).ready(function (){
    var counter = 0;
    $(document).on("click",".addeventmore", function() {
     var whole_extra_item_add = $("#whole_extra_item_add").html();
     $(this).closest(".add_item").append(whole_extra_item_add);
     counter++;
    });
    $(document).on("click", ".removeeventmore", function (event){
     $(this).closest(".delete_whole_extra_add").remove();
     counter -=1
    });
   });
  </script>

  <script>
   $(document).ready(function (){
    var counter = 0;
    $(document).on("click",".addeventmore_one", function() {
     var whole_extra_item_add = $("#whole_extra_item_add_one").html();
     $(this).closest(".add_item_one").append(whole_extra_item_add);
     counter++;
    });
    $(document).on("click", ".removeeventmore_one", function (event){
     $(this).closest(".delete_whole_extra_add_one").remove();
     counter -=1
    });
   });
  </script>

  <script>
   $(document).ready(function (){
    var counter = 0;
    $(document).on("click",".addeventmore_two", function() {
     var whole_extra_item_add = $("#whole_extra_item_add_two").html();
     $(this).closest(".add_item_two").append(whole_extra_item_add);
     counter++;
    });
    $(document).on("click", ".removeeventmore_two", function (event){
     $(this).closest(".delete_whole_extra_add_two").remove();
     counter -=1
    });
   });
  </script>

  <script>
   $(function () {
    $('#myForm').validate({
     rules: {
      address: {
      required: true,
      },

      locationURL: {
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