<!doctype html>
<html lang="{{ str_replace('_', '-', app()->getLocale()) }}">
<head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">

    <!-- CSRF Token -->
    <meta name="csrf-token" content="{{ csrf_token() }}"> 

    <title>{{ config('app.name', 'Laravel') }}</title>

    <!-- Scripts -->
    <script src="{{ asset('pubic/js/app.js') }}" defer></script>

    <!-- Fonts -->
    <link rel="dns-prefetch" href="//fonts.gstatic.com">
    <link href="https://fonts.googleapis.com/css?family=Nunito" rel="stylesheet">

    <!-- Styles -->
    <link href="{{ asset('public/css/app.css') }}" rel="stylesheet">
<link rel="stylesheet" href="{{'public'}}/fonts/fontawesome/css/font-awesome.min.css">

  <!-- Bootstrap core CSS -->
  <link href="{{asset('public')}}/lib/bootstrap/css/bootstrap.min.css" rel="stylesheet">


  <link rel="stylesheet" type="text/css" href="{{asset('public')}}/css3/zabuto_calendar.css">
  <link rel="stylesheet" type="text/css" href="{{asset('public')}}/lib/gritter/css/jquery.gritter.css" />
  <!-- Custom styles for this template -->
  <link href="{{asset('public')}}/css3/style.css" rel="stylesheet">
  <link href="{{asset('public')}}/css3/style-responsive.css" rel="stylesheet">
  <script src="{{asset('public')}}/lib/chart-master/Chart.js"></script>
  <script src="{{asset('public')}}/js/jquery-3.4.1.js"></script>
</head>  
 
<body>
  <div class="container">
    <div style=" margin-top:10%;margin-left:10%; position: absolute;">
      
    <form action="{{route('teacher-logout')}}" method="post">
      @csrf 
      <input type="hidden" value="logout">
      <input type="submit" value="logout" class="btn btn-danger"> 
    </form> 
      {{-- <button class="btn btn-danger">Log out</button> --}}
    
    
    </div>
    <div style=" margin-top:10%;margin-left:17%; position: absolute"><button class="btn btn-success">Setting</button></div>

     <div class="row" style=" margin-top:1%;margin-left:31%; position: absolute"> <a href=""><img src="{{asset('public/images/nxx11.png')}}" style="display:inline-block;" width="200px" height="80px" alt=""></a></div>

    <div class=" px-2 " style=" font-family: sans-serif; margin-top:8%;margin-left:35%; position: absolute"> <h3 style="font-weight: 900;
    color: #efefef;
    box-shadow: 0 0 9px 0px black;
    background: #9bd2d6;
    border: 3px solid #dfbbf7;
    padding: 10px;
    border-radius: 7px;
    text-shadow: -2px 3px 6px black;">{{auth::user()->name}}</h3></div>

    <div style="    border: solid 2px #0000ff1f;
    margin-top: 7%;
    margin-left: 63%;
    position: absolute;" class="bg-info"> <img src=""width="100px" height="80px" alt=""></div>
  </div>
   
    <div> 
        
        <main class="py-4">
           
            
                 
                     <div class="row justify-content-center py-5">
                       @yield('content') 
                     </div>
        </main> 
      
    </div>


{{-- </body> --}}
 <script src="{{asset('public')}}/lib/jquery/jquery.min.js"></script>

  <script src="{{asset('public')}}/lib/bootstrap/js/bootstrap.min.js"></script>
  <script class="include" type="text/javascript" src="{{asset('public')}}/lib/jquery.dcjqaccordion.2.7.js"></script>
  <script src="{{asset('public')}}/lib/jquery.scrollTo.min.js"></script>
  <script src="{{asset('public')}}/lib/jquery.nicescroll.js" type="text/javascript"></script>
  <script src="{{asset('public')}}/lib/jquery.sparkline.js"></script>
  <!--common script for all pages-->
  <script src="{{asset('public')}}/lib/common-scripts.js"></script>
  <script type="text/javascript" src="{{asset('public')}}/lib/gritter/js/jquery.gritter.js"></script>
  <script type="text/javascript" src="{{asset('public')}}/lib/gritter-conf.js">
  </script>
  
  <!--script for this page-->
  <script src="{{asset('public')}}/lib/sparkline-chart.js"></script>
  <script src="{{asset('public')}}/lib/zabuto_calendar.js"></script>

   <script type="application/javascript">


    function myNavFunction(id) {
      $("#date-popover").hide();
      var nav = $("#" + id).data("navigation");
      var to = $("#" + id).data("to");
      console.log('nav ' + nav + ' to: ' + to.month + '/' + to.year);
    }

  </script>
</body>
</html>
