@if(sizeof($data))
<option value="">--select--</option>
@foreach($data as $dataa) <option value="{{$dataa->id}}">{{$dataa->section}}</option>  
@endforeach
@else
<option value="">--NO Select found--</option>
@endif