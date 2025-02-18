<style>
    .app-brand a img {
    width: 100%;
    height: 100%;
    object-fit: cover;}
    .app-brand {margin-bottom: 15px;}
    .btn:not(:disabled):not(.disabled) {
    cursor: pointer;
    background: #d7d1ca;border: 1px solid #d7d1ca;
}
.btn:not(:disabled):not(.disabled):hover, .btn:not(:disabled):not(.disabled):focus{background: #7D2310 !important;}
</style>

<html lang="en">
<head>
  <head>
  <meta charset="utf-8" />
  <meta http-equiv="X-UA-Compatible" content="IE=edge" />
  <meta name="viewport" content="width=device-width, initial-scale=1" />

  <title>Ram Raja Foundation | Admin Login</title>

  <!-- GOOGLE FONTS -->
  <link href="https://fonts.googleapis.com/css?family=Karla:400,700|Roboto" rel="stylesheet">
  <link href="{{asset('plugins/material/css/materialdesignicons.min.css')}}" rel="stylesheet" />
  <link href="{{asset('plugins/simplebar/simplebar.css')}}" rel="stylesheet" />

  <!-- PLUGINS CSS STYLE -->
  <link href="{{asset('plugins/nprogress/nprogress.css')}}" rel="stylesheet" />
  <!-- jQuery (necessary for Bootstrap's JavaScript plugins) -->
<script src="https://code.jquery.com/jquery-3.6.0.min.js"></script>
<!-- Bootstrap JS -->
<script src="https://stackpath.bootstrapcdn.com/bootstrap/4.5.2/js/bootstrap.min.js"></script>
  <!-- MONO CSS -->
  <link id="main-css-href" rel="stylesheet" href="{{asset('css/style.css')}}" />



  <script src="{{asset('plugins/nprogress/nprogress.js')}}"></script>
</head>

</head>
  <body class="bg-light-gray" id="body">
          <div class="container d-flex align-items-center justify-content-center" style="min-height: 100vh">
          <div class="d-flex flex-column justify-content-between">
            <div class="row justify-content-center">
                 
              <div class="col-md-10">
                    @if(session()->has('message'))
          <div class="alert alert-success alert-dismissible fade show" role="alert">
  <strong>Success !</strong> Logout successfully.
  <button type="button" class="close" data-dismiss="alert" aria-label="Close">
    <span aria-hidden="true">×</span>
  </button>
</div>
          @endif
                <div class="card card-default mb-0">
                  <div class="card-header pb-0">
                    <div class="app-brand w-100 d-flex justify-content-center border-bottom-0"  style="background: #7D2310;">
                      <a class="w-auto pl-0" href="/">
                       <h2 style="color:white">Ram Raja Foundation</h2>
                        <!--<span class="brand-name text-dark">Loan Management</span>-->
                      </a>
                    </div>
                  </div>
                  <div class="card-body px-5 pb-5 pt-0">

                    <!--<h4 class="text-dark mb-6 text-center">Sign in for free</h4>-->

                   <form action="{{ route('newloginpage') }}" method="post">
                        @csrf
                        <div class="row">
                            <div class="form-group col-md-12 mb-4">
                                <input type="email" class="form-control input-lg @error('email') is-invalid @enderror" id="email" name="email" aria-describedby="emailHelp" placeholder="Email" value="{{ old('email') }}">
                                @error('email')
                                    <div class="invalid-feedback">{{ $message }}</div>
                                @enderror
                            </div>
                            <div class="form-group col-md-12">
                                <input type="password" class="form-control input-lg @error('password') is-invalid @enderror" id="password" name="password" placeholder="Password">
                                @error('password')
                                    <div class="invalid-feedback">{{ $message }}</div>
                                @enderror
                            </div>
                        <div class="col-md-12">
                     @error('error')
                <div class="alert alert-danger alert-dismissible fade show" role="alert">
  {{$message}}.
  <button type="button" class="close" data-dismiss="alert" aria-label="Close">
    <span aria-hidden="true">×</span>
  </button>
</div>

            @enderror
                          <div class="d-flex justify-content-between mb-3">

                            <div class="custom-control custom-checkbox mr-3 mb-3">
                              <input type="checkbox" class="custom-control-input" id="customCheck2">
                              <label class="custom-control-label" for="customCheck2">Remember me</label>
                            </div>

                            <!--<a class="text-color" href="#"> Forgot password? </a>-->

                          </div>
                           <div style="display: flex; justify-content: center; align-items: center;">
                                <button type="submit" class="btn btn-pill mb-4" style="background: #7D2310; color: white; border-radius: 5px;">Sign In</button>
                           </div>

                          <!--<p>Don't have an account yet ?-->
                          <!--  <a class="text-blue" href="sign-up.html">Sign Up</a>-->
                          <!--</p>-->
                        </div>
                      </div>
                    </form>
                  </div>
                </div>
              </div>
            </div>
          </div>
        </div>

</body>
</html>
