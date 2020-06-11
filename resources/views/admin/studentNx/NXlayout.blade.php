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
</head>
<style> 
/* #main {
  width: 300px;
  height: 100px;
  padding: 2%;
  margin: 1%;
  border: 1px solid #c3c3c3;
  display: flex;
  align-content: center;
  display: inline-block;
  /* justify-content: space-between; */
}

/* #main div {
  width: 70px;
  height: 70px;
} */ */
</style>
<body>
  <div class="container">
    <div style=" margin-top:10%;margin-left:10%; position: absolute;"><button class="btn btn-danger">Log out</button></div>
    <div style=" margin-top:10%;margin-left:17%; position: absolute"><button class="btn btn-success">Setting</button></div>

     <div class="row" style=" margin-top:1%;margin-left:31%; position: absolute"> <a href=""><img src="{{asset('public/images/nxx11.png')}}" style="display:inline-block;" width="200px" height="80px" alt=""></a></div>

    <div class=" px-2" style=" font-family: sans-serif; margin-top:9%;margin-left:35%; position: absolute"> <h3 style="font-weight: 900;color:blueviolet;  border: 3px solid #dfbbf7;
  padding: 10px;
  border-radius: 7px;">{{auth::user()->name}}</h3></div>

    <div style="border: solid 2px #0000ff1f; margin-top: 8%;margin-left: 58%; position: absolute;" class="bg-info"> <img src="{{asset(auth::user()->image)}}"width="100px" height="100px" alt=""></div>
  </div>
   
    <div> 
        
        <main class="py-4">
           
            
                 
                     <div class="row justify-content-center py-5">
                       @yield('content') 
                     </div>
        </main> 
    </div>


</body>
</html>
