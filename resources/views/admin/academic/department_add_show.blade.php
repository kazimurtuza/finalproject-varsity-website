@extends('home.includes')
    @section('content')

   <div class="container">
   
    <div class="row">
        <div class="col-12 border-info ">
            <div class=" m-auto">
            <h3 class="text-center">Add department</h3>
                <button type="button" class="btn btn-primary" data-toggle="modal" data-target="#exampleModal" data-whatever="@mdo">Add department </button>

            </div>

         

        </div>

    </div>
 
    <div class="row center mt-4" style=" margin-top:20px">
        <div class=" col-11">
            <div class="table-responsive m-auto ">
                <table class=" table table-hover table-bordered text-center">
                    <thead class=" bg-info">
                        <tr>
                            <th>SL.</th>
                            <th>Department_name</th>
                            <th>Status</th>
                            <th>Action</th>
                        </tr>
                    </thead>
                    <tbody id="departmentbody">

                   @include('admin.ajax_academic.departmentList')
                       
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
        <h5 class="modal-title" id="exampleModalLabel">New message</h5>
        <button type="button" class="close" data-dismiss="modal" aria-label="Close">
          <span aria-hidden="true">&times;</span>
        </button>
      </div>
    <form action="{{route('add_department')}}" method="post" id="department">
        @csrf
      <div class="modal-body">
        
          <div class="form-group">
            <label for="recipient-name" class="col-form-label">add department:</label>
            <input type="text" class="form-control" name="department" id="department" required>
            @error('department')
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

   <script>
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
    
   </script>
    @endsection
    