@extends('home.includes')
    @section('content')
    
    <h4 class="m-auto" style="text-align:center;">
        <span style="background:#319793;padding:3px 50px;color:white;">Edit photo</span>
        </h4>
    <section class="site-section "  style="padding:5%;margin-bottom:50px;margin-top:50px;border:solid 2px #319793">
      <div class="container">
        <div class="row justify-content-cente" style="padding-left:20%">
          <div class="col-md-7 m-4">
            <div class="form-wrap " >
              
              <tr class="m-auto"> 
                  <td colspan="3" style="background:rgb(235,247,227)">
                     <div id="preview">
                     <img style="width:457px;height:310px;margin-bottom:10px;padding-left:10%"
                     src="{{asset('public')}}/images/photoshop.jpg" alt="not found image " id="preview-image">
                     </div>
              </td>
            </tr>
            <div>
             <form action="{{ route('PostEditUser-photo') }}" method="post" enctype="multipart/form-data">
                @csrf
                  <div class="row">
           
                  <div class="row">
                    <div class="col-md-12 form-group">
                        
                            <input type="file" class="form-control py-2" name="photo"  onchange="previewImage(this);">
        
                    </div>
                  </div>
        
                <input type="hidden" name="id" value="{{Auth::user()->id}}">
          
                  
                  <div class="row">
                    <div class="col-md-12 form-group">
                      <input type="submit" value="update" class="btn btn-block btn-primary block">
                    </div>
                  </div>
                </form>
            
            </div>
             
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

