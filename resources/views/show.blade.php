@extends('main_layout')
@section('content')
    <div class="container-tree">
        <div class="img-fonts"></div>
        <div id="tree_js">
            @include('recurs_tree', ['tree'])
        </div>
    </div>
    <img class="img-icon"
         id="treeTop"
         src="https://encrypted-tbn0.gstatic.com/images?q=tbn:ANd9GcT6zuD_qeMLNmUOJV6S6TMo4OB3UXdKAwlYRwHOViElIUcEjGfJ3A&s">
@endsection
