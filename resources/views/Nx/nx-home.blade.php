@extends('layouts.app')

@section('content')
<div class="container">
    <div class="row justify-content-center">
        <div class="col-md-8">
            <div class="card">
                <div class="card-header">Dashboard for NX id</div>

                <div class="card-body">
                    @if (session('status'))
                        <div class="alert alert-success" role="alert">
                            {{ session('status') }}
                        </div>
                    @endif
                  
              
                           
                    You are logged in superadmin!

                    {{-- <h1> {{ Auth::user()->name }} </h1>
                     <h1>{{ Auth::user()->address }} </h1>
                     <h1>{{ Auth::user()->email }} </h1>
                     <h1>{{ Auth::user()->roll }} </h1> --}}
                </div>
            </div>
        </div>
    </div>
</div>
@endsection



{{-- <!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>Document</title>
</head>
<body>
    
  @if(@foreach ($data as $val)
       {{$val->student_name}}@endforeach)

   <h1>my name : 
       <span style=" color:red"> @foreach ($data as $val)
       {{$val->student_name}} @endforeach    </span>
      </h1> 
  
   <h1>my fater name : <span style=" color:red"> @foreach ($data as $val)
       {{$val->fater_name}}  </span>
   @endforeach     </h1> 


  
   
   

    {{-- 'student_name',
'address',
'fater_name',
'father_mobile',
'mother_name',
'mother_mobile',
'father_profession',
'mother_profession',
'email_address',
'sms_mobile',
'date_of_admission',
'student_photo',
'status',
'password',
'encrypted_password', --}}
    
{{-- </body> --}}
{{-- </html> --}} --}}