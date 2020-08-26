@extends('adminlte::page')


@section('title', `{{$category->name}}`);

{{--@section('content_header')--}}
{{--    <h1>{{$product->name}}</h1>--}}
{{--@stop--}}


@section('content')
    <div class="container">
        <div class="product_head">
            <h1>{{$category->name}}</h1>
            <img src="{{$category->img}}" alt="{{$category->name}}">
        </div>

        <div class="container_property">
            <p>Count Product: {{$category->product->count()}}</p>

        </div>
        <a href="/admin/category/{{$category->id}}/edit">Edit Category</a>
    </div>

@stop
