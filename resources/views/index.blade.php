@extends('main_layout')
@section('content')

    <div class="container-tree">
        <div class="img-fonts"></div>
        <ul class="list-tree">
            @foreach($dataTrees as $item)
                    <div class="item-list">
                        <div class="link">{{$item->path}}</div>
                        <div class="wrapper-btn">
                            <a href="{{url('/tree/' . $item->id)}}">
                                <button class="btn-item-show" type="button">show</button>
                            </a>
                            <form action="{{ url('/tree/' . $item->id . '/delete') }}" method="post">
                                <button class="btn-item-delete" type="submit"> delete</button>
                                @method('delete')
                                @csrf
                            </form>
                        </div>
                    </div>
            @endforeach
        </ul>

    </div>
@endsection
