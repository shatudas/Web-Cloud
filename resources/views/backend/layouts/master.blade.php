@php
$setting =App\model\genarelSetting::first();
@endphp

<!DOCTYPE html>
<html lang="en">
<head>
  <meta charset="utf-8">
  <meta name="viewport" content="width=device-width, initial-scale=1">
  <title> Dashboard || {{ $setting->title }} </title>
 
  <link href="{{ (!empty($setting->favicon))?url('upload/GenarelSetting/'.$setting->favicon):url('frontend/image/setting/HostingFavicon.png') }}" rel="icon">
  <!-- Google Font: Source Sans Pro -->
  <link rel="stylesheet" href="https://fonts.googleapis.com/css?family=Source+Sans+Pro:300,400,400i,700&display=fallback">
  <!-- Ionicons -->
  <link rel="stylesheet" href="https://code.ionicframework.com/ionicons/2.0.1/css/ionicons.min.css">

  <!-- Theme style -->
  <link rel="stylesheet" href="{{ asset('backend') }}/dist/css/adminlte.min.css">
  <!-- Font Awesome -->
  <link rel="stylesheet" href="{{ asset('backend') }}/plugins/fontawesome-free/css/all.min.css">
  <!-- Tempusdominus Bootstrap 4 -->
  <link rel="stylesheet" href="{{ asset('backend') }}/plugins/tempusdominus-bootstrap-4/css/tempusdominus-bootstrap-4.min.css">
  <!-- iCheck -->
  <link rel="stylesheet" href="{{ asset('backend') }}/plugins/icheck-bootstrap/icheck-bootstrap.min.css">
  <!-- JQVMap -->
  <link rel="stylesheet" href="{{ asset('backend') }}/plugins/jqvmap/jqvmap.min.css">
  
  <!-- overlayScrollbars -->
  <link rel="stylesheet" href="{{ asset('backend') }}/plugins/overlayScrollbars/css/OverlayScrollbars.min.css">
  <!-- Daterange picker -->
  <link rel="stylesheet" href="{{ asset('backend') }}/plugins/daterangepicker/daterangepicker.css">
  <!-- summernote -->
  <link rel="stylesheet" href="{{ asset('backend') }}/plugins/summernote/summernote-bs4.min.css">
 
  <!-------datatable-------->
  <link rel="stylesheet" href="{{ asset('backend') }}/plugins/datatables-bs4/css/dataTables.bootstrap4.min.css">
  <link rel="stylesheet" href="{{ asset('backend') }}/plugins/datatables-responsive/css/responsive.bootstrap4.min.css">
  <link rel="stylesheet" href="{{ asset('backend') }}/plugins/datatables-buttons/css/buttons.bootstrap4.min.css">

  {{-- <script src="{{ asset('backend') }}/plugins/jquery/jquery.min.js"></script> --}}
  <script type="text/javascript" src="https://cdnjs.cloudflare.com/ajax/libs/jquery/3.6.4/jquery.min.js"></script>
  <!------notify---->
  <script type="text/javascript" src="https://cdnjs.cloudflare.com/ajax/libs/notify/0.4.2/notify.min.js"></script>
  <!-----sweetalert------>
  <script src="//cdn.jsdelivr.net/npm/sweetalert2@11"></script>

  <style type="text/css">
    .notify-corner
    {
      z-index:10000;
    }
  </style>

  @stack('css')

</head>

