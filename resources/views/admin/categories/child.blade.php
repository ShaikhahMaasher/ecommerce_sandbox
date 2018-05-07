
@foreach($childs as $child)
    <tr>
        <td>
        <input type="checkbox">
        </td>

        <td style="padding-left:{{$space}}px">
            <a href="/admin/category/edit/{{$child->slug}}">{{$child->name}}</a>
        </td>

        <td>{{$child->desc}}</td>

        <td>{{$child->parent->name}}</td>

        <td>
            <a class='col-sm-3' href="/admin/category/edit/{{$child->slug}}">
                <button type="button" class="btn btn-warning">
                    <span class="glyphicon glyphicon-pencil"></span>
                </button>
            </a>
            <a class='col-sm-3' href="/admin/category/delete/{{$child->slug}}">
                <button type="button" class="btn btn-danger">
                    <span class="glyphicon glyphicon-trash"></span>
                </button>
            </a>
            @if($child->status=='0')
                <a class='col-sm-3' href="/admin/category/status-show/{{$child->slug}}">
                    <button type="button" class="btn btn-danager">Show
                
                        <span class="glyphicon glyphicon-eye-open"></span>
                    </button>
                </a>
            @else
                <a class='col-sm-3' href="/admin/category/status-hide/{{$child->slug}}">
                    <button type="button" class="btn btn-danager">Hide
                
                        <span class="glyphicon glyphicon-eye-close"></span>
                    </button>
                </a>
            @endif
    
        </td>
        @if(count($child->childs)) 
        @include('admin.categories.child',['childs'=>$child->childs,'space'=>$space+20])
        @endif 
    </tr>                   
@endforeach



