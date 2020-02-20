
@extends('home.includes')
@section('content')
<h4 class="m-auto" style="text-align:center;">
    <span style="background:#319793;padding:3px 8px;color:white">User Profile</span>
    </h4>




<div class="my-lg-5  bg-info" style="margin-top:80px;margin-bottom:90px">
    <table class="table table-striped table-bordered dt-responsive nowrap text-center" style="width: 100%;margin:auto;color:black;font-width:10px;">
            {{-- message show start --}}

    <div id="messageShow">
        @if(Session::get('message'))
        <h3 style="color:green">{{Session::get('message')}}</h3>
        @endif

        @if(Session::get('error_message'))
        <h3>{{Session::get('error_message')}}</h3>
        @endif


    </div>
    
    {{-- message show end--}}


        <tr> <td colspan="3" style="background:#EAEAEA"><img src="@if(isset(Auth::user()->photo)){{asset(Auth::user()->photo)}} @else{{asset('public')}}/assets/images/avatar.png @endif" alt="not found img" style="width:150px;height:110px;margin-bottom:10px"></td></tr>

        <tr ><th>Role</th><td style="padding-right:15%">{{Auth::user()->role}}</td></tr>
        <tr ><th>Name</th> <td style="padding-right:15%">{{Auth::user()->name}}</td></tr>
        <tr ><th>emaail</th><td style="padding-right:15%">{{Auth::user()->email}}</td></tr>
        <tr ><th>phone</th><td style="padding-right:15%">{{Auth::user()->phone}}</td></tr>
        <tr  style="width: 100px;"><th>Action</th>
        <td style="padding-right:15%;padding-top:30px">
        <a href="{{route('EditUser-info')}}" class="btn btn-sm btn-success">change info</a>
            <a href="{{route('EditUser-photo')}}" class="btn btn-sm btn-info">change photo</a>
            <a href="{{route('EditUser-password')}}" class="btn btn-sm btn-danger">change password</a>
        </td>
        
    </tr>
  
    </table>


</div>
@endsection