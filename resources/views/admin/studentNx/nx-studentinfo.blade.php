  <h3 style="margin-top: -3%; text-align:center;color:rgb(247, 247, 248);background: rgb(126, 159, 171);">SUMMARY INFORMATION</h3>
  <div class="row">
    <div class=" col-4">
    
<table class="table table-hover bg-info"  >
  <tbody cellpadding="1">

       
          
{{-- @foreach ($studentinfo as $data)  {{$data->intake}} @endforeach --}}


    <tr>
      <th  style="background-color:#B3BEAD; text-align: right;">NAME</th>
    <td>{{auth::user()->name}}</td>
    </tr>
    <tr>
      <th  style="background-color:#B3BEAD; text-align: right;"> ID</th>
      <td>{{auth::user()->roll}}</td>
    </tr>
        <tr>
      <th  style="background-color:#B3BEAD; text-align: right;">DEPARTMENT</th>
      <td> @foreach ($studentinfo as $data)  {{$data->department}} @endforeach</td>
      
    </tr>
    <tr>
      <th  style="background-color:#B3BEAD; text-align: right;">INTAKE</th>
      <td> @foreach ($studentinfo as $data)  {{$data->intake}} @endforeach</td>
      
    </tr>

    <tr>
      <th  style="background-color:#B3BEAD; text-align: right;">SECTION</th>
      <td> @foreach ($studentinfo as $data){{$data->section}}@endforeach</td>
    </tr>
    <tr>
      <th  style="background-color:#B3BEAD; text-align: right;">COMPLETED CREDITS	</th> 
      <td>{{auth::user()->name}}</td>
    </tr>
    <tr>
      <th  style="background-color:#B3BEAD; text-align: right;">EMAIL	</th>
      <td>{{auth::user()->email}}</td>
    </tr>
    <tr>
      <th  style="background-color:#B3BEAD; text-align: right;">Mobile</th>
      <td>{{auth::user()->name}}</td>
    </tr>
   
  </tbody>
</table>
      
    </div>
  </div>
 

     