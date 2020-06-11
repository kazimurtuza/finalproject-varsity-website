@extends('admin.studentNx.NXlayout')

@section('content')
<div class="container"  style="padding-left:10%;margin-top:6%">   
     
 
                    {{-- @foreach ($studentinfo as $stu)
     
        <td>{{$stu->department}}</td>  
        <td>{{$stu->intake}}</td>
        <td>{{$stu->name}}</td>
        <td>{{$stu->roll}}</td>

                   @endforeach
                    @foreach ($studentinfo as $stu)
     
        <td>{{$stu->department}}</td>
        <td>{{$stu->intake}}</td>
        <td>{{$stu->name}}</td>
        <td>{{$stu->roll}}</td>

                   @endforeach --}}
                   <div style="width:800px; align-content: center; padding-top:60px;padding-left:20px;margin-top:30px; border: solid 3px black" >

                <div class="row" > 
           


                    <div class="col">
                        <div class="col">
                            <div class="row"> <a href=""><img src="{{asset('public/images/academic2.png')}}" style="display:inline-block;background:rgb(26, 19, 19)" width="151px" height="150px" alt=""></a></div>
                            <div class="row bg-primary pl-5 mr-1" >flfdhdh</div>
                        </div>
                       
                    </div>


                    <div class="col">
                        <div class="col">
                            <div class="row"> <a href=""><img src="{{asset('public/images/book.png')}}" style="display:inline-block;background:rgb(26, 19, 19)" width="151px" height="150px" alt=""></a></div>
                            <div class="row bg-primary pl-5 mr-1" >flfdhdh</div>
                        </div>
                       
                    </div>
                    <div class="col">
                        <div class="col">
                        <div class="row"> <a href="{{route('nx-studentinfo')}}"><img src="{{asset('public/images/student.png')}}" style="display:inline-block;background:rgb(26, 19, 19)" width="151px" height="150px" alt=""></a></div>
                            <div class="row bg-primary pl-5 mr-1" >flfdhdh</div>
                        </div>
                       
                    </div>
                    <div class="col">
                        <div class="col">
                            <div class="row"> <a href=""><img src="{{asset('public/images/academic2.png')}}" style="display:inline-block;background:rgb(26, 19, 19)" width="151px" height="150px" alt=""></a></div>
                            <div class="row bg-primary pl-5 mr-1" >flfdhdh</div>
                        </div>
                       
                    </div>
               
                      
                    </div>
                <div class="row py-5" > 
                          <div class="col">
                        <div class="col">
                            <div class="row"> <a href=""><img src="{{asset('public/images/payment.png')}}" style="display:inline-block;background:rgb(26, 19, 19)" width="151px" height="150px" alt=""></a></div>
                            <div class="row bg-primary pl-5 mr-1" >flfdhdh</div>
                        </div>
                       
                    </div>

                          <div class="col" >
                        <div class="col">
                            <div class="row"> <a href=""><img src="{{asset('public/images/payment.png')}}" style="display:inline-block;background:rgb(26, 19, 19)" width="151px" height="150px" alt=""></a></div>
                            <div class="row bg-primary pl-5 mr-1" >flfdhdh</div>
                        </div>
                       
                    </div>
                          <div class="col">
                        <div class="col">
                            <div class="row"> <a href=""><img src="{{asset('public/images/payment2.png')}}" style="display:inline-block;background:rgb(26, 19, 19)" width="151px" height="150px" alt=""></a></div>
                            <div class="row bg-primary pl-5 mr-1" >flfdhdh</div>
                        </div>
                       
                    </div>
                          <div class="col">
                        <div class="col">
                            <div class="row"> <a href=""><img src="{{asset('public/images/payment2.png')}}" style="display:inline-block;background:rgb(26, 19, 19)" width="151px" height="150px" alt=""></a></div>
                            <div class="row bg-primary pl-5 mr-1" >flfdhdh</div>
                        </div>
                       
                    </div>
               
               
                      
                    </div>
                    </div>

        </div>
   
  

@endsection
