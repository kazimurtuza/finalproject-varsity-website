@extends('home.includes')
    @section('content')

   <div class="container">

            <div class=" m-auto">
            <h3 class="text-center">Add section </h3>
                <button type="button" class="btn btn-primary" data-toggle="modal" data-target="#exampleModal" data-whatever="@mdo">Add section </button>

                <select class=" btn bg-theme" name="department" id="departshow" required>
                  <option value="" class=" text-white" >--select department--</option>
                  @foreach ($dprt as $data )
              <option value="{{$data->id}}">{{$data->department}}</option>
                  @endforeach
              </select>
                <select class=" btn bg-theme" name="department" id="intakeshow" required>
                  <option value="" class=" text-white" >--select intake--</option>
                  {{-- @foreach ($department as $data )
              <option value="{{$data->id}}">{{$data->department}}</option>
                  @endforeach --}}
              </select>

            </div>



 
    <div class="row center mt-4" style=" margin-top:20px">
        <div class=" col-8">
            <div class="table-responsive m-auto ">
                <table class=" table table-hover table-bordered text-center">
                    <thead class=" bg-info">
                        <tr>
                            <th>SL.</th>
                            <th>Department</th>
                            <th>intake</th>
                            <th>section</th>
                            <th>capacity</th>
                            <th>status</th>
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


 

  {{-- section add miodal --}}
<div class="modal fade" id="exampleModal" tabindex="-1" role="dialog" aria-labelledby="exampleModalLabel" aria-hidden="true">
  <div class="modal-dialog" role="document">
    <div class="modal-content">
      <div class="modal-header">
        <h5 class="modal-title" id="exampleModalLabel">Section add</h5>
        <button type="button" class="close" data-dismiss="modal" aria-label="Close">
          <span aria-hidden="true">&times;</span>
        </button>
      </div>
    
    <form action="{{route('add_section')}}" method="post" id="sectionadd">
        @csrf
      <div class="modal-body">
        
          <div class="form-group">
            <label for="recipient-name" class="col-form-label">Department:</label>
            <select class=" form-control" name="department" id="depart" required>
                <option value="" >--select--</option>
                @foreach ($dprt as $data )
              <option value="{{$data->id}}">{{$data->department}}</option>
                  @endforeach
            </select>
          </div>

          <div class="form-group">
            <label for="recipient-name" class="col-form-label">Intake:</label>
            <select name="intake" id="intakeselect" class=" form-control">
                <option value="">--select--</option>
              
            </select>
           
            @error('intake')
            <div>
            <span>{{$message}}</span>
            </div>
            @enderror
          </div>

          <div class="form-group">
            <label for="recipient-name" class="col-form-label">Section:</label>
        
          <input class="form-control" name="section" id="sectionid" value="" >
       
           
         </select>
            @error('section')
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



  {{-- section add miodal end --}}
    
    
   </div>



  <script>

    //------ request send to add section -------
      $("#sectionadd").submit(function(e){
          e.preventDefault();
          var data=$(this).serialize();
          var url=$(this).attr('action');
          var method=$(this).attr('method');
          $("#exampleModal").modal('hide');
          $.ajax({
              url:url,
              type:method,
              data:data,
              success:function(){
                var dprt=$("#depart").val();
                var intake=$("#intakeselect").val();
                $.get("{{route('Section-Table-Show')}}",{department:dprt,intake:intake},function(data)
                {
                     $("#listshow").empty().html(data);
                     console.log(data);
                })

              }
          })
          
      })
    
    // when select department intakeList show for add section
       $("#depart").change(function(){
        var data=$(this).val();
           $.get("{{route('intake-list')}}",{id:data},function(data)
           {
               $('#intakeselect').empty().html(data);
           })
       })

           // when select department intakeList show for search list
       $("#departshow").change(function(){
        var data=$(this).val();
           $.get("{{route('intake-list')}}",{id:data},function(data)
           {
               $("#intakeshow").empty().html(data);
           })
       })

  // when select department and  intake,  it show List
       $("#intakeshow").change(function(){
        var dprt=$("#departshow").val();
                var intake=$("#intakeshow").val();
                $.get("{{route('Section-Table-Show')}}",{department:dprt,intake:intake},function(data)
                {
                     $("#listshow").empty().html(data);
                     console.log(data);
                })
      
       })

      //  when intakeselect last section show
       $("#intakeselect").change(function(){
        var dprt=$("#depart").val();
                var intake=$("#intakeselect").val();
                $.get("{{route('Section-list')}}",{department:dprt,intake:intake},function(data)
                {
                    // var str=data;
                    // var num =str.substr(8,1);
                    // var int= parseInt(num);
                    //  var update=int+1;
                  
                    // var str = "section-"
                    // var total = str + update;

                    $("#sectionid").val(data);
                 
                })
       })


  </script>

  
    @endsection
    