<body class="hold-transition sidebar-mini layout-fixed">
<div class="wrapper">

  <!-- Preloader -->
  <div class="preloader flex-column justify-content-center align-items-center">
    <img class="animation__shake" src="{{ (!empty($setting->favicon))?url('upload/GenarelSetting/'.$setting->favicon):url('frontend/image/setting/HostingFavicon.png') }}" alt=" InCom Cloud" height="60" width="60">
  </div>

   <!-- Navbar -->
   <nav class="main-header navbar navbar-expand navbar-white navbar-light">
    <!-- Left navbar links -->
    <ul class="navbar-nav">
      <li class="nav-item">
        <a class="nav-link" data-widget="pushmenu" href="#" role="button"><i class="fas fa-bars"></i></a>
      </li>
      <li class="nav-item d-none d-sm-inline-block">
        <a href="{{ route('home') }}" class="nav-link">Home</a>
      </li>
    </ul>

    <!-- Right navbar links -->
    <ul class="navbar-nav ml-auto">
     <li class="nav-item dropdown">
      <a class="nav-link" data-toggle="dropdown" href="#">
       <span class=""><i class="fas fa-cog"></i> Setting </span>
      </a>
      <div class="dropdown-menu dropdown-menu-lg dropdown-menu-right">
       <a href="#" class="dropdown-item">{{ Auth::User()->name }}</a>
       <div class="dropdown-divider"></div>
       <a href="{{route('profiles.view')}}" class="dropdown-item"> Profile </a>
       <a href="{{route('profiles.password.view')}}" class="dropdown-item"> Change Password </a>

        <a href="{{ route('logout') }}" onclick="event.preventDefault(); document.getElementById('logout-form').submit();" class="dropdown-item">Logout</a>
        <form id="logout-form" action="{{ route('logout') }}" method="POST" style="display: none;">
         @csrf
        </form>
      </div>
     </li>
    </ul>
   </nav>
   <!-- /.navbar -->

   <!-- Main Sidebar Container -->
   <aside class="main-sidebar sidebar-dark-primary elevation-4">
    <!-- Brand Logo -->
    <center>
     <a href="{{route('home')}}" class="brand-link">
      @if($setting->logo == !Null)
       <img src="{{ (!empty($setting->logo))?url('upload/GenarelSetting/'.$setting->logo):'' }}" alt="InCom Cloud" class="brand-image img-circle elevation-3" align="align-items-center">
       @else
        <span class="brand-text text-white">{{ $setting->name }}</span>
      @endif
     </a>
    </center>

     <!-- Sidebar -->
     <div class="sidebar">
       <!-- Sidebar user panel (optional) -->
       <div class="user-panel mt-3 pb-3 mb-3 d-flex">
         <div class="image">
           <img src="{{!empty(Auth::user()->image)?url('upload/user_images/'.Auth::user()->image):url('upload/No-image.jpg')}}" class="img-circle elevation-2" >
         </div>
         <div class="info">
           <a href="{{route('profiles.view')}}" class="d-block">{{ Auth::User()->name }}</a>
         </div>
       </div>

       @include('backend.layouts.sidebar')
     </div>
     <!-- /.sidebar -->
   </aside>

   @yield('content')


   <!----notification script---->
   @if(session()->has('success'))
    <script type="text/javascript">
      $(function(){
        $.notify("{{session()->get('success')}}",{globalPosition:'top right',className:'sucess'});
      })
    </script>
   @endif

   @if(session()->has('error'))
    <script type="text/javascript">
      $(function(){
        $.notify("{{session()->get('error')}}",{globalPosition:'top right',className:'error'});
      })
    </script>
   @endif

   <footer class="main-footer">
     <strong>{{ date('Y') }} &copy; Copyright  <a href="https://incomcloud.com" target="_blank">Web Cloud</a>.</strong> All rights reserved.
     <div class="float-right d-none d-sm-inline-block">
       <small>Development By: Shatu Chandra Das </small>
     </div>
   </footer>

  <!-- Control Sidebar -->
  <aside class="control-sidebar control-sidebar-dark"></aside>
</div>
<!-- ./wrapper -->



<!-- jQuery UI 1.11.4 -->
<script src="{{ asset('backend') }}/plugins/jquery-ui/jquery-ui.min.js"></script>
<!-- Resolve conflict in jQuery UI tooltip with Bootstrap tooltip -->
<script>
  $.widget.bridge('uibutton', $.ui.button)
</script>
<!-- Bootstrap 4 -->
<script src="{{ asset('backend') }}/plugins/bootstrap/js/bootstrap.bundle.min.js"></script>
<!-- ChartJS -->
<script src="{{ asset('backend') }}/plugins/chart.js/Chart.min.js"></script>
<!-- Sparkline -->
<script src="{{ asset('backend') }}/plugins/sparklines/sparkline.js"></script>
<!-- JQVMap -->
<script src="{{ asset('backend') }}/plugins/jqvmap/jquery.vmap.min.js"></script>
<script src="{{ asset('backend') }}/plugins/jqvmap/maps/jquery.vmap.usa.js"></script>
<!-- jQuery Knob Chart -->
<script src="{{ asset('backend') }}/plugins/jquery-knob/jquery.knob.min.js"></script>
<!-- daterangepicker -->
<script src="{{ asset('backend') }}/plugins/moment/moment.min.js"></script>
<script src="{{ asset('backend') }}/plugins/daterangepicker/daterangepicker.js"></script>
<!-- Tempusdominus Bootstrap 4 -->
<script src="{{ asset('backend') }}/plugins/tempusdominus-bootstrap-4/js/tempusdominus-bootstrap-4.min.js"></script>
<!-- Summernote -->
<script src="{{ asset('backend') }}/plugins/summernote/summernote-bs4.min.js"></script>
<!-- overlayScrollbars -->
<script src="{{ asset('backend') }}/plugins/overlayScrollbars/js/jquery.overlayScrollbars.min.js"></script>
<!-- AdminLTE App -->
<script src="{{ asset('backend') }}/dist/js/adminlte.js"></script>
<!-- AdminLTE for demo purposes -->
<script src="{{ asset('backend') }}/dist/js/demo.js"></script>
<!-- AdminLTE dashboard demo (This is only for demo purposes) -->
<script src="{{ asset('backend') }}/dist/js/pages/dashboard.js"></script>
<!-----data table------>
<script src="{{ asset('backend') }}/plugins/datatables/jquery.dataTables.min.js"></script>
<script src="{{ asset('backend') }}/plugins/datatables-bs4/js/dataTables.bootstrap4.min.js"></script>
<script src="{{ asset('backend') }}/plugins/datatables-responsive/js/dataTables.responsive.min.js"></script>
<script src="{{ asset('backend') }}/plugins/datatables-responsive/js/responsive.bootstrap4.min.js"></script>
<script src="{{ asset('backend') }}/plugins/datatables-buttons/js/dataTables.buttons.min.js"></script>
<script src="{{ asset('backend') }}/plugins/datatables-buttons/js/buttons.bootstrap4.min.js"></script>
<script src="{{ asset('backend') }}/plugins/jszip/jszip.min.js"></script>
<script src="{{ asset('backend') }}/plugins/pdfmake/pdfmake.min.js"></script>
<script src="{{ asset('backend') }}/plugins/pdfmake/vfs_fonts.js"></script>
<script src="{{ asset('backend') }}/plugins/datatables-buttons/js/buttons.html5.min.js"></script>
<script src="{{ asset('backend') }}/plugins/datatables-buttons/js/buttons.print.min.js"></script>
<script src="{{ asset('backend') }}/plugins/datatables-buttons/js/buttons.colVis.min.js"></script>

