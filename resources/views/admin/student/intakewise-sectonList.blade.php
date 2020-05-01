
@if(sizeof($data)>0){
    <option value="">--select--</option>
    @foreach ($data as $getsection)
<option value="{{$getsection->id}}">{{$getsection->section}}</option>
@endforeach  

}
@else
<option value="">--NO Section Available--</option>
@endif
