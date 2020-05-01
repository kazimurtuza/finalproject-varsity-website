
@if(sizeof($data))
<option value="">--select--</option>
@foreach($data as $dataa) <option value="{{$dataa->id}}">{{$dataa->intake}}</option>  
@endforeach
@else
<option value="">--NO Intake found--</option>
@endif