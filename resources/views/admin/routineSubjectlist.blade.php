@if (sizeof($data)>0)
  <option value="">--select subject--</option>
@foreach ($data as $data)
<option value="{{$data->id}}">{{$data->course_no}}</option>
@endforeach 

@else
  <option value="" class=" text-danger">--student empty first add student--</option>
      
 @endif  


  

   