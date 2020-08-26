@extends('adminlte::page')


@section('title', `{{$product->name}}`);

{{--@section('content_header')--}}
{{--    <h1>{{$product->name}}</h1>--}}
{{--@stop--}}


@section('content')
    <div class="container">
        <div class="product_head">
            <h1>{{$product->name}}</h1>
            <img src="{{$product->img}}" alt="{{$product->name}}">
        </div>

        <div class="container_property">
            <p>Price: {{$product->price}}</p>
            <p>Category: {{$product->category['name']}}</p>
        </div>
        <a href="/admin/product/{{$product->id}}/edit">Edit product</a>
    </div>

@stop
