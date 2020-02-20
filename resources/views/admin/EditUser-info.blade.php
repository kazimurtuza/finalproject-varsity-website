@extends('home.includes')
    @section('content')
    
    <h4 class="m-auto" style="text-align:center;">
        <span style="background:#319793;padding:3px 50px;color:white;">Edit Info</span>
        </h4>
    <section class="site-section" style="padding:5%;margin-bottom:50px;margin-top:50px;border:solid 2px #319793">
      <div class="container">
        <div class="row justify-content-cente" style="padding-left:20%">
          <div class="col-md-7 m-4">
            <div class="form-wrap " >
          
        
              <form action="{{ route('PostEditUser-info') }}" method="post" enctype="multipart/form-data">
                @csrf
                  <div class="row">
                  <div class="row">
                    <div class="col-md-12 form-group">
                      <label for="name">Name</label>
                      {{-- <input type="text" id="name" class="form-control py-2"> --}}
                     
                        <input id="name" type="text" class="form-control py-2 @error('name') is-invalid @enderror" name="name" value="{{Auth::user()->name}}" required autocomplete="name" autofocus>

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
                     
                        <input id="phone" type="text" class="form-control py-2 @error('name') is-invalid @enderror" name="phone" value="{{Auth::user()->phone}}" required autocomplete="phone" autofocus>

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
                      <input id="email" type="email" class="form-control py-2 @error('email') is-invalid @enderror" name="email" value="{{Auth::user()->email}}" required autocomplete="email">

                        @error('email')
                            <span class="invalid-feedback" role="alert">
                                <strong>{{ $message }}</strong>
                            </span>
                        @enderror
                    </div>
                  </div>

                <input type="hidden" name="id" value="{{Auth::user()->id}}">
          
                  
                  <div class="row">
                    <div class="col-md-12 form-group">
                      <input type="submit" value="update" class="btn btn-block btn-primary px-5 py-2">
                    </div>
                  </div>
                </form>
              </div>
          </div>
        </div>
      </div>
    </section>


    
    @endsection

