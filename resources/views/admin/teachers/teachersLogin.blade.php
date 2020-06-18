    <!doctype html>
<html lang="en">
  <head>
    <title>Free Education Template by Colorlib</title>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">

    <link href="https://fonts.googleapis.com/css?family=Rubik:300,400,500" rel="stylesheet">

    <link rel="stylesheet" href="{{asset('public/css/bootstrap.css')}}">
    <link rel="stylesheet" href="{{asset('public/css/animate.css')}}">
    <link rel="stylesheet" href="{{asset('public/css/owl.carousel.min.css')}}">

    <link rel="stylesheet" href="{{asset('public/fonts/ionicons/css/ionicons.min.css')}}">
    <link rel="stylesheet" href="{{asset('public/fonts/fontawesome/css/font-awesome.min.css')}}">
    <link rel="stylesheet" href="{{asset('public/fonts/flaticon/font/flaticon.css')}}">
    <link rel="stylesheet" href="{{asset('public/css/magnific-popup.css')}}">

    <!-- Theme Style -->
    <link rel="stylesheet" href="{{asset('public/css/style.css')}}">
    <link rel="stylesheet" href="{{asset('public/css2/style.css')}}">
  </head>
  <body>
    <section class="site-section m-5 ">
      <div class="container">
            
        <div class="row justify-content-center ">
          <div class="col-md-6">
            <div class="form-wrap ">
                <div class="row">
                    {{-- <div class=" col-lg-12 bg-info">   <a class="nav-link "  href="#" title="BUBT Annex" target="_blank"> <img src="{{asset('public/images/NXX2.png')}}"class="mx-auto d-block" alt="" height="100px"></a> </div> --}}

                    @if(Session::get('message'))
                    <div class="alert alert-primary d-block text-danger text-center" role="alert">
                         {{Session::get('message')}} 
                     </div>
                
                    @endif

                </div>
             

            <div> 
               
               <form method="POST" action="{{ route('teacherlogin') }}">
                        @csrf

                        <div class="form-group row mt-5">
                            <label for="email" class="col-md-4 col-form-label text-md-right">{{ __(' email') }}</label>

                            <div class="col-md-6 ">
                                <input id="email" type="text" class="form-control @error('email') is-invalid @enderror" name="email" value="{{ old('email') }}" required autocomplete="email" autofocus>

                                @error('email')
                                    <span class="invalid-feedback" role="alert">
                                        <strong>{{ $message }}</strong>
                                    </span>
                                @enderror
                            </div>
                        </div>

                        <div class="form-group row">
                            <label for="password" class="col-md-4 col-form-label text-md-right">{{ __('Password') }}</label>

                            <div class="col-md-6">
                                <input id="password" type="password" class="form-control @error('password') is-invalid @enderror" name="password" required autocomplete="current-password">

                                @error('password')
                                    <span class="invalid-feedback" role="alert">
                                        <strong>{{ $message }}</strong>
                                    </span>
                                @enderror
                            </div>
                        </div>

                        <div class="form-group row">
                            <div class="col-md-6 offset-md-4">
                                <div class="form-check">
                                    <input class="form-check-input" type="checkbox" name="remember" id="remember" {{ old('remember') ? 'checked' : '' }}>

                                    <label class="form-check-label" for="remember">
                                        {{ __('Remember Me') }}
                                    </label>
                                </div>
                            </div>
                        </div>

                        <div class="form-group row mb-0">
                            <div class="col-md-8 offset-md-4">
                                <button type="submit" class="btn btn-primary">
                                    {{ __('Login') }}
                                </button>

                                @if (Route::has('password.request'))
                                    <a class="btn btn-link" href="{{ route('password.request') }}">
                                        {{ __('Forgot Your Password?') }}
                                    </a>
                                @endif
                            </div>
                        </div>
                    </form>
             </div>
              
            </div>
          </div>
        </div>
      </div>
    </section>
   </body>
       <script src="{{asset('public/js/jquery.min.js')}}"></script>
    <script src="{{asset('public/js/jquery-3.2.1.min.js')}}"></script>
    <script src="{{asset('public/js/jquery-migrate-3.0.0.js')}}"></script>
    <script src="{{asset('public/js/popper.min.js')}}"></script>
    <script src="{{asset('public/js/bootstrap.min.js')}}"></script>
    <script src="{{asset('public/js/owl.carousel.min.js')}}"></script>
    <script src="{{asset('public/js/jquery.waypoints.min.js')}}"></script>
    <script src="{{asset('public/js/jquery.stellar.min.js')}}"></script>
    <script src="{{asset('public/js/jquery.animateNumber.min.js')}}"></script>
    
    <script src="{{asset('public/js/jquery.magnific-popup.min.js')}}"></script>

    <script src="{{asset('public/js/main.js')}}"></script>
  </body>
</html>
    
    