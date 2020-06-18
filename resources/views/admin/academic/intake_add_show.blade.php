@extends('home.includes')
    @section('content')

   <div class="container">

            <div class=" m-auto">
            <h3 class="text-center">Add Intake </h3>
                <button type="button" class="btn btn-primary" data-toggle="modal" data-target="#exampleModal" data-whatever="@mdo">Add intake </button>

                <select class=" btn bg-theme" name="department" id="intakelist" required>
                  <option value="" class=" text-white" >--show intake list--</option>
                  @foreach ($department as $data )
              <option value="{{$data->id}}">{{$data->department}}</option>
                  @endforeach
              </select>

            </div>



 
    <div class="row center mt-4" style=" margin-top:20px">
        <div class=" col-8">
            <div class="table-responsive m-auto ">
                <table class=" table table-hover table-bordered text-center">
                    <thead class=" bg-info">
                        <tr>
                            <th>SL.</th>
                            <th>Department_name</th>
                            <th>intake</th>
                            <th>status</th>
                            <th>Action</th>
                        </tr>
                    </thead>
                    <tbody id="intakebody">

                   {{-- @include('admin.ajax_academic.departmentList') --}}
                       
                    </tbody>
                </table>

            </div>
          

        </div>

    </div>


 

  {{-- department add miodal --}}
<div class="modal fade" id="exampleModal" tabindex="-1" role="dialog" aria-labelledby="exampleModalLabel" aria-hidden="true">
  <div class="modal-dialog" role="document">
    <div class="modal-content">
      <div class="modal-header">
        <h5 class="modal-title" id="exampleModalLabel">Intake add</h5>
        <button type="button" class="close" data-dismiss="modal" aria-label="Close">
          <span aria-hidden="true">&times;</span>
        </button>
      </div>
    <form action="{{route('add_intake')}}" method="post" id="intake">
        @csrf
      <div class="modal-body">
        
        {{-- select department --}}
          <div class="form-group">
            <label for="recipient-name" class="col-form-label">Department:</label>
            <select class=" form-control" name="department" id="depart" required>
                <option value="" >--select--</option>
                @foreach ($department as $data )
            <option value="{{$data->id}}">{{$data->department}}</option>
                @endforeach
            </select>
          </div>

       {{-- add intake  --}}
          <div class="form-group">
            <label for="recipient-name" class="col-form-label">Intake:</label>
            <input type="text" class="form-control" name="intake" value="" id="intakename" required>
            @error('intake')
            <div>
            <span>{{$message}}</span>
            </div>

            @enderror

        
          </div>

       
        
      </div>
      <div class="modal-footer">
        <button type="button" class="btn btn-secondary" data-dismiss="modal">Close</button>
        <button type="submit" class="btn btn-primary">Add</button>
      </div>
    </form>
    </div>
  </div>
</div>



  {{-- department add miodal end --}}
    
    
   </div>

   {{-- <script>
    $("#department").submit(function(e){
        e.preventDefault();
        var data=$(this).serialize();
        var url=$(this).attr('action');
        var method=$(this).attr('method');
           $('#exampleModal').modal('hide');
        $.ajax({
            data:data,
            url:url,
            type:method,
            success:function()
            {
                $.get("{{route('department_list')}}",function(data){
                  
                  $("#departmentbody").empty().html(data);

                })
            }
        })

    })
    
   </script> --}}

   <script>
       $("#intake").submit(function(e){
        
        e.preventDefault();

       var data=$(this).serialize();
       var url=$(this).attr('action');
       var method=$(this).attr('method');
      
       $("#exampleModal").modal('hide');
       
       $.ajax({
           url:url,
           data:data,
           type:method,
          success:function(){
            var dat=$("#depart").val();
              $.get("{{route('intake_list')}}",{dep:dat},function(data){
                  $("#intakebody").empty().html(data);
                
         
              })
          }
       })
  

       }) 

      //  when department click show the last number of intake
       $("#depart").change(function(){
         var val=$(this).val();
         $.get("{{route('get_intake')}}",{val:val},function(data)
         {
          
            $("#intakename").val(data);

          
         })
     
       })
       $("#intakelist").change(function()
       {
        var dat=$(this).val();
              $.get("{{route('intake_list')}}",{dep:dat},function(data){
            
                  $("#intakebody").empty().html(data);
              
       })
       }) 

   </script>
    @endsection
    