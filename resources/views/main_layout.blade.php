<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="utf-8">
    <title>treeTest</title>
    <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/3.4.0/css/bootstrap.min.css">
    <link rel="stylesheet" href="{{asset('css/main.css')}}">
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/jstree/3.2.1/themes/default/style.min.css"/>
    <style>
    </style>
</head>
<body>
@include('header')
@if(session('error'))
    <div class="alert alert-danger">
        {{session('error')}}
    </div>
@endif
@if(session('success'))
    <div class="alert alert-success">
        {{session('success')}}
    </div>
@endif
@yield('content')

<script src="https://cdnjs.cloudflare.com/ajax/libs/jquery/1.12.1/jquery.min.js"></script>
<script src="https://cdnjs.cloudflare.com/ajax/libs/jstree/3.2.1/jstree.min.js"></script>
<script src="https://maxcdn.bootstrapcdn.com/bootstrap/3.4.0/js/bootstrap.min.js"></script>
<script src="{{asset('js/tree.js')}}"></script>
</body>
</html>