<!-- jquery-validation -->
<script src="{{ asset('backend') }}/plugins/jquery-validation/jquery.validate.min.js"></script>
<script src="{{ asset('backend') }}/plugins/jquery-validation/additional-methods.min.js"></script>

<!-------PDF & Copy & Excel------->
<script>
  $(function () {
    $("#example1").DataTable({
      "responsive": true, "lengthChange": false, "autoWidth": false,
      "buttons": ["copy", "csv", "excel", "pdf", "print", "colvis"]
    }).buttons().container().appendTo('#example1_wrapper .col-md-6:eq(0)');
    $('#example2').DataTable({
      "paging": true,
      "lengthChange": false,
      "searching": false,
      "ordering": true,
      "info": true,
      "autoWidth": false,
      "responsive": true,
    });
  });
</script>

<!--------delete-------->
<script type="text/javascript">
 $(function()
  {
   $(document).on('click','#delete',function(e)
    {
     e.preventDefault();
     var link = $(this).attr("href");
     Swal.fire({
     title: 'Are you sure?',
     text: "Delete this data !",
     icon: 'warning',
     showCancelButton: true,
     confirmButtonColor: '#3085d6',
     cancelButtonColor: '#d33',
     confirmButtonText: 'Yes, delete it!'
    }).then((result) => {
    if (result.isConfirmed){
    window.location.href = link;
    Swal.fire(
     'Deleted!',
     'Your file has been deleted.',
     'success')
    }
   })
  });
 });
</script>

<!-----image show script------->
<script type="text/javascript">
  $(document).ready(function(){
   $('#image').change(function(e){
   var reader = new FileReader();
   reader.onload=function(e){
    $('#showImage').attr('src',e.target.result);
   } 
   reader.readAsDataURL(e.target.files['0']);
   });
  });
</script>


<script type="text/javascript">
  $(document).ready(function(){
   $('#imageOne').change(function(e){
   var reader = new FileReader();
   reader.onload=function(e){
    $('#showImageOne').attr('src',e.target.result);
   } 
   reader.readAsDataURL(e.target.files['0']);
   });
  });
</script>

<!----Summernote 1-------->
<script>
  $(function () {
    $('#summernote').summernote()
    CodeMirror.fromTextArea(document.getElementById("codeMirrorDemo"), {
      mode: "htmlmixed",  
      height: "150px;",  
      theme: "monokai"
    });
  })
</script>

<!----Summernote 2-------->
<script>
  $(function () {
    $('#summernote1').summernote()
    CodeMirror.fromTextArea(document.getElementById("codeMirrorDemo"), {
     mode: "htmlmixed",  
     theme: "monokai"
    });
  })
</script>

<!----Summernote 3-------->
<script>
  $(function () {
    $('#summernote2').summernote()

    CodeMirror.fromTextArea(document.getElementById("codeMirrorDemo"), {
      mode: "htmlmixed",  
      theme: "monokai"
    });
  })
</script>

<!----Summernote 4-------->
<script>
  $(function () {
    $('#summernote3').summernote()
    CodeMirror.fromTextArea(document.getElementById("codeMirrorDemo"), {
      mode: "htmlmixed",  
      theme: "monokai"
    });
  })
</script>

@stack('js')
</body>
</html>
