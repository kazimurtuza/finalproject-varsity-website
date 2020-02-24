@extends('home.includes')
    @section('content')
    <h4 class="m-auto" style="text-align:center;">
      <span style="background:#319793;padding:3px 50px;color:white;margin-bottom:20%">{{$id =='Edit announce' ?'Announcce':'Edit Home Page'}}</span>
      </h4>
      @php
          $announce=App\annonce::find(1);
      @endphp

      @if($id =='announce')
      {{-- {{ route('annonce-home-slide') }} --}}
      <form action="{{ route('post-annonce-slide') }}" method="post" enctype="multipart/form-data">
        @csrf
        <div class="row">
          <div class="col-md-12 form-group">
            <label for="about">Announce</label>
          <textarea name="about" class="form-control py-2 @error('title') is-invalid @enderror  "id="" cols="50" rows="10" autocomplete="about" autofocus required>{{$announce->announce}}</textarea>

              @error('about')
              {{$message}}
              @enderror
          </div>
        </div>    
        <div class="row">
      {{$announce->status}}
          <div class="col-lg-10">
            <label for="about">publish</label>
            <input type="radio" name="status"{{$announce->status == '1' ? 'checked' : ''}} hecked value="1" id="">
            <label for="about">unpublish</label>
            <input type="radio" name="status" {{$announce->status=='0'?'checked':''}} value="0" id="">
          </div>

        </div>
        <div class="row">
          <div class="col-md-6 form-group">
            <input type="submit" value="update" class="btn btn-primary px-5 py-2">
          </div>
        </div>
      </form>

      @else
    <section class="site-section"style="margin-left:20px">
      <div class="container m-auto">
        <div class="row justify-content-cente" style="padding-left:20%">
          <div class="col-md-7 m-4">
            @if(Session::get('message'))
           <h3>{{Session::get('message')}}</h3>
            @endif
            @if(Session::get('error_message'))
          <h3>{{Session::get('error_message')}}</h3>
            @endif
            <div class="form-wrap " >
        
              <tr class="m-auto"> 
                  <td colspan="3" style="background:rgb(235,247,227)">
                     <div id="preview">
                     <img style="width:457px;height:310px;margin-bottom:10px;margin-top:30px;padding-left:10%"
                     src="{{asset('public')}}/images/photoshop.jpg" alt="not found image " id="preview-image">
                     </div>
              </td>
            </tr>
              <form action="{{ route('PostEdit-home-slide') }}" method="post" enctype="multipart/form-data">
                @csrf
                  <div class="row">
           
                  <div class="row">
                    <div class="col-md-12 form-group">
                        
                            <input type="file" class="form-control py-2" name="slidepic" title="photo"  onchange="previewImage(this);" required>
        
                    </div>
                  </div>
                  <div class="row">
                    <div class="col-md-12 form-group">
                      <label for="title">Title</label>
                      {{-- <input type="text" id="title" class="form-control py-2"> --}}
                     
                        <input id="title" type="text" name="title"class="form-control py-2 @error('title') is-invalid @enderror" value="" required >

                        @error('title')
                            <span class="invalid-feedback" role="alert">
                                <strong>{{ $message }}</strong>
                            </span>
                        @enderror
                   
                    </div>
                  </div>
                  <div class="row">
                    <div class="col-md-12 form-group">
                      <label for="about">About</label>
                        <textarea name="about" class="form-control py-2 @error('title') is-invalid @enderror  "id="" cols="50" rows="10" autocomplete="about" autofocus required></textarea>

                        @error('about')
                        {{$message}}
                        @enderror
                    </div>
                  </div>
                  
                  <div class="row">
                    <div class="col-md-12 form-group">
                   
                      {{-- <input type="text" id="title" class="form-control py-2"> --}}
                      <label for="title" style="color:green">publish</label>
                     <input type="radio" title="status" name="status" value="1" id="">
                     <label for="title"style="color:red;padding-left:30px">unpublish</label>
                     <input type="radio" title="status" name="status" value="0" id="">
                 
                    </div>
                    @error('status')
                    {{$message}}
                    @enderror
                  </div>

                <input type="hidden" title="id" value="{{Auth::user()->id}}">
          
                  
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
    @endif

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

