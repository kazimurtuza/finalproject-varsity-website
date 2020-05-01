
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
          <div class="col-md-7">
            <div class="form-wrap ">
                <div class="row">
                    <div class=" col-lg-12 bg-info">   <a class="nav-link "  href="{{route('student-Nx')}}" title="BUBT Annex" target="_blank"> <img src="{{asset('public/images/NXX2.png')}}"class="mx-auto d-block" alt="" height="100px"></a> </div>

                    @if(Session::get('message'))
                    <div class="alert alert-primary d-block text-danger text-center" role="alert">
                         {{Session::get('message')}} 
                     </div>
                
                    @endif

                </div>
             

            <div><form action="{{route('nx-home')}}" method="post" >
                 @csrf
                <div class="row ">
                  <div class="col-md-12 form-group mt-3">
                    <label for="name">Username</label>
                    <input type="text" id="name" name="name" class="form-control py-2" required title="your registration name" placeholder="name">
                  </div>
                </div> 
                <div class="row mb-5">
                  <div class="col-md-12 form-group">
                    <label for="name">Password</label>
                    <input type="password" id="name" name="password"  class="form-control py-2" required placeholder="password">
                  </div>
                </div>
                
                <div class="row">
                  <div class="col-md-6 form-group">
                    <input type="submit" value="Login" class="btn btn-primary px-5 py-2">
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
    
    