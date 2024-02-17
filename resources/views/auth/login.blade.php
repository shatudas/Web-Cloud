
<!doctype html>
<html lang="en">
 <head>
  <title>Login || Hosting</title>
  <link href="{{ asset('login_data/image/HostingFavicon.png') }}" rel="icon">
  <meta charset="utf-8">
  <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">
   <link href="https://fonts.googleapis.com/css?family=Lato:300,400,700&display=swap" rel="stylesheet">
   <link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/font-awesome/4.7.0/css/font-awesome.min.css">
   <link rel="stylesheet" href="{{ asset('login_data/css/style.css') }}">
  </head>
  <body>

  <section class="ftco-section">
   <div class="container">
    
    <div class="row justify-content-center">
     <div class="col-md-6 col-lg-4">
      <div class="login-wrap pt-3 pb-2">
       <div class="img d-flex align-items-center justify-content-center" style="background-image: url({{ asset('login_data/image/login_image.png') }});"></div>
       <form method="POST" action="{{ route('login') }}">
       @csrf
       @if($errors->any())
        <div class="alert alert-danger alert-dismissible">
         <button type="button" class="close" data-dismiss="alert">&times;</button>
         @foreach($errors->all() as $error)
          <strong>{{$error}}</strong><br>
         @endforeach
        </div>
       @endif
       <div class="form-group">
        <div class="icon d-flex align-items-center justify-content-center">
         <span class="fa fa-user"></span>
        </div>
        <input type="email" id="email" class="form-control @error('email') is-invalid @enderror" name="email" value="{{ old('email') }}" placeholder="Username" required>
       </div>
       <div class="form-group">
        <div class="icon d-flex align-items-center justify-content-center">
         <span class="fa fa-lock"></span>
        </div>
        <input type="password" id="password" class="form-control @error('password') is-invalid @enderror" name="password" autocomplete="current-password" placeholder="password" required>
       </div>
       <div class="form-group d-md-flex">
        <div class="w-100 text-md-right">
         <a href="#">Forgot Password</a>
        </div>
       </div>
       <div class="form-group">
        <button type="submit" name="button" class="btn form-control btn-primary rounded submit px-3">Login</button>
       </div>
      </form>
     </div>
    </div>
   </div>

  </div>
 </section>

  <script src="{{ asset('login_data/js/jquery.min.js') }}"></script>
  <script src="{{ asset('login_data/js/popper.js') }}"></script>
  <script src="{{ asset('login_data/js/bootstrap.min.js') }}"></script>
  <script src="{{ asset('login_data/js/main.js') }}"></script>

  </body>
</html>










{{-- <!DOCTYPE html>
<html>
    
<head>
    <title>login Legenda IT </title>
    <link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.1.3/css/bootstrap.min.css" integrity="sha384-MCw98/SFnGE8fJT3GXwEOngsV7Zt27NXFoaoApmYm81iuXoPkFOJwJ8ERdknLPMO" crossorigin="anonymous">
    <script src="https://ajax.googleapis.com/ajax/libs/jquery/3.3.1/jquery.min.js"></script>
    <link rel="stylesheet" href="https://use.fontawesome.com/releases/v5.6.1/css/all.css" integrity="sha384-gfdkjb5BdAXd+lj+gudLWI+BXq4IuLW5IT+brZEZsLFm++aCMlF1V92rMkPaX4PP" crossorigin="anonymous">
     <script src="https://cdn.jsdelivr.net/npm/bootstrap@4.6.1/dist/js/bootstrap.bundle.min.js"></script>
    <style type="text/css">
            body,
        html {
            margin: 0;
            padding: 0;
            height: 100%;
            background: #60a3bc !important;
        }
        .user_card {
            height: 400px;
            width: 350px;
            margin-top: auto;
            margin-bottom: auto;
            background: #f39c12;
            position: relative;
            display: flex;
            justify-content: center;
            flex-direction: column;
            padding: 10px;
            box-shadow: 0 4px 8px 0 rgba(0, 0, 0, 0.2), 0 6px 20px 0 rgba(0, 0, 0, 0.19);
            -webkit-box-shadow: 0 4px 8px 0 rgba(0, 0, 0, 0.2), 0 6px 20px 0 rgba(0, 0, 0, 0.19);
            -moz-box-shadow: 0 4px 8px 0 rgba(0, 0, 0, 0.2), 0 6px 20px 0 rgba(0, 0, 0, 0.19);
            border-radius: 5px;

        }
        .brand_logo_container {
            position: absolute;
            height: 170px;
            width: 170px;
            top: -75px;
            border-radius: 50%;
            background: #60a3bc;
            padding: 10px;
            text-align: center;
        }
        .brand_logo {
            height: 150px;
            width: 150px;
            border-radius: 50%;
            border: 2px solid white;
        }
        .form_container {
            margin-top: 100px;
        }
        .login_btn {
            width: 100%;
            background: #c0392b !important;
            color: white !important;
        }
        .login_btn:focus {
            box-shadow: none !important;
            outline: 0px !important;
        }
        .login_container {
            padding: 0 2rem;
        }
        .input-group-text {
            background: #c0392b !important;
            color: white !important;
            border: 0 !important;
            border-radius: 0.25rem 0 0 0.25rem !important;
        }
        .input_user,
        .input_pass:focus {
            box-shadow: none !important;
            outline: 0px !important;
        }
        .custom-checkbox .custom-control-input:checked~.custom-control-label::before {
            background-color: #c0392b !important;
        }
    </style>
</head>
<!--Coded with love by Mutiullah Samim-->
<body>
  <div class="container h-100">
   <div class="d-flex justify-content-center h-100">
    <div class="user_card">
     
     <div class="d-flex justify-content-center">
      <div class="brand_logo_container">
       <img src="https://cdn.freebiesupply.com/logos/large/2x/pinterest-circle-logo-png-transparent.png" class="brand_logo" alt="Logo">
      </div>
     </div>
     
     <div class="d-flex justify-content-center form_container">
      <form method="POST" action="{{ route('login') }}">
       @csrf

        @if($errors->any())
         <div class="alert alert-danger alert-dismissible">
          <button type="button" class="close" data-dismiss="alert">&times;</button>
          @foreach($errors->all() as $error)
           <strong>{{$error}}</strong><br>
          @endforeach
         </div>
        @endif

        <div class="input-group mb-3">
         <div class="input-group-append">
          <span class="input-group-text"><i class="fas fa-user"></i></span>
         </div>
         <input id="email" type="email" class="form-control @error('email') is-invalid @enderror" name="email" value="{{ old('email') }}" placeholder="Email">
        </div>
                        
        <div class="input-group mb-2">
         <div class="input-group-append">
          <span class="input-group-text"><i class="fas fa-key"></i></span>
         </div>
         <input id="password" type="password" class="form-control @error('password') is-invalid @enderror" name="password" autocomplete="current-password" placeholder="password">
        </div>
                   
        <div class="d-flex justify-content-center mt-3 login_container">
         <button type="submit" name="button" class="btn login_btn">Login</button>
        </div>
       
      </form>
     </div>
        
    </div>
   </div>
  </div>
 </body>
</html>


 --}}