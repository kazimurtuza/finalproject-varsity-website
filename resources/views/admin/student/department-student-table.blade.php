
@if(sizeof($data))

    @php
       $i=1; 
    @endphp
@foreach ($data as $data)
<tr>
<td>{{$i++}}</td>
<td>{{$data->student_name}}</td>
<td>{{$data->department}}</td> 
<td>{{$data->intake}}</td>
<td>{{$data->section}}</td>
<td>{{$data->sms_mobile}}</td>
<td>{{$data->roll_no}}</td>
<td> <img src="{{asset($data->student_photo)}}" width="150px" height="70px" alt="found"></td>
<td class="{{$data->status== 1 ? "bg-success" : "bg-danger"}} ">{{$data->status== 1 ?'Active':'Unactive'}}</td>
</tr>
@endforeach   
@else
<tr>
    <td colspan="9" class="bg-danger">No Student found here</td>
</tr>

@endif