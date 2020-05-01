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
            <h3 class="text-center">Students list </h3><br><br>

            </div>

            <div class="row">
              <div class=" col-lg-6 col-md-12 mt-4 ">
                    
                <select class=" btn bg-theme" name="department" id="department" required>
                  <option value="" class=" text-white" >--select department--</option>
                  @foreach ($data as $data )
              <option value="{{$data->id}}">{{$data->department}}</option>
                  @endforeach 
                </select>

                <select class=" btn bg-theme" name="intake" id="intakeshow" required>
                  <option value="" class=" text-white" >--select intake--</option>
              
              </select>
                <select class=" btn bg-theme" name="section" id="section" required>
                  <option value="" class=" text-white" >--select section--</option>
              
              </select>
              </div>
              <div class=" col-lg-5 col-md-5 pt-4 col-sm-5"  onkeyup="tablecall()">
                     <input type="text" name="" id="src" class="form-control bg-light" placeholder="Search">
              </div>
         
            </div>



 
    <div class="row center mt-4" style=" margin-top:20px">
        <div class=" col-8">
            <div class="table-responsive m-auto ">
                <table class=" table table-hover table-bordered text-center table-secondary">
                    <thead class=" bg-info" id="table">
                        <tr>
                            <th>SL.</th>
                            <th>Name</th>
                            <th>department</th>
                            <th>intake</th>
                            <th>section</th>
                            <th>phone</th>
                            <th>Roll</th>
                            <th>image</th>
                            <th>Action</th>
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
            $departmentId=$('#department').val();
            $.get("{{route('showintake-list')}}",{id:$id},function(data){
               $("#intakeshow").empty().html(data);
               
            })

            $.get("{{route('departmentwise-table')}}",{departmentid:$departmentId},function(data){
                $("#listshow").empty().html(data);
            })
            
           
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