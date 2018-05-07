
<ul class="children">
    @foreach($childs as $child)
        <li id="">
            <label class="">
                @if($is_create)
                <input value="{{ $child->id }}" type="checkbox" name="categ[]"> 
                {{ __($child->name)}}
                @else
                <input value="{{ $child->id }}" type="checkbox" name="categ[]" {{ $product->checkUserCategory($product->categories, $child) }}> 
                {{ __($child->name) }}
                @endif
            </label>
            @if(count($child->childs)) 
                @include('admin.products.child-category',['childs'=>$child->childs,'is_create'=>$is_create])
            @endif 
        </li>                 
    @endforeach
 </ul>
