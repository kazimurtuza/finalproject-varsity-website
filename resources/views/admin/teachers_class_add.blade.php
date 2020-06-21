@extends('home.includes')
@section('content') 


  {{-- <nav>
    <div class="nav-wrapper">
      <form>
        <div class="input-field">
          <input id="search" type="search" required>
          <label class="label-icon" for="search"><i class="material-icons">search</i></label>
          <i class="material-icons">close</i>
        </div>
      </form>
    </div>
  </nav> --}}
            <div class=" m-auto">
            <h3 class="text-center">teachers Class add </h3><br><br>

            </div> 
            <h2 class=" bg-success">{{Session::get('message')}}</h2>

            <div class="row">
            <form action="{{route('teachersroutine-data')}}" method="post">
              @csrf
              <div style="  margin-top:30px" class=" col-lg-7  col-md-12 mt-4 ">

                
                    
                <select class=" btn bg-theme btn-group-justified  text-center" name="department" id="department" required>
                  <option value="" class=" text-white" >--student department--</option>
                  @foreach ($data as $data )
              <option value="{{$data->id}}">{{$data->department}}</option>
                  @endforeach 
                </select> 
                </div>
            
             
                <div style="  margin-top:30px" class=" col-lg-7  col-md-12 mt-4 ">
                <select class=" btn bg-theme btn-group-justified" name="intake" id="intakeshow" required>
                  <option value="" class=" text-white" >--select intake--</option>
              
              </select>
              </div>
                            <div style="  margin-top:30px" class=" col-lg-7  col-md-12 mt-4 ">
                <select class=" btn bg-theme btn-group-justified" name="section" id="section" required>
                  <option value="" class=" text-white" >--select section--</option>
              
              </select>
              </div>
              <div style="  margin-top:30px" class=" col-lg-7  col-md-12 mt-4 ">
                <select class=" btn bg-theme btn-group-justified" name="subject" id="subject" required>
                  <option value="" class=" text-white" >--subject--</option>
              
              </select>
              </div>
          
              <div style="  margin-top:30px" class=" col-lg-7  col-md-12 mt-4 ">
                  <select class=" btn bg-theme btn-group-justified" name="teacherdp" id="teacherdp" required>
                  <option value="" class=" text-white" >--teacher's department--</option>
                  @foreach ($data2 as $val )
              <option value="{{$val->id}}">{{$val->department}}</option>
                  @endforeach 
                </select> 
                </div>
<div style="  margin-top:30px" class=" col-lg-7  col-md-12 mt-4 ">
                      <select class=" btn bg-theme btn-group-justified" name="teacher_id" id="teacherlist" required>
                  <option value="" class=" text-white" >--teacher's list--</option>
              
              </select>
              </div>


              
              {{-- <div class=" col-lg-5 col-md-5 pt-4 col-sm-5"  onkeyup="tablecall()">
                     <input type="text" name="" id="src" class="form-control bg-light" placeholder="Search">
              </div> --}}
              <div style="  margin-top:30px" class=" col-lg-7  col-md-12 mt-4 ">
              <button type="submit" class=" btn btn-group-justified btn-info">save</button>
              </div>
              
            </form>
         
            </div>


 
    {{-- <div class="row center mt-4" style=" margin-top:20px">
        <div class=" col-8">
            <div class="table-responsive m-auto ">
                <table class=" table table-hover table-bordered text-center table-secondary">
                    <thead class=" bg-info" id="table">
                        <tr>
                            <th>SL.</th>
                            <th>student_id</th>
                            <th>course_id</th>
                            <th>semester_id</th>
                            <th>mid</th>
                            <th>final</th>
                            <th>extra</th>
                            <th>attendance</th>
                            <th>department_id</th>
                            <th>intake_id</th>
                            <th>section_id</th> 
                            <th>teacher_id</th>
                            <th>status</th>
                            {{-- <th>SL.</th>
                            <th>Name</th>
                            <th>department</th>
                            <th>intake</th>
                            <th>section</th>
                            <th>phone</th>
                            <th>Roll</th>
                            <th>image</th> 
                            <th>Action</th> --}}
                        </tr>
                    </thead>
                    <tbody id="listshow"> 

                   {{-- @include('admin.ajax_academic.departmentList') --}}
                       
                    </tbody>
                </table> 

            </div>
          

        </div>

    </div>  

    <script>
        $("#department").change(function(){
            $id=$(this).val();
            //console.log($id);
            $departmentId=$('#department').val();
             //console.log($departmentId);
            $.get("{{route('showintake-list')}}",{id:$id},function(data){
               $("#intakeshow").empty().html(data);
               
            })

            // $.get("{{route('teachers-departmentwise-add')}}",{departmentid:$departmentId},function(data){
            //     $("#listshow").empty().html(data); 
            // })
            
           
        })
        $("#intakeshow").change(function(){
            $id=$(this).val();
                 $departmentId=$('#department').val();
            $intakeId=$('#intakeshow').val();
            $.get("{{route('showsection-list')}}",{id:$id},function(data){
               $("#section").empty().html(data);
            })
                  $.get("{{route('intakewise-table')}}",{departmentid:$departmentId,intakeid:$intakeId},function(data){
                $("#listshow").empty().html(data);
            }) 
           
        })
 
        $("#section").change(function(){
            $departmentId=$('#department').val();
            $intakeId=$('#intakeshow').val();
            $sectionId=$(this).val();
           $.get("{{route('studentsList-table')}}",{departmentid:$departmentId,intakeid:$intakeId,sectionid:$sectionId},function(data){
               $('#listshow').empty().html(data);
             

           })
           $.get("{{route('sub-list')}}",{departmentid:$departmentId,intakeid:$intakeId,sectionid:$sectionId},function(data){
               $('#subject').empty().html(data);
             console.log(data);  
           

           })
        })
   // -------------------- department wise teacher list-------------------------
        $('#teacherdp').change(function(){
          $departmentid=$(this).val();
          
          $.get("{{route('teacherlist')}}",{id:$departmentid},function(data){
            $('#teacherlist').empty().html(data);
            console.log(data); 
       
          })  
        })


        // search using js

       let tablecall=()=>{
         let srcval=document.getElementById('src').value.toUpperCase();
        // console.log(srcval);
         
         let table=document.getElementById('listshow');
         //console.log(table);
         let tr=table.getElementsByTagName('tr');
         for(let i=0;i<tr.length;i++)
         {
           let td=tr[i].getElementsByTagName('td')[1];
         
              let srceachtd=td.textContent;
              //console.log(srceachtd)
              if(td){
                    if(srceachtd.toUpperCase().indexOf(srcval) > -1)
              {
                tr[i].style.display=""
              }
              else{
                tr[i].style.display='none'
             
              }
              


              }
          

            
           

         }
         
         
        
        // console.log(td[3])

       }

       
    </script>


@endsection