
<option value="">--select--</option>
@foreach ($intake as $data)
<option value="{{$data->id}}">{{$data->intake}}</option>
@endforeach