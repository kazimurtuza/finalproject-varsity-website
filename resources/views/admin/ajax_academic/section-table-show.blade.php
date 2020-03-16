
          @php($i=1)
          @foreach ($data as $item)
          <tr>
       
           <td>{{$i++}}</td>
           <td>{{$item->department}}</td>
           <td>{{$item->intake}}</td>
           <td>{{$item->section}}</td>
           <td>{{$item->capacity}}</td>
           @if ($item->status)
           <td>publish</td>
           @else
           <td>unpublish</td>
               
           @endif
           
           <td>
               <a href="#" class="btn btn-sm btn-success"><span class="fa fa-eye"></span></a>
               <a href="#" class="btn btn-sm btn-info"><span class="fa fa-edit"></span></a>
           <a href="#" class="btn btn-sm btn-danger"><span class="fa fa-trash"></span></a>
           </td>
       </tr>
              
          @endforeach