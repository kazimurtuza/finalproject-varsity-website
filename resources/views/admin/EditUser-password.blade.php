@extends('home.includes')
    @section('content')
    
    <h4 class="m-auto" style="text-align:center;">
        <span style="background:#319793;padding:3px 50px;color:white;">change password</span>
        </h4>
    <section class="site-section "  style="padding:8%;margin-bottom:50px;margin-top:50px;border:solid 2px #319793">
      <div class="container">
        
        <div class="row justify-content-cente" style="padding-left:20%">
          <div class="col-md-7 m-4">
            <div class="form-wrap " >
              
              <form action="{{ route('PostEditUser-password') }}" method="post" enctype="multipart/form-data">
                @csrf
                  <div class="row">

                  <div class="row">
                    <div class="col-md-12 form-group">
                      <label for="name">Old Password</label>
                   
                         <input id="oldpassword" type="password" class="form-control py-2 @error('oldpassword') is-invalid @enderror" name="oldpassword" required > 

                        @error('oldpassword')
                            <span class="invalid-feedback" role="alert">
                                <strong>{{ $message }}</strong>
                            </span>
                        @enderror
                  
                      
                    </div>
                  </div>
                  <div class="row">
                    <div class="col-md-12 form-group">
                      <label for="name">New Password</label> 
                   
                         <input id="newpassword" value="" type="password" class="form-control py-2 @error('newpassword') is-invalid @enderror" name="newpassword" required> 

                        @error('newpassword')
                            <span class="" role="alert">
                                <strong>{{ $message }}</strong>
                            </span>
                        @enderror
                  
                      
                    </div>
                  </div>
                <input type="hidden" name="id" value="{{Auth::user()->id}}">
          
                  
                  <div class="row" style="margin-top:20px">
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

