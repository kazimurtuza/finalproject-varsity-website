@extends('home.includes')
    @section('content')
    
    
    <section class="site-section">
      <div class="container">
        <div class="row justify-content-cente" style="padding-left:20%">
          <div class="col-md-7 m-4">
            <div class="form-wrap " >
              <h2 class="mb-5 text-info">Edit Profile</h2>
              <tr class="m-auto"> 
                  <td colspan="3" style="background:rgb(235,247,227)">
                     <div id="preview">
                     <img style="width:457px;height:310px;margin-bottom:10px;padding-left:10%"
                     src="{{asset('public')}}/images/photoshop.jpg" alt="not found image " id="preview-image">
                     </div>
              </td>
            </tr>
              <form action="{{ route('EditUser-profile') }}" method="post" enctype="multipart/form-data">
                @csrf
                  <div class="row">
           
                  <div class="row">
                    <div class="col-md-12 form-group">
                        
                            <input type="file" class="form-control py-2" name="photo"  onchange="previewImage(this);">
        
                    </div>
                  </div>
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
{{-- 
                  <div class="row">
                    <div class="col-md-12 form-group">
                      <label for="name">Password</label> --}}
                      {{-- <input type="password" id="name" class="form-control py-2 ">--}}
                   
                        {{-- <input id="password" type="password" class="form-control py-2 @error('password') is-invalid @enderror" name="password" required autocomplete="new-password">

                        @error('password')
                            <span class="invalid-feedback" role="alert">
                                <strong>{{ $message }}</strong>
                            </span>
                        @enderror
                  
                      
                    </div>
                  </div> --}}
                <input type="hidden" name="id" value="{{Auth::user()->id}}">
          
                  
                  <div class="row">
                    <div class="col-md-6 form-group">
                      <input type="submit" value="update" class="btn btn-primary px-5 py-2">
                    </div>
                  </div>
                </form>
              </div>
          </div>
        </div>
      </div>
    </section>

    <script src="jquery-1.9.1.js"></script>
<script>
function previewImage(input) {
  if (input.files && input.files[0]) {
    var reader = new FileReader();
    reader.onload = function (e) {
      $('#preview-image').attr('src', e.target.result);
    }
    reader.readAsDataURL(input.files[0]);
  }
}
</script>
    
    @endsection

