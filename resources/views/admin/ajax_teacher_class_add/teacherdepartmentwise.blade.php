@if(sizeof($data))

    @php
       $i=1; 
    @endphp
@foreach ($data as $data)
<tr>
    <form action="">
<td>{{$i++}}</td>
<td><input type="text" value="{{$data->student_id}}"></td>
<td>{{$data->course_id}}</td>  
<td>{{$data->semester_id}}</td>  
<td>{{$data->extra}}</td>
<td>{{$data->final}}</td> 
<td>{{$data->attendance}}</td>
<td>{{$data->department_id}}</td>
<td>{{$data->intake_id}}</td>
<td>{{$data->section_id}}</td>
<td>{{$data->teacher_id}}</td>
<td>{{$data->status}}</td>
<td> <img src="{{asset($data->student_photo)}}" width="150px" height="70px" alt="found"></td>
<td class="{{$data->status== 1 ? "bg-success" : "bg-danger"}} ">{{$data->status== 1 ?'Active':'Unactive'}}</td>
</form>
</tr>
@endforeach   
@else
<tr>
    <td colspan="9" class="bg-danger">No Student found here</td>
</tr>

@endif