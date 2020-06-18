@extends('admin.studentNx.NXlayout')

@section('content')
<div class="container" class="bg-info"  style="padding-left:10%;margin-top:6%">   
     
 
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
                   <div id="indexshow" style="width:850px; align-content: center; padding-top:60px;margin-top:30px; border: solid 3px black;background:rgb(90, 81, 81)" >
   {{-- ///padding-left:20px; --}}
                <div class="row pl-4" >  
           


                    <div class="col">
                        <div class="col">
                            <div class="row"> <a href=""><img src="{{asset('public/images/academic2.png')}}" style="display:inline-block;background:rgb(26, 19, 19);;" width="151px" height="150px" alt=""></a></div>
                            <div class="row bg-primary pl-5 " style="margin-right:18px">flfdhdh</div>
                        </div>
                       
                    </div>


                    <div class="col">
                        <div class="col">
                            <div class="row"> <a href=""><img src="{{asset('public/images/book.png')}}" style="display:inline-block;background:rgb(26, 19, 19);" width="151px" height="150px" alt=""></a></div>
                            <div class="row bg-primary pl-5 " style="margin-right:18px">flfdhdh</div>
                        </div>
                       
                    </div>
                    <div class="col">
                        <div class="col">
                        <div class="row"> <a href="" onClick="aboutme()"><img src="{{asset('public/images/student.png')}}" style="display:inline-block;background:rgb(26, 19, 19);" width="151px" height="150px" alt=""></a></div>
                            <div class="row bg-primary pl-5 " style="margin-right:18px">flfdhdh</div>
                        </div>
                       
                    </div>
                    <div class="col">
                        <div class="col">
                    <div class="row"> <a href="" onClick="academicinfo()"><img src="{{asset('public/images/academic2.png')}}" style="display:inline-block;background:rgb(26, 19, 19);" width="151px" height="150px" alt=""></a></div>
                            <div class="row bg-primary pl-5 " style="margin-right:18px">flfdhdh</div>
                        </div>
                       
                    </div>
               
                      
                    </div>
                <div class="row py-5 pl-4" > 
                          <div class="col">
                        <div class="col">
                            <div class="row"> <a href=""><img src="{{asset('public/images/payment.png')}}" style="display:inline-block;background:rgb(26, 19, 19);" width="151px" height="150px" alt=""></a></div>
                            <div class="row bg-primary pl-5"le="margin-right:8px">flfdhdh</div>
                    </div>
                       
                    </div>

                          <div class="col" >
                        <div class="col">
                            <div class="row"> <a href=""><img src="{{asset('public/images/payment.png')}}" style="display:inline-block;background:rgb(26, 19, 19);" width="151px" height="150px" alt=""></a></div>
                            <div class="row bg-primary pl-5 " style="margin-right:18px">flfdhdh</div>
                        </div>
                       
                    </div>
                          <div class="col">
                        <div class="col">
                            <div class="row"> <a href=""><img src="{{asset('public/images/payment2.png')}}" style="display:inline-block;background:rgb(26, 19, 19);" width="151px" height="150px" alt=""></a></div>
                            <div class="row bg-primary pl-5 " style="margin-right:18px">flfdhdh</div>
                        </div>
                       
                    </div>
                          <div class="col">
                        <div class="col">
                            <div class="row"> <a href=""><img src="{{asset('public/images/payment2.png')}}" style="display:inline-block;background:rgb(26, 19, 19);" width="151px" height="150px" alt=""></a></div>
                            <div class="row bg-primary pl-5 " style="margin-right:18px">flfdhdh</div>
                        </div>
                       
                    </div>
        

                    
        <script> 

            function aboutme()
            {
                event.preventDefault()
                $.get("{{route('nx-studentinfo')}}",{} ,function(data){
                        $('#indexshow').empty().html(data)
                })
               
            }

            function academicinfo()
            {
                event.preventDefault()
                $.get("{{route('nx-academicinfo')}}",{} ,function(data){
                        $('#indexshow').empty().html(data)
                })
               
            }
   
            
        </script> 
              
   

@endsection
