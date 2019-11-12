<ul>
    @foreach($tree as $key => $item)
        @if(is_array($item))
            <li> {{$key}}
                    @include('recurs_tree', ['tree' => $item])
            </li>
        @else
            <li data-jstree='{"icon": "glyphicon glyphicon-file"}'>{{$item}}
            </li>
        @endif
    @endforeach
</ul>

