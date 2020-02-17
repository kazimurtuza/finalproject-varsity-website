@extends('includes.headerfooter')
@section('content')  
<section class="site-hero site-sm-hero overlay" data-stellar-background-ratio="0.5" style="background-image:url({{asset('public')}}/images/big_image_2.jpg)">
    <div class="container">
      <div class="row align-items-center justify-content-center site-hero-sm-inner">
        <div class="col-md-7 text-center">

          <div class="mb-5 element-animate">
            <h1 class="mb-2">Log in</h1>
            <p class="bcrumb"><a href="index.html">Home</a> <span class="sep ion-android-arrow-dropright px-2"></span>  <span class="current">Log in</span></p>
          </div>
          
        </div>
      </div>
    </div>
  </section>
  <!-- END section -->
   
  <section class="site-section">
    <div class="container">
      <div class="row justify-content-center">
        <div class="col-md-7">
          <div class="form-wrap">
            <h2 class="mb-4">Log in with your account</h2>
            <form action="{{ route('login') }}" method="post">
                @csrf
              <div class="row">
                <div class="col-md-12 form-group">
                  <label for="name">email</label>
                  <input type="email" id="name" class="form-control py-2  @error('email') is-invalid @enderror" name="email" value="{{ old('email') }}" required autocomplete="email" autofocus>

                  @error('email')
                      <span class="invalid-feedback" role="alert">
                          <strong>{{ $message }}</strong>
                      </span>
                  @enderror
                </div>
              </div>
              <div class="row mb-5">
                <div class="col-md-12 form-group">
                  <label for="name">Password</label>
                  <input type="password" id="name" class="form-control py-2 @error('password') is-invalid @enderror" name="password" required autocomplete="current-password">

                  @error('password')
                      <span class="invalid-feedback" role="alert">
                          <strong>{{ $message }}</strong>
                      </span>
                  @enderror
                </div>
              </div>
              
            

              <div class="form-group row mb-0">
                <div class="col-md-6 form-group">
                    <button type="submit" class="btn btn-primary px-5 py-2">
                        {{ __('Login') }}
                    </button>
        
                    @if (Route::has('password.request'))
                        <a class="btn btn-link px-1 py-2" href="{{ route('password.request') }}">
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
  </section>
  
  
    
    


    @endsection


