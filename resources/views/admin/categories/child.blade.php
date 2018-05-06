
<tr>
<td style="padding-left: 0.9em;">
@foreach($childs as $child)
<td style="padding-left: 0.9em;">
  {{$child->name}}
@if(count($child->catechild)) 
  @include('admin.categories.child',['childs'=>$child->catechild])
 @endif 
 </td>                     
 @endforeach
 </td>
 </tr>
 