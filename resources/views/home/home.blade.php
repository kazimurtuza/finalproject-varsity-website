
@extends('home.includes')
@section('content')
<div class="continer">
  {{Auth::user()->name}}
  {{Auth::user()->email}}
  {{Auth::user()->id}}


</div>

    
@endsection








