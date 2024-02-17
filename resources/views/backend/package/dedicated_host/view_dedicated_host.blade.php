@extends('backend.layouts.master')
@section('content')

<!-- Content  page  -->
 <div class="content-wrapper">
 
  <div class="content-header">
   <div class="container-fluid">
    <div class="row mb-2">
     <div class="col-sm-6">
      <h1 class="m-0"> Manage Dedicated Hosting </h1>
     </div>
     <div class="col-sm-6">
      <ol class="breadcrumb float-sm-right">
       <li class="breadcrumb-item"><a href="{{ route('home') }}"> Home </a></li>
       <li class="breadcrumb-item active"> Dedicated Hosting </li>
      </ol>
     </div>
    </div>
   </div>
  </div>

 
  <section class="content">
   <div class="container-fluid">
    <div class="row">
     <div class="col-12">

      <div class="card">

       <div class="card-header">
        <h3>Dedicated Hosting List
         <a href="{{ route('dedicated_hosting.add') }}" class=" btn btn-primary btn-sm float-right">
          <i class="fa fa-plus-circle"></i> Add Dedicated Hosting
         </a>
        </h3>
       </div>
               
       <div class="card-body">
        <table id="example1" class="table table-bordered table-striped">
         <thead>
          <tr>
           <th> Show Sl </th>
           <th> Country </th>
           <th> CPU </th>
           <th> Core </th>
           <th> Storage </th>
           <th> Ram </th>
           <th> Bandwidth </th>
           <th> Price </th>
           <th align="center"> Status </th>
           <th align="center"> Action </th>
          </tr>
         </thead>
         <tbody>
          @foreach($alldata as $key => $type)
          <tr>    
           <td>{{ $key+1 }}</td>

           <td>
            @if($type->country==0)
             Bangladesh
            @elseif($type->country==1)
             India
            @elseif($type->country==2)
             Singapore
            @endif
           </td>

           <td> {{ $type->cpu }} </td>
           <td> {{ $type->core }} </td>
           <td> {{ $type->storage }} </td>
           <td> {{ $type->ram }} </td>
           <td> {{ $type->bandwidth }} </td>
           <td> $ {{ $type->price }} </td>

           <td align="center">
            @if($type->status=='0')
             <a href="{{ route('dedicated_hosting.inacative',$type->id) }}" class="btn btn-primary btn-sm"> Publish </a>
            @else
             <a href="{{ route('dedicated_hosting.active',$type->id) }}" class="btn btn-danger btn-sm"> Draft </a>
            @endif
           </td>

           <td align="center">           
            <a title="Edit" href="{{ route('dedicated_hosting.edit',$type->id) }}" class="btn btn-sm btn-primary">
             <i class="fa fa-edit"></i>
            </a>
            <a title="Delete" href="{{ route('dedicated_hosting.delete',$type->id) }}" id="delete" class="btn btn-sm btn-danger">
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
 

  
@endsection