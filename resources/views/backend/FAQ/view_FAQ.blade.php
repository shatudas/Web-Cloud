@extends('backend.layouts.master')
@section('content')

<!-- Content  page  -->
<div class="content-wrapper">
 
 <div class="content-header">
  <div class="container-fluid">
   <div class="row mb-2">
    <div class="col-sm-6">
     <h1 class="m-0"> Manage FAQ </h1>
    </div>
    <div class="col-sm-6">
     <ol class="breadcrumb float-sm-right">
      <li class="breadcrumb-item"><a href="{{ route('home') }}"> Home </a></li>
      <li class="breadcrumb-item active"> Package Domain Pricing </li>
     </ol>
    </div>
   </div>
  </div>
 </div>

 <!-- Main content -->
 <section class="content">
  <div class="container-fluid">
   <div class="row">
    <div class="col-12">

     <div class="card">

      <div class="card-header">
       <h3> FAQList
        <a href="{{ route('FAQ.add') }}" class=" btn btn-primary btn-sm float-right">
         <i class="fa fa-plus-circle"></i> Add FAQ
        </a>
       </h3>
      </div>
              
      <div class="card-body">
       <table id="example1" class="table table-bordered table-striped">
        <thead>
         <tr>
          <th> Show Sl </th>
          <th align="center"> Question </th>
          <th align="center"> Answer  </th>
          <th align="center"> Status</th>
          <th align="center"> Action </th>
         </tr>
        </thead>
        <tbody>
         @foreach($alldata as $key => $data)
         <tr>    
          <td>{{ $key+1 }}</td>
          <td>  {{ $data->question }}</td>
          <td>  {!! $data->answer !!}</td>

          <td align="center">
           @if($data->status=='0')
            <a href="{{ route('FAQ.inacative',$data->id) }}" class="btn btn-primary btn-sm"> Publish </a>
           @else
            <a href="{{ route('FAQ.active',$data->id) }}" class="btn btn-danger btn-sm"> Draft </a>
           @endif
          </td>    
     
          <td>           
           <a title="Edit" href="{{ route('FAQ.edit',$data->id) }}" class="btn btn-sm btn-primary">
            <i class="fa fa-edit"></i>
           </a>
           <a title="Delete" href="{{ route('FAQ.delete',$data->id) }}" id="delete" class="btn btn-sm btn-danger">
            <i class="fa fa-trash"></i>
           </a>
          </td> 

         </tr>
         @endforeach
         
        </tbody>
       </table>
      </div>
     
     </div>   
    </div>
   </div>
  </div>
 </section>

</div>
<!-- /.content-wrapper -->


  
  


  @endsection