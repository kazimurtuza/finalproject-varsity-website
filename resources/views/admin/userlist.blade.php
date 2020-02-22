@extends('home.includes')
@section('content')
<div class="row mt">
    <div class="col-md-12">
    
        {{-- @foreach($user as $user)
          {{$user->name}}
        @endforeach --}}

      <div class="content-panel">
        <table class="table table-striped table-advance table-hover">
          <h3 class="text-center text-info">User Table</h3>
          <hr>
          <thead class="bg-info">
            <tr >
              <th> Role</th>
              <th> Name</th>
              <th> Email</th>
              <th> phone</th>
              <th> photo</th>
              <th></th>
            </tr>
          </thead>
          <tbody>
              @foreach($user as $user)
            <tr>
              <td>
                <a href="basic_table.html#">{{$user->role}}</a>
              </td>
              <td>{{$user->name}}</td>
              <td>{{$user->email}} </td>
              <td>{{$user->phone}}</td>
              <td> <a href="{{asset($user->photo)}}"> <img src="{{asset($user->photo)}} " style="height:40px;width:80px" alt="no image here"> </a></td>
              <td>
                <button class="btn btn-success btn-xs"><i class="fa fa-check"></i></button>
                <button class="btn btn-primary btn-xs"><i class="fa fa-pencil"></i></button>
                <button class="btn btn-danger btn-xs"><i class="fa fa-trash-o "></i></button>
              </td>
            </tr>
            @endforeach
          </tbody>
        </table>
      </div>
      </div>
@endsection