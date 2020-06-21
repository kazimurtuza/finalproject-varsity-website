 
 @if (sizeof($data)>0)
  <option value="">--Teacher's list--</option>
@foreach ($data as $data)
<option value="{{$data->teachersdata_id}}">{{$data->name}}</option>
@endforeach 
@else
  <option value="" class=" text-danger">--No Teachers Found IN DB --</option>
     
 @endif
   