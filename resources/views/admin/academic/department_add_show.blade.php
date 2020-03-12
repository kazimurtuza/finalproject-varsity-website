@extends('home.includes')
    @section('content')

   <div class="container">
   
    <div class="row">
        <div class="col-12 border-info">
            <div class=" m-auto">
                <h3 class="text-center">Add department </h3>
                <button type="button" class="btn btn-primary" data-toggle="modal" data-target="#exampleModal" data-whatever="@mdo">Add department </button>

            </div>

         

        </div>

    </div>
 
    <div class="row center">
        <div class=" col-11">
            <div class="table-responsive m-auto">
                <table class=" table table-hover table-bordered text-center">
                    <thead>
                        <tr>
                            <th>SRL</th>
                            <th>department_name</th>
                            <th>status</th>
                        </tr>
                    </thead>
                    <tbody>
                        <tr>
                            <td>1</td>
                            <td>cse</td>
                            <td>publish</td>
                            <td>
                                <a href="#" class="btn btn-sm btn-dark"><span class="fa fa-eye"></span></a>
                                <a href="#" class="btn btn-sm btn-info"><span class="fa fa-edit"></span></a>
                            <a href="#" class="btn btn-sm btn-danger"><span class="fa fa-trash"></span></a>
                            </td>
                        </tr>
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
      <div class="modal-body">
        <form action="" method="">
          <div class="form-group">
            <label for="recipient-name" class="col-form-label">add department:</label>
            <input type="text" class="form-control" id="department">
          </div>
          <div class="form-group">
            <label for="message-text" class="col-form-label">Message:</label>
            <textarea class="form-control" id="message-text"></textarea>
          </div>
        
      </div>
      <div class="modal-footer">
        <button type="button" class="btn btn-secondary" data-dismiss="modal">Close</button>
        <button type="button" class="btn btn-primary">Add</button>
      </div>
    </form>
    </div>
  </div>
</div>

  {{-- department add miodal end --}}
    
    
   </div>

   <script>
    function department()
     {
         alert('bangla');
     }
   </script>
    @endsection
    