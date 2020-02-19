@extends('home.includes')
    @section('content')
    
    
    <section class="site-section">
      <div class="container">
        <div class="row justify-content-cente" style="padding-left:20%">
          <div class="col-md-7 m-4" style="margin:20px;padding:20px;border:solid 2px rgb(78,205,196)">
            <div class="form-wrap " >
              <h2 class="mb-5">Register new user</h2>
              <form action="{{ route('add-Registration') }}" method="post">
                @csrf
                  <div class="row">
                    <div class="col-md-12 form-group">
                      <label for="name">Role</label>
                      {{-- <input type="text" id="name" class="form-control py-2"> --}}
                    
                        <select name="role" id="role" type="text" class="form-control py-2 @error('role') is-invalid @enderror"  required autocomplete="role" autofocus>
                          <option value="Admin">Admin</option>
                          <option value="Controller">Controller</option>
                          <option value="Subcontroller">Subcontroller</option>
                        </select>

                        @error('role')
                            <span class="invalid-feedback" role="alert">
                                <strong>{{ $message }}</strong>
                            </span>
                        @enderror
                   
                    </div>
                  </div>
                  <div class="row">
                    <div class="col-md-12 form-group">
                      <label for="name">Name</label>
                      {{-- <input type="text" id="name" class="form-control py-2"> --}}
                     
                        <input id="name" type="text" class="form-control py-2 @error('name') is-invalid @enderror" name="name" value="{{ old('name') }}" required autocomplete="name" autofocus>

                        @error('name')
                            <span class="invalid-feedback" role="alert">
                                <strong>{{ $message }}</strong>
                            </span>
                        @enderror
                   
                    </div>
                  </div>
                  <div class="row">
                    <div class="col-md-12 form-group">
                      <label for="phone">Phone</label>
                      {{-- <input type="text" id="name" class="form-control py-2"> --}}
                     
                        <input id="phone" type="text" class="form-control py-2 @error('name') is-invalid @enderror" name="phone" value="" required autocomplete="phone" autofocus>

                        @error('phone')
                            <span class="invalid-feedback" role="alert">
                                <strong>{{ $message }}</strong>
                            </span>
                        @enderror
                   
                    </div>
                  </div>
                  
                  <div class="row">
                    <div class="col-md-12 form-group">
                      <label for="name">Email Address</label>
                      {{-- <input type="text" id="name" class="form-control py-2"> --}}
                      <input id="email" type="email" class="form-control py-2 @error('email') is-invalid @enderror" name="email" value="{{ old('email') }}" required autocomplete="email">

                        @error('email')
                            <span class="invalid-feedback" role="alert">
                                <strong>{{ $message }}</strong>
                            </span>
                        @enderror
                    </div>
                  </div>

                  <div class="row">
                    <div class="col-md-12 form-group">
                      <label for="name">Password</label>
                      {{-- <input type="password" id="name" class="form-control py-2 ">--}}
                   
                        <input id="password" type="password" class="form-control py-2 @error('password') is-invalid @enderror" name="password" required autocomplete="new-password">

                        @error('password')
                            <span class="invalid-feedback" role="alert">
                                <strong>{{ $message }}</strong>
                            </span>
                        @enderror
                  
                      
                    </div>
                  </div>
          
                  
                  <div class="row">
                    <div class="col-md-6 form-group">
                      <input type="submit" value="Register" class="btn btn-primary px-5 py-2">
                    </div>
                  </div>
                </form>
              </div>
          </div>
        </div>
      </div>
    </section>
    
    @endsection

{{-- 

    @extends('layouts.app')

@section('content')
<div class="container">
    <div class="row justify-content-center">
        <div class="col-md-8">
            <div class="card">
                <div class="card-header">{{ __('Register') }}</div>

                <div class="card-body">
                    <form method="POST" action="{{ route('register') }}">
                        @csrf

                        <div class="form-group row">
                            <label for="name" class="col-md-4 col-form-label text-md-right">{{ __('Name') }}</label>

                        
                        </div>

             

                        <div class="form-group row">
                            <label for="password" class="col-md-4 col-form-label text-md-right">{{ __('Password') }}</label>

                        
                        </div>

                        <div class="form-group row">
                            <label for="password-confirm" class="col-md-4 col-form-label text-md-right">{{ __('Confirm Password') }}</label>

                            <div class="col-md-6">
                                <input id="password-confirm" type="password" class="form-control" name="password_confirmation" required autocomplete="new-password">
                            </div>
                        </div>

                        <div class="form-group row mb-0">
                            <div class="col-md-6 offset-md-4">
                                <button type="submit" class="btn btn-primary">
                                    {{ __('Register') }}
                                </button>
                            </div>
                        </div>
                    </form>
                </div>
            </div>
        </div>
    </div>
</div>
@endsection --}}
