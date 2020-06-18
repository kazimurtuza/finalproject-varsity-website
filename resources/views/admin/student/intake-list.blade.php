

<option value="">current intake</option>
@foreach ($data as $data)
    <option value="{{$data->id}}">{{$data->intake}}</option>
@endforeach
     

